<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Payment			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="price.html"> Pricing Plan</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	



<?php 
include('./header.php');

?>

<style>

.rows {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containers {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<br><br>
<h2 style="  text-align: center; " >Pricing details details</h2>
<br><br>
<div class="rows" style=" margin-left: 10px; margin-right: 10px; " >
  <div class="col-75">
    <div class="containers">
      <form autocomplete="off" method="POST" action="../checkouts.php">
      
        <div class="rows">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="c_name" placeholder="name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="adr"><i class="fa fa-address-card-o"></i> Payment to pay</label>
            <input type="text" id="adr" name="price" placeholder="542 W. 15th Street" value="Rs. 406" readonly>

            <input type="hidden" name="product_name" value="basic vlaunchu plan">
            <input type="hidden" name="phone" value="1234567890">
            <input type="hidden" name="amount" value="406">
           
          </div>

          
          
        </div>
        
        <input type="submit" value="Continue to checkout" class="btn">

        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_51Mh97vSEg9ZmT60hNE2jAd1wezJtUT3epaUyYZm1PX3f8HnKjzOcgel5nHNy80mwpAlB4V3Zp4mrbel6782kfH9p00MQsRRTPa"
          data-amount= "40600"
          data-name="basic premium plan"
          data-description="basic premium plan"
          data-currency="inr"
          data-locale="auto">
        </script>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Basic premium plan</a> <span class="price">RS. 399</span></p>
      <p><a href="#">Discount</a> <span class="price">Rs. - 22</span></p>
      <p><a href="#">Tax</a> <span class="price">Rs. 29</span></p>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs. 406</b></span></p>
    </div>
  </div>
</div>
<br><br>

<?php 
include('./footer.php');

?>
