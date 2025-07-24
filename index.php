<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | AUTOCARE</title>
    <link rel="stylesheet" href="style.css">
<style>
        
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        color: #ffffff;
        background-color: #000;
        }

    a {
        text-decoration: none;
        color: inherit;
    }

        /* HEADER + NAVBAR */
    .main-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 0 40px; /* No top/bottom padding at all */
        height: 100px; /* Force small height */
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    }




    .logo {
        width: 200px;
        height: auto;
    }

    .red-navigation {
        display: flex;
        gap: 20px;
    }

    .red-navigation a {
        color: #fff;
        background-color: #cc0000;
        padding: 10px 15px;
        border-radius: 5px;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .red-navigation a:hover {
        background-color: #a30000;
    }


    .photo-container {
        position: relative;
        height: 100vh;
        background: url('3.jpg') center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .overlay-image {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 0;
    }

    .photo-container h1,
    .photo-container p {
        z-index: 1;
    }

    .photo-container h1 {
        font-size: 5rem;
        color: #ffffff;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        margin-bottom: 10px; /* Add this to reduce space below h1 */
    }

    .photo-container p {
        font-size: 1.5rem;
        font-weight: 600;
        olor: #ddd;
    }

        /* SLIDESHOW */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
            overflow: hidden;
        }

        .mySlides {
            display: none;
            text-align: center;
        }

        .mySlides img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }

        /* ABOUT US */
        .about-us-content {
            padding: 40px;
            background-color: #111;
            border-top: 4px solid #cc0000;
            color: #ccc;
            text-align: center;
        }

        .about-us-content h4 {
            color: #ff4d4d;
            font-size: 1.2rem;
        }

        .about-us-content h1 {
            font-size: 2.5rem;
            margin: 10px 0;
            color: #fff;
        }

        .read-more-btn {
            background-color: #cc0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .read-more-btn:hover {
            background-color: #a30000;
        }

        /* SERVICES */
        .services {
            background-color: #111;
            padding: 60px 30px;
            color: #eee;
            text-align: center;
        }

        .services h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .services hr {
            width: 60px;
            height: 4px;
            background-color: #cc0000;
            border: none;
            margin: 20px auto;
        }

        .services p {
            max-width: 800px;
            margin: 0 auto 40px;
            color: #bbb;
            font-size: 1.1rem;
        }

.services .gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Always 3 columns */
  gap: 30px;
  max-width: 1000px;       /* Ensures gallery doesn't stretch too wide */
  margin: 0 auto;          /* Center horizontally */
  background-color: black;
  padding: 30px;
  box-sizing: border-box;
}

.services .gallery-item {
  background-color: #111;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  text-align: left;
  width: 100%;             /* Fill grid cell */
}

.services .gallery-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.services .gallery-item .title {
  font-size: 1.3rem;
  font-weight: bold;
  color: #ff4d4d;
  padding: 15px 15px 5px;
}

.services .gallery-item .description {
  padding: 0 15px 15px;
  font-size: 0.95rem;
  color: #ccc;
}

        /* CONTACT SECTION */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            padding: 50px 30px;
            background-color: #111;
            gap: 30px;
            
        }

        .contact-form-wrapper {
            flex: 1 1 400px;
            color: #fff;
        }

        .contact-form-wrapper h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ff4d4d;
            text-align: left;
        }

        .contact-form-wrapper form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form-wrapper input,
        .contact-form-wrapper textarea {
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px;
            font-size: 1rem;
        }

.main-button {
    background-color: #cc0000;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
    display: block;              /* Makes margin auto work */
    width: fit-content;
    margin: 0 auto;              /* 👈 Centers the button horizontally */
}




        .main-button:hover {
            background-color: #a30000;
        }

        .map-wrapper {
            flex: 1 1 400px;
            min-height: 400px;
        }

        /* FOOTER */
        footer {
            background-color: #000;
            padding: 30px;
            color: #888;
            text-align: center;
        }

        footer .social-icons {
            margin-bottom: 10px;
        }

        footer .social-icons a {
            margin: 0 10px;
            display: inline-block;
        }

        footer img {
            width: 24px;
            height: 24px;
        }
