<header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <a href="/"><h1>Lagu Anak</h1></a>
          </div>
        </div>

        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <!-- <li role="presentation"><a href="<?php echo site_url('/') ?>" >Home</a></li> -->
              <li role="presentation"><a href="#home">Home</a></li>
              <li role="presentation"><a href="<?php echo site_url('welcome/menu1') ?>">Pelangi</a></li>
              <!-- <li role="presentation"><a href="#pelangi">Pelangi</a></li> -->
              <li role="presentation"><a href="<?php echo site_url('welcome/menu2') ?>">Balon Ku</a></li>
              <!-- <li role="presentation"><a href="#balonku">Balon Ku</a></li> -->
              <li role="presentation"><a href="<?php echo site_url('welcome/menu3') ?>">Kereta Api</a></li>
              <!-- <li role="presentation"><a href="#kereta">Kereta Api</a></li> -->
              <li role="presentation"><a href="<?php echo site_url('welcome/menu4') ?>">Cicak</a></li>
              <!-- <li role="presentation"><a href="#Cicak">Cicak</a></li> -->
              <li role="presentation"><a href="<?php echo site_url('welcome/menu5') ?>">Kebun Ku</a></li>
              <!-- <li role="presentation"><a href="#kebunku">Kebun Ku</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

<div id="home">
  <div class="slider">
    <div class="">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="/asset/img/pelangi.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="/asset/img/balon.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="/asset/img/kereta.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="/asset/img/kebun.jpg" class="img-responsive" alt="">
            </div>
          </div>

          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>

          <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>
</div>
