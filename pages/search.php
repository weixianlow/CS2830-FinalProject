<?php
        $file = htmlspecialchars($_get["fileType"]);
?>

<!doctype HTML>
<html>
    <head>
        <title>Final Project | About</title>
        
           <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    
        
    
        <style>
            
            #authorInformation{
                margin: 10px;
                
                
            }
            .content{
                margin-top: 50px;
            }
            #video{
                margin: 0 auto;
                align-content: center;
                
            }
            
            #authorPicture{
                width :300px;
                
            }
            #authorImage{
                float: left;
            }
            
            .title{
                text-align: center;
            }
            
            img.thumbnails{
                width: 200px;
                padding: 10px;
            }
            
            
        </style>
        
        
    </head>
    
    
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">CS2830 Final Project</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="http://wow.centralus.cloudapp.azure.com/finalproject/">Home</a></li>
              <li><a href="about.html">About Author</a></li>
                <li><a href="http://wow.centralus.cloudapp.azure.com/finalproject/pages/upload_landing.php">Upload Pictures</a></li>
              
            </ul>
          </div>
        </nav>
        
        <div class="container-fluid content">
            
            <div id="blueimp-gallery" class="blueimp-gallery">
                    <!-- The container for the modal slides -->
                    <div class="slides"></div>
                    <!-- Controls for the borderless lightbox -->
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                    <!-- The modal dialog, which will be used to wrap the lightbox content -->
                    <div class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body next"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left prev">
                                        <i class="glyphicon glyphicon-chevron-left"></i>
                                        Previous
                                    </button>
                                    <button type="button" class="btn btn-primary next">
                                        Next
                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            
                    
           <div class="links">
            <?php
            
                if(htmlspecialchars($_GET["fileType"]) == "jpg" || htmlspecialchars($_GET["fileType"]) == "jpeg" || htmlspecialchars($_GET["fileType"]) == "png" || htmlspecialchars($_GET["fileType"]) == "gif"  )
                {
                    echo '<h4 class="title"> Search results for "'. htmlspecialchars($_GET["fileType"]) . '" images. </h4>';
                    
                    echo '<div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Result has been shown below.
                                </div>';
                    foreach(glob('Images/*.'.htmlspecialchars($_GET["fileType"]).'') as $filename){
                        echo "<a href='".$filename."' title='".$filename."' data-gallery><img src='".$filename."' alt='".$filename."' class='thumbnails'></a>";
                    }
                    
                }else{
                    echo '<h4 class="title"> Search results for "'. htmlspecialchars($_GET["fileType"]) . '" images. </h4>';
                    echo '<div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error!</strong> The search parameter "'. htmlspecialchars($_GET["fileType"]) .'" is not a valid file type. Please try again with a valid file type (eg: png, jpeg, jpg, or gif)
                                </div>';
                }
                    
                    ?>
            </div>         
            
            
            
            
        
        </div>
         <div class="row">
                    <div class="col-sm-6" padding="5px">
                        <div class="container">
                            <p></p>
                            <p>If you like to upload a photo to our website, <a href="/finalproject/pages/login.php">login</a> now!</p>
                            <p>If you have any question or inqueries, feel free to <a href="mailto:wlkr7@mail.missouri.edu">email</a> the author!</p>
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="container">
                            <h4> Search for image type:</h4>
                            <p>Type in the search bar below to filter through specific file type!</p>
                            <p>The search parameter accepts: 'jpg', 'png', 'gif', and 'jpeg'</p>
                            <form action="./search.php" method="get" target="_blank">
                              <input type="text" name="fileType", placeholder="jpg, jpeg, png, gif">
                              <input type="submit" value="Submit">
                            </form>
                        </div>
                        
                    </div>
                </div>

    
</body>
    
    
</html>