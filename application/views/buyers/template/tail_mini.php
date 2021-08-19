

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Kazi Iendelee
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">Facebook</a>
                                <a href="javascript: void(0);">Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>


    <script src="<?php echo base_url('assets/js/vendor/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/dataTables.bootstrap5.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/responsive.bootstrap5.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/vendor/dropzone.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ui/component.fileupload.js'); ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            <?php 
                $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
                $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
            ?>
            var user_id= "<?php echo urlencode($this->mod_crypt->Enc_String($this->session->userdata('log_id')));?>"

            $("#client_send").click(function(){
                var msg_body = $('#client_msg_box').val();
                if (msg_body == "") {
                    window.alert("Message cannot be empty");
                }else{
                	console.log('Message as '+msg_body);
                    $.ajax({
                        url: '<?php echo base_url("buyer/".$user_url."/send_message/"); ?>'+user_id,
                        type: 'POST',
                        data: { msg_content:msg_body},
                        success: function(response){
                            if(response == 11){
                                $("#client_msg_box").attr("value", ""); 
                                $('#client_msg_box').empty()
                                $("#client_msg_box").val("")
                                $.ajax({
                                    url: '<?php echo base_url("buyer/".$user_url."/user_fetch/"); ?>'+user_id,
                                    type: 'POST',
                                    data: { msg_content:"Hello"},
                                    success: function(response){
                                        if(response == 1){
                                            alert('Cannot fetch messages, please try again or refresh the webpage.');
                                        }else{
                                            $("#message_view_box").html(response).load(response).fadeIn();
                                        }

                                    }
                                });
                            }else if(response == 22){
                                window.alert('Message not sent, please try again or refresh the page.');
                            }
                        }
                    });
                }  
                     
            });;
            
        });
    </script>

</body>

</html>