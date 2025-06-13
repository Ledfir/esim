<?php 

namespace App\Libraries;

// use App\Config\Openpay;
// use App\Config\Openpay as OpenpayConfig;
// use Openpay\Openpay;
use Openpay\Data\Openpay;

class OpenpayLibrary {
    private $openpay;
    public function __construct(){
        // Configura directamente Openpay con tus credenciales
        $merchant_id = 'maxdiuhxvjgrgs9nrv1j';
        $private_key = 'sk_7952826e581845739a68bdede3067b97';
        $sandbox = true; // Cambia a false en producción

        Openpay::setId($merchant_id);
        Openpay::setApiKey($private_key);
        Openpay::setProductionMode(!$sandbox);
        Openpay::setCountry('MX'); // MX, CO, PE

        $this->openpay = Openpay::getInstance($merchant_id, $private_key, 'MX', '127.0.0.1');
    }
    //////CARGOS//////
    public function crearCargoAnonimo($data){
        try {
            $charge = $this->openpay->charges->create($data);
            return $charge;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    public function crearCargo($data, $customer_token){
        try {
            $customer = $this->openpay->customers->get($customer_token);
            $cargo = $customer->charges->create($data);
            return $cargo;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    //////CLIENTES//////
    public function crearCliente($data){
        try {
            $customer = $this->openpay->customers->add($data);
            return $customer->id;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    public function getCustomer($token){
        try {
            $customer = $this->openpay->customers->get($token);
            return $customer;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    ///////Tarjetas///////
    public function crearTarjeta($data, $customer_token){
        $customer = $this->openpay->customers->get($customer_token);
        try {
            $card = $customer->cards->add($data);
            return $card->id;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    public function deleteCard($customer_token, $card_token){
        $customer = $this->openpay->customers->get($customer_token);
        $customer->cards->delete($card_token);
        return true;
    }
    public function getCards($customer_token){
        $customer = $this->openpay->customers->get($customer_token);
        $data = array(
            'creation[gte]' => '2013-01-01',
            'creation[lte]' => '2032-12-31',
            'offset' => 0,
            'limit' => 1000
        );
        return $customer->cards->getList($data);
    }
    public function getCard($customer_token, $card_token){
        $customer = $this->openpay->customers->get($customer_token);
        return $customer->cards->get($card_token);
    }
}
