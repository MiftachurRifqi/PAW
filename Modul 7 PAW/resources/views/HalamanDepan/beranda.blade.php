
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
            <h1 class="m-0">Tentang Aku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Me</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-body" >
            <center>
            <img src="{{asset('assets/dist/img/saya.jpg')}}" alt="pap-aku" width="300" style="border-radius: 6%;">
            <br><br>
            <h3>Moch. Miftachur Rifqi Al Husain</h3>
            <div>
              <p style="height: fit-content; background-color:#e3f2fd; padding:25px;text-align:justify;border-radius:15px;">
              <b>Background</b> <br>
              Saya biasa dipanggil Rifqi. Saya merupakan anak ke 2 dari 3 bersaudara, sedari kecil saya suka dengan segala hal yang berbau teknologi,<br> 
              mengenai background pendidikan saya, sejak saya kecil hingga remaja saya menempuh pendidikan di Madrasah Al Muhtadi. Semuanya berjalan lancar monoton namun sangat berarti hingga tak terasa akhirnya lulus sudah dari jenjang sekolah
              dan kemudian setelah beberapa pertimbangan akhirnya saya memutuskan untuk lanjut ke jenjang yang lebih tinggi hingga saya memilih Universitas Trunojoyo Madura dengan program studi Teknik informatika pada jalur masuk SBMPTN, 
              sebenarnya saya tidak memiliki basic ngoding sama sekali tapi saya percaya bahwa <em>"Man Jadda Wa Jada" </em> .
              Dan hingga kini alhamdulillah semuanya berjalan lancar, tentu saja dikarenakan jutaan doa yang mengangkasa atas nama saya oleh kedua orang tua saya.
              
              <br><br>
              <b>Suka duka Praktikum PAW</b> <br>
              Praktikum Pengembangan Aplikasi Web. <br>
              pada semester 3 kali ini berjumpa lagi dengan praktikum, yaitu praktikum PAW. 
              Praktikum kali ini cukup banyak menambah pengetahuan sekaligus keilmuan mengenai pemrograman Web. <br>
              Hanya saja deadline Tugas yang diberikan cukup dapat memacu adrenaline dikarenakan terbatasnya waktu serta pengetahuan yang ada, 
              saya kira kedepannya akan lebih baik lagi jika deadline dari pengumpulan tugas itu sedikit lebih lama daripada praktikum kali ini.
              </p>
            </div>
            </center>
          </div>      
      </div>
    </div>
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
