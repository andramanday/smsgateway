<!--Modal New phonebook-->
<div class="modal fade" id="modal-new-contact" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content" style="border-radius:10px">
                <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">NEW CONTACT</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>api/addcontact" method="post">
                    <div class="form-group has-feedback">
                        <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" >
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="names" id="names" class="form-control" placeholder="Contact Name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="tag" class="form-control" placeholder="tags">
                        <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="pilihgroup" id="pilihgroup" multiple="multiple" data-placeholder="Select a Group" style="width: 100%;"> </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Edit phonebook-->
<div class="modal fade" id="modal-edit-contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">NEW CONTACT</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>login/checklogin" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="id" id="id" style="width: 100%" placeholder="Send to" value="">
                        <input type="number" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" >
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="user" id="name" class="form-control" placeholder="Contact Name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="email" id="email"  class="form-control" placeholder="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="tag" id="tag" class="form-control" placeholder="tags">
                        <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                        <select multiple class="form-control" data-placeholder="Select a Group" style="width: 100%;"> </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Delete phonebook-->
<div class="modal fade" id="modal-del-contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-danger">WARNING!!</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>api/delcontact" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="pid" id="pid" style="width: 100%" placeholder="Send to" value="">
                    </div>
                    <p>Are you sure you want to delete <span id="isiNama"></span> (<span id="isiMobile"></span>) ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
    </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal New Message-->
<div class="modal fade" id="modal-new-message" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">NEW MESSAGE</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>playsms/sendsms" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="p_num_text" id=msg_combo_sendto style="width: 100%" placeholder="Send to" value="">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        <p class="help-block">Prefix with @ for groups</p>
                    </div>
                    <div class="form-group has-feedback">
                        <textarea name="message" id="message" rows="5" cols="45" class="form-control" placeholder="type your message"></textarea>
                                
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_sender" class="form-control" placeholder="Sender ID" readonly>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_footer" class="form-control" placeholder="Message footer" value="@andra">
                        <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                    </div>

                    <!--<div class="form-group has-feedback">
                    <label for="msg_options">Options</label>
                        <div id="msg_options">
                            <div class="checkbox">
                                <label> <input type=checkbox name=msg_flash id="msg_flash">
                                    Flash message
                                </label>
                            </div>
                            <div class="checkbox">
                                <label> <input type=checkbox name=msg_unicode
                                    id="msg_unicode" onClick="SmsSetCounter();"
                                    onkeypress="SmsSetCounter();" onblur="SmsSetCounter();">
                                    Unicode message
                                </label>
                            </div>
                        </div>
                    </div>-->

                    <div class="form-group has-feedback">
                        <label for="msg_schedule">Schedule</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' name="sms_schedule"  class="form-control" placeholder="Format YYYY-MM-DD hh:mm" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Read Message-->
<div class="modal fade" id="modal-read-message" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content " style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">READ MESSAGE</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>Message From:</h3>
                        <h5><span id="isiNomor"></span>
                        <span class="mailbox-read-time pull-right"><span id="isiWaktu"></span></span></h5>
                    </div>

                    <div class="mailbox-read-message">
                        <span class="roomNumber"></span></p>
                        <span id="isiPesan"></span></p>
                    </div>
                <!-- /.mailbox-read-message -->

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Delete Outbox-->
<div class="modal fade" id="modal-del-outbox" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-danger">WARNING!!</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>api/deloutbox" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="idOutbox" id="idOutbox" style="width: 100%" placeholder="Send to" value="">
                    </div>
                    <p>Are you sure you want to delete message from <span id="nohpoutbox"> ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
    </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--Modal Forward Message dari outbox-->
<div class="modal fade" id="modal-forward-outbox" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">NEW MESSAGE</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>playsms/sendsms" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="p_num_text" id=msg_combo_sendtos style="width: 100%" placeholder="Send to" value="">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        <p class="help-block">Prefix with @ for groups</p>
                    </div>
                    <div class="form-group has-feedback">
                        <textarea name="message" id="forwardmessage" rows="5" cols="45" class="form-control" placeholder="type your message"></textarea>
                                
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_sender" class="form-control" placeholder="Sender ID" readonly>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_footer" class="form-control" placeholder="Message footer" value="@andra">
                        <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="msg_schedule">Schedule</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' name="sms_schedule"  class="form-control" placeholder="Format YYYY-MM-DD hh:mm" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Resend Message dari outbox-->
<div class="modal fade" id="modal-resend-outbox" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">RESEND MESSAGE</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>playsms/sendsms" method="post">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="p_num_text" id="resendno" style="width: 100%" placeholder="Send to" value="">
                        
                    </div>
                    <div class="form-group has-feedback">
                        <input type="hidden" name="message" id="resendmessage" rows="5" cols="45" class="form-control" placeholder="type your message">
                                

                    </div>
                    <p>Are you sure you want to resend message to <span id="noresendoutbox"> ?</p>

            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Resend</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Modal Reply Message dari outbox-->
<div class="modal fade" id="modal-reply-message" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-header" style="text-transform:uppercase"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">REPLY MESSAGE</h4>
            </div>
            <div class="modal-body">
                <!--form -->
                <form action="<?= BASEURL; ?>playsms/sendsms" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="p_num_text" id="replynumber" style="width: 100%" placeholder="Send to" readonly>
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <textarea name="message" id="replymessage" rows="5" cols="45" class="form-control" placeholder="type your message"></textarea>
                                
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_sender" class="form-control" placeholder="Sender ID" readonly>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="sms_footer" class="form-control" placeholder="Message footer" value="@andra">
                        <span class="glyphicon glyphicon-tags form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="msg_schedule">Schedule</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' name="sms_schedule"  class="form-control" placeholder="Format YYYY-MM-DD hh:mm" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
                </form>
                <!--/form-->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->