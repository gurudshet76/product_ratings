<!doctype html> 

<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <title>Product ratings </title> 
         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 
         <script src="https://code.jquery.com/jquery.js"></script> 
         <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
         <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script  type=”text/javascript” language=”javascript” src=”http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js”></script>

         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         <link rel="stylesheet" href="{{ asset('css/ratingcard.css') }}">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head> 
    <body> 
        <div class="container"> 
            <div class="row">
                <nav class="navbar navbar-default" role="navigation"> 
                    <div class="navbar-header"> 
                        <ul class="nav navbar-nav"> 
                            <li class="{{ Request::is('home') ? 'active' : '' }}">
                                <a href="./home">Dashboard</a></li> 
                            <li class="{{ Request::is('userinfo') ? 'active' : '' }}">
                                <a href="./userinfo">Users Management</a></li> 
                            <!--<li><a href="./">Stores</a></li> -->
                            <li class="{{ Request::is('prodinfo') ? 'active' : '' }}">
                                <a href="./prodinfo">Products Management</a></li> 
                            <li class="{{ Request::is('prodratings') ? 'active' : '' }}">
                                <a href="./prodratings">Reviews</a></li> 
                            <li class="{{ Request::is('userrolesmgmt') ? 'active' : '' }}">
                                <a href="./userrolesmgmt">Permission Management</a></li> 
                            <!--<li><a href="./about">About</a></li> -->
                            <li><a href="/logout"> Logout </a></li>
                        </ul> 
                        
                    </div> 
                </nav>
            </div>
            @yield('content') 
        </div>
        
        <!--<script type="text/javascript">
            jQuery(document).ready(function() {
                @yield('postJquery');
            });
        </script>-->
    </body> 
</html>
