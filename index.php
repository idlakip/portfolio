<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS Online -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <!-- CSS Offline -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <!-- My CSS -->
  <link rel="stylesheet" href="mycss/style.css">
  <style>
    section {
      min-height: 420px;
    }
  </style>
  <link rel="shortcut icon" href="icon/favicon.ico">
  <!-- <link rel="shortcut icon" href="../icon/favicon.ico"> -->


  <title>Portfolio | Masrianto!</title>
</head>

<body class="mt-5">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Masrianto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link" href="portfolio.php">Portfolio</a>
          <a class="nav-item nav-link" href="company">Company</a>
          <a class="nav-item nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="img/profile.png" alt="" width="25%" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Masrianto</h1>
      <p class="lead">Selamat Datang di Website Admin LAKIP.CO.ID</p>
    </div>
  </div>

  <section id="about" class="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit distinctio quaea.</p>
        </div>

        <div class="col-md-5 text-center">
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem vitae facere, quae sequi adipisci nisi .</p>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Portfolio</h2>
        </div>
      </div>

      <!-- Awal card1 -->
      <div class="row mb-4">
        <div class="col-md">
          <div class="card ">
            <img src="img/portfolio/1.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some1 </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img src="img/portfolio/2.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some2 </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img src="img/portfolio/3.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some3 </p>
            </div>
          </div>
        </div>
      </div><!-- batas endcard1 -->

      <!-- Awal card2 -->
      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img src="img/portfolio/4.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some4 </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img src="img/portfolio/5.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some5 </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <img src="img/portfolio/6.png" class="card-img-top" alt="card image cap">
            <div class="card-body">
              <p class="card-text">Some6 </p>
            </div>
          </div>
        </div>
      </div><!-- batas endcard2 -->
    </div><!-- end container -->
  </section>

  <section id="contact" class="contact mb-5">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <h3 class="card-title">Contact</h3>

            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item">
              <h5>Location :</h5>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Serdang Baru Raya No. 4B, Kel. Serdang, Kec. Kemayoran, Jakarta Pusat - 10650</li>
            <li class="list-group-item">DKI Jakarta, Indonseia</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
  </section>


  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>&copy; Copyright 2012 - <?php echo date('Y'); ?> Masrianto.com</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- Online -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> -->
  <!-- Localhost Offline -->
  <script src="jquery/jquery-3.5.1.slim.min.js"></script>
  <script src="npm/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>