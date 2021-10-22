<?php
    include 'config/koneksi.php';
    include 'header.php';
?>
<body>
    <?php
        include 'navbar.php';
    ?>

    <div class="container-fluid bg-dark" style="padding-top: 10rem; padding-bottom: 10rem;">
        <div class="row text-white">
            <div class="col">
                <?php
                    $sql = "SELECT * FROM tentangsaya";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query) > 0){
                        while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col">
                        <img src="assets/images/about/about.jpg" width="200" height="100" alt="Photo" style="border-radius: 50%;">
                        <h1 class="mt-4"><?= $row['namalengkap'] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <article class="text-white" style="padding: 2rem 10rem;">
                            <?= $row['isi'] ?>
                        </article>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
                    <div class="container" style="padding: 2rem 10rem;">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <!-- Title Of Section Center -->
                                <div class="section-title text-center">
                                    <h2>Code</h2>
                                    <h3><span>My</span> Skills</h3>
                                </div>
                            </div>
                            <?php
                                $sql1 = "SELECT * FROM skill";
                                $query1 = mysqli_query($conn, $sql1);
                                if(mysqli_num_rows($query1) > 0){
                                    while($row = mysqli_fetch_assoc($query1)){
                            ?>

                            <div class="col-md-12">
                                <div class="info-skills">
                                    <div class="skills">
                                        <div class="skill-box"> 
                                            <h4 class="skill-title"><?= $row['judulskill'] ?></h4> 
                                            <div class="progress-line"> 
                                                <span data-percent="<?= $row['progress'] ?>"><span class="percent-tooltip"><?= $row['progress'] ?>&percnt;</span></span> 
                                            </div>
                                        </div>
                                    </div>
                               </div>  
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>   
                    </div>
            </div>
        </div>
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
         <!-- Copyright By Me NourEgy  -->
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