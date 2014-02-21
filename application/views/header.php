<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>百度俱乐部</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.css')?>">
    <style type="text/css">
        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
          padding-bottom: 40px;
          color: #5a5a5a;
          background-color: #CCCCCC;
        }



        /* CUSTOMIZE THE NAVBAR
        -------------------------------------------------- */

        /* Special class on .container surrounding .navbar, used for positioning it into place. */
        .navbar-wrapper {
          position: relative;
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
                    <a class="navbar-brand" href="<?=base_url()?>">首页</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">俱乐部概况</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">文章目录 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php 
                                    //category list
                                    $result = $category->result();
                                    foreach($result as $key => $row):
                                ?>
                                <li><a href="<?=site_url('welcome/category/'.$row->id)?>"><?=$row->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="#">Other Links</a></li>
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

    