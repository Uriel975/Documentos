
@extends("Principal")

@section('select')


<body>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"  rel="stylesheet">
<div class="card-header">Para probar la credencial alumno</div>
<ul class="navbar-nav ml-auto">
<div class="card-body">
    <blockquote class="blockquote">
        <p></p>
        <title>Segunda Prueba</title>


</div>
<div class="container">
    <div class="row">
      <div class="col text-center">
<a href="{{url('/Credencial')}}" class="btn btn-success ">Descargar</a>

  <input type="button" class= "btn btn-primary"onclick="history.back()" name="volver atrás" value="volver atrás">
</div>

</body>

@stop
