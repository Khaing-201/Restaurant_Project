<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>HappyFood | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.html">HAPPY<span>FOOD</span></a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            
             <li><a href="CustomerProfile.php">PROFILE</a></li>
            <li><a href=""></a></li>
            <li><a href="r.php">MENU</a></li> 
            <li><a href=""></a></li> 
            <li><a href="table.php">RESERVATION</a></li> 
                                                      
            <li><a href="Logout.php">LOGOUT</a></li>
           
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slider4.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">To The Happy Food Restaurant</h2>
            <p>Happy Food Restaurant is an online and offline service management system. The restaurant sells all international food and buffet system.</p> <br/>          
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slider.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">The Elegant</span>
            <h2 class="mu-slider-title">Modern Asian and Chinese Restaurant</h2> <br/>
            <p></p> <br/>          
           <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/slider2.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicious</span>
            <h2 class="mu-slider-title">Spicy and Buffet foods </h2> <br/>
            <p></p> <br/>          
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Lunch</a></li>
                <li><a href="#snacks" data-toggle="tab">Dinner</a></li>
                <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="">
                                    <img class="media-object" src="assets/img/menu/Mote hni kyar.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="">Noodle with Fish Soup &amp; Mote Hin Gar</a></h4>
                                  <span class="mu-menu-price">MMK 2000</span>
                                  <p> MoteMote Hin Gar is one of favourite breakfasts in Myanmar.</p>

                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Shan_Noodle31.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="">Shan Noodle</a></h4>
                                  <span class="mu-menu-price">MMK 1000</span>
                                  <p>Shan Noodle is originally come from Shan State which is the eastern part of Myanmar.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/india.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Uttappam with chatni and sambhar</a></h4>
                                  <span class="mu-menu-price">MMK 1000</span>
                                  <p>This is one of favourite breakfasts in India.</p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/English.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Fried Egg Avocado Toast</a></h4>
                                  <span class="mu-menu-price">MMK 2000</span>
                                  <p>Fried Egg Avocado toast is given a California-style.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Nan gyi thoke.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Nan Gyi Thoke</a></h4>
                                  <span class="mu-menu-price">MMK 1500</span>
                                  <p>Nan Gyi Thoke Salad is Rice Noddle with Chicken Curry Salad.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Ohn no khao swe.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Ohn No Khao Swe</a></h4>
                                  <span class="mu-menu-price">MMK 1500</span>
                                  <p>Ohn No Khao Swe is one of favourite breakfasts Myanmar much-loved coconut chicken noodle soup.</p>
                                 
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                      <a href="r.php" type="submit" class="btn btn-warning">SEE MORE MENU!</a>
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/kyay-oh.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Kyay oh</a></h4>
                                  <span class="mu-menu-price">MMK 3000</span>
                                  <p>Chicken/ Pork/ Seafood.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="">
                                    <img class="media-object" src="assets/img/menu/duck.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail">Roast Duck</a></h4>
                                  <span class="mu-menu-price">MMk 10000</span>
                                  <p>The restaurant's finest original hand-paitned Gold Duck resturant.</p>
                                 
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/hamburger.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Restaurant Hamburge</a></h4>
                                  <span class="mu-menu-price">MMK 6500</span>
                                  <p>Restaurant Hamburge is the favourite Lunch and Dinneer Food.</p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/hotpopt.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Hot Pot Set</a></h4>
                                  <span class="mu-menu-price">MMK 12000</span>
                                  <p>This Hot Pot set include Meats, Fish, a lot of Vegetable, Mushrooms and Soups.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/mala.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Mala Shan Guo</a></h4>
                                  <span class="mu-menu-price">MMK 9000</span>
                                  <p>This set include Chicken, Pork, Seafood, Fish, Vegetables and Mushrooms.</p>
                                 
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Fish_Rice5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="">Rice Fish</a></h4>
                                  <span class="mu-menu-price">MMK 2500</span>
                                  <p>Shan styled rice cake receipe where rices are mixed with fish and potato to make a cake.</p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
