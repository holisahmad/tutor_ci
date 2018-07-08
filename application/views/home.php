//tempat header
<?php $this->load->view('header'); ?>
    //tempat navigasi
    <div id="wrapper">
        <?php $this->load->view('nav'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                //lokasi isi
                <?php $this->load->view($content); ?>

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    //tempat footer
    <?php $this->load->view('footer'); ?>
   