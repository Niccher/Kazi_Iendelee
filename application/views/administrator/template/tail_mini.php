

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

    <script type="text/javascript">
        $(document).ready(function() {
            $(".pop_user").click(function(){
                var prof_id = this.id;
                //console.log('Current Id is'+$(this).attr("id"));
                 $("#modal_profile").modal('show');

                $.ajax({
                    url: '<?php echo base_url("admin/user_profile/"); ?>'+prof_id,
                    type: 'POST',
                    data: { prof_id:prof_id },
                    success: function(response){
                        if(response == 1){
                            alert('Work recreated again succesfully Edit it to ensure it fits the requirements');
                        }else{
                            $(".profile_info").html(response).load(response).fadeIn();
                        }
                    }
                });
            }); 

            $(".pop_chat").click(function(){
                var prof_id = this.id;
                $("#modal_chat").modal('show');

                $(".modal_send_msg").click(function(){
                    var msg_body = $('#modal_msg_box').val();
                    if (msg_body == "") {
                        window.alert("Message cannot be empty");
                    }else{
                        $.ajax({
                            url: '<?php echo base_url("admin/user_msg/"); ?>'+prof_id,
                            type: 'POST',
                            data: { msg_content:msg_body, prof_id:prof_id},
                            success: function(response){
                                if(response == 11){
                                     $("#modal_msg_box").attr("value", ""); 
                                     $('textarea').empty()
                                    $('#modal_chat').modal('hide');
                                }else{
                                    window.alert('Message not sent, please try again.');
                                }
                            }
                        });   
                    }  
                         
                });
            });

            $(".user_mailing_list").click(function(){
                var user_id = this.id;
                var splitid = user_id.split("_");

                if (splitid[2] == "") {
                    window.alert("Unkwown error, please refresh the page.");
                }else{
                    $.ajax({
                        url: '<?php echo base_url("admin/user_fetch/"); ?>'+splitid[2],
                        type: 'POST',
                        data: { prof_id:"Hello"},
                        success: function(response){
                            $("#message_view_box").html(response).load(response).fadeIn();
                        }
                    });  
                    $.ajax({
                        url: '<?php echo base_url("admin/user_prof/"); ?>'+splitid[2],
                        type: 'POST',
                        data: { prof_id:"Hello"},
                        success: function(response){
                            $(".profile_info").html(response).load(response).fadeIn();
                        }
                    });   
                }  
                   
            });

            
        });
    </script>


</body>

</html>