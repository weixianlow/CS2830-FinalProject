<!doctype HTML>
<html>
    <head>
        <title>Final Project | Login</title>
        
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        
        <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    
        <style>
            #authorPicture{
                width: 300px;
                float: left;
                margin: 10px;
            }
            #authorInformation{
                margin: 10px;
            }
            .content{
                margin-top: 50px;
            }
            
            
        </style>
        
        
    </head>
    
    
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
              <a class="navbar-brand" href="#">CS2830 Final Project</a>
            </div>
              <div class="collapse navbar-collapse" if="myNavbar">
              <ul class="nav navbar-nav">
              <li><a href="http://wow.centralus.cloudapp.azure.com/finalproject/">Home</a></li>
              <li><a href="about.html">About Author</a></li>
                <li><a href="http://wow.centralus.cloudapp.azure.com/finalproject/pages/upload_landing.php">Upload Pictures</a></li>
              
            </ul>
              </div>
            
          </div>
        </nav>
        
        <div class="container-fluid content">
            
            
            
            <div class="alert alert-warning">
            
            <strong>Warning!</strong> This website still under construction!
        </div>
            
            
            
            
            
            <div class="container">
              <h2>Please Enter Login Information to upload photos! </h2>
                
                <?php
            if ($error) {
    
                print '<div class="alert alert-danger" id="login_error">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> Incorrect User name and Password Combination! Please Try Again.
            </div>';
                console.log("error issued");
            }
            ?>
                
              <form role="form" action="login.php" method="POST">
                  
                  <input type="hidden" name="action" value="do_login">
                <div class="form-group">
                  <label for="username">User Name:</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autofocus value="<?php print $username; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password"placeholder="Enter password">
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
            
            
            
        </div>
        
        
    
</body>
    
    
</html>