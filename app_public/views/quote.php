<!DOCTYPE html>
<html>
  <head>
    <title><?=(isset($title) && $title != '') ? $title . ' &middot; ' : ''; ?>StaffBooks &middot; Work Force Management System</title>
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.ico">
    <meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url();?>assets/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	
    <link href="<?=base_url();?>assets/quote/css/styles.css" rel="stylesheet" media="screen">
	
    <script> var base_url = '<?=base_url();?>'; </script>
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div id="header-wrap">
    <div class="box">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="logo" src="<?=base_url();?>assets/quote/img/staffbooks-logo.png" title="StaffBooks Logo">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="logo" src="<?=base_url();?>assets/quote/img/shoebooks-logo.png" title="ShoeBooks Logo">
            </div>
            <div class="col-xs-12 slogan">
                <h2><em>smater - roster to payroll</em></h2>
                <p><em>Pricing - Quick Quote</em></p>
            </div>
        </div>
    </div>
</div>



<?=$content;?>



<div id="footer-wrapper">
        
</div>



</body>
</html>