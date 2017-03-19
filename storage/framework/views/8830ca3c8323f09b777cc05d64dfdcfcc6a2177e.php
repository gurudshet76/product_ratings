<!doctype html> 

<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <title>Product ratings </title> 
         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 
         <script src="https://code.jquery.com/jquery.js"></script> 
         <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script  type=”text/javascript” language=”javascript” src=”http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js”></script>

         <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
         <link rel="stylesheet" href="<?php echo e(asset('css/ratingcard.css')); ?>">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head> 
    <body> 
        <div class="container"> 
            <div class="row">
                <nav class="navbar navbar-default" role="navigation"> 
                    <div class="navbar-header"> 
                        <ul class="nav navbar-nav"> 
                                <li class="<?php echo e(Request::is('staffdash') ? 'active' : ''); ?>">
                                    <a href="./staffdash">Dashboard</a></li> 
                                <li class="<?php echo e(Request::is('prodinfo') ? 'active' : ''); ?>">
                                    <a href="./prodinfo">Products Management</a></li> 
                                <li class="<?php echo e(Request::is('prodratings') ? 'active' : ''); ?>">
                                    <a href="./prodratings">Reviews</a></li> 
                                <li><a href="/logout"> Logout </a></li>
                        </ul> 
                    </div> 
                </nav>
            </div>
            <?php echo $__env->yieldContent('content'); ?> 
        </div>
    </body> 
</html>

