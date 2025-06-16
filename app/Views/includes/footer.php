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
<!-- Modal de compatibilidad -->
<div class="modal fade" id="modalCompatibility" tabindex="-1" aria-labelledby="modalCompatibilityLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-white border-0">
            <div class="modal-header bg-transparent border-0">
                <h1 class="modal-title fs-5" id="modalCompatibilityLabel">Verifica tu compatibilidad</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-transparent border-0">
                <div id="segCompatibility">
                    <div class="">
                        <h3>Verifica si tu dispositivo es compatible con eSIM. Este paso es obligatorio.</h3>
                        <span>Si tu dispositivo no está incluido en ninguna de las listas, es probable que no sea compatible con la tecnología eSIM.</span>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple">
                                <img src="<?= base_url('/images/svg/apple-logo.svg') ?>" alt="Logo Apple" width="48px">
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung">
                                <img src="<?= base_url('/images/svg/samsung-logo.svg') ?>" alt="Logo Samsung" width="48px">
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="google-pixel">
                                <img src="<?= base_url('/images/svg/google-pixel-logo.svg') ?>" alt="Logo Google Pixel" width="48px">
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="other">
                                <span>Otra marca</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="segCompatibilityApple">
                    <div class="">
                        <h3>Selecciona tu iPhone.</h3>
                        <span>Para saber cuál es tu dispositivo Apple ve a Ajustes → General → Acerca de...</span>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 16, Pro</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 15, Plus, Pro, Pro Max</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 14, Plus, Pro, Pro Max</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 13, Mini, Pro, Pro Max</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 12, Mini, Pro, Pro Max</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone 11, Pro, Pro Max</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone XS, XS Max, XR</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-success">
                                <span>iPhone SE (2020, 2022)</span>
                            </button>
                        </div>
                        <div class="col-12 col-md-4 m-0 p-1 d-grid">
                            <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="apple-other">
                                <span>Otro</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="segCompatibilityApleeSuccess">
                    <div class="">
                        <h3>¡Tu dispositivo Apple es compatible!</h3>
                    </div>
                    <p>
                        Recuerda que tu teléfono debe estar libre de restricciones de operadores para que puedas usar la eSIM<br>
                        *En los modelos iPhone 13 y 14, puede tener dos eSIM activadas al mismo tiempo.<br>
                        *Los iPhone de China continental y los dispositivos iPhone de Hong Kong y Macao (excepto el iPhone 13 mini, el iPhone 12 mini, el iPhone SE 2020 y el iPhone XS) no son compatibles con eSIM.
                    </p>
                </div>
                <div id="segCompatibilityAppleOther">
                    <div class="">
                        <h3>Comprueba la compatibilidad de tu dispositivo</h3>
                        <p>
                            Ve a Ajustes → Conexiones → Gestor de tarjetas SIM.<br>
                            Si tienes la opción "Añadir plan móvil", tu smartphone admite eSIM.
                        </p>
                    </div>
                </div>
                <div id="segCompatibilitySamsung">
                    <div class="">
                        <h3>Selecciona tu móvil Samsung</h3>
                        <p>
                            Para saber cuál es tu dispositivo Samsung ve a Ajustes → Acerca del teléfono → Nombre del producto.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy S24, S24 +, S24 Ultra, S24 SE</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy S23, S23 +, S23 Ultra</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy S22, S22 +, S22 Ultra</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy S21, S21 +, S21 Ultra, 5G</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy S20, S20 +, S20 Ultra</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Note 20, Ultra</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Galaxy Z</span>
                                </button>
                            </div>
                            <div class="col-12 col-md-4 m-0 p-1 d-grid">
                                <button class="btn btn-compatibility border-radius-20 btn-verification" data-brand="samsung-success">
                                    <span>Otro</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-transparent border-0">
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>