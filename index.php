<?php
		include "lib/functions.php";
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<script language="Javascript"> 
	window.onload = function(){
    document.forms[0].onsubmit = function(){var email = document.email_form.email.value;
var m = email.match(/^[a-zA-Z0-9][.-_,][^\!@]{2,16}\@[a-zA-Z]{3,7}\.[a-zA-Z]{2,5}$/i);
if(m)return true;
	else  {alert("Неверно введен email!"); 		
        return false;} 
    };
};
    </script>
	<?php	
	$submit=$_POST['submit'];
	if(isset($submit)) {
	$email=htmlspecialchars($_POST["email"]);
	$success = addEmail($email);
    if(!$success)
	$alert = "Ошибка при регистрации, возможно, такой e-mail уже существует!";
	else if($success) $alert = "Вы успешно подписались!";
    include "alert.php";
	}
	
?>
	<div class="wrapper">
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active-link"><a href="#">home</a></li>
						<li><a href="#about">about</a></li>
						<li><a href="#portfolio">portfolio</a></li>
						<li><a href="#contacts">contacts</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="header row">	
			<div class="logo col-xs-12 col-sm-6 col-md-5">
			<img src="img/orig.png" alt="alt" />	
			</div>
			<div class="title col-xs-12 col-sm-6 col-md-7">
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
			</div>
		</div>
	</header>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
    	<div class="about" name="about" id="about">
    	<div class="col-xs-12 col-md-6">
    		<div class="article">
    			<h4>О нас</h4>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam nulla qui dicta deserunt veritatis maiores. Ipsum iure est beatae amet placeat ad porro quas perspiciatis, dolorem perferendis dolorum, quibusdam ea.</p>
    		</div>
    	</div>
    	<div class="col-xs-12 col-md-6">
    		<form action="" method="post" name="email_form" id="email_form" >
    		<div class="input-group">    			
  <input type="text" class="form-control" id="email_address" name="email" placeholder="Your e-mail" aria-describedby="basic-addon2" />
  <span class="input-group-addon" id="basic-addon2">login@example.com</span>
<span class="input-group-btn">
        <button class="btn btn-default" name="submit" type="submit">Ok!</button>
      </span> 
           </div>
       </form>
    	</div>
    </div>
    <div class="portfolio row" name="portfolio" id="portfolio">
    	<div class="col-xs-12 col-md-12">
    		<h3>Портфолио</h3>
    	</div> 
    	<div class="portfolio_items row">
    		<div class="portfolio_item col-xs-12 col-md-4">
    			<img src="img/photo/1.jpg" alt="alt" >
    		</div>
    		<div class="portfolio_item col-xs-12 col-md-4">
    			<img src="img/photo/2.jpg" alt="alt" >
    		</div>
    		<div class="portfolio_item col-xs-12 col-md-4">
    			<img src="img/photo/3.jpg" alt="alt" >
    		</div>
    	</div>  	
    	</div>
    </div>
    </div>
  </div>
  <div class="panel-footer">
  	<div class="contacts row" name="contacts" id="contacts" >
  		<div class="links col-xs-12 col-md-6">
  			<h5>links</h5>
  			<b><a href="#">Vk</a></b>
  			<b><a href="#">Fb</a></b>
  		</div>
  		<div class="contuct col-xs-12 col-md-6">
  			<h5>Contacts</h5>
  			<b><p>+7 999 888 77 66</p></b>
  		</div>
  	</div>
  	<div class="copyright row">
  		 <I> <P>&copy; <SUB>2014 author</SUB> Kuznetsova Kristina, <SUB>Moscow</SUB> </P></I>
  	</div>
  </div>
</div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="text/javascript">
	$(document).ready(function(){
    $('#nav navbar-nav').click(function(event){
        if (event.target.tagName.toLowerCase() === 'a') {
            var target = $(event.target.hash);
            target = target.length ? target : $('[name=' + event.target.hash+ ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 54
                }, 2000);
                return false;
            }
        }  
	});
	
})
	</script>
</body>
</html>