<?php $here = basename($_SERVER['SCRIPT_NAME'] ?? ''); $cur = fn($f) => $here === $f ? ' aria-current="page"' : ''; ?>
<a class="skip" href="#main">Skip to content</a>
<header class="nav">
  <div class="wrap">
    <a href="index.php" aria-label="AUTOCARE home"><img class="logo" src="assets/img/logo-light.png" alt="AUTOCARE Detailing" width="200" height="97"></a>
    <button class="menu-btn" aria-expanded="false" aria-controls="links">Menu</button>
    <nav aria-label="Main"><ul id="links">
      <li><a href="index.php"<?= $cur('index.php') ?>>Home</a></li>
      <li><a href="index.php#services">Services</a></li>
      <li><a href="index.php#gallery">Gallery</a></li>
      <li><a href="login.php"<?= $cur('login.php') ?>>Login</a></li>
      <li><a class="btn" href="process_booking.php">Book Online</a></li>
    </ul></nav>
  </div>
</header>
