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
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM portfolio WHERE id='$id'";
                        $query = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col">
                        <img src="<?= $row['gambar'] ?>" width="300" height="200" alt="Photo" style="border-radius: 1%;">
                        <h1 class="mt-4"><?= $row['judulproject'] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <article class="text-white" style="padding: 2rem 10rem;">
                            <?= $row['deskripsi'] ?>
                        </article>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="<?= $row['link'] ?>" style="font-weight: bold; letter-spacing: 1px;" class="btn btn-warning">See Project</a>
                    </div>
                </div>
                <?php
                            }
                        }
                    }
                ?>
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