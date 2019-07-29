</div>
  <!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.12
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= TEMPLATEURL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= TEMPLATEURL; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= TEMPLATEURL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->

<script type="text/javascript" src="<?= TEMPLATEURL; ?>bower_components/select2/dist/js/combobox/select2.min.js"></script>
<script type="text/javascript" src="<?= TEMPLATEURL; ?>bower_components/select2/dist/js/combobox/select2_locale_id.js"></script>
<!-- Morris.js charts -->
<script src="<?= TEMPLATEURL; ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?= TEMPLATEURL; ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= TEMPLATEURL; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= TEMPLATEURL; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= TEMPLATEURL; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= TEMPLATEURL; ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= TEMPLATEURL; ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= TEMPLATEURL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= TEMPLATEURL; ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- datetimepicker -->
<script src="<?= TEMPLATEURL; ?>bower_components/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= TEMPLATEURL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= TEMPLATEURL; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= TEMPLATEURL; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= TEMPLATEURL; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= TEMPLATEURL; ?>dist/js/pages/dashboard.js"></script>
<!-- iCheck -->
<script src="<?= TEMPLATEURL; ?>plugins/iCheck/icheck.min.js"></script>
<!-- ChartJS -->
<script src="<?= TEMPLATEURL; ?>bower_components/chart.js/Chart.js"></script>
<!-- DataTables -->
<script src="<?= TEMPLATEURL; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= TEMPLATEURL; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?= TEMPLATEURL; ?>bower_components/smscount/accessible_character_countdown.js"></script>

<script src="<?= VENDORURL; ?>highchart/highstock.js"></script>
<script src="<?= VENDORURL; ?>highchart/modules/exporting.js"></script>
<script src="<?= VENDORURL; ?>highchart/modules/export-data.js"></script>

<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$("#msg_combo_sendto").select2({
			multiple: true,
			/* placeholder: "Send to", */
			allowClear: true,
			selectOnBlur: true,
			minimumInputLength: 2,
			separator: ",",
			tokenSeparators: [","],
			initSelection : function (element, callback) {
				var data = [];
				$(element.val().split(",")).each(function () {
					data.push({id: this, text: this});
				});
				callback(data);
			},
			createSearchChoice: function(term, data) {
				if ($(data).filter(function () {
					return this.text.localeCompare(term)===0;
				}).length===0) {
					return {id:term, text:term};
				}
			},
			ajax: {
				url: function (term, page) {
					return '<?= BASEURL; ?>playsms/phonebook_combo/'+term
				},
        method : 'GET',
				dataType: 'json',
				quietMillis: 100,
				results: function (data, page) {
					return {results: data};
				}
			}
		});
		$("#message").focus();
		$('#datetimepicker1').datetimepicker({
      format : 'DD/MM/YYYY HH:mm'
    });
    $( "#message" ).accessibleCharCount();
    
	});
</script>

<!-- Modal Script -->
<script type="text/javascript">
  $('#modal-read-message').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
    var toko = this.value;
        $.ajax({
            url:'<?= BASEURL; ?>api/apiread/'+id,
            method:'POST',
            data:{toko:toko},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                $("#isiNomor").html(json.datas[i].NO.toString());
                $("#isiPesan").html(json.datas[i].MSG.toString());
                $("#isiWaktu").html(json.datas[i].WKT.toString());
              }
            }
        });
        $.ajax({
            url:'<?= BASEURL; ?>api/UpdateInbox/'+id,
            method:'POST',
            data:{toko:toko},
            dataType: "JSON"
        });

  });

  $('#modal-new-contact').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
    var toko = this.value;
      $.ajax({
          url:'<?= BASEURL; ?>api/comboGroup',
          method:'POST',
          data:{toko:toko},
          success: function(data)
          {
            $("#pilihgroup").html(data);
          }
      });

  });

  $('#modal-edit-contact').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
    var toko = this.value;
        $.ajax({
            url:'<?= BASEURL; ?>api/getDataPhonebook/'+id,
            method:'POST',
            data:{toko:toko},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("id").value = json.datas[i].id.toString();
                document.getElementById("mobile").value = json.datas[i].mobile.toString();
                document.getElementById("name").value = json.datas[i].name.toString();
                document.getElementById("email").value = json.datas[i].email.toString();
                document.getElementById("tag").value = json.datas[i].tags.toString();
              }
            }
        });

  });

  $('#modal-del-outbox').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
        $.ajax({
            url:'<?= BASEURL; ?>api/getDataOutbox/'+id,
            method:'POST',
            data:{toko:0},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("idOutbox").value = json.datas[i].id.toString();
                $("#nohpoutbox").html(json.datas[i].p_dst.toString());
              }
            }
        });

  });

  $('#modal-del-contact').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
        $.ajax({
            url:'<?= BASEURL; ?>api/getDataPhonebook/'+id,
            method:'POST',
            data:{toko:0},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("pid").value = json.datas[i].id.toString();
                $("#isiNama").html(json.datas[i].name.toString());
                $("#isiMobile").html(json.datas[i].mobile.toString());
              }
            }
        });

  });

  $('#modal-forward-outbox').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
    var toko = this.value;

      $("#msg_combo_sendtos").select2({
        multiple: true,
        /* placeholder: "Send to", */
        allowClear: true,
        selectOnBlur: true,
        minimumInputLength: 2,
        separator: ",",
        tokenSeparators: [","],
        initSelection : function (element, callback) {
          var data = [];
          $(element.val().split(",")).each(function () {
            data.push({id: this, text: this});
          });
          callback(data);
        },
        createSearchChoice: function(term, data) {
          if ($(data).filter(function () {
            return this.text.localeCompare(term)===0;
          }).length===0) {
            return {id:term, text:term};
          }
        },
        ajax: {
          url: function (term, page) {
            return '<?= BASEURL; ?>playsms/phonebook_combo/'+term
          },
          method : 'GET',
          dataType: 'json',
          quietMillis: 100,
          results: function (data, page) {
            return {results: data};
          }
        }
      });
      $("#message").focus();
      $('#datetimepicker1').datetimepicker({
        format : 'DD/MM/YYYY HH:mm'
      });
      $( "#message" ).accessibleCharCount();


        $.ajax({
            url:'<?= BASEURL; ?>api/getDataOutbox/'+id,
            method:'POST',
            data:{toko:toko},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("forwardmessage").value = json.datas[i].p_msg.toString()+'\n\nForward from: '+json.datas[i].p_dst.toString();
              }
            }
        });

  });

  $('#modal-resend-outbox').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');
        $.ajax({
            url:'<?= BASEURL; ?>api/getDataOutbox/'+id,
            method:'POST',
            data:{toko:0},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("resendno").value = json.datas[i].p_dst.toString();
                document.getElementById("resendmessage").value = json.datas[i].p_msg.toString();
                $("#noresendoutbox").html(json.datas[i].p_dst.toString());
              }
            }
        });

  });

  $('#modal-reply-message').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).attr('data-id');

    $.ajax({
            url:'<?= BASEURL; ?>api/apiread/'+id,
            method:'POST',
            data:{toko:0},
            dataType: "JSON",
            success:function(json)
            {
              var length = json.datas.length;
              
              for (var i=0;i<length;i++){
                document.getElementById("replynumber").value = json.datas[i].NO.toString();
                document.getElementById("replymessage").value = json.datas[i].p_msg.toString();
              }
            }
        });

  });

