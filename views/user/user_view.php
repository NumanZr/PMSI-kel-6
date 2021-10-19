<?php include '../header_view.php'; ?>
<?php include '../sidebar_view.php'; ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  Daftar Data User
    </h1>
    <ol class="breadcrumb">
			<li><a href="../dashboard_view.php"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-file-text"></i>&nbsp; Daftar Data User</li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="user/tambah"><button class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah User</button></a>

                </div>
				<!-- /.box-header -->
				<div class="box-body">
				<div class="table-responsive">
                    <br/>
                    <table id="example1" class="table table-bordered table-striped table" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>User</th>
                                <th>Jenkel</th>
                                <th>Telepon</th>
                                <th>Level</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AG001</td>
                                <td>
                                    <center>
                                        <img src="#" alt="#" 
                                        class="img-responsive" style="height:auto;width:100px;"/>
                                            <i class="fa fa-user fa-3x" style="color:#333;"></i>
                                    </center>
                                </td>
                                <td>Salsabilla Shafa Ziema</td>
                                <td>salsa</td>
                                <td>Perempuan</td>
                                <td>0898-xxxx-xxx</td>
                                <td>Anggota</td>
                                <td>Disana</td>
                                <td style="width:20%;">
                                    <a href="#"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                    <a href="#" onclick="return confirm('Anda yakin user akan dihapus ?');">
									<button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
									<a href="<?= base_url('user/detail/'.$isi['id_login']);?>" target="_blank"><button class="btn btn-primary">
										<i class="fa fa-print"></i> Cetak Kartu</button></a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                        </tbody>
                    </table>
			    </div>
			    </div>
	        </div>
    	</div>
    </div>
</section>
</div>
<?php include '../footer_view.php'; ?>