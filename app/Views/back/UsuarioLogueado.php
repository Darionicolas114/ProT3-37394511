<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if(session()->has('perfil_id')): ?>
            <div class="text-center mt-4">
                <?php if(session()-> perfil_id == 1): ?>   
                    <img height="100px" width="100px" src="<?= base_url('assets/icons/icons-Adm.png');?>" alt="Admin Icon">
                <?php elseif(session()-> perfil_id == 2): ?>
                    <img height="100px" width="100px" src="<?= base_url('assets/icons/icons-Cliente.png');?>" alt="Client Icon">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
