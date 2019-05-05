<?php 
  include 'config.php';

  if (isset($_POST['submit'])) {
    $sear_area = $_POST['search1'];
    if ($sear_area=='coxs bazar') {
       header('location:food_lay/products.php');
    }
    else if ($sear_area=='bandarban') {
       header('location:food_lay/products (2).php');
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

<!DOCTYPE HTML>
<html>
<head>
<title>Vist Bangladesh | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="food_lay/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
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
<script type="text/javascript">
   //A $( document ).ready() block.
  /*$( document ).ready(function() {
      $('#myModal').modal();
        $.getJSON("http://freegeoip.net/json/", function(data) {
        //var country_code = data.country_code;
        var country = data.country_name;
        //var ip = data.ip;
        //var time_zone = data.time_zone;
        //var latitude = data.latitude;
        //var longitude = data.longitude;

        //alert("Country Code: " + country_code);
        alert("Country Name: " + country);
        //alert("IP: " + ip); 
        ///alert("Time Zone: " + time_zone);
        //alert("Latitude: " + latitude);
        //alert("Longitude: " + longitude);   
    });
AIzaSyDbJnEtnqB1SRiOwWdcoZAoqBgh2KM6_eA
    $.ajax({
            url: "https://geoip-db.com/jsonp",
            jsonpCallback: "callback",
            dataType: "jsonp",
            success: function( location ) {
              console.log(location);
                 $('#country').html(location.country_name);
                // $('#state').html(location.state);
                // $('#city').html(location.city);
                // $('#latitude').html(location.latitude);
                // $('#longitude').html(location.longitude);
                // $('#ip').html(location.IPv4);  
            }
        }); 

  });*/
</script>
</head>
<body>
<div class="header" style="margin-left: 0em;">
       <div class="w3ls-header"><!-- header-one --> 
        <div class="container">
          
          <div class="w3ls-header-right">
            <ul> 
              <li class="head-dpdn">
                <i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
              </li> 
              <li class="head-dpdn">
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
              </li> 
              <li class="head-dpdn">
                <a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
              </li> 
              <li class="head-dpdn">
                <a href="offers.php"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
              </li> 
              <li class="head-dpdn">
                <a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
              </li>
            </ul>
          </div>
          <div class="clearfix"> </div> 
        </div>
      </div>
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.php"><h1>Title</h1></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="index.php">Home</a></li>
						    	<!-- <li><a href="rooms.html">Places</a></li>
						    	<li><a href="news.html">Hotels</a></li>
                        <li><a href="gallery.html">Resorts</a></li> -->
						    	<li><a href="food_lay/products.php">Restaurants & Eateries</a></li>
                  <li><a href="food_lay/products.php">Apply For a part-time Job</a></li>
						    	<!-- <li><a href="404.html">Others</a></li> -->
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
	            
		                 <div class="clearfix"></div>
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
      <div class="offering">
              <h2>Our Services</h2>
              <!-- <h3>Ut wisi enim ad minim veniam, quis</h3> -->
              <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
                <li><i class="icon1"> </i><span class="one"> </span><br>Well Known Restaurant</li>
                <li><i class="icon2"> </i><span class="two"> </span><br>Online Order</li>
                <li><i class="icon3"> </i><span class="three"> </span><br>
                Customer's choice order</li>
                <li><i class="icon4"> </i><span class="four"> </span><br>Table Reservation</li>
                <li><i class="icon5"></i><br> Well Delivery </li>
              </ul>
      </div>


   	    <div class="content_middle_box">

          <div class="top_grid">
          <h1>Popular Restaurant in Cox's Bazar</h1>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/Cox/powse.jpg" class="img-responsive" alt=""/></div>
   				
   			          <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">Show More</a></div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                  </div>
                   </div> 
                   <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>Asian,Bangladeshi,Halal</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Poushee Restaurant</h4>
              
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">

                  <div class="index_img1"><img src="food_lay/images/Cox/jhowbon.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen"> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Bangladeshi,Asian,Halal</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Jhaubon Restaurant</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="food_lay/images/tabbaq.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen"> Show More</div>
                        <ul class="mask_img">
               

         	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Chinese</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Tabbaq Restaurant</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/cox/efc.jpg" class="img-responsive" alt=""/></div>
   				     
   			          <div class="mask">
                      <div class="info"><i class="search"> </i><a href="food_lay/kitchen/index.php"> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				    <div class="inner_wrap">
                  <h3>Seafood Asian Bangladeshi</h3>
                  <ul class="star1">
                    <h4 class="blue">EFC - A Live Fish Restaurant</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   	</div>   
    
      <div class="content_middle_box">

          <div class="top_grid">
          <h1>Popular Restaurant in Jaflong</h1>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/Jaflong/0point.png" class="img-responsive" alt=""/></div>
                   
                      <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More
                        </div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <i class="home"></i>
                <div class="inner_wrap">
                  <h3>Asian,Bangladeshi</h3>
                  <ul class="star1">
                    <h4 class="green">Zero Point Restaurant</h4>
                    <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">

                  <div class="index_img1"><img src="food_lay/images/Jaflong/jaflong tanduri.png" class="img-responsive" alt=""/></div>
                    <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
                <div class="inner_wrap">
                  <h3>International</h3>
                  <ul class="star1">
                    <h4 class="yellow">Jaflong Tandoori Restaurant</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img2"><img src="food_lay/images/Jaflong/xortika.jpg" class="img-responsive" alt=""/></div>
                    <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
               

            <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
                <div class="inner_wrap">
                  <h3>Chinese,Fast Food</h3>
                  <ul class="star1">
                    <h4 class="blue">Hotel Supreme & Exotica</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/Jaflong/xortika.jpg" class="img-responsive" alt=""/></div>
                    
                      <div class="mask">
                      <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
                   <div class="inner_wrap">
                  <h3>Chinese,Fast Food</h3>
                  <ul class="star1">
                    <h4 class="blue">Hotel Supreme & Exotica</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <div class="content_middle_box">

          <div class="top_grid">
          <h1>Popular Restaurant in Bandarban</h1>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/Bandor/foodpark.jpg" class="img-responsive" alt=""/></div>
                   
                      <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <i class="home"></i>
                <div class="inner_wrap">
                  <h3>Indian,Asian,Bangladeshi,Vegetarian Friendly Halal</h3>
                  <ul class="star1">
                    <h4 class="green">Food Park Snaks & Restaurant</h4>
                    <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">

                  <div class="index_img1"><img src="food_lay/images/Bandor/green peri.jpg" class="img-responsive" alt=""/></div>
                    <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
                <div class="inner_wrap">
                  <h3>Indian,Asian,Bangladeshi,Vegetarian Friendly Halal</h3>
                  <ul class="star1">
                    <h4 class="yellow">Green Prairie Resturent</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img2"><img src="food_lay/images/Bandor/somproti.jpg" class="img-responsive" alt=""/></div>
                    <div class="mask">
                        <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
               

            <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home"> </i>
                <div class="inner_wrap">
                  <h3>Indian,Asian,Bangladeshi,Vegetarian Friendly Halal</h3>
                  <ul class="star1">
                    <h4 class="blue">Rupashi Bangla Resturent</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img"><img src="food_lay/images/Bandor/somproti.jpg" class="img-responsive" alt=""/></div>
                    
                      <div class="mask">
                      <div class="info"><i class="search"> </i><a href="food_lay/kitchen">  Show More</div>
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                           <div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
                   <div class="inner_wrap">
                  <h3>Indian,Asian,Bangladeshi,Vegetarian Friendly Halal</h3>
                  <ul class="star1">
                    <h4 class="blue">Rupashi Bangla Resturent</h4>
                    <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
                  </ul>
                </div>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   		  
   		  </div>
   	  </div>
   </div>
   <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Restaurant Features</h3>
   	   
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Cruisines</h4>
			<ul class="list1">
				<li><a href="contact.php">Bangladeshi</a></li>
				<li><a href="#">American</a></li>
				<li><a href="#">Australian</a></li>
				<li><a href="#">Thai</a></li>
				<li><a href="#">Arabian</a></li>
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Restaurant Menu</h4>
			<ul class="list1">
				<li><a href="#">Summer Season</a></li>
				<li><a href="#">Winter Season</a></li>
				<li><a href="#">Rainy Season</a></li>
				<li><a href="#">Morning</a></li>
				<li><a href="#">Evening</a></li>
        <li><a href="#">Night</a></li>
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Socail Link</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>

     <!-- MOdal window Start -->
     <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p id="con_name"></p>
            <p id="city_name"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
     <!-- MOdal window End -->
      </div>
   </div>
</body>
</html>		