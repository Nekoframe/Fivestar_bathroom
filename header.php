<header id="top" <?php if (($page == 'galleries') || ($page == 'services')) {
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
            <a class="nav-link nav__list__link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="galleries.php">Galleries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__list__link" href="#"><i class="fab fa-facebook-square"></i></a>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>
</header>