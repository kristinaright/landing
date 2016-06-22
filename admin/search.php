<?php
  include_once("./Pagination/Manager.php");
  include_once("./Pagination/Helper.php");
	require_once "../lib/functions.php";

  $users=getAllUsers();
  $counter=0;
  for($i=0; $i<count($users); $i++){
    $counter = $counter+1; 
    }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	  <?php
          require_once "top.php";
        ?>
	<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
   <div class="col-xs-12 col-sm-4 col-md-3 ">
     <ul class="list-group">
  <li class="list-group-item">
        <span class="badge"><?php echo $counter;?></span>
        Количество e-mail
      </li>
</ul>
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Поиск</h3>
  </div>
  <div class="search panel-body">
    <table class="table">
      <?php
    require_once "search_result.php";
    ?>
  </table>  
  </div>
</div>
   </div>
      <div class="col-xs-12 col-sm-8 col-md-7 ">
        <div class="cont panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">users</h3>
  </div>
  <div class="contain panel-body">
    <table class="table">
    <?php
    require_once "users_mail_1.php";
    ?>  
  </table>  
  </div>
</div>
      </div> 	
    </div>
    </div>
  </div>
  <div class="panel-footer">
  	<div class="copyright">
  		 <I> <P>&copy; <SUB>2014 author</SUB> Kuznetsova Kristina, <SUB>Moscow</SUB> </P></I>
  	</div>
  </div>
</div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>