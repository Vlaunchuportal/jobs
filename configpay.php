<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51Mh97vSEg9ZmT60hW1sSNp76MNpSF4uymz5KJevxxi4jChWRKaeVuobCuCjBU3a7dchziymjfNRcMpwY4KIEoqRi00Fl5A9ODn",
        "publishableKey" => "pk_test_51Mh97vSEg9ZmT60hNE2jAd1wezJtUT3epaUyYZm1PX3f8HnKjzOcgel5nHNy80mwpAlB4V3Zp4mrbel6782kfH9p00MQsRRTPa"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>
