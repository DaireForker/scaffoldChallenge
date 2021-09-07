<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <script src="js/app.js" charset="utf-8"></script>
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
            </div>
        </div>
        <div class="menu-top-seperator mt-4">
        </div>
            <!-- Below is the user interface to interact with the products, on the left of the screen the user will be able to add/remove filters to the page. -->
            
                <div class="container mt-2">
                    <div class="row ">
                        <!-- The left column will contain radio buttons that send ajax posts to update the information that should be displayed. This is just mock frontend-->
                        <div class="col-md-3 menu-box-left">
                           
                            <br>
                            <div class="form-check menu-categories">
                                <!-- create loop to make the id unique -->
                                @foreach($allCategories as $category)
                               
                                    @if($category->id == 1 || $category->id == 5 )
                                        <div class="divider mt-2"></div>
                                        <input class="form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault-{{$category->id}}" onclick="validate()">
                                        <label class="form-check-label mt-3" for="flexCheckDefault-{{$category->id}}">
                                            <h3>{{$category->name}}</h3> <p class="mt-0"style="font:6px;"> (show all from this category?)</p>
                                            <br>
                                            <u><p style="font:6px;">{{$category->name}} Sub Categories</p></u>
                                        </label>
                                        <br>
                                        @else
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault-{{$category->id}}" onclick="validate()">
                                        <label class="form-check-label" for="flexCheckDefault-{{$category->id}}">
                                            {{$category->name}}
                                        </label>
                                        <br>
                                    @endif

                                @endforeach
                            </div>
                            <!-- foreach statement that displays all of the categories -->
                            
                        </div>
                        <!-- On the right hand side of the page the user will be able to filter the view of the products as well as view the products. The products will be displayed according to the category/price/name etc using a foreach that displays a session variable thats updated according to ajax criteria. At the bottom of the right hand column there will be pagination buttons. -->
                        <div class="col-md-9  menu-box-right ml-2">
                            <u><h3 class="mt-5 ">Products</h3></u>
                            
                                <!-- foreach statement that publishes the page with database criteria and placeholder -->
                            @php
                                $count = 0;
                            @endphp
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                                <!-- script to check if anything is checked in categories -->

                                @foreach($allProducts as $product)
                                @php
                                    $count++;
                                @endphp
                                    <div class="col-md-3 ml-5 mt-4 mb-2 menu-product-card " id="card-{{$product->id}}">
                                        <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder">
                                        <br>
                                        <p class="menu-product-name">{{$product->name}}</p>
                                        <br>
                                        <br>
                                        <p class="menu-product-price">£{{$product->price}}</p>
                                    </div>
                                @endforeach
                                </div>
                                @php
                                    $pagesNeeded = $count / 5;
                                @endphp
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    @for($i=1;$i<=$pagesNeeded;$i++)
                                        <button id="page-{{$i}}" class="PageButton">{{$i}}</button>
                                    @endfor
                                    <!-- Pagination - put count on products within the foreach loop and then assign a display attribute to them in groups of 5.-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- script to recognise if a checkbox has been checked -->
                <script type="text/javascript">
                   function validate(){
                        if (document.getElementById('flexCheckDefault-1').checked) {
                            alert("phones");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("apple");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("huawei");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("samsung");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("tablets");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("appleTablet");
                        }else if(document.getElementById('flexCheckDefault-2').checked) {
                            alert("androidTablet");
                        }
                        else
                        {
                            alert("all");
                        }
                    }
                </script>
    </body>
</html>
