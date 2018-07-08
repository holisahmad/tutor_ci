<?php $this->load->view('header'); ?>

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
    <?php $this->load->view('footer'); ?>
   