<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        User configuration
        <small>Application options</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= BASEURL; ?>user/"><i class="fa fa-user"></i> User</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header "></div><!-- /.box-header -->   

                    <div class="col-md-4">
                        <div class="text-center">
                        <form action="<?= BASEURL; ?>phonebook/importpb" enctype="multipart/form-data" method=POST class="form-horizontal">
                            <p>Pilih berkas CSV untuk isian buku telepon</p>
                            <div class="text-center">
                                <p><input type="file" name="file" id="file" class="form-control"></p>
                            </div>
							<p class=text-info>CSV file format : Nama, Ponsel, Email, Tags</p>
                            <p><input name="Import" type="submit"  class="btn btn-primary" value="Upload"></p>
							</form>
                        </div>
                        <?php Flasher::flash(); ?>  
                    </div>

                    <div class="box-footer"></div>
                </div>
            </div>
        </div>
      <?php  $this->view('template/modal', $data); ?>
    </section>