<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal') ?>">
            <img src="<?php echo base_url('assets/img/logotipoTrading.jpg') ?>" alt="marca" width="90" height="50" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if ($perfil == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a href="#">ADMIN: <?php echo $nombre; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('acerca_de'); ?>">Acerca De</a>
                    </li>
                    <li class="nav-item dropdown">
                      
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('inicioDeSesion'); ?>">Inicio De Sesión</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('registro'); ?>">Registro</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('logout'); ?>">Cerrar Sesión</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php elseif ($perfil == 2): ?>
            <div class="btn btn-info active btnUser btn-sm">
                <a href="#">CLIENTE: <?php echo $nombre; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('catalogo'); ?>">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca De</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('catalogo'); ?>">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('inicioDeSesion'); ?>">Inicio De Sesión</a>
                    </li>
                </ul>
            </div>
        <?php endif; ?>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</nav>
