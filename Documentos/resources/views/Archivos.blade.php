@extends("Principal")

@section('select')
<body>
    <div style="padding:100px; margin-left: 1em;">
        <h1>Documentacion</h1>
        <p>Selecciona un Documento</p>
    <select name="plantilla" id="plantilla">
        <option selected>Seleccione uno</option>

                <option value="{{url('/laboral')}}">Constancia laboral</option>
                <option value="{{url('/Credencial')}}">Credencial Estudiantes</option>
                <option value="{{url('/Maestro')}}">Credencial Maestro</option>
                <option value="{{url('/Inscripcion')}}">Documento de inscripcion por alumno</option>
                <option value="{{url('/Estudio')}}">Generación de constancia de estudio</option>
    </select>

    <hr />

        <button id="descargar" onclick="ShowSelected()"  data-toggle="modal" type="button" data-toggle="modal"href="#myModal" class="btn btn-outline-success"><i class="fa fa-floppy-o"></i> Descargar</button>


    </div>

</body>

</html>
<script type="text/javascript">
    var combo = document.getElementById("plantilla");
    var button = document.getElementById("descargar");
    button.disabled = true;
    combo.addEventListener('change', function(){
        var selected = combo.selectedIndex;
        if(selected!=0){
            button.disabled = false;
        }
        else{
            button.disabled = true;
        }
    })

    function ShowSelected()
    {
        var selected = combo.selectedIndex;
        if(selected!=0){
            var cod = combo.value;
            window.location.href = cod;
        }
    }
</script>

@stop







