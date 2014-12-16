<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>

	<div class="container">
         <div class="row">

         	<h2>Form por defecto</h2>

          <form action="">

          	      <label for="nom">Nombre</label>
          	      <input type="text" id="nom">

          	       <label for="ape">apellido</label>
          	      <input type="text" id="ape">

          	       <label for="correo">coreo</label>
          	      <input type="text" id="correo">


          </form>

          <hr> <!-- ***************************************************** -->
                <h2>Sin label</h2>

          <form action="" class="form-horizontal">
          	 <!-- <label for="login">Login</label> -->
          	<input type="text" id="login" placeholder="Login">

          	 <!-- <label for="pass">Password</label> -->
          	<input type="password" id="pass" placeholder="Password">

          	<!-- <textarea cols="30" rows="10"></textarea> -->
          </form>


           <hr> <!-- ***************************************************** -->

           <h2>Setiados</h2>

                  <form action="" class="form-horizontal">



                     <div class="control-group">
                           <label for="nom" class="control-label">Nombre</label>
                               <div class="controls">
                                    <input type="text" name="nom" id="nom">
                               </div>
                     </div>



                      <div class="control-group">

                           <label for="ape" class="control-label">Apellido</label>
                        <div class="controls">


	                           <input type="text" name="ape" id="ape">

	                      </div>

                        </div>







                  </form>


           <hr> <!-- ***************************************************** -->
                  <h2>buscar</h2>

           <form action="">

                <div class="input-append">
                       <input type="text" placeholder="Buscar">

                	     <button class="btn" type="button">
                	     	Ir

                	     </button>


                </div>



           </form>

           <hr> <!-- ***************************************************** -->

           <h2>Form tamaños</h2>

           <form action="">

                  <input type="text" class="input-small" placeholder="small">
                  <input type="text" class="input-mediun" placeholder="mediun">
                  <input type="text" class="input-large" placeholder="large">
                  <input type="text" class="input-xlarge" placeholder="xlarge">
                  <input type="text" class="input-xxlarge" placeholder="xxlarge">

           </form>

           <hr> <!-- ***************************************************** -->

           <h2>form relativo</h2>


          <form action="">
		           <div class="row">

				           	<div class="span3">
				           		<input type="text" class="span3">
				           	</div>
				           	<div class="span9">
				           		<input type="text" class="span9">
				           	</div>

		           </div>

           </form>

           <hr> <!-- ***************************************************** -->
          <h2>Botones</h2>
           <form action="">

               <button type="button" class="btn btn-primary">Enviar</button>
               <button type="button" class="btn">Cancelar</button>

           </form>

           <hr> <!-- ***************************************************** -->
          <h2>Ayudas</h2>
           <form action="">
           	<input type="text">
           	<span class="help-block">ayuda en bloke</span>

           	<input type="text">
           	<span class="help-inline">ayuda en linea</span>



           </form>




		  </div><!-- end container -->


	</div><!-- end container -->

</body>
</html>