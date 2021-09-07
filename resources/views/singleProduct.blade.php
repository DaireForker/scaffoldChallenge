<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    	<div class="container menu-top">
            <div class="row mt-5 ">
                <div class="mt-2 col-md-4 mb-3 text-center">
                        <!-- <a href="{{ route('login') }}"></a>  This is where I will include the search bar for the products -->  
                        <h3>Scaffold Challenge</h3>
                </div>
                <div class="mt-2 col-md-6 mb-3 text-right">
                <!--  This is where I will include the search bar for the products -->  
                    <div class="dropdown">
					 <input type="text" onclick="myFunction()" class="menu-searchBar dropdown dropbtn" id="search" placeholder="search" name="search" >
					  <div id="myDropdown" class="dropdown-content">
					  	<!-- foreach to display products that match current search -->
					    <a href="#home">testProduct</a>
					    <a href="#about">testProduct</a>
					    <a href="#contact">testProduct</a>
					  </div>
					</div>
				</div>
            </div>
            <script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {
			    var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			    for (i = 0; i < dropdowns.length; i++) {
			      var openDropdown = dropdowns[i];
			      if (openDropdown.classList.contains('show')) {
			        openDropdown.classList.remove('show');
			      }
			    }
			  }
			}
			</script>
        </div>
        <div class="container mt-2">
            <div class="row ">
                <!-- The left column will contain radio buttons that send ajax posts to update the information that should be displayed. This is just mock frontend-->
                <div class="col-md-3 menu-box-left">
                    <div class="col-md-12 mt-5 menu-title">
                        <h4 class="product-return-Button">Return to Menu</h4>
                    </div>
                    <br>
                    <div class="form-check menu-categories">
                         
                    </div>
                    <!-- foreach statement that displays all of the categories -->
                    
                </div>
                
                <div class="col-md-9  menu-box-right ml-2">
                    <u><h3 class="mt-5 ">Products name</h3></u>
                    <div class="row">
                        <div class="col-md-10 ml-5 mt-4 mb-2 product-card ">
                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="product-image mt-3" alt="placeholder">
                            <br>
                            <p class="menu-product-name">{{$productNeeded->name}}</p>
                            <br>
                            <br>
                            <p class="menu-product-price">Brand is: {{$brandNeeded}}</p>
                            <br>
                            <br>
                            <p class="menu-product-price">{{$productNeeded->price}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	       <div class="row">
	            <!-- Will contain a "more products like this" carousel -->
	            <div class="col-md-12">

	            </div>
	       </div>
    </body>
</html>