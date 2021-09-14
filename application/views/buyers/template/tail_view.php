
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


	    <script src="<?php echo base_url('assets/js/vendor/dropzone.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assets/js/ui/component.fileupload.js'); ?>"></script>


	    <script type="text/javascript">
	        $(document).ready(function() {

	            <?php 
	                $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
	                $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
	            ?>
	            var user_id= "<?php echo urlencode($this->uri->segment(5));?>"

	            $("#convo_send").click(function(){
	                var msg_body = $('#convo_msg').val();
	                if (msg_body == "") {
	                    window.alert("Message cannot be empty");
	                }else{
	                    $.ajax({
	                        url: '<?php echo base_url("buyer/".$user_url."/send_submission/"); ?>'+user_id,
	                        type: 'POST',
	                        data: { msg_content:msg_body},
	                        success: function(response){
	                            $('#convo_msg').val("");
	                        }
	                    });
	                }  
	                     
	            });;

	            function getChats(){
	                $.ajax({ 
	                    url: '<?php echo base_url("buyer/".$user_url."/orders_submission_chats/"); ?>'+user_id,
	                    type: 'POST',
	                    success: function(response){
	                        $(".message_view_box").html(response).fadeIn();
	                        setTimeout(function(){
	                            getChats();
	                        }, 5000);

	                    } 
	                }); 
	            }

	            getChats();

	            function sendRequest(){
	                $.ajax({ 
	                    url: '<?php echo base_url("buyer/".$user_url."/orders_submission_ui"); ?>',
	                    type: 'POST',
	                    success: function(response){
	                        $(".made_submissions").html(response).fadeIn();
	                        setTimeout(function(){
	                            sendRequest();
	                        }, 5000);

	                    } 
	                }); 
	            }

	            sendRequest();

	            $(document).on("click", '.delete_attach_file_', function(event) {
    			    var fileid = this.id;
                    $.ajax({
                        url: '<?php echo base_url("buyer/".$user_url."/attachment_delete/"); ?>'+fileid,
                        type: 'POST',
                        success: function(response){
                            console.log(response);
                        }
                    });  
    			}); 

    			/*$('#message_view_box').scrollTop($('#message_view_box')[0].scrollHeight);
	            $('.message_view_box').scrollTop($('.message_view_box')[0].scrollHeight);
	            $("#message_view_box").animate({ scrollTop: $('#message_view_box').prop("scrollHeight")}, 1000);
	            $('#message_view_box').scrollTop($('#message_view_box')[0].scrollHeight - $('#message_view_box')[0].clientHeight);
	            $("#message_view_box").animate({ scrollTop: $('#message_view_box').height()}, 1000);
	            $("#message_view_box").animate({ scrollTop: $("#message_view_box")[0].scrollHeight}, 1000);*/
	            
	        });
	    </script>

	</body>

</html>