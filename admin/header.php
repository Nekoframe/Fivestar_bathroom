<header id="top" <?php if ($page == 'admin') {
  echo 'class="header--dark"';
} ?>>
  <div class="container">
    <nav class="navbar navbar-expand-lg">

      <a class="navbar-brand nav__brand" href="index.php">
        Five Star Bathroom
      </a>

      <button class="navbar-toggler mobile__menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span class="icon fa fa-bars fa-2x"></span>
      </button>

      <div class="collapse navbar-collapse mobile__menu-box" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto nav__list">
          <li class="nav-item active">
            <a class="nav-link nav__list__link" href="#banner">Banner <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#rating">Rating &amp; Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#">
              <!-- <button class="btn btn--auto-size btn--dark-transparent btn--admin">Log out</button> -->
              [ Log out ]
            </a>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>
</header>