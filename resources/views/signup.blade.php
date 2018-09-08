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

    </head>
    
    <body>
        
        <?php
//            include '../../app/Http/Controllers/SignupControllers.php';
//        ?>

        
       <ul class="nav nav-tabs">
           <li role="presentation" class="active"><a href="dashboard">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
        </ul>
        
        
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
        
        
        
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown trigger
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
    <li><a href="#">Action</a></li>
  </ul>
</div>
        
        
        <form class="control-label col-sm-6" method="post" >
            
            {{ csrf_field() }}
            <div class="form-group">
                  <label for="email">Name :</label>
                  <input type="text" class="form-control" name="name" id="name" required="">
            </div>
            <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
            </div>
            <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password" required="">
            </div>

            <div class="form-group">    
                <select class="form-control" name="belad">
                @foreach($country as $country)
                    <option>{{ $country->country }}</option>
                @endforeach
                </select>
            </div>    

            
<!--            <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
            </div>-->
                <button type="submit" name="btn1" class="btn btn-default">Submit</button>
        </form>

        
       
        
   
    </body>
    
    <script type="text/javascript">
            
//            $(document).ready(function() {
//               $('.dropdown-toggle').dropdown();
//            });
        </script>
        
</html>


 