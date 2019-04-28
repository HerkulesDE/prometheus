<header class= "page--header">
  <nav class="page--header--navigation">
    <ul class="navigation--list" id="navigation-list">
      <li class="navigation--list-item is-page-title">
        <img class="navigation--list-item-logo" src="media/g3875.png">
        <a href="/" class="navigation--list-item--link">PROMETHEUS</a>
      </li>
      <li class="navigation--list-item">
        <a href="/" class="navigation--list-item--link <?php if ($path == "") { echo "active"; } ?>">News</a>
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
    <a class="is-toggle-item" id="toggle-navigation">
      <div class="page--header--navigation--toggle"></div>
    </a>
  </nav>
</header>
