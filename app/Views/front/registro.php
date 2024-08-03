<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-6" style="width: 50%;">
                <h4>Registrarse</h4>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?= base_url('enviarForm') ?>">
                    <?= csrf_field() ?>

                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(session()->getFlashdata('msg'))): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-body justify-content-center">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="nombre" value="<?= old('nombre') ?>">
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('nombre') ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="apellido" value="<?= old('apellido') ?>">
                            <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('apellido') ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="usuario" value="<?= old('usuario') ?>">
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('usuario') ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email" value="<?= old('email') ?>">
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('email') ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" name="pass" class="form-control" placeholder="contraseña">
                            <?php if ($validation->getError('pass')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('pass') ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
