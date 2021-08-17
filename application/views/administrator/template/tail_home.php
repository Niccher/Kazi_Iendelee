tail_home.php


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

    <script src="<?php echo base_url('assets/js/vendor/fullcalendar.min.js');?>"></script>

    <script type="text/javascript">
        ! function(l) {
            "use strict";

            function e() {
                this.$body = l("body"), this.$calendar = l("#calendar")
            }
            e.prototype.init = function() {
                var e = new Date(l.now());
                new FullCalendar.Draggable(document.getElementById("external-events"), {
                    itemSelector: ".external-event",
                    eventData: function(e) {
                        return {
                            title: e.innerText,
                            className: l(e).data("class")
                        }
                    }
                });
                var t = [<?php echo $cal;?>],
                    a = this;
                a.$calendarObj = new FullCalendar.Calendar(a.$calendar[0], {
                    slotDuration: "00:15:00",
                    slotMinTime: "08:00:00",
                    slotMaxTime: "19:00:00",
                    themeSystem: "bootstrap",
                    bootstrapFontAwesome: !1,
                    buttonText: {
                        today: "Today",
                        month: "Month",
                        week: "Week",
                        day: "Day",
                        list: "List",
                        prev: "Prev",
                        next: "Next"
                    },
                    initialView: "dayGridMonth",
                    handleWindowResize: !0,
                    height: l(window).height() - 200,
                    headerToolbar: {
                        left: "prev,next today",
                        center: "title",
                        right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
                    },
                    initialEvents: t,
                    editable: !0,
                    droppable: !0,
                    selectable: !0,
                }), a.$calendarObj.render()
            }, l.CalendarApp = new e, l.CalendarApp.Constructor = e
        }(window.jQuery),
        function() {
            //"use strict";
            window.jQuery.CalendarApp.init()
        }();
    </script>

    <!-- end demo js-->

</body>

</html>