<?php
  // Get the current file name (e.g., "index.php")
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
  <div class="links">
    <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
    <a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
    <a href="#" class="<?= ($current_page == 'portfolio.php') ? 'active' : '' ?>">Portfolio</a>
    <a href="#" class="<?= ($current_page == 'projects.php') ? 'active' : '' ?>">Projects</a>
  </div>
</nav>