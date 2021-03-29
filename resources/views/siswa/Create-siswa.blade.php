
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tambah Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        
    </div>

    <!-- CREATE -->
    <div class="card-body">
       <form action="simpansiswa" method="POST">
       {{ csrf_field() }}
          <div class="form-group">
            <input type="text" id="id" name="id" class="form-control" placeholder="NIS SISWA">
          </div>

          <div class="form-group">
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa">
          </div>

          <div class="form-group">
            <select class="form-control"style="width: 100%;" name="jns_kelamin" id="jns_kelamin">
              <option value=""disable selected > Jenis Kelamin </option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <input type="text" id="temp_lahir" name="temp_lahir" class="form-control" placeholder="Tempat Lahir">
          </div>

          <div class="form-group">
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
          </div>

          <div class="form-group">
            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat">
          </div>

          <div class="form-group">
            <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
          </div>          

          <div class="form-group">
            <select class="form-control"style="width: 100%;" name="kelas" id="kelas">
              <option value=""disable selected > Kelas </option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </select>
          </div>

          <div class="form-group">
            <select class="form-control"style="width: 100%;" name="jurusan" id="jurusan">
              <option value=""disable selected > Jurusan </option>
              <option value=RPL>RPL</option>
              <option value="MMD">MMD</option>
              <option value="TKJ">TKJ</option>
              <option value="TBG">TBG</option>
              <option value="HTL">HTL</option>
              <option value="BDP">BDP</option>
              <option value="OTKP">OTKP</option>
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
          </div>

       </form>
    </div>
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>
</html>
