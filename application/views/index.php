<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style type="text/css">
        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
          padding-bottom: 40px;
          color: #5a5a5a;
        }



        /* CUSTOMIZE THE NAVBAR
        -------------------------------------------------- */

        /* Special class on .container surrounding .navbar, used for positioning it into place. */
        .navbar-wrapper {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          z-index: 20;
        }

        /* Flip around the padding for proper display in narrow viewports */
        .navbar-wrapper .container {
          padding-left: 0;
          padding-right: 0;
        }
        .navbar-wrapper .navbar {
          padding-left: 15px;
          padding-right: 15px;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
          height: 500px;
          margin-bottom: 60px;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
          z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel .item {
          height: 500px;
          background-color: #777;
        }
        .carousel-inner > .item > img {
          position: absolute;
          top: 0;
          left: 0;
          min-width: 100%;
          height: 500px;
        }



        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Pad the edges of the mobile views a bit */
        .marketing {
          padding-left: 15px;
          padding-right: 15px;
        }

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
          text-align: center;
          margin-bottom: 20px;
        }
        .marketing h2 {
          font-weight: normal;
        }
        .marketing .col-lg-4 p {
          margin-left: 10px;
          margin-right: 10px;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
          margin: 80px 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          letter-spacing: -1px;
        }



        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 768px) {

          /* Remove the edge padding needed for mobile */
          .marketing {
            padding-left: 0;
            padding-right: 0;
          }

          /* Navbar positioning foo */
          .navbar-wrapper {
            margin-top: 20px;
          }
          .navbar-wrapper .container {
            padding-left:  15px;
            padding-right: 15px;
          }
          .navbar-wrapper .navbar {
            padding-left:  0;
            padding-right: 0;
          }

          /* The navbar becomes detached from the top, so we round the corners */
          .navbar-wrapper .navbar {
            border-radius: 4px;
          }

          /* Bump up size of carousel content */
          .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
          }

          .featurette-heading {
            font-size: 50px;
          }

        }

        @media (min-width: 992px) {
          .featurette-heading {
            margin-top: 120px;
          }
        }
    </style>
</head>
<body>
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link1</a></li>
                        <li><a href="#">Link2</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown1 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action1</a></li>
                                <li><a href="#">Action2</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Action3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link3</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action1</a></li>
                                <li><a href="#">Action2</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Action3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/slide1.jpg" alt="slide1">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slide2.jpg" alt="slide2">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <div class="container marketing">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading">News <a class="pull-right" href="#">More ></a></div>
                    <div class="panel-body">
                        <p>Main News</p>
                    </div>
                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">news2</li>
                        <li class="list-group-item">news3</li>
                        <li class="list-group-item">news4</li>
                        <li class="list-group-item">news5</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">News <a class="pull-right" href="#">More ></a></div>
                    <div class="panel-body">
                        <p>Main News</p>
                    </div>
                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">news2</li>
                        <li class="list-group-item">news3</li>
                        <li class="list-group-item">news4</li>
                        <li class="list-group-item">news5</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">News <a class="pull-right" href="#">More ></a></div>
                    <div class="panel-body">
                        <p>Main News</p>
                    </div>
                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">news2</li>
                        <li class="list-group-item">news3</li>
                        <li class="list-group-item">news4</li>
                        <li class="list-group-item">news5</li>
                    </ul>
                </div>
            </div>
        </div>
    
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAYm0lEQVR4Xu3dv2sUCRiA4Q0oaKGtdiKWaimC/76VjVgp1mIbsNBKvbsNrIzDzGaSjOvue8+VGif7Pd8H7+WXnp2fn/+z8R8BAgQIECBw0gJngn7S+/PiCRAgQIDAhYCgOwQCBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0DgP4EPHz5sPn/+vMjizp07m5cvX25u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">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAYm0lEQVR4Xu3dv2sUCRiA4Q0oaKGtdiKWaimC/76VjVgp1mIbsNBKvbsNrIzDzGaSjOvue8+VGif7Pd8H7+WXnp2fn/+z8R8BAgQIECBw0gJngn7S+/PiCRAgQIDAhYCgOwQCBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0CAAAECBAICgh5YohEIECBAgICguwECBAgQIBAQEPTAEo1AgAABAgQE3Q0QIECAAIGAgKAHlmgEAgQIECAg6G6AAAECBAgEBAQ9sEQjECBAgAABQXcDBAgQIEAgICDogSUagQABAgQICLobIECAAAECAQFBDyzRCAQIECBAQNDdAAECBAgQCAgIemCJRiBAgAABAoLuBggQIECAQEBA0ANLNAIBAgQIEBB0N0DgP4EPHz5sPn/+vMjizp07m5cvX25u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">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>

    <div class="container">
        <footer>
            <p class="pull-right"><a class="btn" href="#">Back to top</a></p>
            <p>Copyright © 2014 ZJU <a href="#">Baidu Club</a></p>
        </footer>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>