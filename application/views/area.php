<?php
include "inc/inc.koneksi.php";
?>                    
                            

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Area</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	Masukkan Data Area
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" class="form-area">
 
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Enter text" name="kode" id="kode" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Area</label>
                                            <input class="form-control" placeholder="Enter text" name="nama" id="nama" value="">
                                        </div>

                                        <button type="button" class="tombol-simpan btn btn-danger">Kirim</button>
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
                            Master Data Area
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1">No</th>
                                            <th class="col-sm-2">Kode</th>
                                            <th>Area</th>
                                            <th class="col-sm-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr class="odd gradeX">
                                            <td align="center"></td>
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
