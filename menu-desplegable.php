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

           <ul class="nav nav-tabs">

             <li class="dropdown active">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">

                Menus 1
                <b class="caret"></b>

              </a>

              <ul class="dropdown-menu">
                <li><a href="">Sub menu 1</a></li>
                <li><a href="">Sub menu 2</a></li>
                <li><a href="">Sub menu 3</a></li>
              </ul>

             </li>
             <li><a href="">Menus 2</a></li>
             <li><a href="">Menus 3</a></li>

           </ul>
<hr>

<ul class="nav nav-pills">

             <li class="dropdown active">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">

                Menus 1
                <b class="caret"></b>

              </a>

              <ul class="dropdown-menu">
                <li><a href="">Sub menu 1</a></li>
                <li><a href="">Sub menu 2</a></li>
                <li><a href="">Sub menu 3</a></li>
              </ul>

             </li>
             <li><a href="">Menus 2</a></li>
             <li><a href="">Menus 3</a></li>

           </ul>



	</div><!--end container-->

</body>
</html>