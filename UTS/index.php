<?php
    include 'config/koneksi.php';
    include 'header.php';
?>

<body>
    <?php
        include 'navbar.php'
    ?>
    <!--==================================================================== 
							End Of Navbar 
	=====================================================================-->

    <!--==================================================================== 
							Start Header 
	=====================================================================-->
<section id="home" class="home">
    <div class="overlay"></div>
    <div class="container">
       <div class="banner display-table">
            <div class="info-header table-cell">
                
                <?php
                    $sql = "SELECT * FROM tentangsaya";
                    $query = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query)){
                        while($row = mysqli_fetch_assoc($query)){
                ?>
                <!-- Heading Title For Header -->
                <h1><span id="first">I'M</span> <br> <span id="second" style="text-transform: uppercase;"><?= $row['namalengkap'] ?></span> <br> <span id="third">I'M A </span> <span id="fourth">WEB DEVELOPER</span></h1>
                
                <!-- <ul class="banner-meta"> 
                    <li>Web Designer</li>
                    <li>Web Developer</li>
                    <li>UI/UX Designer</li>
                </ul> -->

                <!-- Button Banner -->
                <div class="text-box banner-btn" style="margin-bottom: -5rem;">   
                    <a href="#" class="btn-one">My Portfolio</a>
                    <p style="display: flex;" class="connect align-items-center text-white">Connect With Me <span style="font-size: 30px; margin-left: 5px;">&#x27F6</span></p>
                    <span style="letter-spacing: 1px;" class="text-white">You Can Explore More About My Portfolio And <br>Personal Life Experience Here.</span> 
                </div>
                
                <!-- <a href="#about" class="down">
                    <span class="down-one"></span>
                    <span class="down-two">About Me</span>
                    <span class="down-three"></span>         
                </a> -->

                <div class="social-icons">
                    <a href=""><img src="images/dribble.png" alt="Dribble"></a>
                    <a href=""><img src="images/telegram.png" alt="Telegram"></a>
                    <a href=""><img src="images/instagram.png" alt="Instagram"></a>
                </div>

                
            </div>
       </div>
    </div>
</section>
   <!--==================================================================== 
							End Header 
	=====================================================================-->
     <!--==================================================================== 
							Start Section About
	=====================================================================-->
<section id="about" class="about ptb-100">
    <div class="container">
    
        <div class="row">

            <div class="col-lg-6">
                <div class="about-img">
                    <div class="box-img">
                        <img src="assets/images/about/about.jpg" alt="About-me">
                    </div>
                </div>
            </div>

             <div class="col-lg-6">
                <div class="info-about">
                    <!-- Title Of Section Left -->
                    <div class="section-title-left">
                        <h2>I'm <?= $row['namalengkap'] ?></h2>
                        <h3 style="word-wrap: break-word"><?= $row['judul'] ?></h3>
                    </div>
                    
                    <p class="mb-10"><?= substr($row['isi'],0,650)."..." ?></p>
                    
                    <a href="about.php" class="btn btn-warning mt-2" style="font-weight: bold; letter-spacing: 1px;">Read More <span>&#x27F6</span></a>
                    <!-- <div class="profile">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name: <span>Nour Eldin</span></p>
                            </div>

                            <div class="col-md-6">
                                <p>Age: <span>25</span></p>
                            </div>

                            <div class="col-md-6">
                                <p>Phone: <span>+011 499 123 18</span></p>
                            </div>

                            <div class="col-md-6">
                                <p>Address: <span>New York, USA</span></p>
                            </div>
                            
                            <div class="col-md-6">
                                <p>Freelance: <span>Available</span></p>
                            </div>

                            <div class="col-md-6">
                                <p>Nationality: <span>American</span></p>
                            </div>
                            
                            
                        </div>
                        <span class="icon-bg"><i class="far fa-address-book"></i></span>
                    </div> -->
                    
                    
                    <!-- <div class="follow-me">
                        <p>Follow Me : </p>
                        <ul class="social-media-about">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fa-behance"></i></a></li>
                           <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>

                    </div> -->
            </div>
         </div>
            
        </div>
        
    </div>
       
</section>
                <?php
                    }
                }
                ?>
   
    <!--==================================================================== 
							End Section About
	=====================================================================-->
    
    

   <!--==================================================================== 
							Start Section Services
	=====================================================================-->
<section id="service" class="services pt-100 pb-70">
    <!--========== My Services Info ==========-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Title Of Section Center -->
                <div class="section-title text-center">
                    <h2>What Love I Do</h2>
                    <h3><span>My</span> Services</h3>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM services ORDER BY id LIMIT 0,3";
                $query = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_assoc($query)){
            ?>
           <!-- Services Items Column -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon-services">
                        <span><i class="icon icon-basic-postcard"></i></span>
                    </div>
                    <h4><?= $row['judulservice'] ?></h4>
                    <hr>
                    <p><?= $row['deskripsi'] ?></p>
                    <!-- <span class="number-bg">01</span> -->
                </div>
            </div>  
            <?php
                    }
                }
            ?>
        </div>
        <div class="row text-center pt-4">
            <div class="col">
            <a href="services.php" class="btn btn-warning mt-2" style="font-weight: bold; letter-spacing: 1px;">More <span>&#x27F6</span></a>
            </div>
        </div>
    </div>
</section>     
    <!--==================================================================== 
							End Section Services
	=====================================================================-->

    
    
   <!--==================================================================== 
							Start Section Portfolio 
	=====================================================================-->
 <section id="portfolio" class="portfolio pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Title Of Section Center -->
                <div class="section-title text-center">
                    <h2>Let's See My Work</h2>
                    <h3><span>My</span> Portfolio</h3>

                </div>
                
                <!-- Control List -->
             <!-- <div class="filter-group">
                <ul id="control" class="list-control">
                   <li class="active" data-filter="all">All</li>
                   <li data-filter="1">Web Desing</li>
                   <li data-filter="2">Graphic Desing</li>
                   <li data-filter="3">Branding</li>
               </ul>
             </div> -->
            </div>
        </div>
        <!-- End Row 1 Column -->
        <!-- Start Row 2 Column -->
        <div id="filtr-container" class="row">
            <!-- Column Image -->
            <?php
                $sql = "SELECT * FROM portfolio ORDER BY id LIMIT 0,3";
                $query = mysqli_query($conn, $sql);

                if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_assoc($query)){
            ?>
            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="assets/images/portfolio/item-1.jpg" alt="my-work">
                    </div>
                    <a class="overlay" href="detail-project.php?id='<?= $row['id'] ?>'">
                        <span class="icon-img"><i class="fas fa-eye"></i></span>
                        <div class="info-img">
                            <span style="word-wrap: break-word;"><?= $row['judulproject'] ?></span>
                            <!-- <h5>Web Design</h5> -->
                        </div>
                    </a>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
    <!--==================================================================== 
                                End Section Portfolio 
    =====================================================================-->
    

    <!--==================================================================== 
							Start Section Contact
	=====================================================================-->
<section id="contact" class="contact ptb-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 offset-md-2">
                <!-- Title Of Section Center -->
                <div class="section-title text-center">
                    <h3>Want To Interact With Me ?</h3>
                </div>
                <a href="contact-me.php" class="btn btn-warning">Contact Me</a>
            </div>
        </div>
    </div>
    
</section>
        
    <!--==================================================================== 
							Start Footer
	=====================================================================--> 
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
         <!-- Copyright By Me NourEgy  -->
        <div class="copyright text-center">
            &copy; 2018 Nour All Rights Reserved By
            <a href="#" target="_blank">NourEgy</a>
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