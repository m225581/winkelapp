<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.js') }}">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

          <div class="item active">
              <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>

          <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header 2</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>

          <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third Slide">
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Test Header 3</h1>
                      <p>Input Text Here</p>
                  </div>
              </div>
          </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

  </div>

<link rel="script" href="{{ asset('jquery.js') }}">
<link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">

</body>
</html>