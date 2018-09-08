<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--        <script src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Login page</title>
    </head>
    <body>
        
        <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="dashboard">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
        </ul>
        
        
        <form class="control-label col-sm-6" method="post">
            
            {{ csrf_field() }}

            
            <div class="form-group">
                  <label for="email">email :</label>
                  <input type="text" class="form-control" name="email" id="name">
            </div>
            <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password">
            </div>
            
             <div class="form-group">
                <button type="submit"  class="btn btn-default navbar-btn">Sign in</button>
             </div>
            
        </form>
        
    </body>
</html>
