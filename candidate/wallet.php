  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container" style="  height: 220px; " >
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Wallet	
                                </h1>	
                                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> CV</a></p>
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->

<?php
include('./header.php');


if(isset($_SESSION['is_login'])) {
    $canLogEmail = $_SESSION['lemail'];
} else {
    echo "<script> location.href='../home.php';</script>";
}

$sql = "SELECT * FROM candidate WHERE cemail = '$canLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $wall = $row['wallet'];
}


?>
<style>
    .yy {
        
        margin-left: 230px;
        
    }
    .uu {
        width:200px;
    }
</style>
<section class="price-area  section-gap" id="price">
				<div class="container ">

                <div class="">
						<div class="col-lg-7 yy">
							<div class="single-price no-padding y">
								<div class="price-top">
									<h4>Wallet Money</h4><br>
                                    <div class="price-wrap d-flex flex-row justify-content-center">
										<span class="price hh"><img src="../img/coin.png" style=" height: 37px; width: 37px; " alt=""></span><h1><?php echo ""; ?>   <?php echo $wall;  ?> </h1><span class="time">  </span>
									</div>
								</div>
								<ul class="lists">
									<li>Use the coins for membership </li>
									<li>Use coins for unlock features</li>
									<li>Coins to buy a theme</li>
									<li>Referral Code: <input  type="text" value="<?php echo $row['referralcode']; ?>"  id="myInput"> <a  href=""> </a></li>
                                    <button class=" btn-info "  onclick="myFunction()" > copy code</button>
								</ul>
								<div class="price-bottom">
									
									<a href="#" class="primary-btn header-btn">Spend Money</a>
								</div>
								
							</div>
						</div>



                </div>
</section>


<script>
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>
<?php
include('./footer.php');

?>