.gallery-box {
    display: flex;
    flex-wrap: nowrap; /* Prevents wrapping */
    justify-content: space-between; /* Gives natural space between elements */
    align-items: flex-start;
    background-color: #111;
    padding: 30px;
    gap: 40px;
    margin: 0 auto;
    max-width: 1200px;
    border-radius: 10px;
}

@media (max-width: 768px) {
    .gallery-box {
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
    }
}


    .gallery-left {
    flex: 1;
    min-width: 300px;
    max-width: 600px;
}

.gallery-heading {
    font-size: 2.5rem;
    color: #ff4d4d;
    margin-bottom: 20px;
    text-align: left;
}

.slideshow-container {
    width: 500px;
    height: 380px;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.slideshow-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slideshow-container {
    max-width: 100%;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.slideshow-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.about-us-content {
    flex: 1;
    min-width: 300px;
    max-width: 600px;
    color: #ccc;
}

.about-us-content h4 {
    font-size: 1.2rem;
    color: #ff4d4d;
}

    .about-us-content p {
    font-size: 1rem;
    margin-bottom: 20px;
    line-height: 1.6;
}

    .read-more-btn {
    background-color: #cc0000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.read-more-btn:hover {
    background-color: #a30000;
}

@media (max-width: 768px) {
    .gallery-box {
        flex-direction: column;
        padding: 20px;
    }

    .gallery-heading {
        text-align: center;
    }
}


        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 20px;
            }

            .red-navigation {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .photo-container h1 {
                font-size: 3rem;
            }

            .photo-container p {
                font-size: 1.2rem;
            }

            .gallery-item {
                width: 100%;
            }

            .contact-section {
                flex-direction: column;
            }

            .map-wrapper {
                height: 300px;
            }
            
        }

footer {
    background-color: #222;
    color: white;
    padding: 30px 20px;
    text-align: center;
}

.social-links {
    margin: 20px 0;
}

.social-links a {
    display: inline-block;
    margin: 0 10px;
    padding: 10px;
    background-color: #555;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.social-links a:hover {
    background-color: #777;
}

.facebook { background-color: #1877f2; }
.facebook:hover { background-color: #166fe5; }

.twitter { background-color: #000; }
.twitter:hover { background-color: #333; }

.instagram { background-color: #e4405f; }
.instagram:hover { background-color: #d73559; }

hr {
    border: none;
    border-top: 1px solid #444;
}

.dots-container {
  text-align: center;
  margin-top: 15px;
}

.dot {
  height: 12px;
  width: 12px;
  margin: 0 6px;
  background-color: #888;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease;
  cursor: pointer;
}

.dot.active {
  background-color: #cc0000;
}

    @media (max-width: 768px) {
    .gallery {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on tablet */
    }
}

@media (max-width: 500px) {
    .gallery {
        grid-template-columns: 1fr; /* 1 column on mobile */
    }
}

    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="main-header">
        <img src="12345.png" alt="Logo" class="logo">
        <nav class="red-navigation">
            <a href="#">Home</a>
            <a href="#gallery">Gallery</a>
            <a href="login.php">Login</a>
            <a href="process_booking.php">Book Online</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="photo-container">
        <div class="overlay-image"></div>
        <h1>AUTOCARE</h1>
        <p>Detailing Excellence, Delivered to Your Doorstep</p>
    </section>

    <!-- ABOUT / GALLERY -->
<section class="about-us" id="gallery">
  <div class="gallery-box">
    
    <!-- LEFT SIDE: Gallery Heading + Slideshow -->
    <div class="gallery-left">
      <h1 class="gallery-heading">Gallery</h1>

      <!-- SLIDESHOW -->
      <div class="slideshow-container">
        <div class="mySlides"><img src="144.jpg" alt="Slide 1"></div>
        <div class="mySlides"><img src="12.jpg" alt="Slide 2"></div>
        <div class="mySlides"><img src="13.jpg" alt="Slide 3"></div>
        <div class="mySlides"><img src="11.jpg" alt="Slide 4"></div>
        <div class="mySlides"><img src="199.jpg" alt="Slide 5"></div>
      </div>

      <!-- DOTS -->
      <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>

    <!-- RIGHT SIDE: About Us -->
    <div class="about-us-content">
      <h4>About Us</h4>
      <p>
        Our team of car detailers is passionate about providing the highest quality car detailing services to our clients. With years of experience and expertise in the industry, we strive to go above and beyond to exceed your expectations.
        <br><br>
        At Car Autocare, we care about your car as much as you do. Trust us to provide professional, reliable, and affordable services that are second to none.
        <br><br>
        Contact us today to schedule your appointment and experience the difference.
      </p>
      <button class="read-more-btn">Read More</button>
    </div>

  </div>
</section>



    <!-- SERVICES -->
    <section class="services">
        <h2>Professional Auto Detailing Services</h2>
        <hr>
        <p>Welcome to our professional car detailing service in Baguio City! We offer a range of services to keep your car looking and running like new.</p>
        <div class="gallery">
            <div class="gallery-item">
                <img src="6.jpg" alt="Car wash">
                <div class="title">Car Wash</div>
                <div class="description">Quick and convenient cleaning services to keep your car looking great.</div>
            </div>
            <div class="gallery-item">
                <img src="5.jpg" alt="Interior Detailing">
                <div class="title">Interior Detailing</div>
                <div class="description">Maintain cleanliness and comfort inside your car.</div>
            </div>
            <div class="gallery-item">
                <img src="4.jpg" alt="Exterior Detailing">
                <div class="title">Exterior Detailing</div>
                <div class="description">Restore your car's exterior to like-new condition.</div>
            </div>
            <div class="gallery-item">
                <img src="7.jpg" alt="Car Wax">
                <div class="title">Car Wax</div>
                <div class="description">Protect paint and enhance shine with quality waxing.</div>
            </div>
            <div class="gallery-item">
                <img src="8.jfif" alt="Ceramic Coating">
                <div class="title">Ceramic Coating</div>
                <div class="description">Advanced protection that lasts for years.</div>
            </div>
            <div class="gallery-item">
                <img src="8.jpg" alt="Paint Protection Film">
                <div class="title">Paint Protection Film (PPF)</div>
                <div class="description">Defend against chips, scratches, and fading.</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
        <div class="contact-form-wrapper">
            <h2>Contact Us</h2>
            <form id="contact" action="" method="post">
                <input name="name" type="text" id="name" placeholder="Your Name*" required>
                <input name="email" type="email" id="email" placeholder="Your Email*" required>
                <input name="subject" type="text" id="subject" placeholder="Subject">
                <textarea name="message" id="message" rows="6" placeholder="Your Message*" required></textarea>
                <button type="submit" class="main-button">Send Message</button>
                <br>
                <br>
                <br>
                <br>
                <br>
            </form>
        </div>
        <div class="map-wrapper">
           
            <iframe src="https://www.google.com/maps/embed?..." width="90%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- FOOTER -->
<footer>
    <br>
    <h3>Follow Us</h3>

    <div class="social-links">
        <a href="https://facebook.com" class="facebook" target="_blank">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </a>
        <a href="https://x.com" class="twitter" target="_blank">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
        </a>
        <a href="https://instagram.com" class="instagram" target="_blank">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
        </a>
    </div>

    <hr style="margin: 20px 0; border-color: #444;">

    <p>© 2024 AUTOCARE All Rights Reserved <br>Made by Rishi A.</p>
</footer>


    <!-- SLIDESHOW SCRIPT -->
<script>
  let slideIndex = 1;
  let slideTimer;

  function showSlides(n) {
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;

    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (let i = 0; i < dots.length; i++) {
      dots[i].classList.remove("active");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
  }

  function currentSlide(n) {
    slideIndex = n;
    showSlides(slideIndex);
    resetTimer();
  }

  function autoSlide() {
    slideIndex++;
    showSlides(slideIndex);
    slideTimer = setTimeout(autoSlide, 3000);
  }

  function resetTimer() {
    clearTimeout(slideTimer);
    slideTimer = setTimeout(autoSlide, 3000);
  }

  // Initial load
  showSlides(slideIndex);
  slideTimer = setTimeout(autoSlide, 3000);
</script>

</body>
</html>
