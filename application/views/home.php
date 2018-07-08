<!-- tempat header -->
<?php $this->load->view('header'); ?>
    <!-- //tempat navigasi -->
    <div id="wrapper">
        <?php $this->load->view('nav'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- //lokasi isi -->
                <?php $this->load->view($content); ?>


               <script>
                $("a").click(function(){
                // If this isn't already active
                if (!$(this).hasClass("active")) {
                    // Remove the class from anything that is active
                    $("a.active").removeClass("active");
                    // And make this active
                    $(this).addClass("active");
                }
                });
                </script>
                
                <script>
                function update_url(url) {
                    history.pushState(null, null, url);
                }
                </script>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
        <!-- //tempat footer -->
    <?php $this->load->view('footer'); ?>
   