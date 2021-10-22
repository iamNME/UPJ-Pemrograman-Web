<?php
    include 'config/koneksi.php';
    include 'header.php';
?>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container-fluid bg-dark" style="padding: 10rem 2rem 5rem 2rem">
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
                        $sql = "SELECT * FROM portfolio";
                        $query = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                        <div class="my-work">
                            <div class="image">
                                <img class="img-fliud" src="assets/images/portfolio/item-1.jpg" alt="my-work">
                            </div>
                            <a class="overlay" href="detail-project.php?id=<?= $row['id'] ?>">
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