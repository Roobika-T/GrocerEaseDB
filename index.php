
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header" style="background: #65C420 !important;">
	
		
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <a href="show_cart.php"><input type="button" value="View your cart" class="button" /></a>
                </fieldset>
            </form>
		</div>
		
		<div class="clearfix"> </div>
		
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products" >
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- search -->
<div>

		<center><h1>Search</h1></center>
		<div id="search_products_itname">
				<?php
		$db="grocery";
		$connect = mysqli_connect('localhost','root','',$db);
		$query = mysqli_query($connect,"SELECT * FROM products");
		
		
			echo "<center>";
			?><table cellpadding="5" cellspacing="5">
				<?php
			?><form action="search_products_itname.php" method="post">
				<input type="text"   name="sitem_name"/>
				<input type="submit" name="submit" value="Search For products Based on Item name"/>
			</form>
			<?php echo "</td>";
			echo "</tr>";

		echo "<tr>";
			echo "<td colspan='4'>";
			?>
			<?php echo "</td>";
			
			echo "</tr>";
		echo "</table>";
		echo "</center>";
		?>
			</div>

		<div id="search_products_range">
				<?php
		$db="grocery";
		$connect = mysqli_connect('localhost','root','',$db);
		$query = mysqli_query($connect,"SELECT * FROM products");
		
		
			echo "<center>";
			?><table cellpadding="5" cellspacing="5">
				<?php
			?><form action="search_products_range.php" method="post">
				<input type="number"   name="sitem_price_st"/>
				<input type="number"   name="sitem_price_end"/>
				<input type="submit" name="submit" value="Search For products Based on Item Price Range"/>
			</form>
			<?php echo "</td>";
			echo "</tr>";

		echo "<tr>";
			echo "<td colspan='4'>";
			?>
			<?php echo "</td>";
			
			echo "</tr>";
		echo "</table>";
		echo "</center>";
		?>
			</div>


			<div id="search_products_itsort">
				<?php
		$db="grocery";
		$connect = mysqli_connect('localhost','root','',$db);
		$query = mysqli_query($connect,"SELECT * FROM products");
		
		
			echo "<center>";
			?><table cellpadding="5" cellspacing="5">
				<?php
			?><form action="search_products_itsort.php" method="post">
				<input type="submit" name="submit" value="Sort products Based on Item Price"/>
			</form>
			<?php echo "</td>";
			echo "</tr>";

		echo "<tr>";
			echo "<td colspan='4'>";
			?>
			<?php echo "</td>";
			
			echo "</tr>";
		echo "</table>";
		echo "</center>";
		?>
			</div>
</div>
<!-- //search -->
<br><br>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<style>
				.navbar-toggle1 {
    background-color: #65C420; /* Change to your desired default touch color */
}
.navbar-toggle1:active,
.navbar-toggle1:focus {
    background-color: #65C420;
    /* Add any other styles you want to apply when the button is touched or focused */
}
			</style>
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">

				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.php">All products</a></li>
						<li><a href="show_cart.php">My Cart</a></li>
						<li><a href="cos_transaction.php">
						Transation History</a></li>
						<!--<li><a href="#search_products">Search for Products Based on Specifications</a></li> -->
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-3">
							<li>
								<div class="agile_inner_drop_nav_info">
									<ul>
										<li><a href="cat_products.php?category=Kitchen">Kitchen</a></li>
										<li><a href="cat_products.php?category=Legumes">Legumes</a></li>
										<li><a href="cat_products.php?category=DairyProducts">Dairy Products</a></li>
										<li><a href="cat_products.php?category=Fruits">Fruits</a></li>
										<li><a href="cat_products.php?category=Vegetables">Vegetables</a></li>
                                        <li><a href="cat_products.php?category=Household">Household</a></li>
                                        <li><a href="cat_products.php?category=RiceGrains">Rice & Grains</a></li>
                                        <li><a href="cat_products.php?category=FloursMeals">Flours & Meals</a></li>
                                        <li><a href="cat_products.php?category=Spices">Spices</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
						<!-- <li><a href="search_products_itsort.php" >Sort Products based on price</a></li> -->
						<!-- <li><a href="#search_products_itsort.ph">Sort Products based on price</a></li> -->

					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
							<h3>Fresh. <span>Convinient.</span> Delivered.</h3>

								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick " style="background: #65C420 !important;" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>shop!!<span>save!!</span>Savor!!</h3>
								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" style="background: #65C420 !important;" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>Fresh finds, <i>Fast</i> </h3>
								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" style="background: #65C420 !important;" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>

			</section>
			

			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					  
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<br>
<br>


<!--Important link from source https://bootsnipp.com/snippets/rlXdE-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->
	<section id="footer">
		<style>
			/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #65C420;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #65C420 !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
	</style>
		
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					
					<p class="h6">&copy All right Reserved.</p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->


</body>
</html>
