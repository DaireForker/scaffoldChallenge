<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <script src="js/app.js" charset="utf-8"></script>
        <div class="container-fluid menu-top pt-5 pb-5 menu-top-banner">
            <div class="row ">
                <div class="mt-2 col-md-5 col-sm-12  text-center">
    
                        <h3 class="title fade-in">Scaffold Challenge</h3>
                </div>
                <div class="mt-2 col-md-7 mb-3 text-right">
                        <!--  This is the search bar -->  
                            <div class="dropdown">
                             <input type="text" onclick="myFunction()" class="menu-searchBar dropdown dropbtn" id="search" placeholder="search" name="search" autocomplete="off">
                              <div id="myDropdown" class="dropdown-content">
                                 @csrf
                                <div id="matchDrop"></div>
                                <script>
                                    function ajaxCallBack(smallArr){
                                        console.log(smallArr);
                                        $("#matchDrop").html(smallArr);
                                    }
                                </script>
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
        <div class="menu-top-seperator mb-5">
        </div>

        @yield('content')

        </body>
</html>
