<?php 
  include 'config.php';
   if (isset($_POST['submit'])) {
    $sear_area = $_POST['search1'];
    if ($sear_area=='coxs bazar') {
       header('location:products.php');
    }
    else if ($sear_area=='bandarban') {
       header('location:products (2).php');
    }


      /*var_dump("dssdsds");
      
      $query = mysqli_query($link,"SELECT * FROM where pName='".$sear_area."'");*/
  
  /*if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();*/
    /*var_dump($query);*/
//}
    /*$arr=mysqli_fetch_array($query);*/
    
 /* while() {
      echo $arr[0];
    # code...
  }*/

/*mysqli_close($link);*/
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <script type="text/javascript">
      function redirect()
{
   if(document.getElementById("kids").checked == true)
        window.location.href = 'http://www.google.com';
   else if(document.getElementById("female").checked == true)
        window.location.href = 'http://www.yahoo.com';        
}
  </script>
<title>Staple Food a Restaurants Category Bootstrap Responsive website Template | Products :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
<script>
var reloading;
function checkReloading() {
    if (window.location.hash=="products.html") {
        reloading=setTimeout("window.location.reload();");
        document.getElementById("reloadCB").checked=true;
    }
}

function toggleAutoRefresh(cb) {
    if (cb.checked) {
        window.location.replace("products.html");
        reloading=setTimeout("window.location.reload();");
    } else {
        window.location.replace("#");
        clearTimeout(reloading);
    }
}

window.onload=checkReloading;
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('.banner .container_wrap  input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("place.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".banner .container_wrap").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body> 
	<!-- banner -->
	<!-- <div class="banner about-w3bnr"> -->
		<!-- header -->
		
		<div class="header" style="margin-left: 0em;">
			<div class="w3ls-header"><!-- header-one --> 
        <div class="container">
          <div class="w3ls-header-left">
            <p>Free home delivery at your doorstep For Above $30</p>
          </div>
          <div class="w3ls-header-right">
            <ul> 
              <li class="head-dpdn">
                <i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
              </li> 
              <li class="head-dpdn">
                <a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
              </li> 
              <li class="head-dpdn">
                <a href="signup.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
              </li> 
              <li class="head-dpdn">
                <a href="offers.html"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
              </li> 
              <li class="head-dpdn">
                <a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
              </li>
            </ul>
          </div>
          <div class="clearfix"> </div> 
        </div>
      </div>
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="../index.php"><h1>Title</h1></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="../index.php">Home</a></li>
						    	
						    	<li><a href="products (2).php">Restaurants</a></li>
						    	<li><a href="#">Join Our Team</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	           
		                 
	                 </div>
	                <div class="clearfix"></div>
   </div>
   <div class="banner">
   	  <div class="container_wrap">
   		   <h1>What are you looking for?</h1>
              <form method="post" action="#">
             <input type="text" autocomplete="off"  placeholder="Search Tourism Area..." name="search1"/>
              <div class="result" style="background-color:powderblue;">
              </div>
   	       <div class="dropdown-buttons">
				      <div class="dropdown-button">
               
					   </div>
				   </div>  
		   
				  <!-- <input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}"> -->
			     <div class="contact_btn">
	              <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	            </div>
			   </form>        		
   		   <div class="clearfix"></div>
         </div>
   </div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Dishes</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
				<div class="product-top">
					<h4>Restaurant Collection in Bandarban</h4>
					<ul> 
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Order By<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Most Viewed</a></li> 
								<li><a href="#">Name</a></li>
								 
							</ul> 
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Restaurant Type<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">5 Star</a></li> 
								<li><a href="#">3 Star</a></li>
								<li><a href="#">2 Star</a></li>
								<li><a href="#">Others</a></li>   
							</ul> 
						</li>
					</ul> 
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="spicy_web/web/orders.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
								</div>
							</div>
						</div> 
					</div> 
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Title</h5>  
									</div> 
									<img src="images/g1.jpg" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="spicy_web/web/orders.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="kitchen/index.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="spicy_web/web/orders.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Title</h5>  
									</div> 
									<img src="images/g1.jpg" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<a href="spicy_web/web/orders.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="spicy_web/web/orders.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="spicy_web/web/orders.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>

					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="kitchen/index.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div> 
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<div class="agile-product-text agile-product-text2">              
										<h5>Title</h5>  
									</div> 
									<img src="images/g1.jpg" class="img-responsive" alt="img"> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<a href="kitchen/index.html"><img src="images/g6.jpg" class="img-responsive" alt="img"></a>
									<div class="agile-product-text">              
										<h5>Title</h5>  
									</div> 
								</div>
								<div class="back">
									<a href="kitchen/index.html"><h4>Title</h4>
									<p>Country Type, AC, NON AC, Area</p>
									<h6>KIDS, FAMILY</h6> </a>
									
								</div>
							</div>
						</div> 
					</div>
					
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left" >
						<h4>CHOOSE BY AGE</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" onclick="toggleAutoRefresh(this);" id="reloadCB"><i></i>Kids</label>
							<!-- <span><input type="checkbox" onclick="toggleAutoRefresh(this);" id="reloadCB"> Auto Refresh</span> -->

							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Youngers</label>  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Adults</label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Senior Citizen</label>  
						</div> 
					</div>
					<div class="slider-left">
						<h4>CHOOSE BY CUISINE</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bangladeshi</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>American</label>  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Chinease</label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Thai</label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Arabian</label> 
						</div> 
					</div>
					<div class="slider-left">
						<h4>Special Facilities</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Custom Order with taste
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Single Reservation
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Group Reservation
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Family Reservation
							</label>
			
							
						</div> 
					</div>

					<div class="slider-left">
						<h4>Other Facilities</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Buffet</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>AC</label>  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Non-AC</label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Parking Facility</label> 
							
						</div> 
					</div>
					
					<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">  
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
						 
				</div>
				<!-- <div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.html">Salads </a></li>
						<li><a href="products.html">Vegetarian</a></li>
						<li><a href="products.html">Dinner</a></li>
						<li><a href="products.html">Diet Soup</a></li>
						<li><a href="products.html">Sweets</a></li>
						<li><a href="products.html">Seasonal</a></li>
						<li><a href="products.html">Breakfast</a></li>
						<li><a href="products.html">Italian Food</a></li>
						<li><a href="products.html">Meals</a></li> 
					</ul>
				</div> -->
			<!-- 	<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/s1.jpg" class="img-responsive" alt="img"></a>         
					</div>
				</div> -->
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //products --> 
	<div class="container"> 
		<div class="w3agile-deals prds-w3text"> 
			<h5>Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.</h5>
		</div>
	</div>
	<!-- dishes -->
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="w3ls-title">Special Foods</h3>
			<div class="spldishes-agileinfo">
				<div class="col-md-3 spldishes-w3left">
					<h5 class="w3ltitle">Staple Specials</h5>
					<p>Vero vulputate enim non justo posuere placerat Phasellus mauris vulputate enim non justo enim .</p>
				</div> 
				<div class="col-md-9 spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g4.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g5.jpg" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a> 
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //dishes --> 
	<!-- modal --> 
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/s1.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right single-top-right"> 
							<h3 class="item_name">France Special Dish</h3>
							<p>Proin placerat urna et consequat efficitur, sem odio blandit enim</p>
							<div class="single-rating">
								<ul>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="rating">20 reviews</li>
									<li><a href="#">Add your review</a></li>
								</ul> 
							</div>
							<div class="single-price">
								<ul>
									<li>$18</li>  
									<li><del>$20</del></li> 
									<li><span class="w3off">10% OFF</span></li> 
									<li>Ends on : Dec,5th</li>
									<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
								</ul>	
							</div> 
							<p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls_item" value="France Special" /> 
								<input type="hidden" name="amount" value="18.00" /> 
								<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
							<a href="#" class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</a>
							<div class="single-page-icons social-icons"> 
								<ul>
									<li><h4>Share on</h4></li>
									<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
									<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
									<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
								</ul>
							</div> 
						</div> 
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	<!-- //modal -->
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
				<form action="#" method="post"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div> 
				</form> 
				<img src="images/i1.png" class="sub-w3lsimg" alt=""/>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>company</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>  
						<li><a href="careers.html">Careers</a></li>  
						<li><a href="help.html">Partner With Us</a></li>   
					</ul>
				</div> 
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>help</h3>
					<ul>
						<li><a href="faq.html">FAQ</a></li> 
						<li><a href="login.html">Returns</a></li>   
						<li><a href="login.html">Order Status</a></li> 
						<li><a href="offers.html">Offers</a></li> 
					</ul>  
				</div>
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>policy info</h3>
					<ul>  
						<li><a href="terms.html">Terms & Conditions</a></li>  
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="login.html">Return Policy</a></li> 
					</ul>     
				</div>
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>Menu</h3> 
					<ul>
						<li><a href="menu.html">All Day Menu</a></li> 
						<li><a href="menu.html">Lunch</a></li>
						<li><a href="menu.html">Dinner</a></li>
						<li><a href="menu.html">Flavours</a></li> 
					</ul>  
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Staple Food. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->   
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  	
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" id="sourcecode">
		$(function()
		{
			$('.scroll-pane').jScrollPane();
		});
	</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script> <!-- the mouse wheel plugin --> 
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
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
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>