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
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header "></div><!-- /.box-header -->   
                    <?php foreach ($data['data'] as $isi ) : ?>
                    <form action="<?= BASEURL; ?>user/UpdateUser" method="post" enctype="multipart/form-data" id="something" class="form-horizontal">
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="<?= BASEURL; ?>styles/data/profile/<?= $_SESSION['session_login']['uid']; ?>.jpg" height="100" width="100" class="avatar img-circle" alt="avatar">
                            <h6>Upload a different photo...</h6>
                            
                            <input type="file" name="new_image" id="new_image" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="text-center">
                            
                        <div class="form-group">
                            <input type="hidden" name="id" type="text" value="">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="name" type="text" value="<?= $isi['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="mobile" type="number" value="<?= $isi['mobile']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="email" value="<?= $isi['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Address:</label>
                            <div class="col-md-8">
                            <textarea class="form-control" type="text" value="@"><?= $isi['address']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">City:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="text" value="<?= $isi['city']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">State:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="text" value="<?= $isi['state']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time Zone:</label>
                            <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control">
                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Country Code:</label>
                            <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="country_code" class="form-control select2">
                                <?php foreach ($data['country'] as $country ) : ?>
                                    <option value="<?= $country['country_id']; ?>">(+<?= $country['country_prefix']; ?>) <?= $country['country_name']; ?></option>
                                <?php endforeach; ?>  
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="text" value="<?= $isi['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                            <input type="button" class="btn btn-danger col-md-3" value="Change Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="text" value="@andra">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                            <input name="submit" type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                        </div>

                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> 
                            <i class="fa fa-coffee"></i>
                            This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                    </div>
                    </form>      
                    <?php endforeach; ?>  
                    <div class="box-footer"></div>
                </div>
            </div>
        </div>
      <?php  $this->view('template/modal', $data); ?>
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
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header "></div><!-- /.box-header -->   
                    <?php foreach ($data['data'] as $isi ) : ?>
                    <form action="<?= BASEURL; ?>user/UpdateUser" method="post" enctype="multipart/form-data" id="something" class="form-horizontal">
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="<?= BASEURL; ?>styles/data/profile/<?= $_SESSION['session_login']['uid']; ?>.jpg" height="100" width="100" class="avatar img-circle" alt="avatar">
                            <h6>Upload a different photo...</h6>
                            
                            <input type="file" name="new_image" id="new_image" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="text-center">
                            
                        <div class="form-group">
                            <input type="hidden" name="id" type="text" value="">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="name" type="text" value="<?= $isi['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="mobile" type="number" value="<?= $isi['mobile']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="email" value="<?= $isi['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Address:</label>
                            <div class="col-md-8">
                            <textarea class="form-control" type="text" value="@"><?= $isi['address']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">City:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="text" value="<?= $isi['city']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">State:</label>
                            <div class="col-lg-8">
                            <input class="form-control" name="email" type="text" value="<?= $isi['state']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time Zone:</label>
                            <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control">
                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Country Code:</label>
                            <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="country_code" class="form-control select2">
                                <?php foreach ($data['country'] as $country ) : ?>
                                    <option value="<?= $country['country_id']; ?>">(+<?= $country['country_prefix']; ?>) <?= $country['country_name']; ?></option>
                                <?php endforeach; ?>  
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="text" value="<?= $isi['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                            <input type="button" class="btn btn-danger col-md-3" value="Change Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer:</label>
                            <div class="col-md-8">
                            <input class="form-control" type="text" value="@andra">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                            <input name="submit" type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                        </div>

                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> 
                            <i class="fa fa-coffee"></i>
                            This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                    </div>
                    </form>      
                    <?php endforeach; ?>  
                    <div class="box-footer"></div>
                </div>
            </div>
        </div>
      <?php  $this->view('template/modal', $data); ?>
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
    </section>