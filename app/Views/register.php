<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <!-- <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> -->
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <div class="login-form">
                    <form action="/register/save" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="au-input au-input--full" type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="au-input au-input--full" type="password" name="confpassword" placeholder="Confirm Password">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="aggree">Agree the terms and policy
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Already have account?
                            <a href="/login">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>