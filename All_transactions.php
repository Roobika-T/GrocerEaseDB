<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
   <div class="agileits_header">
      
      
      <div class="product_list_header">  
         <form action="#" method="post" class="last">
                
            </form>
      </div>
      <div class="w3l_header_right">
         <ul>
            <li class="dropdown profile_details_drop">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
               <div class="mega-dropdown-menu">
                  <div class="w3ls_vegetables">
                     <ul class="dropdown-menu drp-mnu">
                        <li><a href="login.html">Login</a></li> 
                        <li><a href="login.html">Sign Up</a></li>
                     </ul>
                  </div>                  
               </div>   
            </li>
         </ul>
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
   <div class="logo_products">
      <div class="container">
         <div class="w3ls_logo_products_left">
            <h1><a href="index.html"><span>Grocery</span> Store</a></h1>
         </div>
         
         
         <div class="clearfix"> </div>
      </div>
   </div>
<!-- //header -->
<!-- products-breadcrumb -->
   <div class="products-breadcrumb">
      <div class="container">
         <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="manager_logged.php">Home</a><span>|</span></li>
            <li>Transaction History</li>
         </ul>
      </div>
   </div>
   <?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM purchase");
   
   $Cart_total=0;
      echo "<center>";
      ?><table cellpadding="45" cellspacing="45">
         <?php
      echo "<tr>";
      echo "<th>"; echo "Customer ID"; echo "</th>";
      echo "<th>"; echo "Product ID"; echo "</th>";
      echo "<th>"; echo "No of items"; echo "</th>";
      echo "<th>"; echo "cost of items"; echo "</th>";
      echo "<th>"; echo "Date of purchase"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["pcid"]; echo "</td>";
      echo "<td>"; echo $row["ppid"]; echo "</td>";
      echo "<td>"; echo $row["no_of_items"]; echo "</td>";
      echo "<td>"; echo $row["cost_of_items"]; echo "</td>";
      echo "<td>"; echo $row["date_time"]; echo "</td>";
      echo "</tr>";
  }
  echo "<tr>";
  
  echo "</table>";
  echo "</center>";

?>
<!-- //products-breadcrumb -->
<!-- banner -->
!--Important link from source https://bootsnipp.com/snippets/rlXdE-->

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