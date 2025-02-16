<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Home | Malcolm Lismore Photographer</title>
    <link rel="icon" type="image/x-icon" href="/image/icon.png">
  </head>
  <body>
    <header class="header" id="home">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <img src="image/logo1.png" alt="logo" />
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="" >HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#package_sec">PACKAGES</a></li>
          <li class="nav__logo">
            <img src="image/logo1.png" alt="logo"/>
          </li>
          <li><a href="#gallery_sec">GALLERY</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
      <nav>
        <div class="header__name">
          <h2 class="section__header2">Malcolm Lismore Photographer</h2>
        </div>
      </nav>
    </header>

    <div class="section__container about__container" id="about">
      <h2 class="section__header">WE CAPTURE YOUR STORY</h2>
      <p class="section__description">
        At Malcolm Lismore Photographer, we are devoted to capturing the essence 
        of your most meaningful moments. Our passion for photography, combined 
        with a unique perspective, allows us to transform everyday moments 
        into timeless memories.
      </p>
      <p class="section__description">
        Whether it's a wedding, a special occasion, or the natural beauty of 
        the world around us, we focus on preserving the authenticity of each 
        moment. Our aim is to tell your story through every photograph, 
        ensuring that your memories are beautifully documented and cherished 
        forever. Let us frame the unforgettable moments of your life, one 
        stunning shot at a time.
      </p>
      <img src="image/logo2.png" alt="logo" />
    </div>
    
    <section class="blog" id="blog">
      <div class="section__container blog__container">
        <div class="blog__content">
          <h2 class="section__header">~ LATEST BLOG ~</h2>
          <h4>Capturing Emotion in Every Frame</h4>
          <p>
            At Malcolm Lismore Photographer, storytelling is at the heart of 
            everything we do. Photography isn't just about clicking a shutter 
            it’s about capturing emotions, moments, and stories that resonate 
            for a lifetime. In this post, we explore the art of emotion-driven 
            photography and how we use our lens to convey meaning beyond the image.
          </p>
          <div class="blog__btn">
            <a href="blog.php">
              <button class="btn">Read More</button>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="section__container portfolio__container" id="package_sec">
      <h2 class="section__header">~ PACKAGES ~</h2>
      <div class="portfolio__grid">
        <div class="portfolio__card">
          <img src="image/pack-1.jpg" alt="portfolio" />
        </div>
        <div class="portfolio__card">
          <img src="image/pack-2.jpg" alt="portfolio" />
        </div>
        <div class="portfolio__card">
          <img src="image/pack-3.jpg" alt="portfolio" />
        </div>
      </div>
      <br><br>
      <div class="gallery__btn">
        <a href="package.php">
          <button class="btn">VIEW PACKAGES</button>
        </a>
      </div>
    </div>

    <section class="section__container gallery__container" id="gallery_sec">
    <h2 class="section__header">~ GALLERY ~</h2>
      <div class="gallery__grid">
        <img src="image/image-1.jpg" alt="gallery" />
        <img src="image/image-2.jpg" alt="gallery" />
        <img src="image/image-3.jpg" alt="gallery" />
        <img src="image/image-4.jpg" alt="gallery" />
        <img src="image/image-5.jpg" alt="gallery" />
        <img src="image/image-6.jpg" alt="gallery" />
        <img src="image/image-7.jpg" alt="gallery" />
        <img src="image/image-8.jpg" alt="gallery" />
      </div>
      <div class="gallery__btn">
        <a href="gallery.php">
          <button class="btn">VIEW GALLERY</button>
        </a>
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <img src="image/logo2.png" alt="logo" />
          <div class="footer__socials">
            <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://x.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="ri-youtube-fill"></i></a>
            <a href="https://www.pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a>
          </div>          
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="package.php">PACKAGES</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY CONNECTED</h4>
          <p>
            Join the Capturer community and stay updated on the latest trends, tips, and photography moments. Be part of our journey and never miss a shot!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Malcolm Lismore Photographer. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
