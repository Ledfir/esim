<?= $this->extend('includes/page') ?>

<?= $this->section('title') ?>
    Contrata tu eSIM
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row p-0 m-0">
        <div class="col-6 d-none d-md-block text-center align-center-middle">
            <img src="<?= base_url('/images/web/banner.webp') ?>" class="rounded" alt="Imagen de banner de gato para formulario de contracion eSIM" height="510px">
        </div>
        <div class="col-12 col-md-6">
            <h1 class="title-home">eSIM en Estados Unidos</h1>
            <p class="subtitle-home">
                Excelente <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>&nbsp;&nbsp;&nbsp;Basado en 55,706 reseñas sobre <img src="<?= base_url('/images/web/logo-min.png') ?>" alt="Logo Skycel en tamaño pequeño" height="20px">
            </p>
            <div class="row p-0 m-0">
                <div class="col-12 col-md-7 m-0 p-0">
                    <div class="mb-3">
                        <input type="text" class="form-control input" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control input" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-12 col-md-5 m-0 p-0">
                    <div class="mb-3 text-end w-100">
                        <h2 class="price-home">$2,435.00 <span class="subtitle-price">MXN</span></h2>
                    </div>
                    <div class="mb-3 text-end w-100">
                        <button class="btn btn-compatibility">
                            Verificar compatibilidad <img src="<?= base_url('/images/svg/cellphone-check.svg') ?>" alt="Telefono celular con icono de verificacion" height="24px">
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-3 card bg-gradiant border-radius-20">
                <div class="card-body">
                    <div class="row m-0 p-0">
                        <div class="col-12 col-center-middle mb-3">
                            <img src="<?= base_url('/images/svg/infinity.svg') ?>" alt="Icono de infinito" height="24px"><span class="title-card">&nbsp;Disfruta de <b>datos ilimitados</b></span>
                        </div>
                    </div>
                    <div class="card border-radius-14">
                        <div class="card-body">
                            <div class="row m-0 p-0">
                                <div class="col-12 col-md-3 m-0 p-0 align-center-middle text-center">
                                    <img src="<?= base_url('/images/web/12-estelares.webp') ?>" alt="Icono de plan" height="100px">
                                </div>
                                <div class="col-12 col-md-9 m-0 p-0">
                                    <h2 class="title-plan">
                                        Plan 12 Estelares
                                    </h2>
                                    <P class="description-plan">
                                        24 gb velocidad normal<br>
                                        llamadas y redes ilimitadas<br>
                                        ilimitado 500 sms 12 meses
                                    </P>
                                    <div class="row m-0 p-0">
                                        <div class="col-12 col-md-4 m-0 mb-2 p-0">
                                            <img src="<?= base_url('/images/svg/speed.svg') ?>" alt="Icono de velocidad" height="24px"> <span class="text-plan">24</span>
                                        </div>
                                        <div class="col-12 col-md-4 m-0 mb-2 p-0">
                                            <img src="<?= base_url('/images/svg/hotspot.svg') ?>" alt="Icono de wifi o hotspot" height="24px"> <span class="text-plan">Hotspot</span>
                                        </div>
                                        <div class="col-12 col-md-4 m-0 mb-2 p-0">
                                            <img src="<?= base_url('/images/svg/month.svg') ?>" alt="Icono de mes/calendario" height="24px"> <span class="text-plan">Por mes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-pink w-100" data-bs-toggle="modal" data-bs-target="#modalPay">
                                Obtener internet ilimitado
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="card bg-gradiant border-radius-20">
            <div class="card-body">
                <div class="p-3">
                    <h2 class="text-light">¿Cómo funciona la eSIM de Skycel para Estados Unidos?</h2>
                    <div class="row p-0 m-0">
                        <div class="col-12 col-md-6 m-0 p-0">
                            <div class="card border-radius-24 m-3">
                                <div class="card-body">
                                    <div class="row m-0 p-3">
                                        <div class="col-12 col-lg-4 m-0 p-3 text-center">
                                            <img src="<?= base_url('/images/web/como-funciona-1.webp') ?>" alt="Imagen ilustrativa de como funciona la eSIM de Skycel para Estados Unidos seccion 1" height="150px">
                                        </div>
                                        <div class="col-12 col-lg-8 m-0 p-3">
                                            <p class="text-justify text-card-como-funciona">
                                                Selecciona el destino y el número de días de tu viaje para obtener tu eSIM con datos. Recuerda comprobar si tu dispositivo móvil es compatible.
                                            </p>
                                        </div>
                                        <div class="col-12 m-0 p-0">
                                            <div class="number-card">01.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-0 p-0">
                            <div class="card border-radius-24 m-3">
                                <div class="card-body">
                                    <div class="row m-0 p-3">
                                        <div class="col-12 col-lg-4 m-0 p-3 text-center">
                                            <img src="<?= base_url('/images/web/como-funciona-2.webp') ?>" alt="Imagen ilustrativa de como funciona la eSIM de Skycel para Estados Unidos seccion 1" height="150px">
                                        </div>
                                        <div class="col-12 col-lg-8 m-0 p-3">
                                            <p class="text-justify text-card-como-funciona">
                                                Recibe tu código QR o código de instalación manual por correo y WhatsApp para instalar tu eSIM.
                                            </p>
                                        </div>
                                        <div class="col-12 m-0 p-0">
                                            <div class="number-card">02.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-0 p-0">
                            <div class="card border-radius-24 m-3">
                                <div class="card-body">
                                    <div class="row m-0 p-3">
                                        <div class="col-12 col-lg-4 m-0 p-3 text-center">
                                            <img src="<?= base_url('/images/web/como-funciona-3.webp') ?>" alt="Imagen ilustrativa de como funciona la eSIM de Skycel para Estados Unidos seccion 1" height="150px">
                                        </div>
                                        <div class="col-12 col-lg-8 m-0 p-3">
                                            <p class="text-justify text-card-como-funciona">
                                                Instala tu eSIM antes del viaje, activa los datos una vez hayas llegado al destino para empezar a disfrutar de internet.
                                            </p>
                                        </div>
                                        <div class="col-12 m-0 p-0">
                                            <div class="number-card">03.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-0 p-0">
                            <div class="card border-radius-24 m-3">
                                <div class="card-body">
                                    <div class="row m-0 p-3">
                                        <div class="col-12 col-lg-4 m-0 p-3 text-center">
                                            <img src="<?= base_url('/images/web/como-funciona-4.webp') ?>" alt="Imagen ilustrativa de como funciona la eSIM de Skycel para Estados Unidos seccion 1" height="150px">
                                        </div>
                                        <div class="col-12 col-lg-8 m-0 p-3">
                                            <p class="text-justify text-card-como-funciona">
                                                Controla tu plan a través de nuestra app o en Skycel.com.mx, nuestro portal para gestionar todo lo relacionado con tu eSIM.
                                            </p>
                                        </div>
                                        <div class="col-12 m-0 p-0">
                                            <div class="number-card">04.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-purple py-5">
    <div class="container">
        <h2 class="text-light">Ventajas de usar la eSIM de Skycel en Estados Unidos</h2>
        <div class="row p-0 m-0">
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/smile-face.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Personaliza tu plan
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                ¡Decide cuánto tiempo necesitas tu eSIM y ajusta tu plan de acuerdo a los días de tu viaje! Di adiós a quedarte sin datos o gastar de más en días no utilizados.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/infinity.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Incluye datos ilimitados
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                Olvídate de recargas y despreocúpate por quedarte sin datos. Con la eSIM prepago con datos ilimitados para Estados Unidos disfruta tu viaje con libertad.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/buble-chat.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Mantienes tu número de <br>
                                    WhatsApp de siempre
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                Puedes llamar y enviar mensajes a tus contactos de WhatsApp como si estuvieses en tu país. No pierdes contacto con familiares y amigos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/headphones.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Servicio de atención al cliente las<br>
                                    24 horas
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                La eSIM es fácil de usar, pero si tienes dudas o necesitas resolver algún problema puedes contactarnos por chat y email durante las 24 horas. Estamos para ayudarte.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/send-mail.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Entrega inmediata
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                Si tienes prisa o ya estas viajando, no te preocupes, nosotros te enviaremos la eSIM inmediatamente luego de tu compra a través de email, así te conectas en pocos segundos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 m-0 p-2">
                <div class="card border-radius-20 bg-transparent card-ventajas">
                    <div class="card-body">
                        <div class="row p-0 m-0">
                            <div class="col-12 m-0 mb-1 p-0">
                                <img src="<?= base_url('/images/svg/wifi.svg') ?>" alt="Icono de verificacion" width="60px" height="62px">
                            </div>
                            <div class="col-12 m-0 mb-5 mb-md-3 p-0 h-48 align-center-middle">
                                <h4 class="text-light">
                                    Entrega Comparte datos con <br>
                                    familiares y amigos
                                </h4>
                            </div>
                            <div class="col-12 m-0 p-0 text-light">
                                Comparte hasta 1GB de datos diarios con familiares, amigos o compañeros de viaje. Utiliza tu smartphone para crear una red WiFi y conectar varios dispositivos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-5"></div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
