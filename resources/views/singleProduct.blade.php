@extends('layouts.secondary')

    @section('content')

        <div class="container mt-2">
            <div class="row ">
                <!-- The left column will contain radio buttons that send ajax posts to update the information that should be displayed. This is just mock frontend-->
                <div class="col-md-3 menu-box-left">
                    <div class="col-md-12 mt-5 menu-title">
                    	<a href="/" class="product-menu-return-Btn">
                        <h4 class="product-return-Button">Return to Menu</h4>
                    </a>
                    </div>
                    <br>
                    <div class="form-check menu-categories">
                         
                    </div>
                    <!-- foreach statement that displays all of the categories -->
                    
                </div>
                
                <div class="col-md-9  menu-box-right ml-2">
                    <u><h3 class="mt-5 fade-in">Let me introduce you to the {{$productNeeded->name}}..</h3></u>
                    <div class="row">
                        <div class="col-md-10 ml-5 mt-4 mb-2 product-card ">
                            <img src="{{ asset("img/dummy_150x150_ffffff_FFA400_placeholder.png") }}"  class="product-image mt-3" alt="placeholder">
                            <br>
                            <p class="menu-product-name ml-5">{{$productNeeded->name}}</p>
                            <br>
                            <br>
                            <p class="menu-product-price ml-5">Brand is: {{$brandNeeded}}</p>
                            <br>
                            <br>
                            <p class="menu-product-price ml-5">£{{$productNeeded->price}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	       @include('search')

     @endsection