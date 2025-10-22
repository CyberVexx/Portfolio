<?php
  // Get the current file name (e.g., "index.php")
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
  <a href="index.php" class="logo">Arne Soyez</a>
  <div class="links">
    <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
    <a href="#" class="<?= ($current_page == 'portfolio.php') ? 'active' : '' ?>">Portfolio</a>
    <a href="#" class="<?= ($current_page == 'projects.php') ? 'active' : '' ?>">Projects</a>
    <a href="contact.php" class="contact-btn <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
  </div>
</nav>