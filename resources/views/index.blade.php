<!DOCTYPE html>
<html>
<head>
	<title>My restaurant</title>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/menu.css"/>

</head>
<body>
	<section class="contenedor-logo"> <!-- portada -->
    	<header> <!-- header -->
    		<center><figure class="logo"> <!-- logo -->
    			<img src="../public/img/logo.png" width="130px" height="110px" alt="Invie logotipo"/>
    		</figure></center>
    	</header>
    </section>
    <section class="contenedor-menu1"> <!-- contenedor menu1 -->
    <!--	<article class="menu1"> <!-- menu1 -->
    <!--		<div class="contenido-menu">    		
   				<center><img class="fondo-menu" src="../public/img/fondo.jpg" alt="Invie logotipo"/></center>
   				<div class="texto-menu1">
   					<div class="titulo-menu">Menú de desayunos</div>
   					Menú para el día de hoy xx/xx/xxxx
   					<ul  class="titulo-menu-detalle"> 
   						 <li>Café   ....................   $ 1</li><br/>
   						 <li>Pan   ....................   $ 2</li><br/>
   						 <li>Huevos   ....................   $ 3</li><br/>
   					</ul>
   					<hr/>
					<div class="titulo-menu-detalle-total">Total pedido ........ $ 6</div>
   					<button class="button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pedir desayuno</button>
   				</div>
    		</div>

      <!-- Modal -->
    <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Detalle del pedido</h4>
              Esta es la lista de su pedido de desayuno, por favor confirme el pedido.
            </div>
            <div class="modal-body">
            <h4 align="center">Datos personales</h4><br/>
              <div class="formulario-pedido">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="exampleInputName1">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre aqui" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">Apellido:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Su apellido aqui">
                  </div>
                    <div class="form-group"><br/>
                    <label for="exampleInputName1">Telefono:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="310 111 2223" required>
                  </div>
                  <div class="form-group"><br/>
                    <label for="exampleInputName2">Dirección:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Calle 123 # 1-3 / barrio" required>
                  </div>
                </form>
              </div>
              <hr/>
              <h4 align="center">Menú desayuno</h4>
               <ul>
                 <input type="checkbox"> Café   ....................   $ 1<br/>
                 <input type="checkbox"> Pan   ....................   $ 2<br/>
                 <input type="checkbox"> Huevos   ....................   $ 3
              </ul>
              <hr/>
            <div class="">Total pedido ........ $ 6</div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Confirmar pedido</button>
            </div>
          </div>
        </div>
      </div>

    	</article>-->
    </section>
    <section class="contenedor-menu2"> <!-- contenedor menu2 -->
    	<article class="menu2"> <!-- menu2 -->
    		<div class="contenido-menu">
				<center><img class="fondo-menu" src="../public/img/fondo.jpg" alt="Invie logotipo"/></center>
				 <div class="texto-menu2">
				 	<div class="titulo-menu">Menú de almuerzos</div><br/>
           @foreach($menus as $menu)

                   Menú para el día de hoy: {{ $menu->fecha  }}
         
				 		   <ul  class="titulo-menu-detalle"> 
     						 <li> Sopa:   ............   {{ $menu->sopa }}</li><br/>
     						 <li> Arroz:  ............ {{ $menu->arroz }}</li><br/>
     						 <li> Carne / Pollo:  ............ {{ $menu->carnes }}</li><br/>
     						 <li> Ensalada:   ............ {{ $menu->ensalada }}</li><br/>
     						 <li> Principio:   ............ {{ $menu->principio }}</li><br/>
     						 <li> Jugo:   ............ {{ $menu->jugo  }}</li><br/>
   						</ul>     

   						<hr/>
             <button class="button"  type="button"  data-toggle="modal" data-target="#myModal2">Pedir almuerzo</button>
             <div class="titulo-menu-detalle-total">Valor almuerzo ........ $ {{ $menu->valor_almuerzo }}</div><br>
             <div class="titulo-menu-detalle-total">Valor bandeja ........ $ {{ $menu->valor_bandeja }}</div>
   					    @endforeach
				 </div>
    		</div> 

              <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel2">Detalle del pedido</h4>
              Esta es la lista de su pedido de almuerzo, por favor confirme el pedido.
            </div>
            <div class="modal-body">
            <h4 align="center">Datos personales.</h4><br>
              <div class="formulario-pedido">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="exampleInputName1">Nombre:</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" placeholder="Su nombre aqui" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">Apellido:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Su apellido aqui">
                  </div>
                    <div class="form-group"><br/>
                    <label for="exampleInputName1">Telefono:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="310 111 2223" required>
                  </div>
                  <div class="form-group"><br/>
                    <label for="exampleInputName2">Dirección:</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Calle 123 # 1-3 / barrio" required>
                  </div>
                </form>
              </div>
              <hr/>
              <h4 align="center">Menú almuerzo</h4>
               <ul>
                  <input type="checkbox"> Sopa  ....................   $ 1<br/>
                  <input type="checkbox"> Arroz blanco   ....................   $ 2<br/>
                  <input type="checkbox"> Filete de pollo   ....................   $ 3<br/>
                  <input type="checkbox"> Ensalada   ....................   $ 1<br/>
                  <input type="checkbox"> Frijoles   ....................   $ 2<br/>
                  <input type="checkbox"> Maduro   ....................   $ 2
               </ul>
              </ul>
              <hr/>
          <div class="">Total pedido ........ $ 6</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success">Confirmar pedido</button>
            </div>
          </div>
        </div>
      </div>

    	</article>
    </section>
    <footer class="footer"> <!-- pie de pagina -->
    	<center><p>Diseñado y desarrollado por: <a href="www.afburbano.com" target="_blank">Andrés Felipe Bubano C.</a> - José Mario Londoño </p></center>
    </footer>

   
    <script type="text/javascript">
      $('#myModal').on('shown.bs.modal', function () {
        $('#nombre').focus()
      });

      $('#myModal2').on('shown.bs.modal', function () {
        $('#myInput2').focus()
      });
    </script>
    <!-- JQuery cdn-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>