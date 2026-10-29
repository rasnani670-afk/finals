<?php $title = 'Register | AUTOCARE'; $arrow = file_get_contents(__DIR__ . '/inc/arrow.php'); include __DIR__ . '/inc/head.php'; ?>
<body>
<?php include __DIR__ . '/inc/nav.php'; ?>
<main id="main" class="split">
  <div class="wipe" data-wipe data-dur="1200"><img class="haze" src="assets/img/lexus.webp" alt=""><img class="clean" src="assets/img/lexus.webp" alt="A white Lexus after ceramic coating"><span class="blade" aria-hidden="true"></span></div>
  <div class="side"><div class="inner">
    <h1 class="display rise">Register</h1>
    <p class="sub rise" style="--d:70ms">Create your AUTOCARE account.</p>
    <form class="f rise" style="--d:120ms" action="login.php" method="get">
      <div class="two">
        <label for="fname">First name<input type="text" id="fname" name="fname" autocomplete="given-name" required></label>
        <label for="lname">Last name<input type="text" id="lname" name="lname" autocomplete="family-name" required></label>
      </div>
      <label for="uname">Username<input type="text" id="uname" name="uname" autocomplete="username" required></label>
      <label for="pass">Password<input type="password" id="pass" name="pass" autocomplete="new-password" required></label>
      <label for="birth">Date of birth<input type="date" id="birth" name="birth" autocomplete="bday" required></label>
      <div class="two">
        <label for="email">Email address<input type="email" id="email" name="email" autocomplete="email" required></label>
        <label for="contact">Contact number<input type="tel" id="contact" name="contact" autocomplete="tel" required></label>
      </div>
      <button type="submit" name="register" class="btn">Register <?= $arrow ?></button>
    </form>
    <p class="alt rise" style="--d:160ms">Already have an account? <a href="login.php">Log in</a></p>
  </div></div>
</main>
<?php include __DIR__ . '/inc/mini-foot.php'; ?>
</body>
</html>
