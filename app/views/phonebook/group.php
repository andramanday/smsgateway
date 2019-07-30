<<<<<<< HEAD
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Daftar Kontak
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="compose.html" class="btn btn-primary btn-block margin-bottom"><span class=" fa fa-plus"> Tambah Kontak</span></a>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="<?= BASEURL; ?>phonebook"><i class="fa fa-user"></i> Contact</a></li>
              <li class="active"><a href="<?= BASEURL; ?>phonebook/group"><i class="fa fa-users"></i> Group</a></li>
              <li><a href="<?= BASEURL; ?>phonebook/exportpb"><i class="fa fa-sign-out"></i> Export</a></li>
              <li><a href="<?= BASEURL; ?>phonebook/import"><i class="fa fa-sign-in"></i> Import </a></li>
              <li><a href="<?= BASEURL; ?>phonebook/trash"><i class="fa fa-trash-o"></i> Trash</a></li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary col-md-9">
            <div class="box-header ">
          
            </div>
            <!-- /.box-header -->
            
              <div class="table-responsive mailbox-messages ">
              <table id="data_table" class="table table-bordered table-striped"  width='100%'>
                  <thead>
                    <tr>
                      <th style="vertical-align: middle; text-align: center">No.</th>
                      <th style="vertical-align: middle; text-align: center">Group Name</th>
                      <th style="text-align: center">Group Code</th>
                      <th style="text-align: center">Action</th>
                    </tr>
                    
                  </thead>
                  <tbody >
                    
                  
                  </tbody>
                  
                </table>
                
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius:10px">
              <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
              <div id="container" style="height: 400px; min-width: 310px"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->

=======
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Daftar Kontak
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="compose.html" class="btn btn-primary btn-block margin-bottom"><span class=" fa fa-plus"> Tambah Kontak</span></a>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="<?= BASEURL; ?>phonebook"><i class="fa fa-user"></i> Contact</a></li>
              <li class="active"><a href="<?= BASEURL; ?>phonebook/group"><i class="fa fa-users"></i> Group</a></li>
              <li><a href="<?= BASEURL; ?>phonebook/exportpb"><i class="fa fa-sign-out"></i> Export</a></li>
              <li><a href="<?= BASEURL; ?>phonebook/import"><i class="fa fa-sign-in"></i> Import </a></li>
              <li><a href="<?= BASEURL; ?>phonebook/trash"><i class="fa fa-trash-o"></i> Trash</a></li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary col-md-9">
            <div class="box-header ">
          
            </div>
            <!-- /.box-header -->
            
              <div class="table-responsive mailbox-messages ">
              <table id="data_table" class="table table-bordered table-striped"  width='100%'>
                  <thead>
                    <tr>
                      <th style="vertical-align: middle; text-align: center">No.</th>
                      <th style="vertical-align: middle; text-align: center">Group Name</th>
                      <th style="text-align: center">Group Code</th>
                      <th style="text-align: center">Action</th>
                    </tr>
                    
                  </thead>
                  <tbody >
                    
                  
                  </tbody>
                  
                </table>
                
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius:10px">
              <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
              <div id="container" style="height: 400px; min-width: 310px"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
    