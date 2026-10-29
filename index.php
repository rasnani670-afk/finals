<?php
$title = 'Home | AUTOCARE';
$arrow = file_get_contents(__DIR__ . '/inc/arrow.php');
/* key matches the booking form's service values */
$services = [
  ['carwash', 'Car Wash', 'Quick and convenient cleaning services to keep your car looking great.', 'wash'],
  ['interior', 'Interior Detailing', 'Maintain cleanliness and comfort inside your car.', 'steam'],
  ['exterior', 'Exterior Detailing', "Restore your car's exterior to like-new condition.", 'wipe'],
  ['carwax', 'Car Wax', 'Protect paint and enhance shine with quality waxing.', 'polish'],
  ['ceramic', 'Ceramic Coating', 'Advanced protection that lasts for years.', 'ceramic'],
  ['ppf', 'Paint Protection Film (PPF)', 'Defend against chips, scratches, and fading.', 'ppf'],
];
$gallery = [['bmw', 'BMW 3 Series'], ['lexus', 'Lexus RX'], ['everest', 'Ford Everest'], ['mustang', 'Ford Mustang'], ['fortuner', 'Toyota Fortuner']];
include __DIR__ . '/inc/head.php';
?>
<body>
<?php include __DIR__ . '/inc/nav.php'; ?>

<main id="main">
  <section class="hero" aria-labelledby="h1" style="padding-block:8px 0">
    <div class="wrap">
      <div class="wipe shot" data-wipe data-dur="1700">
        <img class="haze" src="assets/img/gr.webp" alt="" fetchpriority="high">
        <img class="clean" src="assets/img/gr.webp" alt="A red hatchback, freshly detailed, in the studio">
        <span class="blade" aria-hidden="true"></span>
      </div>
      <div class="row">
        <p class="rise">Detailing Excellence, Delivered to Your Doorstep<span>Professional car detailing service in Baguio City.</span></p>
        <div class="ctas rise" style="--d:90ms"><a class="btn" href="process_booking.php">Book online <?= $arrow ?></a><a class="btn plain" href="#services">See services</a></div>
      </div>
      <h1 id="h1" class="display fit">Autocare<small>Detailing · Baguio City</small></h1>
    </div>
  </section>

  <section id="services" aria-labelledby="svc-h">
    <div class="wrap">
      <div class="svc-head">
        <h2 id="svc-h" class="display rise">Our Services</h2>
        <p class="rise" style="--d:90ms"><b>Professional Auto Detailing Services.</b> Welcome to our professional car detailing service in Baguio City! We offer a range of services to keep your car looking and running like new.</p>
      </div>
      <div class="picker">
        <figure class="frame wipe" data-wipe>
          <img class="haze" src="assets/img/<?= $services[0][3] ?>.webp" alt="">
          <img class="clean" src="assets/img/<?= $services[0][3] ?>.webp" alt="<?= htmlspecialchars($services[0][1]) ?>">
          <span class="blade" aria-hidden="true"></span>
          <figcaption><?= htmlspecialchars($services[0][1]) ?></figcaption>
        </figure>
        <div>
          <ul class="svc" aria-label="Choose a service">
            <?php foreach ($services as $i => [$k, $n, $d, $img]): ?>
            <li class="rise" style="--d:<?= $i * 70 ?>ms"><button type="button" aria-pressed="<?= $i ? 'false' : 'true' ?>" data-key="<?= $k ?>" data-name="<?= htmlspecialchars($n) ?>" data-img="assets/img/<?= $img ?>.webp">
              <span class="n"><?= htmlspecialchars($n) ?></span><span class="d"><?= htmlspecialchars($d) ?></span><span class="go"><?= $arrow ?></span>
              <span class="pic"><img src="assets/img/<?= $img ?>.webp" alt="" loading="lazy"></span>
            </button></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn book-pick" href="process_booking.php?service=carwash"><span>Book Car Wash</span> <?= $arrow ?></a>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" aria-labelledby="gal-h" style="padding-top:0">
    <div class="wrap gal-head">
      <h2 id="gal-h" class="display rise">Gallery</h2>
      <div class="gal-ctl"><button type="button" data-dir="prev" aria-label="Previous photo"><svg viewBox="0 0 24 24" style="transform:scaleX(-1)"><path d="M4 11h12.2l-4.6-4.6L13 5l7 7-7 7-1.4-1.4 4.6-4.6H4z"/></svg></button><button type="button" data-dir="next" aria-label="Next photo"><svg viewBox="0 0 24 24"><path d="M4 11h12.2l-4.6-4.6L13 5l7 7-7 7-1.4-1.4 4.6-4.6H4z"/></svg></button></div>
    </div>
    <div class="strip" tabindex="0" aria-label="Gallery photos">
      <?php foreach ($gallery as [$img, $alt]): ?>
      <figure class="wipe" data-wipe><img class="haze" src="assets/img/<?= $img ?>.webp" alt="" loading="lazy"><img class="clean" src="assets/img/<?= $img ?>.webp" alt="<?= $alt ?> after detailing" loading="lazy"><span class="blade" aria-hidden="true"></span></figure>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="about" aria-labelledby="about-h" style="padding-top:0">
    <div class="wrap about">
      <div class="wipe rise" data-wipe><img class="haze" src="assets/img/interior.webp" alt="" loading="lazy"><img class="clean" src="assets/img/interior.webp" alt="A detailed leather interior" loading="lazy"><span class="blade" aria-hidden="true"></span></div>
      <div>
        <h2 id="about-h" class="display rise">About Us</h2>
        <p class="big rise" style="--d:80ms;margin-top:26px">At Car Autocare, we care about your car as much as you do.</p>
        <p class="rise" style="--d:140ms">Our team of car detailers is passionate about providing the highest quality car detailing services to our clients. With years of experience and expertise in the industry, we strive to go above and beyond to exceed your expectations.</p>
        <p class="rise" style="--d:180ms">Trust us to provide professional, reliable, and affordable services that are second to none. Contact us today to schedule your appointment and experience the difference.</p>
        <p class="rise" style="--d:220ms;margin-top:30px"><a class="btn" href="process_booking.php">Book online <?= $arrow ?></a></p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact" aria-labelledby="contact-h">
    <div class="wrap">
      <h2 id="contact-h" class="display rise">Contact Us</h2>
      <div class="grid">
        <form class="f rise" id="contact-form" action="" method="post">
          <label>Your name<input name="name" type="text" id="name" autocomplete="name" required></label>
          <label>Your email<input name="email" type="email" id="email" autocomplete="email" required></label>
          <label>Subject<input name="subject" type="text" id="subject"></label>
          <label>Your message<textarea name="message" id="message" rows="6" required></textarea></label>
          <button type="submit" class="btn">Send message <?= $arrow ?></button>
        </form>
        <div class="map rise" style="--d:90ms"><iframe src="https://www.google.com/maps?q=Baguio%20City&amp;z=13&amp;output=embed" title="Map of Baguio City" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/inc/foot.php'; ?>
</body>
</html>
