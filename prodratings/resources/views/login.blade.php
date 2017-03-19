<!doctype html> 

<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <title>Microsoft Product Management</title> 
         <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> 
         <script src="https://code.jquery.com/jquery.js"></script> 
         <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head> 
    <body> 
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" action="/login" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <label for="location" class="control-label">Location: </label>
                                    <div class="controls">
                                         <select id="location" name="location" class="form-control">
                                                <option value="US">USA</option>
                                                <option value="IN">INDIA</option>        
                                        </select>  
                                    </div>
                                </div> <!-- /field -->
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="yes"> Remember Me
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="visitor" type="checkbox" value="yes"> Visitor Login
                                    </label>
                                </div>

                                
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                <!--<input class="btn btn-lg btn-success btn-block" type="submit" value="Guest Login">-->
                            </fieldset>
                            </form>
                            <hr/>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>