</script>
<script>
$(document).ready(function () {
    $('.modal').on('show.bs.modal', function () {
        if ($(document).height() > $(window).height()) {

            $('body').addClass("modal-open-noscroll");
        }
        else {
            $('body').removeClass("modal-open-noscroll");
        }
    });
    $('.modal').on('hide.bs.modal', function () {
        $('body').removeClass("modal-open-noscroll");
    });
  })
</script>
<!-- Page Script -->
<script type="text/javascript">
	$(document).ready(function(){

    var apiLink;
    var tUser = "<?= $_SESSION['session_login']['user']; ?>";
    var tPass = "<?= $_SESSION['session_login']['password']; ?>";
    var tTipe = "contact";
    var subTitle = '<?= $data['subtitle'] ?>';
    if(subTitle == 'contact'){
      apiLink = "<?= BASEURL; ?>api/phonebook";
    }else if(subTitle == 'group'){
      apiLink = "<?= BASEURL; ?>api/phonebookgroup";
    }else if(subTitle == 'inbox'){
      apiLink = "<?= BASEURL; ?>api/inbox";
    }else if(subTitle == 'sent'){
      apiLink = "<?= BASEURL; ?>api/outbox";
    }else if(subTitle == 'schedule'){
      apiLink = "<?= BASEURL; ?>api/schedule";
    }

    var data_sensor = $('#data_table').DataTable({
      "ajax": {
          url: apiLink,
          method:'POST',
          data:{user:tUser, pass:tPass, tipe:tTipe},
      }
      /*'columnDefs': [
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
         }
      ],
      'select': {
         'style': 'multi'
      },
      'order': [[0, 'asc']]*/
    
    });

    var data_credit = $.ajax({
        url:'<?= BASEURL; ?>playsms/getcredit',
        method:'POST',
        success: function(data)
        {
          $("#sisacredit").html(data);
        }
    });

    //set interval
    setInterval(function(){
      data_credit.ajax.reload( function ( json ) {
            // json_processing(json);
        	}, false );
    }, 2000);
    

    $('.select2').select2()
  
});
</script>

<script type="text/javascript">
// data-* attributes to scan when populating modal values
var ATTRIBUTES = ['myvalue', 'myvar', 'bb'];

$('[data-toggle="modal"]').on('click', function (e) {
  // convert target (e.g. the button) to jquery object
  var $target = $(e.target);
  // modal targeted by the button
  var modalSelector = $target.data('target');
  
  // iterate over each possible data-* attribute
  ATTRIBUTES.forEach(function (attributeName) {
    // retrieve the dom element corresponding to current attribute
    var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
    var dataValue = $target.data(attributeName);
    
    // if the attribute value is empty, $target.data() will return undefined.
    // In JS boolean expressions return operands and are not coerced into
    // booleans. That way is dataValue is undefined, the left part of the following
    // Boolean expression evaluate to false and the empty string will be returned
    $modalAttribute.text(dataValue || '');
  });
});
</script>
    
<!-- AdminLTE for demo purposes -->
<script src="<?= TEMPLATEURL; ?>dist/js/demo.js"></script>
</body>
</html>
