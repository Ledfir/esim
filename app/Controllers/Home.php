<?php

namespace App\Controllers;

use App\Libraries\OpenpayLibrary;

class Home extends BaseController
{
    private $openpay;
    public function __construct()
    {
        $this->openpay = new OpenpayLibrary();
    }
    public function index(): string
    {
        return view('home');
    }
    public function createCharge(){
        $token_id = $this->request->getPost('token_id');
        $device_session_id = $this->request->getPost('device_session_id');

        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');

        $chargeRequest = [
            'method' => 'card',
            'source_id' => $token_id, // Token generado en frontend
            'amount' => floatval(2435),
            'currency' => 'MXN',
            'description' => 'Contratacion de eSIM en plan 12 ESTELARES',
            'device_session_id' => $device_session_id, // generado por Openpay.js
            'customer' => [
                'name' => $nombre,
                'email' => $email,
            ],
        ];
        $resultado = $this->openpay->crearCargoAnonimo($chargeRequest);
        if (isset($resultado['error'])) {
            log_message('error', 'Error al crear el cargo: ' . $resultado['error']);
            return json_encode(['success' => false, 'message' => 'Hubo un problema al procesar tu pago. Por favor, intenta de nuevo.']);
        } else {            
            return json_encode(['success' => true, 'message' => 'Pago procesado exitosamente.']);
        }
    }
}
