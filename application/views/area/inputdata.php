            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Personel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <!-- /. menampilkan alert ketika data sudah dimasukkan ke database -->
                <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('info'); ?></div>
                <?php } ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	Masukkan Data Personel
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" class="form-area" action="<?php echo base_url('site/add');?>" method="post">

                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Enter text" name="kode" id="kode" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Personel</label>
                                            <input class="form-control" placeholder="Enter text" name="nama" id="nama" value="" required>
                                        </div>

                                        <button type="submit" name="submit" value="submit" class="btn btn-danger">Kirim</button>
                                        <button type="reset" class="btn btn-succes">Reset</button>
                                        
                                    </form>
                                    
                                </div>
				            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                            Master Data Personel

                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!-- <th class="col-sm-1">No</th> -->
                                            <th class="col-sm-1">No</th>
                                            <th class="col-sm-2">Kode</th>
                                            <th>Nama Personel</th>
                                            <th class="col-sm-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php 
                                    $no = 1;
                                    foreach ($data as $v): 
                                    ?>

                                        <tr class="odd gradeX">
                                            <!-- <td align="center"></td> -->
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->kode; ?></td>
                                            <td><?php echo $v->nama; ?></td>
                                            <td>
                                            <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-edit"> </i></button>                                     
                                            <button type="button" id="" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i></button>
                                            </td>
                                        </tr>
                                        
                                  <?php 
                                  $no++;
                                  endforeach;
                                  ?>

										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
                <!-- <?php print_r($data); ?> -->
		<!-- Page-Level Demo Scripts - Tables - Use for reference -->
