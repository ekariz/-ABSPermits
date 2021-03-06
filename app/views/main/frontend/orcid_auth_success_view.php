<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>ORCID Authorization Complete</title>
        <meta name="description" content="ABS SYSTEM">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico">

         <?php  $this->load->view('main/frontend/header_css'); ?>
    </head>

    <body class="no-trans front-page  page-loader-1 ">

        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

        <div class="page-wrapper">

             <?php  $this->load->view('main/frontend/header', $header_opts= ['show_top_header' => false, 'header_classes' => 'dark' ]); ?>

            <div id="page-start"></div>


            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="./">Home</a></li>
                        <li class="active">ORCID</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- main-container start -->
            <!-- ================ -->
            <div class="main-container  ">
                <div class="container">
                    <div class="row">
                        <!-- main start -->
                        <!-- ================ -->

                            <div class="alert alert-success  center-block p-30 light-gray-bg border-clear">
                                <h2 class="title">Thank you for connecting to ORCID </h2>
                                    <div class="form-group has-feedback">


                                      Your ORCID iD is <i class="ai ai-orcid  ai-1x"  style="background-color:#A6CE39"></i> <a href="https://orcid.org/<?php  echo $orcidid;?>" target="_blank" >https://orcid.org/<?php  echo $orcidid;?></a>


                                    </div>

                                    <div class="form-group">
                                       <a href="<?php  echo base_url();?>"  class="btn btn-group btn-primary btn-sm"><i class="fa fa-home"></i> Go Home </a>
                                    </div>

                            </div>

                        <!-- main end -->
                    </div>
                </div>
            </div>
            <!-- main-container end -->

            <!-- ================ -->

            <footer id="footer" class="clearfix ">

                <!-- .subfooter start -->
                <!-- ================ -->
                <div class="subfooter default-bg">
                    <div class="container">
                        <div class="subfooter-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center"><span class="  pr-10">Copyright © 2017 -  <?php echo date('Y');?>  ABS. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .subfooter end -->

            </footer>
            <!-- footer end -->

        </div>
        <!-- page-wrapper end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster -->
       <?php  $this->load->view('main/frontend/footer'); ?>

        <script type="text/javascript">

            $( document ).ready( function () {

            });


        </script>
    </body>
</html>
