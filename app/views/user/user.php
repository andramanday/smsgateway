<<<<<<< HEAD
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
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header "></div><!-- /.box-header -->

                        <!-- form start -->
                        <form class="form-horizontal" action="http://localhost/playSMS-master/web/index.php?app=main&inc=core_user&route=user_config&op=user_config_save&view=" method=post enctype="multipart/form-data">
                            <input type="hidden" name="X-CSRF-Token" value="ca843243413a3b55401b9c9d30d8e612">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Username</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control" placeholder="andra" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Access Control List</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control playsms-input" name="" value="DEFAULT" id="" readonly>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='ACL DEFAULT will not restrict access to menus' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Default sender ID</label>

                                <div class="col-sm-6 input-group">
                                    <select name='up_sender' class="form-control"><option value="">None</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Default message footer</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=30 name=up_footer value="@andra">
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Max. 30 alphanumeric characters' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Credit</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=14 value='6400' readonly>
                                    <div class="input-group-addon">
                                        <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Add or reduce credit from manage credit menu' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label" style="max-width: 100%;">Enable credit unicode SMS as normal SMS</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=14 value='no' readonly>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices username</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " value='andra' readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices token</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control" value='affc300f2cd64b6b5f36460b444b2e44' readonly>
                                    <div class="input-group-addon">
                                        <i type="button" class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Add or reduce credit from manage credit menu' rel=tooltip>renew</i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Enable webservices</label>

                                <div class="col-sm-6 input-group">
                                <select name='up_enable_webservices' class="form-control"><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices IP range</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=100 name=up_webservices_ip value='444'>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Comma separated' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Active language</label>

                                <div class="col-sm-6 input-group">
                                <select name=up_language_module class="form-control"><option value="">Default</option><option value="ar_SA" >Arabic (Saudi Arabia)</option><option value="ca_ES" >Catalan (Spain)</option><option value="da_DK" >Dansk (Danmark)</option><option value="de_DE" >Deutsch (Deutschland)</option><option value="en_US" >English (United States)</option><option value="es_VE" >Spanish (Venezuela)</option><option value="fr_FR" >French (France)</option><option value="id_ID" selected>Indonesian (Indonesia)</option><option value="nb_NO" >Norwegian Bokmål (Norway)</option><option value="pt_BR" >Portuguese (Brazil)</option><option value="pt_PT" >Portuguese (Portugal)</option><option value="ru_RU" >Russian (Russia)</option><option value="zh_CN" >Chinese (China)</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Timezone</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name=up_datetime_timezone value='+0700'>
                                    <div class="input-group-addon">
                                        <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Eg: +0700 for Jakarta/Bangkok timezone' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to inbox</label>

                                <div class="col-sm-6 input-group">
                                    <select class="form-control" name='up_fwd_to_inbox'><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to email</label>

                                <div class="col-sm-6 input-group">
                                <select class="form-control" name='up_fwd_to_email'><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to mobile</label>

                                <div class="col-sm-6 input-group">
                                <select class="form-control" name='up_fwd_to_mobile'><option value='1' >yes</option><option value='0' selected>no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Local number length</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name='up_local_length' value='9'>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Min length to detect missing country code' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Prefix or country code</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name='up_replace_zero' value=''>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Replace prefix 0 or padding local numbers' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                        <!-- /.box-footer -->
                        </form>

                </div> <!-- /.box-body -->
            </div><!-- /.col -->

            
      <?php  $this->view('template/modal', $data); ?>
    </section>
    <!-- /.content -->

=======
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
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header "></div><!-- /.box-header -->

                        <!-- form start -->
                        <form class="form-horizontal" action="http://localhost/playSMS-master/web/index.php?app=main&inc=core_user&route=user_config&op=user_config_save&view=" method=post enctype="multipart/form-data">
                            <input type="hidden" name="X-CSRF-Token" value="ca843243413a3b55401b9c9d30d8e612">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Username</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control" placeholder="andra" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Access Control List</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control playsms-input" name="" value="DEFAULT" id="" readonly>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='ACL DEFAULT will not restrict access to menus' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Default sender ID</label>

                                <div class="col-sm-6 input-group">
                                    <select name='up_sender' class="form-control"><option value="">None</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Default message footer</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=30 name=up_footer value="@andra">
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Max. 30 alphanumeric characters' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Credit</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=14 value='6400' readonly>
                                    <div class="input-group-addon">
                                        <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Add or reduce credit from manage credit menu' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label" style="max-width: 100%;">Enable credit unicode SMS as normal SMS</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=14 value='no' readonly>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices username</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " value='andra' readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices token</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control" value='affc300f2cd64b6b5f36460b444b2e44' readonly>
                                    <div class="input-group-addon">
                                        <i type="button" class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Add or reduce credit from manage credit menu' rel=tooltip>renew</i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Enable webservices</label>

                                <div class="col-sm-6 input-group">
                                <select name='up_enable_webservices' class="form-control"><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Webservices IP range</label>

                                <div class="col-sm-6 input-group">
                                    <input type="text" class="form-control " maxlength=100 name=up_webservices_ip value='444'>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Comma separated' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Active language</label>

                                <div class="col-sm-6 input-group">
                                <select name=up_language_module class="form-control"><option value="">Default</option><option value="ar_SA" >Arabic (Saudi Arabia)</option><option value="ca_ES" >Catalan (Spain)</option><option value="da_DK" >Dansk (Danmark)</option><option value="de_DE" >Deutsch (Deutschland)</option><option value="en_US" >English (United States)</option><option value="es_VE" >Spanish (Venezuela)</option><option value="fr_FR" >French (France)</option><option value="id_ID" selected>Indonesian (Indonesia)</option><option value="nb_NO" >Norwegian Bokmål (Norway)</option><option value="pt_BR" >Portuguese (Brazil)</option><option value="pt_PT" >Portuguese (Portugal)</option><option value="ru_RU" >Russian (Russia)</option><option value="zh_CN" >Chinese (China)</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Timezone</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name=up_datetime_timezone value='+0700'>
                                    <div class="input-group-addon">
                                        <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Eg: +0700 for Jakarta/Bangkok timezone' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to inbox</label>

                                <div class="col-sm-6 input-group">
                                    <select class="form-control" name='up_fwd_to_inbox'><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to email</label>

                                <div class="col-sm-6 input-group">
                                <select class="form-control" name='up_fwd_to_email'><option value='1' selected>yes</option><option value='0' >no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Forward message to mobile</label>

                                <div class="col-sm-6 input-group">
                                <select class="form-control" name='up_fwd_to_mobile'><option value='1' >yes</option><option value='0' selected>no</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Local number length</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name='up_local_length' value='9'>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Min length to detect missing country code' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Prefix or country code</label>

                                <div class="col-sm-6 input-group">
                                    <input class="form-control" type=text size=5 maxlength=5 name='up_replace_zero' value=''>
                                    <div class="input-group-addon">
                                    <i class='glyphicon glyphicon-info-sign playsms-tooltip' data-toggle=tooltip title='Replace prefix 0 or padding local numbers' rel=tooltip></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                        <!-- /.box-footer -->
                        </form>

                </div> <!-- /.box-body -->
            </div><!-- /.col -->

            
      <?php  $this->view('template/modal', $data); ?>
    </section>
    <!-- /.content -->

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
    