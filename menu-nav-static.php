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


<div class="navbar navbar-static-top">

          	<div class="navbar-inner">
          		<div class="container">

          			<a href="#" class="brand">
          				AprendiendoAndo
          			</a>

          			<ul class="nav">
          				<li class="active"><a href="#">Menu 1</a></li>
          				<li class="divider-vertical"></li>
          				<li><a href="#">Menu 2</a></li>
          				<li class="divider-vertical"></li>
          				<li><a href="#">Menu 3</a></li>
          				<li class="divider-vertical"></li>
          				<li><a href="#">Menu 4</a></li>
          				<li class="divider-vertical"></li>
          				<li><a href="#">Menu 5</a></li>
          				<li class="divider-vertical"></li>

                         <li class="dropdown">

                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             	Menu6
                             	<b class="caret"></b>
                             </a>



                         <ul class="dropdown-menu">

                         	<li><a href="#">sub menu1</a></li>
                         	<li><a href="#">sub menu2</a></li>
                         	<li><a href="#">sub menu3</a></li>
                         	<li><a href="#">sub menu4</a></li>
                         	<li><a href="#">sub menu5</a></li>
                         </ul>
                         </li>




          			</ul>

          		</div>
          	</div>
          </div>






</body>
</html>