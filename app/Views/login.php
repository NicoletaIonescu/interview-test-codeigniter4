<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="vh-100 gradient-custom container-fluid">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h4 class="card-title text-center mb-4 mt-1">Login</h4>
                        <hr>
                        <?php if(isset($validation)):?>
                            <div class="alert alert-danger">
                                <p class="text-danger text-center"><?= $validation->listErrors() ?></p>
                            </div>
                        <?php endif;?>
                        <?php echo form_open('login/auth');?>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="Email or login" type="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="******" type="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            </div> <!-- form-group// -->

                        <? echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>