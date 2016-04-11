
                        
                        //The div element that will contain the images
                        var imageContainer = document.getElementById("links");
                      
                      console.log("Executing");
                        callForImages();
                      console.log("executed");
                        //Makes an asynch request, loading the getimages.php file
                        function callForImages() {
                            //Create the request object
                            var httpReq = (window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
                            
                            //When it loads,
                            httpReq.onload = function() {
                                //Convert the result back into JSON
                                var result = JSON.parse(httpReq.responseText);
                                console.log("calling loadImages()");
                                console.log(result);
                                //Show the images
                                loadImages(result);
                                console.log("called compleate");
                            }
                            //Request the page
                            try {
                                httpReq.open("GET", "filecheck.php", true);
                                httpReq.send(null);
                            } catch(e) {
                                console.log(e);
                            }
                        }
                        //Generates the images and sticks them in the container
                        function loadImages(images) {
                            
                            
                            console.log("entering loop");
                            
                            //For each image,
                            for(var i = 0; i < images.length; i++) {
                                console.log("loop: "+ i);
                                
                                    var aTag = document.createElement("a");
                                    aTag.setAttribute("href", images[i]);
                                    aTag.setAttribute("title", images[i]);
                                    aTag.setAttribute("data-gallery", "");
                                    
                                    
                                    //Make a new image element, setting the source to the source in the array
                                    var newImage = document.createElement("img");
                                    newImage.setAttribute("src", images[i]);
                                    newImage.setAttribute("alt", images[i]);
                                    newImage.setAttribute("class", "thumbnails");
                                    aTag.appendChild(newImage)
                                    //Add it to the container
                                    imageContainer.appendChild(aTag);
                            }
                        }
            
