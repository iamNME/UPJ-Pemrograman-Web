<?php
    include 'config/koneksi.php';
    include 'header.php';
?>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container-fluid bg-dark" style="padding: 10rem 2rem 5rem 2rem">
            <section id="contact" class="contact ptb-100" style="padding-top: 3rem; padding-bottom: 3rem;">
                <div class="overlay"></div>
                <div class="container">

                    <div class="row">


                        <div class="col-md-8 offset-md-2">
                            <!-- Title Of Section Center -->
                            <div class="section-title text-center">
                                <h2>Get In Touch</h2>
                                <h3>Contact <span>Me</span></h3>
                            </div>

                        </div>

                        <div class="offset-lg-1 col-lg-10 mb-20">
                            <div class="row">


                                <div class="col-md-4">
                                     <div class="contact-item">

                                         <div class="inner-contact">
                                            <span><i class="fa fa-location-arrow"></i></span>
                                             <h6>Address</h6>
                                         </div>
                                         <div class="info-cont">
																				 	<?php
																						$sql = "SELECT * FROM alamat";
																						$query = mysqli_query($conn, $sql);
																						if(mysqli_num_rows($query) > 0){
																							while($row = mysqli_fetch_assoc($query)){
																					?>
                                            <p style="word-wrap: break-word;"><?= $row['alamat'] ?></p>
																						<?php
																							}
																						}
																						?>
																				 </div>
                                         <div class="bg-icon"><i class="fa fa-location-arrow"></i></div>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="contact-item">

                                        <div class="inner-contact">
                                            <span><i class="fa fa-envelope"></i></span>
                                            <h6>Email</h6>
                                        </div>
																				<div class="info-cont">
																				 	<?php
																						$sql = "SELECT * FROM email";
																						$query = mysqli_query($conn, $sql);
																						if(mysqli_num_rows($query) > 0){
																							while($row = mysqli_fetch_assoc($query)){
																					?>
                                            <p style="word-wrap: break-word;"><?= $row['email'] ?></p>
																						<?php
																							}
																						}
																						?>
																				</div>

                                        <div class="bg-icon"><i class="fa fa-envelope"></i></div>
                                    </div>

                                </div>



                                <div class="col-md-4">
                                    <div class="contact-item">
                                        <div class="inner-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <h6>Call Me</h6>
                                        </div>
                                        <div class="info-cont">
																				 	<?php
																						$sql = "SELECT * FROM hubungisaya";
																						$query = mysqli_query($conn, $sql);
																						if(mysqli_num_rows($query) > 0){
																							while($row = mysqli_fetch_assoc($query)){
																					?>
                                            <p style="word-wrap: break-word;"><?= $row['number'] ?></p>
																						<?php
																							}
																						}
																						?>
																				</div>
                                        <div class="bg-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>


                            </div>

                        </div>



                        <div class="offset-lg-1 col-lg-10">

                                <form class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>

                                    </div>  

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="Email" placeholder="Email">
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="subject">
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Your Message Here "></textarea>
                                        </div>
                                    </div>
                                </div>


                                <!-- Button Send Message  -->
                                <a href="#" class="btn-one">Send Message</a>
                            </form>


                        </div>



                    </div>
                </div>

            </section>
    </div>

    <footer class="footer">
       <div class="container">
           <ul class="social-media text-center">
               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fab fa-behance"></i></a></li>
               <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
            <div class="copyright text-center">
                &copy; 2021 Jabarul Alqodri All Rights Reserved By
                <a href="#" target="_blank">Kumbaya</a>
            </div>
       </div>
    </footer>
    <!--==================================================================== 
							End Footer
	=====================================================================-->  
	<!-- Scroll To Top -->
    <div class="scroll-up">
        <span class="top-one"></span>
        <span class="top-two">Top</span>
        <span class="top-three"></span>
    
    </div> 
    <!--==================================================================== 
							End Section Content
	=====================================================================-->
	
	
	
   
    <!--====================================================================
                            Include All Js File 
     ====================================================================-->
     <!-- All Plugins -->
     <!--  jQuery js  -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Popper Js  -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap 4 Js  -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- OWL Carousel JS  -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- filterizr JS file -->
    <script src="assets/js/jquery.filterizr.js"></script>
    <!-- Magnific Popup JS  -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter To JS  -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!--  WOW Js  -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Script Font Awesome 5 -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>