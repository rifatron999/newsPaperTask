<?php
require('api.php');
require('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.php">Newspaper Task Preneur Lab Limited</a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="tech-index.php">Home</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item"><!--google signin will be here-->
                                <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                                <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_01.jpg" alt="" class="img-fluid" >
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange text-uppercase"><a  title=""><?php echo $newsResults[0]['sectionName']?></a></span>
                                        <h4><a href="tech-single.php?apiUrl=<?php echo $newsResults[0]['apiUrl']?>" title=""><?php echo $newsResults[0]['webTitle']?></a></h4>
                                        <small><a  title=""><?php echo  date('d-M-Y   h:i a', strtotime($newsResults[0]['webPublicationDate']))?></a></small>
                                        <small><a  title=""><mark>type</mark> <?php echo $newsResults[0]['type']?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange text-uppercase"><a  title=""><?php echo $newsResults[1]['sectionName']?></a></span>
                                        <h4><a href="tech-single.php?apiUrl=<?php echo $newsResults[1]['apiUrl']?>" title=""><?php echo $newsResults[1]['webTitle']?></a></h4>
                                        <small><a  title=""><?php echo  date('d-M-Y   h:i a', strtotime($newsResults[1]['webPublicationDate']))?></a></small>
                                        <small><a  title=""><mark>type</mark> <?php echo $newsResults[1]['type']?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange text-uppercase"><a  title=""><?php echo $newsResults[2]['sectionName']?></a></span>
                                        <h4><a href="tech-single.php?apiUrl=<?php echo $newsResults[2]['apiUrl']?>" title=""><?php echo $newsResults[2]['webTitle']?></a></h4>
                                        <small><a  title=""><?php echo  date('d-M-Y   h:i a', strtotime($newsResults[1]['webPublicationDate']))?></a></small>
                                        <small><a  title=""><mark>type</mark> <?php echo $newsResults[2]['type']?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                <!--foreach start-->
                                <?php foreach ($newsResults as $news){?>
                                <div class="blog-box row"><!--one single news-->
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.php?apiUrl=<?php echo $news['apiUrl']?>" title="Click for Delatils">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col --><!--image-->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.php?apiUrl=<?php echo $news['apiUrl']?>" title=""><?php echo $news['webTitle']?></a></h4><!--webtitle-->
                                        <p>This api doesn't provide any news details or news picture . So It is just a dummy text for every news. I am using dummy text and picture for better understaning </p><!--defaualt description-->
                                        <small class="firstsmall"><a class="bg-orange"  title=""><?php echo $news['sectionName']?></a></small> <!--sectionName-->
                                        <small><a  title=""><?php echo  date('d-M-Y   h:i a', strtotime($news['webPublicationDate']))?></a></small><!--web publication date-->
                                        <small><a  title=""><mark>type: </mark> <?php echo $news['type']?></a></small><!--reduce-->
                                        <small><a  title=""><i class="fa fa-eye"></i> 1114</a></small><!--reduce-->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                    <hr class="invis">
                                <?php }?>

                                <!--foreach end-->
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" >1</a></li>
                                        <li class="page-item"><a class="page-link" >2</a></li>
                                        <li class="page-item"><a class="page-link" >3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" >Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                 <!--sidebar was here-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!--recent news-->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a >Newspaper Task  Prenuer Lab Limited</a>
                                <p>This is a Recurtment Task from Prenuer Lab Limited.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Kawsarul Alam Chowhury Rifat</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>