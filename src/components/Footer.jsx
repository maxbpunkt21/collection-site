import { Link } from 'react-router-dom'
import './navbar.css'
// var htmlContent = require('../Unify-v2.6.3/html/website/cryptostrains.io/index.html');


import Arrow_Down from "./assets/Arrows/Arrow-Down-Green-1.svg";
import Logo from "./assets/Logo/CS-Logo.svg";



const Navbar = () => {
  return (

    <div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8">
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
          {/* <div class="row text-center justify-content-center">
            <h3 class="socials-h3">Socials</h3>
          </div> */}
          <div class="row text-center justify-content-center align-items-center">
            {/* <div class="col-4 text-center social_footer">
                <img class="arrow_down"src={Arrow_Down} alt="Papriko Logo"/>
              <a href="https://www.instagram.com/cryptostrains.io/" class="footer-socials text-uppercase g-letter-spacing-2 text-center">Instagram</a>
            </div>
  
            <div class="col-4 text-center social_footer g-pl-10">
                <img class="arrow_down"src={Arrow_Down} alt="Papriko Logo"/>
              <a href="" class="footer-socials text-uppercase g-letter-spacing-2 text-center">Discord</a>
            </div>
  
            <div class="col-4 text-center social_footer g-pl-10">
                <img class="arrow_down"src={Arrow_Down} alt="Papriko Logo"/>
              <a href="https://twitter.com/crypto_strains" class="footer-socials text-uppercase g-letter-spacing-2">Twitter</a>
            </div> */}
          </div>
        </div>
  
        <div class="row">
          <div class="text-right col-lg-12 col-md-6 g-mb-40 g-mb-0--lg g-pr-20 g-pt-20">
            <a class="col-sm-12 footer-img">
            <img class="logo footer-logo"src={Logo} alt="Papriko Logo"/>
            </a>
          </div>
          {/* <div class="text-left col-lg-6 col-md-6 g-mb-40 g-mb-0--lg g-pl-20">
            <a class="col-sm-12 g-mb-20 footer-img">
              <img class="footer-img d-none d-lg-inline d-xl-inline" src="assets-site/img-temp/1600x1060/Logo_mini.png" alt="Logo"></img>
            </a>
          </div> */}
        </div>
      </div>
    </div>

  )
}

export default Navbar