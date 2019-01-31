<?php
$use_sts = TRUE; if ($use_sts && isset($_SERVER['HTTPS'])) { header('Strict-Transport-Security: max-age=500'); } elseif ($use_sts && !isset($_SERVER['HTTPS'])) { header('Status-Code: 301'); header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']); }
define('title','XPANNERS PVT LTD');
define('logo','https://www.xpanners.com/favicon.ico');
echo '<link rel="icon" type="image/png" href="https://www.xpanners.com/favicon.ico" />';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = explode('/',$url);
$url = array_slice($url,0);

switch($url[1]){
    default:
    case"home":
    include "files/home.php";
    break;
    case"about":
    include "files/about.php";
    break;
    case"contact":
    include "files/contact.php";
    break;
    case"services":
    include "files/services.php";
    break;
    case"products":
    include "files/products.php";
    break;
    case"profile":
    include "files/profile.php";
    break;
    case"eacademy":
    header("Location: http://www.e-academy.xpanners.com/");
    break;
    case"portfolio":
   $filename = "files/Portfolio.pdf";    
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
   
