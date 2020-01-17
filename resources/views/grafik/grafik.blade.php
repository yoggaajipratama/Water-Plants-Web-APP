<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IOT TANAMAN | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="6">
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-size: 9pt">
  <div class="wrapper">
    <nav class="navbar-gray navbar navbar-expand" style="margin-bottom: 30px">
      <button class="btn btn-danger"><a href="{{url('/')}}" class="btn">Kelembapan Harian</a></button>
      <button class="btn btn-warning"><a href="{{url('tahunan')}}" class="btn">Kelembapan Tahunan</a></button>
      <button class="btn btn-success"><a href="{{url('/grafik')}}" class="btn">Grafik Harian</a></button>
    </nav>
    <div style="width: 10%; margin-left:3%;">
      {!! $HumidityChart->container() !!}
    </div>
  </div>

<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
{!! $HumidityChart->script() !!}
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
</body>
</html>
