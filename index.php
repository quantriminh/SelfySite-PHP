<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="indexstyle.css?v=<? echo time(); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&family=Roboto:wght@900&family=Ubuntu:ital,wght@1,500&family=Work+Sans&display=swap"
    rel="stylesheet">
  <title>Selfy Site</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="images\avatar.jpg" alt="avatar">
      <h3>QUAN MINH TRÍ</h3>
    </div>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="index.html" id="Home">Home</a></li>
          <li><a href="mygallery.html">My Gallery</a></li>
          <li><a href="aboutme.html">About Me</a></li>
        </ul>
      </nav>
    </div>
  </header> -->

  <?php include "includes/header.php"; ?>

  <div class="banner">
    <div class="content">
      <div class="welcome-message">
        <h4>HELLO, I'M</h4> <br>
        <h2>MINH TRÍ</h2>
      </div>
      <div class="btn">
        <a href="#quote" class="getstartedbtn">Get Started</a>
      </div>
    </div>
  </div>

  <div class="quote" id="quote">
    <div class="quote-content">
      <h2>“The difference between ordinary and extraordinary is that little extra.”</h2>
      <h4>- Jimmy Johnson -</h4>
    </div>
  </div>

  <div class="cards">
    <div class="container">

      <a href="mygallery.html">
        <div class="col-3">
          <div class="col-img">
            <img src="images\galleryicon.png" alt="My Gallery">
          </div>
          <div class="card-text">
            <h3>My Gallery</h3>
            <p>Oh boi, you're gonna love it!</p>
          </div>
        </div>
      </a>

      <a href="aboutme.html">
        <div class="col-3">
          <div class="col-img">
            <img src="images\aboutmeicon.png" alt="About Me">
          </div>
          <div class="card-text">
            <h3>About Me</h3>
            <p>Me, myself and I</p>
          </div>
        </div>
      </a>
    </div>
  </div>

</body>

<footer>

</footer>

</html>