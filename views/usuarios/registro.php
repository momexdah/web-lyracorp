<?php if (isset($_SESSION['register'])&&$_SESSION['register']=='complete'):?>
     <strong class="alert alert-success" role="alert">Registro exitoso</strong>
<?php elseif(isset($_SESSION['register'])&&$_SESSION['register']=='failed'): ?>
    <strong class="alert alert-danger" role="alert">Registro fallido</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>
<section class="banner-style-one" id="banner">
    <span class="bubble-1"></span>
    <span class="bubble-2"></span>
    <span class="bubble-3"></span>
    <span class="bubble-4"></span>
    <span class="bubble-5"></span>
    <span class="bubble-6"></span>
    <img src="<?=base_url?>assets/images/banner-moc-1-1.png" class="banner-mock" alt="Awesome Image" />
    <div class="container">
        <form class="form" action="<?=base_url?>usuarios/save" method="POST">
            <p class="title">Registro </p>
            <p class="message">Regístrese ahora y obtenga acceso completo a nuestra aplicación. </p>

            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipo de documento</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>


           <label for="nombres">
                    <input class="input" type="text" placeholder="" name="nombres" required="">
                    <span>Nombres</span>
           </label>

            <label for="primer_apellido">
                <input class="input" type="text" placeholder="" name="primer_apellido" required="">
                <span>Primer Apellido</span>
            </label>
            <label for="segundo_apellido">
                <input class="input" type="text" placeholder="" name="segundo_apellido" required="">
                <span>Segundo Apellido</span>
            </label>
            <label for="usuario">
                <input class="input" type="email" placeholder="" name="usuario" required="">
                <span>Email</span>
            </label>
            <label for="telefono">
                <input class="input" type="number" placeholder="" name="telefono" required="">
                <span>Teléfono</span>
            </label>
            <label for="clave">
                <input class="input" type="password" placeholder="" name="clave" required="">
                <span>Clave</span>
            </label>
            <label for="clave_confirmada">
                <input class="input" type="password" placeholder="" name="clave_confirmada" required="">
                <span>Confirma tu clave</span>
            </label>
            <button class="submit">Registrar</button>
            <p class="signin">¿Ya tienes una cuenta? <a href="<?=base_url?>usuarios/login">Inicia sesión</a> </p>
        </form>
    </div><!-- /.container -->
</section><!-- /.banner-style-one -->

