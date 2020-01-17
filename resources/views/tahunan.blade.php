<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IOT TANAMAN | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  
  <div class="wrapper">
    <nav class="navbar-gray navbar navbar-expand" style="margin-bottom: 30px">
      <button class="btn btn-warning"><a href="{{url('/')}}" class="btn">Kelembapan Harian</a></button>
      <button class="btn btn-danger"><a href="{{url('tahunan')}}" class="btn" style="color: white;">Kelembapan Tahunan</a></button>
    </nav>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <?php for ($i=0; $i < 15; $i++) { ?>
         
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                
                <form action="{{route('tahun')}}" method="POST">
                <sup style="font-size: 20px;">
                    {{ csrf_field() }}

                    <select name="tahun" style="margin-top: 30px" class="btn btn-warning">
                      <option value="<?= 2019+$i; ?>">
                        <?= 2019+$i; ?>
                      </option>
                    </select>
                    
                </sup>
                <button type="submit" class="btn btn-danger">
                  BUKA
                </button>    
                </form>

                <p>Kelembapan tanaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div style="width: 50%">

  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('/dist/js/demo.js')}}"></script>
</body>
</html>
