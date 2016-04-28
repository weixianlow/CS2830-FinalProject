
<?php
	// Every time we want to access $_SESSION, we have to call session_start()
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!doctype HTML>
<html>
    <head>
        <title>Final Project | Upload</title>
        
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        
        <script src="upload_js.js"></script>
    
        <link rel="stylesheet" type="text/css" href="/finalproject/style.css">
        
        
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
                <li class="active"><a href="http://wow.centralus.cloudapp.azure.com/finalproject/pages/upload_landing.php">Upload Pictures</a></li>
              
            </ul>
              </div>
            
          </div>
        </nav>
        
        <div class="container-fluid content" id="content">
            
            <div class="alert alert-info">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Info</strong> You are currently logged on. To log out, please click the log out link at the bottom of the page. 
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div id="uploadView">
                    <div id="uploadViewContent">
                        <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                            <div id="image_preview">
                                <img id="previewing" src="noimage.png" />
                            </div>

                            <div id="selectImage">
                                <label>Select Your Image</label><br/>
                                    <p></p>
                                <input type="file" name="file" id="file" required />
                                <input type="submit" value="Upload" class="submit" />
                            </div>

                        </form>
                    </div>
                    
                </div>
            
        </div>
           <div class="col-sm-8">
               <div class="container-fluid ">
                   <h4 id='loading' >loading..</h4>
                <div id="message">
                   </div>
               </div>
                
            </div>
        </div>
            
           <p><b>To Logout:</b> click <a href="logout.php">here</a>! </p> 
            
        </div>
        
        
        
        
    
</body>
    
    
</html>