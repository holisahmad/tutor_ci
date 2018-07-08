            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Personel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	Masukkan Data Personel
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" class="form-area" action="<?php echo base_url('site/add');?>" method="post">
                                    <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Enter text" name="kode" id="kode" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Personel</label>
                                            <input class="form-control" placeholder="Enter text" name="nama" id="nama" value="">
                                        </div>

                                        <button type="submit" name="submit" value="submit" class="btn btn-danger">Kirim</button>
                                        <button type="reset" class="btn btn-succes">Reset</button>
                                        <!-- <a href="<?php echo base_url('site')?>" class="btn btn-danger" title="">BACK</a>  -->
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
                    <!-- <a href="<?php echo base_url('site/add')?>" class="btn btn-danger" title="">ADD</a>  -->
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
                                            <th class="col-sm-2">Kode</th>
                                            <th>Nama Personel</th>
                                            <th class="col-sm-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr class="odd gradeX">
                                            <!-- <td align="center"></td> -->
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-edit"> </i></button>                                     
                                            <button type="button" id="" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i></button>
                                            
                                            </td>
                                        </tr>
                                        
                                        

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
	
		<!-- Page-Level Demo Scripts - Tables - Use for reference -->
