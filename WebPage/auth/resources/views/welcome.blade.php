<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>WEB AGENCY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <section class="head">
    <div class="container flex1">
      <h1>StackDev </h1>
      <div class="icon">
        <i class="fa fa-map"></i>
        <label>Address: Maputo</label>
        <i class="fa fa-phone"></i>
        <label>Call: +258 875621487</label>
        <i class="fa fa-envelope"></i>
        <label>Email: stackdev@stackdev.com</label>
      </div>
      <button>Get A Quote</button>
    </div>
  </section>



  <section class="navbar">
    <div class="container">
      <div class="content">
        <nav>
          <ul id="menuitem">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="index.html">ABOUT</a></li>
            <li><a href="contact.html">GALLERY</a></li>
            <li><a href="account.html">TESTIMONIAL</a></li>
            <li><a href="account.html">SERVICES</a></li>
          </ul>
        </nav>
        <span class="fa fa-bars" onclick="menutoggle()"></span>

        <div class="account">
          <i class="fa fa-sign-in"></i>
          <a href="{{ route('register') }}"><label>SIGN UP</label></a>
          <i class="fa fa-sign-in"></i>
          <a href="{{ route('login') }}"><label>LOG IN</label></a>
          <i class="fa fa-search"></i>
        </div>
      </div>
    </div>
  </section>


  <script>
    var menuitem = document.getElementById("menuitem");
    menuitem.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitem.style.maxHeight == '0px') {
        menuitem.style.maxHeight = "200px"
      } else {
        menuitem.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>


  <section class="home">
    <div class="wrapper flex">
      <div class="left">
        <h1>WEB AGENCY</h1>
        <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button>CONTACT US</button>
      </div>
      <div class="right">
        <img src="https://bibliomkt.com.br/wp-content/uploads/2021/01/marketing-digital-bibliomkt.jpg" alt="">
      </div>
    </div>
  </section>


  <section class="about">
    <div class="wrapper flex1">
      <div class="left">
        <h2>About Agency</h2>
        <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button>Read More</button>
      </div>
      <div class="right">
      </div>
    </div>
  </section>

  <section class="service">
    <div class="wrapper">
      <h2>What we do </h2>
      <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <div class="items grid">
        <div class="box">
          <div class="text">
            <img src="https://img.icons8.com/ios/100/000000/code.png" />
            <h3>Web Development</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <button>Read More</button>
        </div>
        <div class="box">
          <div class="text">
            <img src="https://img.icons8.com/ios-filled/100/000000/imac-mail-1.png" />
            <h3>App Development</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <button>Read More</button>
        </div>
        <div class="box">
          <div class="text">
            <img src="https://img.icons8.com/material-outlined/96/000000/idea--v1.png" />
            <h3>SEO Optimization</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <button>Read More</button>
        </div>
      </div>
    </div>
  </section>


  <section class="our_service">
    <div class="wrapper">
      <h2>Our Service</h2>
      <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <div class="items grid">
        <div class="box">
          <div class="img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy9kKVWcIHAMKN7cPzy9X_r7a3rDC0Sswi-dLWk7uVFG2ShCPL" alt="">
          </div>
          <div class="text">
            <h3>SEO Optimization</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button>Read More</button>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/w2.jpeg" alt="">
          </div>
          <div class="text">
            <h3>SEO Optimization</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button>Read More</button>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/w3.jpeg" alt="">
          </div>
          <div class="text">
            <h3>SEO Optimization</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button>Read More</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Newsletter">
    <div class="wrapper">
      <h2>Newsletter</h2>
      <input type="text" placeholder="Your email Requets">
      <a class="submit">SEND</a>
    </div>
  </section>

  <section class="team">
    <div class="wrapper">
      <h2>Our Team</h2>
      <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <div class="items grid">
        <div class="box">
          <img src="image/c1.jpg">
          <h3>Alex Ander</h3>
          <span>GRAPHIC DESIGNER</span> <br>
          <button>Read More</button>
        </div>
        <div class="box">
          <img src="image/c2.jpg">
          <h3>Alex Ander</h3>
          <span>GRAPHIC DESIGNER</span> <br>
          <button>Read More</button>
        </div>
        <div class="box">
          <img src="image/c3.jpg">
          <h3>Alex Ander</h3>
          <span>GRAPHIC DESIGNER</span> <br>
          <button>Read More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="team blog">
    <div class="wrapper">
      <h2>Our Blog</h2>
      <p> Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <div class="items grid">
        <div class="box">
          <img src="image/b1.jpg" alt="">
          <h3>Design</h3>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <img src="image/b2.jpg" alt="">
          <h3>Design</h3>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <img src="image/b3.jpg" alt="">
          <h3>Design</h3>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <button>Read More</button>
    </div>
  </section>

  <section class="contact">
    <div class="wrapper">
      <h2>Contact Us</h2>
      <form class="form">
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Your Email">
        <input type="text" placeholder="Phone Number">
        <textarea name="name" rows="5" cols="80">Type Message Here...</textarea>
        <a class="submit">SEND</a>
      </form>
    </div>
  </section>

  <footer>
    <div class="wrapper">
      <div class="tems grid">
        <div class="box">
          <h3>About</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <h3>Blog</h3>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <h3>Work Link</h3>
          <span>Home</span><br>
          <span>About Us</span><br>
          <span>Service</span><br>
          <span>Team</span><br>
          <span>Blog</span><br>
          <span>Contact Us</span><br>
        </div>
        <div class="box">
          <h3>Folllow Us</h3>
          <i class="fa fa-facebook"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>
    </div>
  </footer>
  <p class="legal">Copyright (c) 2021 Copyright Holder All Rights Reserved | This template is made by <i class="fa fa-heart"></i> Dot Studio.</p>
</body>

</html>