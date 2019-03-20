<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Membuat Form Validation dengan CodeIgniter</h1>
                <?php echo validation_errors(); ?>
            </div>
            <form class="user" action="<?= base_url() ?>praktikum2/aksi" method="post">
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Masukan nama" name="nama">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Masukan email" name="email">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Konfirmasi email" name="konfir_email">
                    </div>
                </div>
                <div class="row">
                    <div class="ml-3">
                        <input type="submit" class="btn btn-primary">

                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Membuat Download File CodeIgniter</h1>
            </div>
            <a class="btn btn-danger" href="<?php echo base_url() . 'praktikum2/lakukan_download' ?>">Download file</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Membuat Library Sendiri</h1>
            </div>
            <?php 
            $this->malasngoding->nama_saya();
            echo "<br/>";
            $this->malasngoding->nama_kamu("Andi");
            ?>
        </div>
    </div>
</div> 