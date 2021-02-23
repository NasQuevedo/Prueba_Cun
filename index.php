<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<meta charset="utf-8">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Prueba Cun</title>
	</head>
	<body>
		<div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Escalera</a></li>
        <li><a href="#tabs-2">Calcular</a></li>
        <li><a href="#tabs-3">Cambiar String</a></li>
        <li><a href="#tabs-4">Completar Rango</a></li>
        <li><a href="#tabs-5">Limpiar Parentesis</a></li>
        <li><a href="#tabs-6">Empleados</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Escalera</h5>
            <div class="divider"></div>
            <input type="number" placehoder="rango(ejemplo: 5)" id="length" name="length">
            <button id="show-stairs" onclick="javascript: showStairs();">Mostrar Escaleras</button>

            <div class="divider"></div>

            <div id="stair-result"></div>
          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda2">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Calcular</h5>
            <div class="divider"></div>
            <select id="type" name="type" onchange="javascript:showForm(this.value);">
            	<option value="">--Seleccionar--</option>
            	<option value="circulo">Circulo</option>
            	<option value="cuadrado">Cuadrado</option>
            	<option value="triangulo">Triangulo</option>
            </select>

            <button id="calculate" onclick="javascript: showCalculate();">Calcular</button>

            <div class="divider"></div>

            <input type="number" placehoder="Radio" id="radio" name="radio" style="display:none;">
            <input type="number" placehoder="Lado" id="lado" name="lado" style="display:none;">
            <input type="number" placehoder="Base" id="base" name="base" style="display:none;">
            <input type="number" placehoder="Altura" id="altura" name="altura" style="display:none;">

            <div class="divider"></div>

            <div id="calculate-result"></div>
          </div>
        </div>
      </div>

      <div id="tabs-3" >
        <div class="colContenido" id="divResultadosBusqueda2">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Cambiar Cadena</h5>
            <div class="divider"></div>
            <input type="text" placehoder="Cadena" id="string" name="string">
            <button id="calculate" onclick="javascript: showString();">Cambiar</button>

            <div class="divider"></div>

            <div id="string-result"></div>
          </div>
        </div>
      </div>

       <div id="tabs-4" >
        <div class="colContenido" id="divResultadosBusqueda2">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Completar Rango</h5>
            <div class="divider"></div>
           <input type="text" placehoder="Rango(ej: 1,2,3,5)" id="rango" name="rango">

            <button id="range" onclick="javascript: showRange();">Completar</button>

            <div class="divider"></div>

            <div id="range-result"></div>
          </div>
        </div>
      </div>

      <div id="tabs-5" >
        <div class="colContenido" id="divResultadosBusqueda2">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Limpiar Parentesis</h5>
            <div class="divider"></div>
           <input type="text" placehoder="Cadena(ej: '())')" id="par" name="par">
            <button id="show-par" onclick="javascript: showPar();">Validar</button>

            <div class="divider"></div>

            <div id="par-result"></div>
          </div>
        </div>
      </div>
      <div id="tabs-6" >
        <div class="colContenido" id="divResultadosBusqueda2">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Empleados Develpers SAS</h5>
            <div class="divider"></div>
           <input type="email" placehoder="Correo:example@example.com" id="email" name="email">
            <button id="search" onclick="javascript: searchByEmail();">Buscar</button>

            <div class="divider"></div>

            <div id="workers-result"></div>
          </div>
        </div>
      </div>
    </div>
	</body>
</html>