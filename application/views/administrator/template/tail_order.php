
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
            	$('.delete').click(function(){
			        var el = this;
			        var deleteid = this.id;
			        var name = $(this).attr("name");

			        var txt = "Proceed with deleting order ("+name+"). This action can't be undone";

		           	document.getElementById('pers_name').textContent=txt;

		           	$("#delete_info").modal('show')

		           	$('.pop_order').click(function(){
		           		$("#delete_info").modal('hide')
		           		$.ajax({
				            url: '<?php echo base_url('order/delete/') ?>'+deleteid,
				            type: 'post',
				            success: function(response){
				            	if (response == '11') {
				            		$(el).closest('tr').css('background','tomato');
			                    	$(el).closest('tr').fadeOut(800,function(){
				                        $(this).remove();
				                    });
				            	}else{
				            		window.alert('Unknown error occured, please try again.');
				            	}
				                
				            }

				        });
		           	});  
			        
			    });

            });
        </script>

    </body>

</html>