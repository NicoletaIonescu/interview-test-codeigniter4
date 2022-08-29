<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <section class="vh-100 gradient-custom container-fluid">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">


                                <h4 class="card-title text-center mb-4 mt-1">Register</h4>
                                <hr>

                                <?php if(isset($validation)):?>
                                    <div class="alert alert-danger">
                                        <p class="text-danger text-center"><?= $validation->listErrors() ?></p>
                                    </div>
                                <?php endif;?>

                                <?php echo form_open('/register/save'); ?>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                        <input type="password" name="password" class="form-control" id="InputForPassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                <?php echo form_close();?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>