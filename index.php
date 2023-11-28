<?php 
include_once "change_here.php";
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>The Hunna</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: #242424;">
    <header class="header">
        <div style="text-align: center;"><img class="header-img" src="<?php echo $main_img; ?>" width="150px" height="150px">
            <h2><?php echo $title; ?></h2>
        </div>
    </header>
    <section class="body-section">
        <div class="body-section-div">
            <?php
            foreach($items as $item){ ?>
            <a class="list-item" href="<?php echo $item->link?>">
                <div class="list-item single-item">
                    <img src="<?php echo $item->image?>">
                    <p><span style="color: rgb(31, 31, 31);"><?php echo $item->text?></span></p>
                </div>
            </a>
            <?php } ?>
            <div class="list-item form-div">
                <form><input class="form-control" type="email" placeholder="Enter Your Email" style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;"><input class="btn btn-primary submit-input" type="submit" value="Subscribe"></form>
            </div>
            <div class="icon-div">
                <?php
                 foreach($icons as $icon){ ?>
                <a class="icon-links" href="<?php echo $icon->link; ?>"><i class="<?php echo $icon->name; ?>"></i></a>
                <?php } ?>
            </div>
            <div class="powered-div">
                <p><span style="color: rgb(255, 255, 255);">Powered by</span></p><img src="<?php echo $powered_img; ?>">
            </div>
            <div class="footer-div">
                <p>By using this service you agree to our&nbsp;<a href="<?php echo $privacy_policy_link; ?>" target="_blank"><strong><span style="color: inherit; background-color: transparent;">Privacy Policy</span></strong></a>&nbsp;and&nbsp;<a href="<?php echo $terms_link; ?>" target="_blank"><strong><span style="color: inherit; background-color: transparent;">Terms Of Use</span></strong></a>.&nbsp;<span>Manage</span>&nbsp;your permissions</p>
                <!-- <div style="text-align: center;">
                <a class="report-link" href="#">Report a problem</a>
            </div> -->
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>