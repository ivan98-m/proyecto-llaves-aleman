{{-- vista dashborad --}}
{{-- @extends('adminlte::page') --}}
@extends('master')

@section('title', 'Aleman')

@section('content_header')
    <div align="center"> <img src="/img/logo.png" width= "320" height="170"> </div>
@stop

@section('content')
     
    <p class="text-primary" align="center">
    <FONT SIZE=7  face="algerian">
	    MISION 
    </FONT>    
	</p>
	<p align="center">
        <FONT SIZE=3 face="castellar">
            En  LLAVES ALEMÁN  proporcionamos a nuestros clientes el mejor servicio de cerrajería de la <br>
            ciudad a precios accesibles e inmejorables, prestando la mejor atención con excelente actitud, <br>
            satisfaciendon las expectativas de nuestros clientes; contamos con personal altamente calificado,<br>
            responsable,eficiente y eficaz. 
    </p>

        <p class="text-primary" align="center">
            <FONT SIZE=7 face="algerian">
                VISION
            </FONT>
        </p>
        <p align="center">
            En 2030 lograremos posicionarnos en el mercado local como una de las empresas líderes en servicios <br>
            de cerrajería. Cubriendo las necesidades de nuestros clientes, con total seguridad y responsabilidad.
        </p>  
        </font>
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop