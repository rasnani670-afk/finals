<?php $title = 'Login | AUTOCARE'; $arrow = file_get_contents(__DIR__ . '/inc/arrow.php'); include __DIR__ . '/inc/head.php'; ?>
<body>
<?php include __DIR__ . '/inc/nav.php'; ?>
<main id="main" class="split">
  <div class="wipe" data-wipe data-dur="1200"><img class="haze" src="assets/img/bmw.webp" alt=""><img class="clean" src="assets/img/bmw.webp" alt="A detailed black BMW in the studio"><span class="blade" aria-hidden="true"></span></div>
  <div class="side"><div class="inner">
    <h1 class="display rise">Login</h1>
    <p class="sub rise" style="--d:70ms">Welcome back to AUTOCARE.</p>
    <form class="f rise" style="--d:120ms" method="post" action="index.php">
      <label for="uname">Username<input type="text" id="uname" name="uname" autocomplete="username" required></label>
      <label for="pass">Password<input type="password" id="pass" name="pass" autocomplete="current-password" required></label>
      <button type="submit" name="login" class="btn">Login <?= $arrow ?></button>
    </form>
    <p class="alt rise" style="--d:160ms">Don’t have an account yet? <a href="registration.php">Register here</a></p>
  </div></div>
</main>
<?php include __DIR__ . '/inc/mini-foot.php'; ?>
</body>
</html>
