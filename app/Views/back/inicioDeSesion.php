
<!--Inicio Formulario Login -->
<div class="custom-login">
    <div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-lg-block">
            <div class="bg-holder" style="background-image: url(assets/img/login/img_login.jpg);">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a class="d-flex justify-content-center" href="<?php echo base_url('enviarLogin'); ?>">
                        <img src="assets/icons/iconsTrading.png" alt="LOGO_INICIO" width="100">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Inciar Sesion</h3>
                        <p class="text-secondary">Accede a tu cuenta</p>
                    </div>
                    <button class="btn btn-outline-secondary w-100 mb-3">
                        <i class="fa-brands fa-google text-danger me-1 fs-6"></i> Acceder con Google
                    </button>
                    <button class="btn btn-outline-secondary w-100">
                        <i class="fa-brands fa-facebook-f text-primary me-1 fs-6"></i> Acceder con Facebook
                    </button>
                    <div class="position-relative">
                        <hr class="text-secondary divider">
                        <div class="divider-content-center"> </div>
                    </div>
                    <!--Mensaje de Error-->
                    <?php if(session()->getFlashdata('msg')) :?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <form method="post" action="<?php echo base_url('/enviarLogin')?>">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input name="usuario" type="text" class="form-control form-control-lg fs-6" placeholder="Usuario">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input name="pass" type="pass" class="form-control form-control-lg fs-6" placeholder="Contraseña">
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Guardar Credenciales</small></label>
                            </div>
                            <div>
                                <small><a href="#">¿Olvidaste tu contraseña?</a></small>
                            </div>
                        </div>
                        <!-- <button class="btn boton-ingresar btn-dark btn-lg w-100 mb-3">Ingresar</button> -->
                        <input type="submit" value="Ingresar" class="btn boton-registro btn-dark btn-lg w-100 mb-3" />
                    </form>
                    <div class="text-center">
                        <small>No tienes una cuenta?<a class="fw-bold" href="<?php echo base_url('/registro'); ?>"> Registrarse</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin Formulario Login-->
</div>