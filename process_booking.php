<?php
$title = 'Book a Carwash | AUTOCARE';
$arrow = file_get_contents(__DIR__ . '/inc/arrow.php');
/* a service picked on the home page arrives as ?service= and is preselected */
$options = ['carwash' => 'Carwash', 'interior_exterior' => 'Interior/Exterior Cleaning', 'carwax' => 'Car Wax', 'ceramic_coating' => 'Ceramic Coating', 'ppf' => 'Paint Protection Film (PPF)'];
$map = ['carwash' => 'carwash', 'interior' => 'interior_exterior', 'exterior' => 'interior_exterior', 'carwax' => 'carwax', 'ceramic' => 'ceramic_coating', 'ppf' => 'ppf'];
$picked = $map[$_GET['service'] ?? ''] ?? 'carwash';
$pics = ['carwash' => 'wash', 'interior_exterior' => 'steam', 'carwax' => 'polish', 'ceramic_coating' => 'ceramic', 'ppf' => 'ppf'];
include __DIR__ . '/inc/head.php';
?>
<body>
<?php include __DIR__ . '/inc/nav.php'; ?>
<main id="main" class="split">
  <div class="wipe" data-wipe data-dur="1200"><img class="haze" src="assets/img/<?= $pics[$picked] ?>.webp" alt=""><img class="clean" src="assets/img/<?= $pics[$picked] ?>.webp" alt="<?= $options[$picked] ?> in progress"><span class="blade" aria-hidden="true"></span></div>
  <div class="side"><div class="inner">
    <h1 class="display rise">Book a Service</h1>
    <p class="sub rise" style="--d:70ms">AUTOCARE Carwash Booking. Detailing excellence, delivered to your doorstep in Baguio City.</p>
    <form class="f rise" style="--d:120ms" method="post" action="index.php">
      <input type="hidden" name="action" value="book">
      <label for="uname">Full name<input type="text" id="uname" name="uname" autocomplete="name" required></label>
      <label for="contact">Contact number<input type="tel" id="contact" name="contact" autocomplete="tel" required></label>
      <label for="address">Address<input type="text" id="address" name="address" autocomplete="street-address" required></label>
      <div class="two">
        <label for="service">Service<span class="selwrap"><select id="service" name="service" required>
          <?php foreach ($options as $v => $l): ?><option value="<?= $v ?>"<?= $v === $picked ? ' selected' : '' ?>><?= $l ?></option><?php endforeach; ?>
        </select></span></label>
        <label for="datetime">Preferred date and time<input type="datetime-local" id="datetime" name="datetime" required></label>
      </div>
      <button type="submit" name="submit" class="btn">Book now <?= $arrow ?></button>
    </form>
  </div></div>
</main>
<?php include __DIR__ . '/inc/mini-foot.php'; ?>
</body>
</html>
