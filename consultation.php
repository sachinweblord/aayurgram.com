<!doctype html>
<html lang="en">



<head>
  <meta charset="utf-8">
  < <title>Maharshi Madhav Ayurgram | An Official Website</title>
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
                            <h1 class="breadcrumb__content--title mb-10">Consultation</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.php">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">Consultation</span></li>
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
                                    <!--<div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" placeholder="Username" type="text">
                                        </label>
                                        
                                        <label>
                                            <button class="account__login--btn primary__btn mb-10" type="submit">Submit</button>
                                        </label>
                                    </div>-->
						<form action="#." enctype="multipart/form-data" method="post" >
							<div class="row">
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="First Name">First Name</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input class="account__login--input" type="text" required="" name="fname" value="" id="fname" class="text" placeholder="Enter Your Full Name">
									
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="Last Name">Last Name</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="text" class="account__login--input" required="" name="lname" value="" id="lname" class="text" placeholder="Enter Your Last Name">
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="Email ID">Email ID</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="email" class="account__login--input" required="" name="email" value="" id="email" class="text" placeholder="Enter your Email Id">
									<span><br><font color="red"></font></span>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="city">Contact Number</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="text" class="account__login--input" required="" name="mobile" value=""  id="mobile" class="text" placeholder="Enter your contact number">
									<span><br><font color="red"></font></span>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="Age">Age</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="text" class="account__login--input" required="" name="age" value="" id="age" class="text" placeholder="Enter Your Age">
								</div>

								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="gender">Gender</label>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-9">
									<label><input type="radio" class="account__login--input" required="" name="gender" value="Male" id="gender" placeholder="Gender">Male</label>
                         			<label><input type="radio" required="" name="gender" value="Female" id="gender" placeholder="Gender">Female</label>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="city">City</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="text" class="account__login--input" required="" name="city" value="" id="city" class="text" placeholder="Enter your City">
								</div>
								
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="healthissue">Present Health Problems</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<textarea required="" class="account__login--input" name="healthissue" id="healthissue" class="text"></textarea>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="history">Any Past Medical History</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<textarea required="" name="history" class="account__login--input" id="history" class="text"></textarea>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="medication">On going medication if any</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<textarea required="" class="account__login--input" name="medication" id="medication" class="text"></textarea>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3">
									<label for="Gender">Reports if any</label>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9">
									<input type="file" class="account__login--input" name="pdf" id="name" class="form-control" value="">
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