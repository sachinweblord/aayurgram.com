<!doctype html>
<html lang="en">



<head>
  <meta charset="utf-8">
 <title>Maharshi Madhav Ayurgram | An Official Website</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->
  
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Start preloader -->
    
    <?php require_once('header.php');?>

    <main class="main__content_wrapper">
        
         <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">Reservation</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.php">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">Reservation</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <div class="login__section section--padding">
            <div class="container">
                <form action="#">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-1 row-cols-1">
                           
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Submit details to get Doctor consultation</h2>
                                        <p class="account__login--header__desc"> +91-7506650601</p>
                                    </div>
                                    
									<form action="" method="post">
										<div class="row">
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="First Name">First Name<span class="mandatory"> * </span></label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="text" class="account__login--input" required="" name="fname" id="fname" class="text" placeholder="Enter Your first Name" value="">
												<br><span><font color="red"></font></span>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Last Name">Last Name <span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="text" class="account__login--input" required="" name="lname" id="lname" value="" class="text" placeholder="Enter Your Last Name">
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="First Name">Mobile No <span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="text" class="account__login--input" required="" name="mobile" id="phone" value="" class="text" placeholder="Enter Mobile No">
												<span><br><font color="red"></font></span>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Company Address">Address <span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<textarea required=""  class="account__login--input" name="address" id="message" class="text" placeholder="Enter Your  Address"></textarea>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Country">Your Country </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="text" class="account__login--input" name="country"  value="" id="country" class="text" placeholder="Enter Your Country">
											</div>

											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Email ID">Email ID <span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-9">
												<input type="email" class="account__login--input" required="" name="email" id="email" value="" class="text" placeholder="Enter your Email Id">
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="treatment">Choose Treatment <span class="mandatory"> * </span></label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<select name="treatment" class="account__login--input" class="text" required>
													<option value="" selected="selected">Choose Treatment for </option>
													<option value="Arthritis">Arthritis</option>
													<option value="Diabetes">Diabetes</option>
													<option value="Back Pain">Back Pain</option>
													<option value="Back Pain">PCOS/PCOD</option>
													<option value="Stress Management">Stress Management</option>
													<option value="Weight Loss">Weight Loss</option>
													<option value="Rejuvenation">Rejuvenation</option>
													<option value="other">Any Other</option>
												</select>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="adult">No. of Adult <span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="text" class="account__login--input" required="" name="adult" value="" id="adult" class="text" placeholder="No of  Adult">
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Date">Required Date<span class="mandatory"> * </span> </label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<input type="date" class="account__login--input" required="" name="dob" value="" id="dob" class="text" placeholder="required Date">
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3">
												<label for="Query">Query</label>
											</div>
											<div class="col-sm-12 col-md-9 col-lg-9">
												<textarea required="" class="account__login--input" name="query" id="query" class="text" placeholder="Enter Your Query"></textarea>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-12">
												<center>
												<input type="submit" name="submit" id="name" class="btn book-btn" value="SUBMIT ">		
												</center>
											</div>
										</div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
        

    </main>

    <!-- Start footer section -->
   <?php require_once('footer.php');?>

  <script src="assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
  <script src="assets/js/plugins/glightbox.min.js" defer="defer"></script>

  <!-- Customscript js -->
  <script src="assets/js/script.js" defer="defer"></script>
  
</body>

</html>