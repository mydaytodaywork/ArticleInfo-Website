<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<!-- light-box -->
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>	
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
     <script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
<!---- End Light-box ------>
<body>

<?php 
	include("modifiable.php"); 
?>


<div class="header">
 <div class="header_top">
    <div class="wrap">
	  <div class="header-top-left">
			<div class="logo">
			     <a href="index.php"><h1>ARTICLE</h1>
			     	<h2>INFO</h2>
			     </a>
			</div>
		<div class="menu">
		     <ul class="menu bounce">
		       <li <?php if($me=='index.php') echo "class='active'"; ?> ><a href="index.php" class="active">Home</a></li>
		       <li <?php if($me=='aboutus.php') echo "class='active'"; ?> ><a href="aboutus.php">About</a></li>
		       <li <?php if($me=='writearticle.php') echo "class='active'"; ?> ><a href="writearticle.php">Send Articles</a></li>
		       <li <?php if($me=='contact.php') echo "class='active'"; ?> > <a href="contact.php">Contact</a></li>
		     </ul>
	   </div>
	 <div class="clear"></div>
   </div>  
	   <div class="header-top-right">
	   			<div class="social-icons">			
		                <ul>
		                	<li><a class="youtube" href="http://www.youtube.com" target="_blank"><span>Youtube</span></a></li>
		                    <li><a class="facebook" href="http://www.facebook.com/kamal.rockz" target="_blank"><span>Facebook</span> </a></li>
		                    <li><a class="twitter" href="http://www.twitter.com/kamalagrawal65" target="_blank"><span>Twitter</span> </a></li>
		                    <li><a class="skype" href="http://www.skype.com/kamalagrawal777" target="_blank"><span>Skype</span> </a></li>
		                    <li><a class="likedin" href="http://www.linkedin.com/kamalagrawal65" target="_blank"><span>Likedin</span> </a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>   	   
				   			<div class="search_box">
							    <form action="index.php" method="post">
									<input type="text" class="text-box" placeholder="Search for Articles" name="article_search"/>
									<input type="submit" value="" name="article_search_button" />
							    </form>
						   </div>
			  		 <div class="clear"></div>
		  		 </div>
		  		<div class="clear"></div>
	  		</div>
		</div>
</div>