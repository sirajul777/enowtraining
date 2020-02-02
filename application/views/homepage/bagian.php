<div id="carousel">
  <div class="row">
    <div class="col-md-6 mr-auto ml-auto">
      <div class="card card-raised card-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= base_url('assets/'); ?>img/s2.JPG" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/'); ?>img/s3.JPG" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/'); ?>img/s1.jpg" alt="Third slide">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-md-6 ml-auto mr-auto">
    <div class="profile-tabs">
      <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
            <i class="material-icons">camera</i> Studio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#works" role="tab" data-toggle="tab">
            <i class="material-icons">palette</i> Work
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
            <i class="material-icons">favorite</i> Favorite
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>






























<li class="nav-item">
  <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
    <i class="material-icons">cloud_download</i> Download
  </a>
</li>


<div class="section section-download" id="downloadSection">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <h2>Do you love this UI Kit?</h2>
        <h4>Cause if you do, it can be yours for FREE. Hit the buttons below to navigate to our website where you can find the kit. Our friends from
          <a href="https://themeisle.com/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank">ThemeIsle</a> created a Wordpress Theme which can be also downloaded for free. Start a new project or give an old Bootstrap project a new look!</h4>
      </div>
      <div class="col-sm-8 col-md-6 ml-auto mr-auto">
        <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg">
          <i class="fa fa-html5"></i> Free HTML Download
        </a>
        <a href="https://themeisle.com/themes/hestia/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank" class="btn btn-primary btn-lg">
          <i class="fa fa-wordpress"></i> Wordpress Theme
        </a>
      </div>
    </div>
    <br>
    <br>
    <div class="row text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <h2>Want more?</h2>
        <h4>We've just launched
          <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" target="_blank">Material Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design.</h4>
      </div>
      <div class="col-sm-8 col-md-5 ml-auto mr-auto">
        <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" class="btn btn-rose btn-upgrade btn-lg" target="_blank">
          <i class="material-icons">unarchive</i> Upgrade to PRO
        </a>
      </div>
    </div>
    <div class="sharing-area text-center">
      <div class="row justify-content-center">
        <h3>Thank you for supporting us!</h3>
      </div>
      <button id="twitter" class="btn btn-raised btn-twitter sharrre">
        <i class="fa fa-twitter"></i> Tweet
      </button>
      <button id="facebook" class="btn btn-raised btn-facebook sharrre">
        <i class="fa fa-facebook-square"></i> Share
      </button>
      <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
        <i class="fa fa-google-plus"></i> Share
      </button>
      <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
        <i class="fa fa-github"></i> Star
      </a>
    </div>
  </div>
</div>
















<!-- kontak -->
<div class="section section-contacts">
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <h2 class="text-center title">Contac Us!</h2>
      <h4 class="text-center description">You can write a message in the message field if you have questions and want to get more information about the English Now Training Centre please contact us.</h4>
      <form class="contact-form">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Your Name</label>
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Your Email</label>
              <input type="email" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
          <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto text-center">
            <button class="btn btn-primary btn-raised">
              Send Message
            </button>
          </div>
        </div>
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>With Socmed!</h3>
          </div>
          <button id="twitter" class="btn btn-raised btn-twitter sharrre">
            <i class="fa fa-twitter"></i> Tweet
          </button>
          <button id="facebook" class="btn btn-raised btn-facebook sharrre">
            <i class="fa fa-facebook-square"></i> Facebook
          </button>
          <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
            <i class="fa fa-google-plus"></i> Google+
          </button>
        </div>
      </form>
    </div>
  </div>
</div>