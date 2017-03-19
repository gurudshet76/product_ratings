<!doctype html> 

<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <title>Product ratings </title> 
         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 
         <script src="https://code.jquery.com/jquery.js"></script> 
         <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head> 
    <body> 
        <div class="container col-md-8 col-md-offset-2"> 
            <nav class="navbar navbar-default" role="navigation"> 
                <div class="navbar-header"> 
                    <ul class="nav navbar-nav"> 
                        <li class="active"><a href="./">Dashboard</a></li> 
                        <li class="active"><a href="./">Users</a></li> 
                        <li class="active"><a href="./">Stores</a></li> 
                        <li class="active"><a href="./">Products</a></li> 
                        <li class="active"><a href="./">Ratings</a></li> 
                        <li><a href="./about">About</a></li> 
                        <li><a href="./contact">Contact</a></li> 
                    </ul> 
                </div> 
            </nav>
            <?php echo $__env->yieldContent('content'); ?> 
        </div>
    </body> 
</html>
