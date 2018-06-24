<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div> -->
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Spoonbook</h4>
                                    <p>Our company was built in 2017 with an idea of making the peoples live easier by going to our website and click spoonbook and tbe different catering services will appear and customers can choose any kind of catering services that would fit to their needs.
Composed of 4 people @Franz Maglanque - programmer, @Sherwin John - documentation, @Carebe Catungal - data gathering/documentation, Julie Anne Bañaga - data gathering/documentation.
In the world of internet nowadays our website offers a great service in online catering industry.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">CATERING CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>WEDDING</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>DEBUT</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>CHILDREN PARTY</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>SPECIAL OCCASION</a></li>
                                      <!--   <li><a href="#"><i class="fa fa-angle-right"></i>CORPORATE EVENTS CATERING PACKAGES</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>EVENTS STYLING</a></li> -->
                                    </ul>
                                </div>
                            </div>
                         <!--    <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    <p>For Questions and Suggestion on how we can improve the website please contact us:</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>09060365397</li>
                                        <li><i class="fa fa-globe"></i>39-A Camia St Miguelito Homes</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">ranze001851@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>
                            <span>Copyright © 2018 <a href="#">SpoonBook</a> 
                        </p>
                    </div>
                    
                </div>
            </footer>

    
        <!-- <script src="js/vendor/jquery-1.11.0.min.js"></script> -->
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
               





                
        <script>
        
        var map;
        
        function initialize()
        {
            var map_options = {
              center: new google.maps.LatLng(16.8496189,96.1288854),
              zoom: 15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        google.maps.event.addDomListener(window, "resize", function() 
        {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center); 
        });

            
            function myFunction1(){
                window.history.back();
            }

function myFunction(link){
window.location=link;
}


        
        </script>
    </body>
</html>