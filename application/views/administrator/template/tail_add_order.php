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


    <script src="<?php echo base_url('assets/plugins/summernote/summernote-lite.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/vendor/dropzone.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ui/component.fileupload.js'); ?>"></script>

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
        $(document).ready(function() {
            function sendRequest(){
                $.ajax({ 
                    url: '<?php echo base_url("admin/fetch_attachment_ui"); ?>',
                    type: 'POST',
                    success: function(response){
                        $(".uploaded_files").html(response).fadeIn();
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
                    url: '<?php echo base_url("admin/attachment_delete/"); ?>'+fileid,
                    type: 'POST',
                    success: function(response){
                        console.log(response);
                    }
                });  
			}); 

        });
    </script>

</body>

</html>