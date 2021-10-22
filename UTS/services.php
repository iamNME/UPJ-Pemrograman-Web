<?php
    include 'config/koneksi.php';
    include 'header.php';
?>
<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container-fluid bg-dark" style="padding: 10rem 2rem 5rem 2rem">
        <section id="service" class="services" style="padding-top: 3rem; padding-bottom: 3rem;">
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
                    <!-- Services Items Column -->
                    <?php
                        $sql = "SELECT * FROM services";
                        $query = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
                                    
                    ?>
                    <div  class="col-md-6 col-lg-4">
                        <div class="services-item">
                            <div  class="icon-services">
                                <span><i class="icon icon-basic-postcard"></i></span>
                            </div>
                            <h4><?= $row['judulservice'] ?></h4>
                            <hr>
                            <p><?= $row['deskripsi'] ?></p>
                            <!-- <span class="number-bg"><?= $x ?></span> -->
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