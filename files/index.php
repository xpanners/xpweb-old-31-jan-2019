<?php
$use_sts = TRUE; if ($use_sts && isset($_SERVER['HTTPS'])) { header('Strict-Transport-Security: max-age=500'); } elseif ($use_sts && !isset($_SERVER['HTTPS'])) { header('Status-Code: 301'); header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']); }
define('title','XPANNERS PVT LTD');
define('logo','https://www.xpanners.com/favicon.ico');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = explode('/',$url);
$url = array_slice($url,0);

switch($url[1]){
    default:
    case"home":
    include "home.php";
    break;
    case"about":
    include "about.php";
    break;
    case"contact":
    include "contact.php";
    break;
    case"services":
    include "services.php";
    break;
    case"products":
    include "products.php";
    break;
     case"service":
    include "service.php";
    break;
     case"product":
    include "product.php";
    break;
    case"portfolio":
   $filename = "xp.pdf";
    header("Content-type: application/pdf");
    header("Content-Length: " . filesize($filename));
    readfile($filename);
    exit;

    
    break;
    case"mail":
        include "mail.php";
        break;
    
}


?>

   
