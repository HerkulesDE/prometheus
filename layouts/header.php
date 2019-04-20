<header class= "page--header">
  <!-- <div class="page--header--image">
    <img src="media/banner-web.svg" width="100%">
  </div> -->

  <nav class="page--header--navigation">
    <ul class="navigation--list">
      <li class="navigation--list-item is-page-title">
        <img src="" alt="">
        <a href="/" class="navigation--list-item--link <?php if ($path == "") { echo "active"; } ?>">PROMETHEUS</a>
      </li>
      <li class="navigation--list-item">
        <a href="about" class="navigation--list-item--link <?php if ($path == about) { echo "active"; } ?>">Wettbewerb</a>
      </li>
      <li class="navigation--list-item">
        <a href="about_us" class="navigation--list-item--link <?php if ($path == about_us) { echo "active"; } ?>">Über uns</a>
      </li>
      <li class="navigation--list-item">
        <a href="sponsors" class="navigation--list-item--link <?php if ($path == sponsors) { echo "active"; } ?>">Sponsoren</a>
      </li>
      <li class="navigation--list-item">
        <a href="contact" class="navigation--list-item--link <?php if ($path == contact) { echo "active"; } ?>">Kontakt</a>
      </li>
    </ul>
  </nav>
</header>
