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
        <form class="form" action="<?=base_url?>usuarios/logueo" method="POST">
            <p class="title">Login </p>
            <p class="message">Inicie sesión para acceder al sistema. </p>
            <label for="usuario">
                <input class="input" type="text" placeholder="" name="usuario" required="">
                <span>Usuario</span>
            </label>

            <label for="clave">
                <input class="input" type="password" placeholder="" name="clave" required="">
                <span>Clave</span>
            </label>

            <button class="submit">Iniciar sesión</button>
            <p class="signin">¿Aún no tienes una cuenta? <a  href="<?=base_url?>usuarios/registro">Registrate aquí</a> </p>
        </form>
    </div><!-- /.container -->
</section><!-- /.banner-style-one -->

