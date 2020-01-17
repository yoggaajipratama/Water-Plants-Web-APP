<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.css')}}">
    <title>Document</title>
</head>
<body>
<div class="text-center">
    <h1 style="text-decoration: underline">REMOTE</h1>
</div>
<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">AKSI</th>
                            <th>WAKTU</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 30; $i+=10)
                        <tr>
                            <td>Nyala/Mati</td>
                            <td>
                                <form action="" method="get">
                                    <a href="http://192.168.43.74/on{{5+$i}}m" class="btn btn-success" style="color:white">
                                        {{5+$i.' Menit'}}</a>
                                </form>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>