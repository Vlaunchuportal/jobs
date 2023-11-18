        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container" style="height: 220px;" >
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Admin section	
                                </h1>	
        
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->
<style>
    .style123 {
        display: flex !important;
        
        
    width: 450px;
     height:40px;
      border-radius: 6px;
      }


      .ddd {
        margin: 20px 2px;
        
        width:30%;
      }
</style>

<?php   
include('./header.php');

// the code is for not to go directly to the specified file in typing in URL! 

if(isset($_SESSION['is_login'])) {
    $aemail = $_SESSION['aemail'];
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);
    $bb = $result->num_rows;
     
} else {
    echo "<script> location.href='../home.php'; </script>";
}



if(isset($_SESSION['is_login'])) {
    $aemail = $_SESSION['aemail'];
    $sql = "SELECT * FROM candidate";
    $result = $conn->query($sql);
    $aa = $result->num_rows;

}

if(isset($_SESSION['is_login'])) {
    $aemail = $_SESSION['aemail'];
    $sql = "SELECT * FROM recruiter";
    $result = $conn->query($sql);
    $cc = $result->num_rows;

}

if(isset($_SESSION['is_login'])) {
    $aemail = $_SESSION['aemail'];
    $sql = "SELECT * FROM canreporting";
    $result = $conn->query($sql);
    $dd = $result->num_rows;

}

     


?>
<section class="home">




<div class="container text-center mt-5" style="backdrop-filter: blur(10px);"><h2>Dashboard</h2></div>
        <div class="col-sm-12 mt-5">
            <div class="row mx-5 text-center">
                <div class="col-sm-3 mt-5">
                    <div class="card text-white bg-danger mb-5" style="max-width: 18rem;">
                        <div class="card-header">Jobs Posted by YOU </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $bb;  ?>
                                </h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">candidates</div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <?php echo $aa;  ?>
                                    </h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Recruiters</div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <?php echo $cc;  ?>
                                    </h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mt-5">
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header">Reports</div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                        <?php echo $dd;  ?>
                                        </h4>
                                        <a class="btn text-white" href="#">View</a>
                                    </div>
                                </div>
                            </div>
            </div>
                <div class="had">
                    <p class="bg-dark text-white ddd p-2">Listing for :</p>
                    <ul>
                        
                    <li><form action="jobs.php"><button type="submit"  class="btn style123 btn-outline-primary">Jobs</button></form></li><br>
                    <li><form action="candidate.php"><button type="submit" class="btn style123 btn-outline-success">candidates</button></form></li><br>
                    <li><form action="recruiter.php"><button type="submit" class="btn style123 btn-outline-info">Recruiters</button></form></li><br>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br><br>






<?php
include('./footer.php');

?>