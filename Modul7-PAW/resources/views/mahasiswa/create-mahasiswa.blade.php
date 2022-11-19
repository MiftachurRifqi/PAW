
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            
            <div class="card-body">
                <form action="{{route ('simpan-mahasiswa')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        {{-- <select class="form-control select2">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select> --}}
                        <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Masukkan Prodi">
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" ></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email">
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('template.script')
</body>
</html>
