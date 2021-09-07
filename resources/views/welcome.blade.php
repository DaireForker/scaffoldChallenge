@extends('layouts.banner')
    @section('content')
            <!-- Below is the user interface to interact with the products, on the left of the screen the user will be able to add/remove filters to the page. -->
            
                <div class="container mt-2">
                    <div class="row ">
                        <!-- The left column will contain radio buttons that send ajax posts to update the information that should be displayed. This is just mock frontend-->
                        <div class="col-md-3 col-sm-12 col-xs-12 menu-box-left">
                            <br>
                            <div class="form-check ">
                                <!-- create loop to make the id unique -->
                                @foreach($_SESSION["allCategories"] as $category)

                                    @if($category->id == 1)

                                        <label class="form-check-label cat-Buttons mt-3 w-100" onclick="seeSubsPhone()"for="flexCheckDefault-{{$category->id}}">
                                            <h4 class="title-Text">{{$category->name}}</h4> <p class="mt-0"style="font:4px;"> (show all from this category?)</p>
                                            <br>
                                            
                                        </label>
                                        <br>
                                    @elseif($category->id == 5 )
                                        
                                        <label class="form-check-label cat-Buttons mt-3 w-100" onclick="seeSubsTablet()"for="flexCheckDefault-{{$category->id}}">
                                            <h4 class="title-Text">{{$category->name}}</h4> <p class="mt-0 ml-1"style="font:4px;"> (show all from this category?)</p>
                                            <br>
                                            
                                        </label>
                                        <br>
                                    @elseif($category->id == 2 || $category->id == 3|| $category->id == 4)
                                        <div id="phoneCats" class=" phoneCats col-md-12">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault-{{$category->id}}" onclick="validate()">
                                            <label class="form-check-label" for="flexCheckDefault-{{$category->id}}">
                                                {{$category->name}}
                                            </label>
                                            <br>
                                        </div>
                                    @elseif($category->id == 6 || $category->id == 7)
                                        <div id="tabCats" class=" tabCats col-md-12">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault-{{$category->id}}" onclick="validate()">
                                            <label class="form-check-label" for="flexCheckDefault-{{$category->id}}">
                                                {{$category->name}}
                                            </label>
                                            <br>
                                        </div>
                                    @endif

                                @endforeach
                            </div>
                            <!-- foreach statement that displays all of the categories -->
                            
                        </div>
                        <!-- On the right hand side of the page the user will be able to filter the view of the products as well as view the products. The products will be displayed according to the category/price/name etc using a foreach that displays a session variable thats updated according to ajax criteria. At the bottom of the right hand column there will be pagination buttons. -->
                        <div class="col-md-9 col-sm-12  menu-box-right " >
                        <u><h3 class="mt-5 text-center">Products</h3></u>

                        <!-- Display all phones -->
                        <div id="phones" name="phones" class="phones col-sm-12 ml-2">
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                             @foreach($_SESSION['phones'] as $phone)
                                       
                                        <div class="col-md-3 col-sm-12 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$phone->id}}" value="{{$phone->id}}" >
                                            <a href="/singleProduct/{{$phone->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$phone->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$phone->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Display all apple phones -->
                            <div class="col-md-12" id="applePhones" name="applePhones">
                                <div class="row">
                             @foreach($_SESSION['applePhones'] as $applePhone)
                                       
                                        <div class="col-md-3  ml-4 mt-4 mb-2 menu-product-card " id="card-{{$applePhone->id}}" value="{{$applePhone->id}}" >
                                            <a href="/singleProduct/{{$applePhone->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$applePhone->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$applePhone->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                  
                        <!-- Display all huaweiPhones -->
                        
                            <div class="col-md-12" id="huaweiPhones" name="huaweiPhones">
                                <div class="row">
                             @foreach($_SESSION['huaweiPhones'] as $huaweiPhone)
                                       
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$huaweiPhone->id}}" value="{{$huaweiPhone->id}}" >
                                            <a href="/singleProduct/{{$huaweiPhone->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$huaweiPhone->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$huaweiPhone->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                            <!-- Display all samsungPhones -->
                        <div id="samsungPhones" name="samsungPhones" class="samsungPhones ml-2">
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                             @foreach($_SESSION['samsungPhones'] as $samsungPhone)
                                       
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$samsungPhone->id}}" value="{{$samsungPhone->id}}" >
                                            <a href="/singleProduct/{{$samsungPhone->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$samsungPhone->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$samsungPhone->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Display all tablets -->
                        <div id="tablets" name="tablets" class="tablets  ml-2">
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                                @foreach($_SESSION['tablets'] as $tablet)
                                       
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$tablet->id}}" value="{{$tablet->id}}" >
                                            <a href="/singleProduct/{{$tablet->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$tablet->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$tablet->price}}</p>
                                            </a>
                                        </div>
                                    
                                @endforeach
                                </div>
                            </div>
                        </div>
                         <!-- Display all appleTablets -->
                        <div id="appleTablets" name="appleTablets" class="appleTablets  ml-2">
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                             @foreach($_SESSION['appleTablets'] as $appleTablet)

                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$appleTablet->id}}" value="{{$appleTablet->id}}" >
                                            <a href="/singleProduct/{{$appleTablet->id}}">
                                                <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                                <br>
                                                <p class="menu-product-name">{{$appleTablet->name}}</p>
                                                <br>
                                                <br>
                                                <p class="menu-product-price">£{{$appleTablet->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Display all androidTablets -->
                        <div id="androidTablets" name="androidTablets" class="androidTablets   ml-2">
                            <div id="AllProductsDiv" class="col-md-12">
                                <div class="row">
                             @foreach($_SESSION['androidTablets'] as $androidTablet)
                                       
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$androidTablet->id}}" value="{{$androidTablet->id}}" >
                                            <a href="/singleProduct/{{$androidTablet->id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$androidTablet->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$androidTablet->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                      
                                <!-- foreach statement that publishes the page with database criteria and placeholder -->
                            @php
                                $count = 0;
                            @endphp
                            <div id="allProducts" name="allProducts" class="col-md-12">
                                <div class="row">
                                <!-- script to check if anything is checked in categories -->

                                <!-- I counted the products to find out how many buttons i needed and then used that to then state where the starting point of the forloop would be.
                                Now i need to create a script that passes the buttons name - this could have to be an ajax post.  -->
                                @php
                                    $count = count($_SESSION["allProducts"]);
                                    $pagesNeeded = $count / 5;
                                    $pageClicked = $_SESSION["pageClicked"];
                                    $startingProduct = ($pageClicked - 1) *5;
                                    $pageProducts = $pageClicked * 5;
                                   
                                @endphp

                                @if($pageClicked == 1)
                                    @for($j = 0; $j <$pageProducts; $j++)
                                        @php
                                           $id = $_SESSION['allProducts'][$j]->id;
                                        @endphp
                                        
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$_SESSION['allProducts'][$j]->id}}" value="{{$_SESSION['allProducts'][$j]->id}}" >
                                            <a href="/singleProduct/{{$id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$_SESSION["allProducts"][$j]->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$_SESSION["allProducts"][$j]->price}}</p>
                                            </a>
                                        </div>
                                    
                                    @endfor
                                @else
                                    @for($j = $startingProduct; $j <$pageProducts; $j++)
                                        @php
                                           $id = $_SESSION['allProducts'][$j]->id ;
                                          
                                        @endphp
                                        
                                        <div class="col-md-3 ml-4 mt-4 mb-2 menu-product-card " id="card-{{$_SESSION['allProducts'][$j]->id}}" value="{{$_SESSION['allProducts'][$j]->id}}" >
                                            <a href="/singleProduct/{{$id}}">
                                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="menu-product-image mt-3" alt="placeholder" >
                                            
                                            <br>
                                            <p class="menu-product-name">{{$_SESSION["allProducts"][$j]->name}}</p>
                                            <br>
                                            <br>
                                            <p class="menu-product-price">£{{$_SESSION["allProducts"][$j]->price}}</p>
                                            </a>
                                        </div>
                                    @endfor
                                @endif
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                     @csrf
                                    <!-- @for($i=1;$i<=$pagesNeeded;$i++)
                                        <button id="page-{{$i}}" value="{{$i}}"class="PageButton">{{$i}}</button>
                                    @endfor -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- function to handle if a product has been selected -->
                <!-- script to recognise if a checkbox has been checked -->
                <script type="text/javascript">
                    $( document ).ready(function() {
                        $("#phones").hide();
                        $("#applePhones").hide();
                        $("#huaweiPhones").hide();
                        $("#samsungPhones").hide();
                        $("#tablets").hide();
                        $("#appleTablet").hide();
                        $("#androidTablet").hide();
                        $(".phoneCats").hide();
                        $(".tabCats").hide();

                        $('input[type="checkbox"]').on('change', function() {
                           $('input[type="checkbox"]').not(this).prop('checked', false);
                        });
                    
                    });
                    //toggle jq of the categories
                    function seeSubsPhone(){
                        $(".phoneCats").toggle();
                        $("#phones").toggle();
                        $("#allProducts").hide();
                        
                    }
                    function seeSubsTablet(){
                        $(".tabCats").toggle();
                        $("#tablets").toggle();
                        $("#allProducts").hide();
                    }

                    function validate(){
                       
                        if(document.getElementById('flexCheckDefault-2').checked) {
                            $("#applePhones").show();
                            $("#samsungPhones").hide();
                            $("#huaweiPhones").hide();
                            $("#phones").hide();
                            $("#tablets").hide();
                            $("#appleTablets").hide();
                            $("#androidTablets").hide();
                            $("#allProducts").hide();

                        }
                         if(document.getElementById('flexCheckDefault-3').checked) {
                            $("#applePhones").hide();
                            $("#samsungPhones").hide();
                            $("#huaweiPhones").show();
                            $("#phones").hide();
                            $("#tablets").hide();
                            $("#appleTablets").hide();
                            $("#androidTablets").hide();
                            $("#allProducts").hide();
                        }
                        if(document.getElementById('flexCheckDefault-4').checked) {
                            $("#applePhones").hide();
                            $("#samsungPhones").show();
                            $("#huaweiPhones").hide();
                            $("#phones").hide();
                            $("#tablets").hide();
                            $("#appleTablets").hide();
                            $("#androidTablets").hide();
                            $("#allProducts").hide();
                        }
                        if(document.getElementById('flexCheckDefault-6').checked) {
                            $("#applePhones").hide();
                            $("#samsungPhones").hide();
                            $("#huaweiPhones").hide();
                            $("#phones").hide();
                            $("#tablets").hide();
                            $("#appleTablets").show();
                            $("#androidTablets").hide();
                            $("#allProducts").hide();
                        }
    
                        if(document.getElementById('flexCheckDefault-7').checked) {
                            $("#applePhones").hide();
                            $("#samsungPhones").hide();
                            $("#huaweiPhones").hide();
                            $("#phones").hide();
                            $("#tablets").hide();
                            $("#appleTablets").hide();
                            $("#androidTablets").show();
                            $("#allProducts").hide();
                        }
                    }
                   
                </script> 
                @include('search')
 @endsection
