<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
        Messages Box
        <small><?= $data['unread']; ?> new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        <a href="#" class="btn btn-primary btn-block margin-bottom" data-toggle='modal' data-target='#modal-new-message'><span class=" fa fa-envelope"> New Message</span></a>

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
                <li><a href="<?= BASEURL; ?>message/"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right"><?= $data['unread']; ?></span></a></li>
                <li class="active"><a href="<?= BASEURL; ?>message/outbox"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="<?= BASEURL; ?>message/schedule"><i class="fa fa-filter"></i> Schedule 
                    <span class="label label-warning pull-right"><?= $data['schedule']; ?></span></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary col-md-9">
            <div class="box-header "></div>
            <!-- /.box-header -->
            
              <div class="table-responsive mailbox-messages">
                <table id="data_table" class="table table-hover table-striped">
                <thead>
                    <tr>
                      <th width="5%" style="vertical-align: middle; text-align: center">NO.</th>
                      <th width="15%" style="vertical-align: middle; text-align: center">TO</th>
                      <th style="vertical-align: middle; text-align: center">MESSAGE</th>
                    </tr>
                  </thead>
                 
                </table>
                <!-- /.table -->
                <?php Flasher::flash(); ?>  
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
      <?php  $this->view('template/modal', $data); ?>
    </section>
    <!-- /.content -->

    