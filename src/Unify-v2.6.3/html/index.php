<?php 
if(isset($_POST['submit'])){
    $to = "registration@cryptostrains.io"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $agreed = $_POST['agreed']; 
    $subject = "Raffle Registration" . " " . $from;
    $subject2 = "CryptoStrain Raffle Registered";
    $message = $first_name . " " . $last_name . "has registered for the Spannabis Raffle with email" . $from . "\n\n" . "agreed?" . $agreed;
    $message2 = "Hello" . " " . $first_name . "\n \n" . "You have sucessfully registered for the exclusive 2023 CryptoStrains Raffle." . $_POST['message'] . "\n \n" . "Good Luck";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Thank you!  " . $first_name . ", you sucessfully registered for the raffle!!";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>CryptoStrains by Papriko Ink.</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
	  <link rel="stylesheet" href="https://use.typekit.net/otu0qzl.css">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">

    <link rel="stylesheet" href="navbar.css">


    <!-- CSS Template -->
    <link rel="stylesheet" href="assets-site/css/styles.op-architecture.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>

  <body>
    <main>  
      <br>

      <nav class="navbar navbar-expand-lg text-center justify-content-center align-items-center">

        <div class="center text-center justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="givaway-text nav-link text-center" href='https://cryptostrains.io' >ABOUT/INFO</a>
            </li>
            <li class="nav-item">
              <a class="givaway-text nav-link text-center" href="https://collection.cryptostrains.io">NFT-COLLECTION</a>
            </li>
            <li class="nav-item">
              <a class="givaway-text nav-link text-center" href="https://cryptostrains.io/faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="givaway-text nav-link text-center greyed" href="#">OPEN SEA</a>
            </li>
          </ul>
        </div>
      </nav>


      <div class="row text-center">
		    <div class="col-md-4 g-mb-10">
          <img class="comming-soon" src="assets-site\coming-soon\coming-soon.svg" alt="Logo Bud">
        </div>
        <div class="col-md-4 g-mb-10">
          <img class="logo_bud d-none d-lg-inline d-xl-inline" src="assets-site\graphic\Logomark\Logo_Bud.svg" alt="Logo Bud">
        </div>
			  <div class="col-md-4 g-mb-10">
          <img class="logo_papriko" src="assets-site\graphic\Logomark\Logo_Papriko-Ink.svg" alt="Papriko Logo">
        </div>
      </div>
      
      <div class="row text-center justify-content-center">
        <div class="col-md-4 g-mb-10">
          <img class="logo_cryptostrains" src="assets-site\graphic\Logomark\Logo_CryptoStrains.svg" alt="Logo Cryptostrains">
        </div>
      </div>

      <div class="row text-center justify-content-center">
        <div class="col-md-4 g-mb-10 g-mb-10 g-mt-10">
          <img class="trim_line" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="TRIM LINE">
        </div>
      </div>


      
      <!-- LOGOMARK -->
      <section class="g-theme-bg-gray-light-v1 g-mb-10">
		    <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-md-2 g-mb-10">
              <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
              <a href="https://www.instagram.com/cryptostrains.io/" class="h4 g-color-primary g-font-size-14 text-uppercase g-letter-spacing-2">Instagram</p></a>
            </div>

            <div class="col-md-2 g-mb-10">
              <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
              <a href="" class=" h4 g-color-primary g-font-size-14 text-uppercase g-letter-spacing-2">Discord</p></a>
            </div>

            <div class="col-md-2 g-mb-10">
              <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
              <a href="https://twitter.com/crypto_strains" class=" h4 g-color-primary g-font-size-14 text-uppercase g-letter-spacing-2">Twitter</p></a>
            </div>
          </div>
        </div>
      </section>	  

      <div class="text-center">
        <h1 class="givaway-text text-center mt-50 mb-10">Exclusive NFT Giveway</h1>
        <p class="givaway-text">Enter your name and email address and have the chance to win 1 of 420 CryptoStrain NFTs</p>
          <div className="form-row">
          <form action="" method="post">

            <div class="form-group col-12">
              <h3 class="givaway-text">First Name:</h3> <input type="text" name="first_name"><br>
            </div>
            <div class="form-group col-12">
              <h3 class="givaway-text"> Name:</h3> <input type="text" name="last_name"><br>
            </div>
            <div class="form-group col-12">
              <h3 class="givaway-text">Email:</h3> <input class="required" type="email" name="email"><br>
            </div>
            <input class="required" type="checkbox" id="vehicle3" name="agreed" value="yes">
              <label class="givaway-text" for="vehicle3"> I agree to the terms & services</label><br>
          </div>
          <input class="givaway-btn btn btn-submit mt-3" type="submit" name="submit" value="Submit">
        </form>
      </div>

      <div class="container mt-50">
        <div class="row">
          <div class="col-sm-12 text-center">
            <img class="thunder_l" src="assets-site\graphic\Intro\Thunder-L.svg" alt="Papriko Logo">
            <img class="graphics_bud" src="assets-site\graphic\Intro\Graphics_Bud.svg" alt="Papriko Logo">
            <img class="thunder_r" src="assets-site\graphic\Intro\Thunder-R.svg" alt="Papriko Logo">
          </div>
      </div>



      <div class="row text-center justify-content-center">
        <div class="col-md-12 g-mb-10 g-mb-10 g-mt-10 g-mt-30">
          <h1 class="text-uppercase u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-size-30 g-font-size-40--md mb-0"><strong>420</strong> <br>hand-drawn <br>cannabis strains</h1><br>
          <img class="trim_line g-mb-20" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="Papriko Logo">
          <p class="h3 g-letter-spacing-2 g-font-size-20 g-font-weight-400 g-color-primary g-mb-25"><bold>Every CryptoStrain is a unique 1/1 individually hand-drawn artwork. </bold><br>
            Over a period of 4 years, Tokyo based creative studio PAPRIKO Ink. has created more than 500 cannabis strain drawings, <br>
            420 of these artworks will be released as minted NFTs on the Ethereum blockchain.  
          </p>
        </div>
      </div>

      <div class="row text-center justify-content-center">
        <div class="col-md-12  g-mt-10">
          <img class="icon_nft" src="assets-site\graphic\Icons\Icon_NFT.svg" alt="Icon NFT"><br>
        </div>
      </div>

      <div class="row text-center justify-content-center">
        <div class="col-md-6">
          <a href="https://collection.cryptostrains.io">
            <button class="btn_nft_collection btn-lg rounded-pill text-uppercase noHover g-letter-spacing-2">View NFT Collection</button><br>
          </a>
          <img class="trim_line_long g-mb-20 g-mt-20" src="assets-site\graphic\Trim-Lines\Trim_Line_Green_Long.svg" alt="Papriko Logo"><br>
          <img class="trim_line g-mb-20 g-mt-20" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="Papriko Logo">
        </div>
      </div>
    </div>
      </div>
      <!-- INTRO END -->


      <!-- NFT COLLECTION -->

      <div class="row text-center justify-content-center">
        <div class="col-md-4 g-mt-10">
          <img class="icon_nft" src="assets-site\graphic\Icons\Icon_Auction.svg" alt="Icon NFT"><br>
        </div>
      </div>


      <!-- COUNTDOWN -->
        <div class="container">
          <div class="row">
            <div class="col justify-content-center text-center ">
              <h1 id="headline" class="align-center align-content-center g-letter-spacing-3 g-mg-0">AUCTION</h1>
              <img class="trim_line_long g-mb-20 g-mt-20" src="assets-site\graphic\Trim-Lines\Trim_Line_Green_Long.svg" alt="Papriko Logo"><br>
              <p class="h3 g-letter-spacing-2 g-font-size-20 g-font-weight-400 g-color-primary g-mb-25">The NFTs are released via auction on OpenSea.<br>
                Auctions are expected to take place every 2 Weeks and will last for approximately XXd/h. <br>
                 7 CryptoStrains per Auction are released.<br> Biding starts at X.X ETH.</p>
              <h1  class="purple align-center align-content-center g-mg-0 g-mb-0 g-pb-0 g-letter-spacing-3">Auction Times will be announced once the project has launched</h1>
              <!-- <h1  class="purple align-center align-content-center g-mg-0 g-mb-0 g-pb-0 g-letter-spacing-3">BADGE 02/60</h1>
              <h2  class="purple align-center align-content-center g-mg-0 g-mt-0 g-pt-0 g-letter-spacing-3">CRYPTOSTRAINS #08-#14</h2> -->
              <img class="trim_line_purple g-mb-20 g-mt-20" src="assets-site\graphic\Trim-Lines\Trim-Line-Purple.svg" alt="Papriko Logo">



              <!-- <h4 class="time_remaining align-center align-content-center g-mg-0 g-mt-0 g-mb-0 g-letter-spacing-3">TIME REMAINING</h4> -->
     

         

            </div>
          </div>
        </div>

        <!-- <div class="container">
          <div class="row">
            <div class="col-12 text-center mr-0 ml-0 g-pb-20">
              <div id="countdown" class="align-content-center">
                <ul>
                  <li><span id="days"></span>d</li>
                  <li><span id="hours"></span>h</li>
                  <li><span id="minutes"></span>m</li>
                  <li><span id="seconds"></span>s</li>
                </ul>
              </div>
            </div>  
          </div>  -->

          <div class="row">
            <div class="col-12 text-center mr-0 ml-0">
              <button class="btn_open_sea btn-lg rounded-pill text-uppercase g-letter-spacing-2 g-mb-20 g-mt-30 greyed">
                View On Open Sea
              </button><br>
            </div>
          </div>
        </div>

      
        <br>
      
          <!-- NFT COLLECTION -->
          <!-- FIRST CAROUSELL -->
        <div class="container g-mb-20">
          <div class="g-mx-minus-9--sm">
            <div class="js-carousel"
                 data-slides-show="4"
                 data-infinite="true"
                 data-arrows-classes="u-arrow-v1 g-pos-abs g-top-35x g-width-45 g-height-45 g-color-white g-theme-bg-blue-dark-v2 g-bg-primary--hover g-rounded-50x g-transition-0_2 g-transition--ease-in"
                 data-arrow-left-classes="fa fa-chevron-left g-left-0 g-ml-minus-15"
                 data-arrow-right-classes="fa fa-chevron-right g-right-0 g-mr-minus-15"
                 data-responsive='[{
                   "breakpoint": 1200,
                   "settings": {
                     "slidesToShow": 3,
                     "slidesToScroll": 3
                   }
                 }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2,
                     "slidesToScroll": 2
                   }
                 }, {
                   "breakpoint": 576,
                   "settings": {
                     "slidesToShow": 2,
                     "slidesToScroll": 2
                   }
                 }]'>
              <div class="js-slide g-px-5">
                <!-- Figure -->
                <figure class="text-center">
                  <!-- Figure Image -->
                  <img class="w-100 g-mb-20" src="assets-site\strains\0014.jpg" alt="Image Description">
                  <!-- End Figure Image -->

                  <!-- Figure Info -->
                  <div class="g-mb-20 text-left align-items-start">
                    <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0014</h4> -->
                    <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                    <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                    <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                  </div>
                  <!-- End Figure Info -->

                  <!-- End Figure Social Icons -->
                </figure>
                <!-- End Figure -->
              </div>

              <div class="js-slide g-px-5">
                <!-- Figure -->
                <figure class="text-center">
                  <!-- Figure Image -->
                  <img class="w-100 g-mb-20" src="assets-site\strains\0015.jpg" alt="Image Description">
                  <!-- End Figure Image -->

                  <!-- Figure Info -->
                  <div class="g-mb-20 text-left align-content-center">
                    <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0015</h4> -->
                    <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                    <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                    <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                  </div>
                  <!-- End Figure Info -->

                  <!-- End Figure Social Icons -->
                </figure>
                <!-- End Figure -->
              </div>

              <div class="js-slide g-px-5">
                <!-- Figure -->
                <figure class="text-left">
                  <!-- Figure Image -->
                  <img class="w-100 g-mb-20" src="assets-site\strains\0016.jpg" alt="Image Description">
                  <!-- End Figure Image -->

                  <!-- Figure Info -->
                  <div class="g-mb-20 align-content-center">
                    <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0016</h4> -->
                    <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                    <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                    <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                  </div>
                  <!-- End Figure Info -->

                  <!-- End Figure Social Icons -->
                </figure>
                <!-- End Figure -->
              </div>

              <div class="js-slide g-px-5">
                <!-- Figure -->
                <figure class="text-left">
                  <!-- Figure Image -->
                  <img class="w-100 g-mb-20" src="assets-site\strains\0017.jpg" alt="Image Description">
                  <!-- End Figure Image -->

                  <!-- Figure Info -->
                  <div class="g-mb-20 align-content-center">
                    <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0017</h4> -->
                    <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                    <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                    <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                  </div>
                  <!-- End Figure Info -->

                  <!-- End Figure Social Icons -->
                </figure>
                <!-- End Figure -->
              </div>
            </div>
          </div>
          <!-- End Team Block -->
        </div>



          <!-- NFT COLLECTION -->
          <!-- SECOND CAROUSELL -->
          <div class="container ">
            <div class="g-mx-minus-9--sm container-carousel align-content-start">
              <div class="js-carousel container-carousel align-content-start"
                   data-slides-show="4"
                   data-infinite="true"
                   data-arrows-classes="u-arrow-v1 g-pos-abs g-top-35x g-width-45 g-height-45 g-color-white g-theme-bg-blue-dark-v2 g-bg-primary--hover g-rounded-50x g-transition-0_2 g-transition--ease-in"
                   data-arrow-left-classes="fa fa-chevron-left g-left-0 g-ml-minus-15"
                   data-arrow-right-classes="fa fa-chevron-right g-right-0 g-mr-minus-15"
                   data-responsive='[{
                     "breakpoint": 1200,
                     "settings": {
                       "slidesToShow": 3,
                       "slidesToScroll": 3
                     }
                   }, {
                     "breakpoint": 768,
                     "settings": {
                       "slidesToShow": 2,
                       "slidesToScroll": 2
                     }
                   }, {
                     "breakpoint": 576,
                     "settings": {
                       "slidesToShow": 2,
                       "slidesToScroll": 2
                     }
                   }]'>
  
                <div class="js-slide g-px-5">
                  <!-- Figure -->
                  <figure class="text-left">
                    <!-- Figure Image -->
                    <img class="w-100 g-mb-20" src="assets-site\strains\0022.jpg" alt="Image Description">
                    <!-- End Figure Image -->

                    <!-- Figure Info -->
                    <div class="g-mb-20 align-content-center">
                      <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0018</h4> -->
                      <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                      <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                      <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                    </div>
                    <!-- End Figure Info -->

                    <!-- End Figure Social Icons -->
                  </figure>
                  <!-- End Figure -->
                </div>
    
                <div class="js-slide g-px-5">
                  <!-- Figure -->
                  <figure class="text-left">
                    <!-- Figure Image -->
                    <img class="w-100 g-mb-20" src="assets-site\strains\0019.jpg" alt="Image Description">
                    <!-- End Figure Image -->

                    <!-- Figure Info -->
                    <div class="g-mb-20 align-content-center">
                      <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0019</h4> -->
                      <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                      <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                      <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                    </div>
                    <!-- End Figure Info -->

                    <!-- End Figure Social Icons -->
                  </figure>
                  <!-- End Figure -->
                </div>
                <div class="js-slide g-px-5">
                  <!-- Figure -->
                  <figure class="text-left">
                    <!-- Figure Image -->
                    <img class="w-100 g-mb-20" src="assets-site\strains\0020.jpg" alt="Image Description">
                    <!-- End Figure Image -->

                    <!-- Figure Info -->
                    <div class="g-mb-20 align-content-center">
                      <!-- <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number">#0020</h4> -->
                      <h2 class="h2_collection g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Super Lemon Haze</h2>
                      <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Title_New.svg" alt="TRIM LINE">
                      <button class="bid_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2 greyed">BID</button>
                    </div>
                    <!-- End Figure Info -->

                    <!-- End Figure Social Icons -->
                  </figure>
                  <!-- End Figure -->
                </div>

                <div class="js-slide g-px-5">
                  <!-- Figure -->
                  <figure class="text-left ">
                    <!-- Figure Image -->
                    <!-- End Figure Image -->
    
                    <!-- Figure Info -->
                    <div class="g-mb-20 align-content-center">
      
                    </div>
                    <!-- End Figure Info -->
    
                    <!-- End Figure Social Icons -->
                  </figure>
                  <!-- End Figure -->
                </div>
              </div>
            </div>
            <!-- End Team Block -->
          </div>
      </section>
      <!-- End Section Content -->
 




      <div class="row text-center justify-content-center  g-mt-50">
        <div class="col-md-4 g-mt-50">
          <img class="icon_nft_celeb" src="assets-site\graphic\Icons\NFT_Celebrity.svg" alt="Icon NFT"><br>
        </div>
      </div>
      <!-- CELEBRITIES -->
      <div class="container">
        <div class="row">
          <div class="col justify-content-center text-center ">


            <div class="row text-center align-content-center">
              <div class="col-md-1 text-right g-mb-10 m-auto g-mr-10">
                <img class="logo_gold" src="assets-site\graphic\Celebrity\Gold_Star.svg" alt="Logo Star">
              </div>
              <div class="col-md-4 g-mb-10 m-auto">
                <h1 id="headline" class="celeb_gold align-center align-content-center g-mg-0 g-mb-0 g-pb-0 g-letter-spacing-2">CRYPTOSTRAINS</h1>
                <h1  class="celeb_gold align-center align-content-center g-mt-0 g-mg-0 g-mb-0 g-pb-0 g-pt-0 g-letter-spacing-2">#001 - #007</h1>
              </div>
              <div class="col-md-1 g-mb-10 m-auto g-ml-10 g-pl-10">
                <img class="logo_gold" src="assets-site\graphic\Celebrity\Gold_Star.svg" alt="Logo Plus">
              </div>
            </div>

            <img class="trim_line_long g-mb-20" src="assets-site\graphic\Trim-Lines\Long_Gold_1.svg" alt="Papriko Star"><br>
            <h2 class="celeb_gold g-mb-60 g-letter-spacing-1 font-italic">"CryptoStrains #001 - #007 are dedicated and given to 7 world-renowned Celebrities”</h2>
          </div>
        </div>
      </div>    
      <!-- NFT CELEBRITY COLLECTION -->
      <!-- FIRST CAROUSELL -->
      <div class="container">
        <div class="g-mx-minus-9--sm">
          <div class="js-carousel"
                data-slides-show="4"
                data-infinite="true"
                data-arrows-classes="u-arrow-v1 g-pos-abs g-top-35x g-width-45 g-height-45 g-color-white g-theme-bg-blue-dark-v2 g-bg-primary--hover g-rounded-50x g-transition-0_2 g-transition--ease-in"
                data-arrow-left-classes="fa fa-chevron-left g-left-0 g-ml-minus-15"
                data-arrow-right-classes="fa fa-chevron-right g-right-0 g-mr-minus-15"
                data-responsive='[{
                  "breakpoint": 1200,
                  "settings": {
                    "slidesToShow": 3,
                    "slidesToScroll": 3
                  }
                }, {
                  "breakpoint": 768,
                  "settings": {
                    "slidesToShow": 2,
                    "slidesToScroll": 2
                  }
                }, {
                  "breakpoint": 576,
                  "settings": {
                    "slidesToShow": 2,
                    "slidesToScroll": 2
                  }
                }]'>
            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0003.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center ">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#001</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Snoop Dogg OG</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0002.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#002</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Mike Tyson OG</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0006.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#003</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Pancake Ice</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0001.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#004</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1"> Khalifa Kush</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>
            
          </div>
        </div>
        <!-- End Team Block -->
      </div>
  
      <!-- NFT CELEBRITY COLLECTION -->
      <!-- SECOND CAROUSELL -->
      <div class="container">
        <div class="g-mx-minus-9--sm container-carousel align-content-start g-mt-20">
          <div class="js-carousel container-carousel align-content-start"
                data-slides-show="4"
                data-infinite="true"
                data-arrows-classes="u-arrow-v1 g-pos-abs g-top-35x g-width-45 g-height-45 g-color-white g-theme-bg-blue-dark-v2 g-bg-primary--hover g-rounded-50x g-transition-0_2 g-transition--ease-in"
                data-arrow-left-classes="fa fa-chevron-left g-left-0 g-ml-minus-15"
                data-arrow-right-classes="fa fa-chevron-right g-right-0 g-mr-minus-15"
                data-responsive='[{
                  "breakpoint": 1200,
                  "settings": {
                    "slidesToShow": 3,
                    "slidesToScroll": 3
                  }
                }, {
                  "breakpoint": 768,
                  "settings": {
                    "slidesToShow": 2,
                    "slidesToScroll": 2
                  }
                }, {
                  "breakpoint": 576,
                  "settings": {
                    "slidesToShow": 2,
                    "slidesToScroll": 2
                  }
                }]'>

            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0007.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#005</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Inzane in the Membrane</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0004.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#006</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Miley Cyrus </h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>
            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left ">
                <!-- Figure Image -->
                <img class="w-100 g-mb-20" src="assets-site\strains\celebs\0005.jpg" alt="Image Description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
                  <h4 class="g-letter-spacing-2 g-font-size-18  g-mb-10 str_number_celeb">#007</h4>
                  <h2 class="h2_collection_celeb g-font-weight-400 g-font-size-16 g-mb-20 g-letter-spacing-1">Post Traumatic Purple</h2>
                  <img class="trim_line_collection" src="assets-site\graphic\Trim-Lines\Trim_Line_Gold_New.svg" alt="TRIM LINE">
                  <!-- <button class="pending_btn g-font-weight-600 background-purple g-mt-10 g-letter-spacing-2">PENDING</button> -->
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>
            <div class="js-slide g-px-5">
              <!-- Figure -->
              <figure class="text-left ">
                <!-- Figure Image -->
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <div class="g-mb-20 align-content-center">
  
                </div>
                <!-- End Figure Info -->

                <!-- End Figure Social Icons -->
              </figure>
              <!-- End Figure -->
            </div>
          </div>
        </div>
        <!-- End Team Block -->
      </div>
  </section>

  <div class="container">
    <div class="row">
        <div class="col-md-auto g-mb-10 m-auto justify-content-center text-center justify-content-center">
          <img class="icon_gold_bud g-mt-40 m-auto" src="assets-site\graphic\Celebrity\Gold_Bud.svg" alt="Icon NFT"><br>
          <img class="trim_line_long g-mb-20 g-mt-30" src="assets-site\graphic\Trim-Lines\Long_Gold_1.svg" alt="Papriko Logo"><br>
          <img class="logo_gold" src="assets-site\graphic\Celebrity\Gold_Star.svg" alt="Logo Plus">
        </div>
    </div>
  </div> 

    <!-- End CELEBRITIES -->


    <!-- 

    <div class="timeline">
      <div class="container left">
        <div class="date">15 Dec</div>
        <i class="icon fa fa-home"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
      <div class="container right">
        <div class="date">22 Oct</div>
        <i class="icon fa fa-gift"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
      <div class="container left">
        <div class="date">10 Jul</div>
        <i class="icon fa fa-user"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
      <div class="container right">
        <div class="date">18 May</div>
        <i class="icon fa fa-running"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
      <div class="container left">
        <div class="date">10 Feb</div>
        <i class="icon fa fa-cog"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
      <div class="container right">
        <div class="date">01 Jan</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>
            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
          </p>
        </div>
      </div>
    </div>
    ROADMAP-->

    <div class="row text-center justify-content-center g-mt-80">
      <div class="col-md-4 g-mt-10 g-mb-0 text-center">
        <img class="arrow_down g-mb-0 g-pb-0" src="assets-site\graphic\Arrows\Arrow_Down_Green.svg" alt="Icon NFT"><br>
        <img class="icon_nft" src="assets-site\graphic\Icons\Icon_Roadmap.svg" alt="Icon NFT"><br>
        <img class="trim_line" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="TRIM LINE">
        <h1 id="headline_roadmap" class="headline_roadmap align-center align-content-center g-mg-0 g-letter-spacing-2">ROADMAP</h1>
        <img class="trim_line_roadmap" src="assets-site\graphic\Logomark\Long_Green_1.svg" alt="Papriko Logo"><br>
      </div>
    </div>

    <div class="container py-5">
      <!-- For demo purpose -->
      <div class="row  text-white mb-5">
          <div class="row">
            <img class="trim_line_collection text-left align-items-start g-width-100 g-pl-12" src="assets-site\graphic\Roadmap\Roadmap_Pin.svg" alt="TRIM LINE"><br>

              <div class="col-lg-12 mx-auto g-pl-40">

                  <!-- Timeline -->
                  <ul class="timeline ">
                      <li class="timeline-item rounded ml-5 g-pt-0 p-4 shadow color_1 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_1.svg" alt="TRIM LINE"><br>
                          <div class=""></div>
                          <h2 class="mb-10 g-pl-20 g-width-150">0% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">LAUNCH GIVEAWAY</span>
                          <p class=" g-mt-15 g-letter-spacing-1">On the day of the first auction 1 NFT will be raffled among all those who have 
                            registered on the website, Instagram or Twitter.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 shadow color_1 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_1.svg" alt="TRIM LINE"><br>
                          <div class=""></div>
                          <h2 class="mb-10 g-width-150">10% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">EARLY ADOPTERS GIVEAWAY</span>
                          <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">1 NFT will be raffled among one of the 42 Holders.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 shadow color_2 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_2.svg" alt="TRIM LINE"><br>
                          <div class=""></div>
                          <h2 class="mb-10 g-width-150">20% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">DONATION TO 'THE LAST PRISONER PROJECT'</span>
                          <p class="text-small g-mt-15 font-weight-lighter g-letter-spacing-1">All proceeds of the auction of the CryptoStrain “Jack Herer” will be 
                            donated to The 'Last Prisoner Project’. 
                            We hope to make a small impact.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 shadow color_2 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_2.svg" alt="TRIM LINE"><br>
                          <div class=""></div>
                          <h2 class="mb-10 g-width-150">30% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">CRYPTOSTRAINS MERCH DROP</span>
                          <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">We release the first CryptoStrains Merch Drop. 
                            Exclusive surprise for all holders.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_3 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_3.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">50% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">BOOK</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">Release of printed books containing all 420 CryptoStrains artworks. 
                          Signed books at a reduced price & free exclusive signed and numbered print for all holders.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_3 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_3.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">60% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">NGO DONATION (Veteran's Club)</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">At the request of the family of the breeder all proceeds of the auction of 
                          the CryptoStrain “Agent Orange” will be donated to the 'Veteran's Club'.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_4 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Blue.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">80% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">METAVERSE GALLERY</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">Creation of a ‘CryptoStrains By PAPRIKO Ink.’ art gallery in the Metaverse.</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_4 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Blue.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">100% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">MEET & GREET FOR ALL HOLDERS</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">All holders are invited to meet the artist and creators of the CryptoStrains at 2 events, 
                          one in Europe and one in the United States. 
                          Let’s smoke and party together..
                          </p>
                      </li>
                      <!-- <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_5 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Purple.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">90% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">Exclusive Merch Drop</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                      </li>
                      <li class="timeline-item rounded ml-5 p-4 mb-0 shadow color_5 text-left">
                        <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Purple.svg" alt="TRIM LINE"><br>
                        <div class=""></div>
                        <h2 class="mb-10 g-width-150">100% Sold</h2><span class="text-gray g-letter-spacing-2 text-uppercase">Exclusive Merch Drop</span>
                        <p class="text-small g-mt-15 font-weight-light g-letter-spacing-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                      </li> -->
 

                  </ul><!-- End -->

              </div>
              <img class="trim_line_collection text-left align-items-start g-width-100 g-pl-10" src="assets-site\graphic\Roadmap\Roadmap_Pin_End.svg" alt="TRIM LINE"><br>

          </div>
      </div>
  

        <!-- ROADMAP 

    <div class="row text-center justify-content-center g-mt-80">
      <div class="col-md-4 g-mt-10 g-mb-40 text-center">
        <img class="arrow_down g-mb-0 g-pb-0" src="assets-site\graphic\Arrows\Arrow_Down_Green.svg" alt="Icon NFT"><br>
        <img class="icon_nft" src="assets-site\graphic\Icons\Icon_Roadmap.svg" alt="Icon NFT"><br>
        <img class="trim_line" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="TRIM LINE">
        <h1 id="headline_roadmap" class="headline_roadmap align-center align-content-center g-mg-0 g-letter-spacing-2">ROADMAP</h1>
        <img class="trim_line_roadmap" src="assets-site\graphic\Logomark\Long_Green_1.svg" alt="Papriko Logo"><br>
      </div>
    </div>
  
    <section class="experience pb-100" id="experience">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto text-center">
            <div class="section-title">
            </div>
          </div>
        </div>
        <div class="row">
                 <div class="col-xl-12">
                    <ul class="timeline-list">
                       <li>
                        <div class="timeline_content color_1 text-right">
                           <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_1.svg" alt="TRIM LINE"><br>
                           <span >0% Sold</span>
                           <h4>START GIVEAWAY</h4>
                           <p>For our start we will giveaway one special and unique CryptoStrain to one lucky winner. This givaway is for all of our Instagram, Twitter and Discord Subscrivers. Thank you for your support, we are just getting started.</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline_content color_1 text-left">
                            <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_1.svg" alt="TRIM LINE"><br>
                            <span>10% Sold</span>
                            <h4>EARLY ADOPTER GIVEAWAY</h4>
                            <p>Thank you for the good start. Now, after selling 10% of all CryptoStrains we will giveaway one special and unique CryptoStrain to one lucky early adopter. No registration is needed.</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline_content color_2 text-right">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_2.svg" alt="TRIM LINE"><br>
                          <span>20% Sold</span>
                           <h4>DONTATION TO THE LAST PRISONER PROJECT</h4>
                           <p>After selling 20% of all CryptoStrains we will launch the auction of Jack Herrer. 100% of the resulting revenue will be donated to the Last Prisoner Project in order to help cannabis prisoners to be released.</a></p>
                        </div>
                      </li>
                       <li>
                          <div class="timeline_content color_2 text-left">
                            <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_2.svg" alt="TRIM LINE"><br>
                            <span>30% Sold</span>
                             <h4>EXCLUSIVE MERCH DROP</h4>
                             <p>After selling 30% of all CryptoStrains we will launch limited access to exclusive CryptoStrains Merch. Get access to our merch drop at: <a href='https://420.papriko.com/'>CryptoStrain Merch</a> when the time is ready</p>
                          </div>
                       </li>
                       <li>
                          <div class="timeline_content color_3 text-right">
                            <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_3.svg" alt="TRIM LINE"><br>
                          <span>50% Sold</span>
                             <h4>EXCLUSIVE SKETCH & MERCH RELEASE</h4>
                             <p>From now on, every holder of a CryptoStrain will get access to the original handdrawn sketch of his CryptoStrain together with exclusive merch. This only applies if you also auctioned the CryptoStrain, since there is only one original sketch.</p>
                          </div>
                       </li>
                       <li>
                        <div class="timeline_content color_3 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Green_3.svg" alt="TRIM LINE"><br>
                        <span>60% Sold</span>
                           <h4>DONATION TO THE VETERANS CLUB</h4>
                           <p>After selling 60% of all the CryptoStrains we will auction the strain "Acid Orange" and donate 100% of the revenue to the Veterans Cannabis Club in order to support veterans with cannabis in different situations.  </p>
                        </div>
                     </li>
                       <li>
                          <div class="timeline_content color_4 text-right">
                            <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Blue.svg" alt="TRIM LINE"><br>

                          <span>80% Sold</span>
                             <h4>UTILITY RELEASE</h4>
                             <p>We are releasing different utilities for the project. Such as special holder discounts to use with our partners such as GRINDNATION and Lovemary. More Partners and Collaborations are following soon.</p>
                          </div>
                       </li>
                       <li>
                        <div class="timeline_content color_4 text-left">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Blue.svg" alt="TRIM LINE"><br>
                        <span>100% Sold</span>
                           <h4>MEET AND GREET PARTY</h4>
                           <p>After selling all of the strains we will throw two holder parties, one in America and one in Europe. Free entrance for holders and lots of drinks and smoke. And every holder of a CryptoStrain will have a whitelist spot for upcoming projects.</p>
                        </div>
                      </li>
                      <li>
                        <div class="timeline_content color_5 text-right">
                          <img class="trim_line_collection" src="assets-site\graphic\Roadmap\Pin_Purple.svg" alt="TRIM LINE"><br>

                        <span>100% Sold</span>
                           <h4>SPECIAL STRAIN DROP</h4>
                           <p>We teamed up with high skilled growers in order to release our own Strain. We will welcome our strain to the world of strains as soon as 100% of the CryptoStrains are sold. Seeds will be available for all holders and we will provide places to buy in certain areas.</p>
                        </div>
                      </li>
                    </ul>
                 </div>
              </div>
      </div>
      </section>

     End Section Content -->

    <!-- TEAM -->

    <!-- TEAM ICON-->
    <div class="row text-center justify-content-center">
      <div class="col-md-4 g-mt-10">
        <!-- <img class="arrow_down g-mb-0 g-pb-0" src="assets-site\graphic\Arrows\Arrow_Down_Green.svg" alt="Icon NFT"> -->
        <img class="icon_nft" src="assets-site\graphic\Icons\Icon_Team.svg" alt="Icon NFT"><br>
        <img class="trim_line" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="TRIM LINE">
      </div>
    </div>


    <!-- TEAM Text-->

    <div class="col justify-content-center text-center ">
      <h1 id="headline" class="align-center align-content-center g-mg-0 g-letter-spacing-2">OUR TEAM</h1>
      <img class="trim_line_long g-mb-20" src="assets-site\graphic\Logomark\Long_Green_1.svg" alt="Papriko Logo"><br>
      <h4  class="align-center align-content-center g-mg-0 g-mt-0 g-pt-0 g-letter-spacing-1">Our Team is interdisciplinary.</h4>
      <img class="trim_line g-mb-20" src="assets-site\graphic\Logomark\Trim-Line.svg" alt="TRIM LINE"><br>
    </div>
    <div class="col  g-pb-140">
      <div class="row text-center m-auto justify-content-center">
        <div class="col-md-4 col-lg-3 g-mb-10">
          <img class="portrait" src="assets-site\graphic\Team\Portrait_MM.svg" alt="Logo Plus"><br>   
          <div class="align-content-center">
            <h2 class="h2 g-font-weight-400 g-font-size-18 g-mb-0 g-pb-0 g-pt-10 g-letter-spacing-1">Meta Max</h2>
            <img class="trim_team_2" src="assets-site\graphic\Team\Trim_Line_Green_2.svg" alt="TRIM LINE"><br>
            <h6 class="purple g-letter-spacing-1">Cyber Punk <br> Coding Mastermind <br> CTO / Infused Cook </h6>
            <h6 class="purple g-letter-spacing-1">Email:meta.max@cryptostrains.io <br> </h6>

            <img class="trim_team_1" src="assets-site\graphic\Team\Trim_Line_Green_1.svg" alt="TRIM LINE">
          </div>
        </div>
        <div class="col-md-4 col-lg-3 g-mb-10">
          <img class="portrait" src="assets-site\graphic\Team\Portrait_CC.svg" alt="Logo Plus"><br>  
          <div class="align-content-center">
            <h2 class="h2 g-font-weight-400 g-font-size-18 g-mb-0 g-pb-0 g-pt-10 g-letter-spacing-1">Cash Cat</h2>
            <img class="trim_team_2" src="assets-site\graphic\Team\Trim_Line_Green_2.svg" alt="TRIM LINE"><br>
            <h6 class="purple g-letter-spacing-1">Cannabis Super Brain <br> Marketing Guru <br> CFO </h6>
            <h6 class="purple g-letter-spacing-1">Email: cash.cat@cryptostrains.io <br> </h6>

            <img class="trim_team_1" src="assets-site\graphic\Team\Trim_Line_Green_1.svg" alt="TRIM LINE">
          </div> 
        </div>
        <div class="col-md-4 col-lg-3 g-mb-10">
          <img class="portrait" src="assets-site\graphic\Team\Portrait_MRP.svg" alt="Logo Plus"><br>  
          <div class="align-content-center">
            <h2 class="h2 g-font-weight-400 g-font-size-18 g-mb-0 g-pb-0 g-pt-10 g-letter-spacing-1">mr.P</h2>
            <img class="trim_team_2" src="assets-site\graphic\Team\Trim_Line_Green_2.svg" alt="TRIM LINE"><br>
            <h6 class="purple g-letter-spacing-1">Drawing Maniac <br> Matchaholic <br> CEO </h6>
            <h6 class="purple g-letter-spacing-1">Email: mr.p@cryptostrains.io <br> </h6>

            <img class="trim_team_1" src="assets-site\graphic\Team\Trim_Line_Green_1.svg" alt="TRIM LINE">
          </div>  
        </div>
      </div>
    </div>
    <!-- End Section Content -->


    </div>


  <!-- Footer -->
  <div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
    <div class="container">
      <div class="row">
        <nav class="center navbar navbar-expand-lg">

          <div class="navbar" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-center" href='https://cryptostrains.io' >ABOUT/INFO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="https://collection.cryptostrains.io">NFT-COLLECTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="https://cryptostrains.io/faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center greyed" href="#">OPEN SEA</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="container">
        <div class="row text-center justify-content-center">
          <h3 class="socials-h3">Socials</h3>
        </div>
        <div class="row text-center justify-content-center align-items-center mr-0 mr-md-4">
          <div class="text-center social_footer">
            <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
            <a href="https://www.instagram.com/cryptostrains.io/" class="footer-socials text-uppercase g-letter-spacing-2 text-center">Instagram</a>
          </div>

          <div class="text-center social_footer g-pl-10">
            <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
            <a href="" class="footer-socials text-uppercase g-letter-spacing-2 text-center">Discord</a>
          </div>

          <div class="text-center social_footer g-pl-10">
            <img class="arrow_green" src="assets-site\graphic\Logomark\Arrow-Down_Green.svg" alt="Arrow Down Green"><br>
            <a href="https://twitter.com/crypto_strains" class="footer-socials text-uppercase g-letter-spacing-2">Twitter</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="text-right col-lg-6 col-md-6 g-mb-40 g-mb-0--lg mr-4 mr-md-0 g-pt-20">
          <a class="col-sm-12 g-mb-20 footer-img">
            <img class="footer-img align-items-center" src="assets-site/graphic/Logomark/Logo_CryptoStrains.svg" alt="Logo">
          </a>
        </div>
        <div class="text-left col-lg-6 col-md-6 g-mb-40 g-mb-0--lg g-pl-20">
          <a class="col-sm-12 g-mb-20 footer-img">
            <img class="footer-img d-none d-lg-inline d-xl-inline" src="assets-site/graphic/Logomark/logo_pap.svg" alt="Logo">
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer class="g-bg-gray-dark-v1 g-py-20">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-12 g-mb-15 g-mb-0--md">
          <div class="">
            <p class="copyright d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">Copyright © 2022 Papriko Ink. All Rights Reserved.</p>     
          </div>
        </div>
      </div>
      <div class="row text-center">
        <!-- <ul class="text-center">
          <li class="list-inline-item">
            <a href="#">Privacy Policy</a>
          </li>
          <li class="list-inline-item">
            <span>|</span>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms of Use</a>
          </li>
        </ul> -->
      </div>
    </div>
  </footer>

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.scroll-nav.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/gmap/hs.map.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        $('#processes [role="tablist"] .nav-link').on('click', function () {
          setTimeout(function () {
            $('#processesTabs .js-carousel').slick('setPosition');
          }, 200);
        });
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
          duration: 700
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>

    <script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      // nextYear = yyyy + 1,
      nextYear = yyyy + 1,

      dayMonth = "05/10/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());

    </script>

  </body>
</html>