<a href="r.php" type="submit" class="btn btn-warning">SEE MORE MENU!</a>
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/grill.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Grilled Chicken</a></h4>
                                  <span class="mu-menu-price">MMK 13000</span>
                                  <p>Global and regional preparation cooking styles.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/kimchi.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Kimchi Fried Rice</a></h4>
                                  <span class="mu-menu-price">MMK 5000</span>
                                  <p>Kimchi Fried Rice with Brisket.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/steak.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Sous Vide Steak</a></h4>
                                  <span class="mu-menu-price">MMK 15000</span>
                                  <p>Mixed with cream cheese and garlic.</p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/tomyum.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Tom Yum Soups</a></h4>
                                  <span class="mu-menu-price">MMK 6500</span>
                                  <p>Thai Tom Yum Soup With Coconut Milk.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/lob.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Lobster Steak</a></h4>
                                  <span class="mu-menu-price">MMK 22000</span>
                                  <p>Steak, Seafood and Lobster.</p>
                                 
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/mushoom.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Mushroom Soup</a></h4>
                                  <span class="mu-menu-price">MMK 3400</span>
                                  <p>Cream and Potato Mushroom Soup.</p>
                                 
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
<a href="r.php" type="submit" class="btn btn-warning">SEE MORE MENU!</a>
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Floating.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Rice balls with coconut dressing</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 2000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Chocolate Cake</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 1500</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Pen Cake</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 3000</span>
                                 
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/Ice.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Ice Cream</a></h4>
                                  <span class="mu-menu-price">MMK 1500</span>
                                  <p>Milk, Chocolate, Vanilla, Strewberry, Yougurt.</p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/milk.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Chocolate Cake with Milk Ice Cream</a></h4><br/>
                                  <span class="mu-menu-price">MMK 3000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/grass.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Glass Jelly</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 2000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
<a href="r.php" type="submit" class="btn btn-warning">SEE MORE MENU!</a>
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/tea.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">TEA</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 500</span>
                                  
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDetail.php">
                                    <img class="media-object" src="assets/img/menu/coffee.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDetail.php">Coffee</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 800</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDisplay.php">
                                    <img class="media-object" src="assets/img/menu/cola.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDisplay.php">Soft Drinks</a></h4><br/>
                                  <span class="mu-menu-price">MMK 1000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDisplay.php">
                                    <img class="media-object" src="assets/img/menu/cocktail.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDisplay.php">Cocktails</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 2500</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDisplay.php">
                                    <img class="media-object" src="assets/img/menu/wine.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDisplay.php">Wine</a></h4><br/>
                                  <span class="mu-menu-price">MMK 45000 to 400000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                   <a href="MenuDisplay.php">
                                    <img class="media-object" src="assets/img/menu/alcohol.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="MenuDisplay.php">Alcoholic Drinks</a></h4> <br/>
                                  <span class="mu-menu-price">MMK 20000 to 300000</span>
                                  <p></p>
                                  
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
<a href="r.php" type="submit" class="btn btn-warning">SEE MORE MENU!</a>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation</h2>
            </div>

            <div class="mu-reservation-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control">
                            <option value="0">How Many?</option>
                            <option value="1 Person">1 Person</option>
                            <option value="2 People">2 People</option>
                            <option value="3 People">3 People</option>
                            <option value="4 People">4 People</option>
                            <option value="5 People">5 People</option>
                            <option value="6 People">6 People</option>
                            <option value="7 People">7 People</option>
                            <option value="8 People">8 People</option>
                            <option value="9 People">9 People</option>
                            <option value="10 People">10 People</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="datepicker" placeholder="Date">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                      </div>
                      <a href="table.php" type="submit" class="mu-readmore-btn">Make Reservation</a>
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
                  <div class="mu-opening-hour">
                    <h2>Opening Hours</h2>
                      <ul class="list-unstyled">
                        <li>
                            <p>Monday &amp; Tuesday</p>
                            <p>11:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Wednesday &amp; Thursday</p>
                            <p>11:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Friday &amp; Saturday</p>
                            <p>11:00 AM - 4:00 AM</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>11:00 AM - 4:00 AM</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">

              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
              </div>

              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>The buffet was lovely and enjoyed by all. Please thank your staff for all their hard work and being so friendly and helpful. Also the restaurant garden looked lovely.</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Just to say “thank you” for our meal last Saturday. We all enjoyed your delicious food and the evening was everything we hoped it would be. Thank you so much.</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Julia</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Excellent environment, friendly service, great menu choices and really decent food and at affordable prices. Will be back.</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Hanna</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
  
  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Our Professionals</span>
              <h2>MASTER CHEFS</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-4.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                      
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

 

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>

               <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Happy Food Restaurant—local Chinese chain Golden Duck’s riverside outlet at Pansodan jetty</p>
                      <address>
                        <p><i class="fa fa-phone"></i> 01 249 421</p>
                        <p><i class="fa fa-envelope-o"></i>facebook.com/Junior-Duck-1312198932221892</p>
                        <p><i class="fa fa-map-marker"></i>Nanthidar Compound, Strand Road, (at the end of Pansodan Street, near Dala ferry and watertaxi stop), Botahtaung Township, Yangon.</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  
  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>