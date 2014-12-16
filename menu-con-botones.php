<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
   <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>

   <script type="text/javascript">


   $(document).ready(function(){
       $(".dropdown-toggle").dropdown();

     });

   </script>

</head>
<body>

	<div class="container">
<!--
        <div class="btn-group">
        	<a href="#" class="btn dropdown-toggle" data-toggle="dropdown">

        	    Menu1
        	    <span class="caret"></span> flecha del boton

        	</a>

        	<ul class="dropdown-menu">
        		<a href=""><li>sub menu 1</li></a>
        		<a href=""><li>sub menu 2</li></a>
        		<a href=""><li>sub menu 3</li></a>
        	</ul>


        </div>


	</div>-->



        <div class="btn-group">
               <button class="btn">
               	Menu
               </button>


        	<button class="btn dropdown-toggle" data-toggle="dropdown">


        	    <span class="caret"></span> <!-- flecha del boton -->

        	</button>

        	<ul class="dropdown-menu">
        		<a href=""><li>sub menu 1</li></a>
        		<a href=""><li>sub menu 2</li></a>
        		<a href=""><li>sub menu 3</li></a>
        	</ul>


        </div>


	</div><!--end container-->

</body>
</html>