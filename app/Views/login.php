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
                <div class="login-form">
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember">Remember Me
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Don't you have account?
                            <a href="/register">Sign Up Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>