<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="google-site-verification" content="">
    <meta name="robots" content="" />
    <meta name="msvalidate.01" content="" />

    <!-- page title -->
    <title> <?php echo $page_title?> || <?php echo config_item('company_name');?> </title>
  
    <?php $this->load->view('theme/include/css'); ?>

</head>

<body>
    <!-- ================ Preloader ================ -->
    <div id="preloader">
        <div class="spinner-grow" role="status"> <span class="sr-only">Loading...</span> </div>
    </div>
    <!-- ================ Preloader end ================ -->

    <?php $this->load->view('theme/include/header'); ?>



    <!-- main page section start here -->
    <?php if (trim($layout) == "") { ?>
        <div style="margin: 10%">
            <h2 align="center">Welcome to <?php echo config_item('company_name') ?></h2>
            <div align="center">Please click above to login or sign up</div>
        </div>
    <?php } else {
        include_once(APPPATH . "views/theme/" . $layout);
    } ?>
    <!-- main page section start end -->


    <?php $this->load->view('theme/include/footer'); ?>
    <?php $this->load->view('theme/include/js'); ?>


   

</body>

</html>