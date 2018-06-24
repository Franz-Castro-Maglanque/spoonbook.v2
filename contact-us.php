<?php   include("includes/layouts/about_header.php"); ?>
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Contact Us</h2>
                                <span>Home / <a href="contact-us.php">Contact Us</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Feel free to send a message</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                                <form action="email_contact.php" method="post" class="send-message">
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                        <input type="text" name="name" id="name" placeholder="Name" />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="text" name="email" id="email" placeholder="Email" />
                                                    </div>
                                                    <div class="subject col-md-4">
                                                        <input type="text" name="subject" id="subject" placeholder="Subject" />
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <textarea name="message" placeholder="Message"></textarea>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit" name="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                               
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>09060365397</li>
                                                    <li><i class="fa fa-globe"></i>39-A Camia St Miguelito Home Hen T. De Leon Valenzuela City</li>
                                                    <li><i class="fa fa-envelope"></i><a href="#">ranze001851@gmail.com</a></li>
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Find Us On Map</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div id="googleMap" style="height:340px;"></div> -->
<!--  <iframe
  width="1200"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBCafwthHyM8Zd012j1vwmqUtY5ZKKX47g
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>
 -->
<iframe 
width="1200"
height="450" 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.3610224117865!2d120.99545721439792!3d14.692164489744211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b152c084a16b%3A0x6732cc9a66460f8d!2sMiguelito+Homes!5e0!3m2!1sen!2sph!4v1519635762739" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>     
                </div>
            </div>


            <?php   include("includes/layouts/footer.php"); ?>