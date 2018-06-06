<?php require_once('connect.php'); ?>
<?php

if (isset($_GET['status'])) {
    $ref = $_GET['status'];
}

?>
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- SET OF FAVICONS FOR APPLE PRODUCTS -->
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-144x144.png">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

<!--    <link rel="stylesheet" href="aos.css">-->
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="rav.min.css">

    <title>Home | rave</title>
</head>
<body class="index">

<div style="height: 0; width: 0; position: absolute; visibility: hidden">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="logo" viewBox="0 0 100 100">
            <path d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50zm8.456-37v-4.522H49.31v-4.93h8.432v-4.522H49.31v-4.148h9.146v-4.522H44.21V63h14.246zm18.836-6.358c0-4.454-.306-5.644-6.426-7.106-3.57-.85-3.672-.884-3.672-3.06 0-1.666.51-2.074 2.788-2.074 2.04 0 3.706.204 6.29.646l.51-4.284a32.965 32.965 0 0 0-6.868-.748c-6.222 0-7.82 1.802-7.82 6.324 0 4.896.816 5.984 6.29 7.174 3.706.816 3.808 1.054 3.808 3.094 0 1.904-.51 2.414-3.128 2.414-2.346 0-4.454-.442-6.528-1.088l-.85 3.944c1.938.884 4.692 1.462 7.31 1.462 6.834 0 8.296-2.21 8.296-6.698zm10.234 6.698c5.882 0 7.208-3.162 7.208-6.562v-1.462c0-4.08-1.938-5.712-5.746-5.712-1.394 0-2.516.136-3.74.51v-1.666c0-2.822 1.666-3.638 6.222-3.638.51 0 1.598.068 2.312.17l.34-4.012a23.134 23.134 0 0 0-3.332-.272c-6.256 0-10.438 1.632-10.438 7.786v8.296c0 3.57 1.292 6.562 7.174 6.562zm0-4.216c-1.768 0-2.278-.544-2.278-2.108v-2.584c.816-.374 1.802-.612 2.924-.612.884 0 1.666.306 1.666 1.7v1.496c0 1.462-.544 2.108-2.312 2.108z"
                  fill-rule="evenodd"></path>
        </symbol>
    </svg>
</div>

<div class="Header navbar" data-aos="fade-down" data-aos-delay="150">
    <div class="container">
        <div class="Header-Flex">

            <a href="/" class="Header-Logo"><img src="/images/logo-mini.svg" alt=""><br><span class="small text-white">BY FLUTTERWAVE</span></a>
            <a href="/" class="Header-Logo-Dark"><img src="/images/logo-mini-dark.svg" alt=""><br><span
                        class="small text-white">BY FLUTTERWAVE</span></a>


            <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse"
                    data-target="#cnav" aria-controls="cnav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="Header-Nav" id="cnav">
                <div class="navbar-nav">
                    <a href="/demo/">Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="Teaser" style="max-height: available">

    <?php if (isset($ref)) {

        ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="alert alert-success text-xl-center">
                    <h1 style="color: #2b2d35"><?php echo $ref; ?></h1>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <div class="container">
        <div class="row row-center">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                <h1>
                    The easiest way to accept payments <br>globally directly from
                    <span class="flip flip1">
                        <span class="animated flipInY">bank accounts</span>
                        <span>cards</span>
                        <span>mobile money wallets</span>
                    </span>
                </h1>
                <p>
                    Rave lets you receive payments locally and globally <br>with no hassles and zero set up fees
                </p>
                <div class="Button-Row">
                    <a href="/auth/" class="Button">Create Account</a>
                    <a href="https://flutterwavedevelopers.readme.io/" class="Button Button--Outline">View
                        Documentation</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">

                <div class="Video-Wrapper">
<!--                    <video src="/images/rave-new.mp4" loop autoplay></video>-->



                        <input type="number" class="form-control form-control-success form" id="amount" placeholder="Input Amount"/>
                            <br>
                        <script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                        <button type="button" id="submit" class="Button Button--Outline">Pay Now</button>



                </div>
            </div>
        </div>
    </div>
</div>





<script>
    const API_publicKey = "FLWPUBK-a0e8f8a1c66c05ac7364518766006f39-X";
    var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random();


    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById('submit').addEventListener('click', function () {

            var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random(), API_publicKey = "FLWPUBK-a0e8f8a1c66c05ac7364518766006f39-X";
            var amount = document.getElementById("amount").value;

            getpaidSetup(
                {
                    PBFPubKey: API_publicKey,
                    customer_email: "user@example.com",
                    amount: amount,
                    customer_phone: "234099940409",
                    currency: "NGN",
                    payment_method: "both",
                    txref: trxref,
                    meta: [{metaname:"flightID", metavalue: "AP1234"}],
                    onclose:function(response) {
                    },
                    callback:function(response) {
                        txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
                        if (chargeResponse === "00" || chargeResponse === "0") {
                            window.location = "http://localhost/flutter/verifyPayment.php?txref="+txref; //Add your success page here
                        } else {
                            window.location = "https://your_URL/paymentverification.php?txref="+txref;  //Add your failure page here
                        }
                    }
                }
            );
        });
    });

</script>

</body>
</html>