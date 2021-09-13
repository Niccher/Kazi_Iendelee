

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

    <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/vendor/dropzone.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ui/component.fileupload.js'); ?>"></script>

    <script src="<?php echo base_url('assets/plugins/summernote/summernote-lite.js'); ?>"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Please describe how the order should be',
            tabsize: 2,
            height: 120,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

    <script type="text/javascript">
        <?php 
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
        ?>
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#convo_send').click(function(){

                var msg = $('#convo_msg').val();
                console.log(msg);

                $.ajax({
                    url: "<?php echo base_url('buyer/'.$user_url.'/orders/convo/'.urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']))); ?>",
                    type: 'POST',
                    data: { convo_body:msg },
                    success: function(response){
                        if(response == 1){
                            $.ajax({  
                                url: "<?php echo base_url('buyer/'.$user_url.'/orders/get_convo/'.urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']))); ?>",
                                type: 'POST',
                                success:function(data){  
                                    $('.comment_section').html(data); 
                                }  
                            }); 
                            $('textarea').val('')
                        }else{
                            alert('Invalid ID.');
                        }
                    }
                });
                
            });
            
        });
    </script>

</body>

</html>