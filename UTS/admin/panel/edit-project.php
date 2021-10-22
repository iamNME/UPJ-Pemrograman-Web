<?php
  include '../../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">

	<style>
		.form-group .col-sm-10{
			padding-left: 0;
			padding-right: 0;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <?php
		include 'navigation.php';
	?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="portfolio.php">Data Portfolio</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header pr-4 pl-4">
              <h3 class="card-title">
                Edit
              </h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
							<?php
    					  $judulProject = $link = $gambar = $deskripsi = "";
					
    					  if($_SERVER['REQUEST_METHOD'] == "POST"){
										$id = $_POST['id'];
    					      $judulProject = $_POST['judulproject'];
    					      $link = $_POST['link'];
    					      $gambar = $_POST['gambar'];
    					      $deskripsi = $_POST['deskripsi'];
								
    					      $sql = "UPDATE portfolio SET judulproject='$judulProject', link='$link', gambar='$gambar', deskripsi='$deskripsi' WHERE id='$id'";
										// judul = I'm Web Developer
    					      $query = mysqli_query($conn, $sql);
								
    					      if($query){
    					?>
                      <div class="container pl-4 pr-3 pt-4">
											  <div class="alert alert-success alert-dismissible">
                			      <button type="button" class="close" data-dismiss="alert">&times;</button>
                			      <b>Data Berhasil</b> diubah ke dalam database
                			  </div>
                			</div>
    					<?php
    					      }else{
    					?>
                      <div class="container pl-4 pr-3 pt-4">
    					          <div class="alert alert-warning alert-dismissible">
    					              <button type="button" class="close" data-dismiss="alert">&times;</button>
    					              <b>Data Tidak Berhasil</b> diubah ke dalam database
    					          </div>
    					        </div>
    					<?php
    					        }
    					    }else{
    					        if(isset($_GET['id'])){
    					            $id = $_GET['id'];
											
    					            $sql = "SELECT * FROM portfolio WHERE id='$id'";
    					            $query = mysqli_query($conn, $sql);
											
    					            if(mysqli_num_rows($query)){
    					                while($row = mysqli_fetch_assoc($query)){
    					                    $judulProject = $row['judulproject'];
    					                    $link = $row['link'];
    					                    $gambar = $row['gambar'];
    					                    $deskripsi = $row['deskripsi'];
    					                }
    					            }
    					        }
    					    }
    					?>

              <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="card-body pr-4 pl-4">
									<input type="hidden" name="id" value="<?= $id ?>">
									<!-- <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="foto" value="" class="custom-file-input form-label" id="foto">
                      <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="judulproject" class="col-sm-2 col-form-label">Project Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="judulproject" class="form-control" id="judulproject" value="<?= $judulProject ?>" placeholder="Judul Project" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link Project</label>
                    <div class="col-sm-10">
                      <input type="text" name="link" class="form-control" id="link" value="<?= $link ?>" placeholder="Link Project" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar Project</label>
                    <div class="col-sm-10 custom-file">
                      <input type="file" name="gambar" value="<?= $gambar ?>" class="custom-file-input form-label" id="gambar">
                      <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="summernote" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
											<textarea id="summernote" name="deskripsi" class="form-control"><?= $deskripsi ?></textarea>
                    </div>
                  </div>
                	<button type="submit" class="btn btn-info ml-4 float-right">Submit</button>
                	<button type="reset" class="btn btn-danger float-right">Cancel</button>
                	<!-- /.card-footer -->
              	</form>
            </div>
						<!-- /.card-body -->
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="plugins/codemirror/codemirror.js"></script>
<script src="plugins/codemirror/mode/css/css.js"></script>
<script src="plugins/codemirror/mode/xml/xml.js"></script>
<script src="plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>

  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
