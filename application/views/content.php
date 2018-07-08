        <div class="container-fluid">
                <div class="row">
                </div>
                <!-- /.row -->
                
						<?php 

                       // include('area.php');
                        $this->load->view('area');
                        ?>
                        
                       <!--  <div class="isi"></div> -->
                        
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
            <!-- /.container-fluid -->
