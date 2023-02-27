import './navbar.css'
// var htmlContent = require('../Unify-v2.6.3/html/website/cryptostrains.io/index.html');

const Navbar = () => {
  return (

<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-center" href={'001'} >ABOUT/INFO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#">NFT-COLLECTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#">OPEN SEA</a>
          </li>
        </ul>
      </div>
    </nav>

  )
}

export default Navbar