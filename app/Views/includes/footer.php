<div class="container-fluid bg-black py-5 px-3">
    <div class="footer">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h5 class="title-footer">Ayuda</h5>
                <a class="link-footer" href="https://skycel.com.mx/#/tutoriales">
                    Tutoriales
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/preguntas-frecuentes">
                    Preguntas frecuentes
                </a><br>
                <a class="btn btn-purple" href="tel:*611">
                    Llamar al *611
                </a><br>
                <a class="btn btn-pink" href="https://skycel.com.mx/#/contacto">
                    Enviar correo
                </a>
            </div>
            <div class="col-12 col-lg-4">
                <h5 class="title-footer">Aviso Legal</h5>
                <a class="link-footer" href="https://skycel.com.mx/#/codigo-de-politicas-de-gestion-de-trafico-y-administracion-de-red">
                    Código de políticas de gestión de tráfico y administración de red.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/carta-de-derechos-de-los-usuarios-ift-y-profeco">
                    Carta de Derechos de los Usuarios IFT y Profeco.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/codigo-de-practicas-comerciales">
                    Código de prácticas comerciales.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/informacion-sobre-colaboracion-en-materia-de-seguridad-y-justicia">
                    Información sobre colaboración en materia de seguridad y justicia.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/aviso-de-inicio-de-operaciones-elux">
                    Aviso de Inicio de Operaciones ELUX.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/contrato-marco-de-prestacion-de-servicios-de-telecomunicaciones">
                    Contrato marco de prestación de servicios de telecomunicaciones.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/oficio-de-aprobacion">
                    Oficio de Aprobación del Contrato de Adhesión del Servicio de Telefonía Móvil en la modalidad de Prepago en favor de ELUX MOBILE DE MÉXICO, S.A. de C.V.
                </a><br>
                <a class="link-footer" href="https://skycel.com.mx/#/terminos-y-condiciones">
                    Términos y condiciones.
                </a>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('/images/web/logo-white.webp') ?>" class="mb-3" alt="Logo Skycel variante blanca" width="240px">
                </a><br>
                <a href="https://play.google.com/store/apps/details?id=com.sustam.skycel&hl=es">
                    <img src="<?= base_url('/images/web/google-play.webp') ?>" class="mb-3" alt="Logo Google Play" width="150px">
                </a><br>
                <a href="https://apps.apple.com/us/app/skycel/id1616697589">
                    <img src="<?= base_url('/images/web/app-store.webp') ?>" class="mb-3" alt="Logo App Store" width="150px">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Menus y modals -->
<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header bg-purple text-center">
        <h5 class="offcanvas-title" id="staticBackdropLabel">
            <img id="logo-zaia-header" src="<?= base_url('/images/web/logo.webp') ?>" alt="Logo Skycel" width="150px">
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column">
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Cobertura
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Paquetes
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Portabilidad
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Compatibilidad
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Equipos
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Skycel
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                Acceso
            </a>
            <a href="<?= base_url() ?>" class="btn offcanvas-menu">
                <i class="fa-solid fa-cart-shopping"></i> Mi carrito 
            </a>
        </div>
    </div>
</div>
<!-- Modal para formulario de pago -->
<div class="modal fade" id="modalPay" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPayLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content bg-white border-0">
            <div class="modal-header bg-transparent border-0">
                <h1 class="modal-title fs-5" id="modalPayLabel">Llena el formulario para obtener tu eSIM</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-transparent border-0">
                <div class="row p-0 m-0">
                    <div class="col-12 m-0 p-2 m-0">
                        <input type="text" class="form-control input" id="card_name" name="card_name" placeholder="Nombre">
                    </div>
                    <div class="col-12 m-0 p-2 m-0">
                        <input type="text" class="form-control input" id="card_number" name="card_number" placeholder="Numero de tarjeta" maxlength="16" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16)">
                    </div>
                    <div class="col-12 col-md-6 p-2 m-0">
                        <input type="text" class="form-control input" id="card_expiration_date" name="card_expiration_date" placeholder="Fecha de expiracion">
                    </div>
                    <div class="col-12 col-md-6 p-2 m-0">
                        <input type="text" class="form-control input" id="card_cvv" name="card_cvv" placeholder="CVV">
                    </div>
                    <div class="col-12 m-0 px-0 py-2 text-center">
                        <span>Tu pago sera procesado por </span>&nbsp;<img src="<?= base_url('/images/web/openpay.webp') ?>" alt="Logo Openpay" width="100px">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-transparent border-0">
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-pay">Pagar</button>
            </div> 
        </div>
    </div>
</div> 