import { Link } from 'react-router-dom'
import './navbar.css'
// var htmlContent = require('../Unify-v2.6.3/html/website/cryptostrains.io/index.html');

const Navbar = () => {
  return (

    <nav class="navbar navbar-expand-lg text-center justify-content-center align-items-center">

    <div class="center text-center justify-content-center" id="navbarNav">
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

  )
}

export default Navbar