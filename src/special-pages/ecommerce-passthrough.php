<?php
// set variables to be used later on
$allowed_host = 'purduealumni.org';
$host = parse_url( $_SERVER['HTTP_REFERER'], PHP_URL_HOST );
$error_path = '/order-error';
$success_path = '/order-confirmation';

// check for required query params
if ( substr( $host, 0 - strlen( $allowed_host ) == $allowed_host ) ) {

    // check for the required params
    if ( isset( $_GET['total'] ) && isset( $_GET['fid'] ) && isset( $_GET['eid'] ) ) {
        // add path to redirect url
        $redirect_url = $success_path;

        // set required params
        $transaction_id = 'f'.$_GET['fid'].'e'.$_GET['eid'];
        $total = str_replace( '$', '', $_GET['total'] );

        // add purchaser query param if set
        if ( isset( $_GET['purchaser'] ) ) {
            if ( $_GET['purchaser'] !== 'self' ) {
                $redirect_url .= "/?purchaser={$_GET['purchaser']}";
            }
        }

        // check for product
        if ( isset( $_GET['product'] ) ) {
            $product_name = $_GET['product'];
        }

        // check for quantity
        if ( isset( $_GET['quantity'] ) ) {
            $quantity = $_GET['quantity'];
        } else {
            $quantity = '1';
        }

        // check for category
        if ( isset( $_GET['category'] ) ) {
            $category = $_GET['category'];
        }

        // build ecommerce script to be output in head above GTM
        $script = "<script>window.dataLayer = window.dataLayer || [];dataLayer.push({'transactionId': '{$transaction_id}','transactionTotal': {$total}";
        // add product details
        if ( isset( $product_name ) ) {
            $script .= ",'transactionProducts': [{'name': '{$product_name}', 'quantity': {$quantity}";

            // add category to product details
            if ( isset( $category ) ) {
                $script .= ", 'category': '{$category}'";
            }

            $script .= "}]";
        }
        $script .= "});</script>";
    } else {
        // required query params not present
        header("Location: ".$error_path);
        die();
    }
} else {
    // not a valid referrer
    header("Location: https://www.purduealumni.org/");
    die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    if ( isset( $script) ) {
        echo $script;
    }
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KTNT5LJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>You are being redirected...</title>
</head>
<body>
    <p>You are being redirected...</p>
    <script>
        //window.location.replace("<?= ""; //$redirect_url; ?>");
    </script>
</body>
</html>