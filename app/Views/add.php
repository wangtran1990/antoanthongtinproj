<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?= $this->include('sidebar') ?>
<div class="page-container">
    <?= $this->include('header') ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="title-1 m-b-25">Promotions code</h2>
                    </div>
                </div>
                <div class="row" style="justify-content: center;">
                    <div class="col-md-8">
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($validation)) : ?>
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                        <form action="/promotion/save" method="post">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="au-input au-input--full" type="text" name="phone" placeholder="Vui lòng nhập số điện thoại" value="<?= set_value('phone') ?>">
                            </div>
                            <div class="form-group">
                                <label>Mã khuyến mãi</label>
                                <input class="au-input au-input--full" type="text" name="promotion_code" placeholder="Vui lòng nhập mã khuyến mãi" value="<?= set_value('promotion_code') ?>">
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>