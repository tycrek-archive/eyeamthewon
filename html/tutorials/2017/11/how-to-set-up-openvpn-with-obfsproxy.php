<?php
require_once "/var/www/html/resources/mobile-detect/Mobile_Detect.php";
?>

<style>
<?php
$detect = new Mobile_Detect;
if ( $detect->isMobile() ) {
        include '/var/www/html/resources/stylesheet-mobile.css';
} else {
        include '/var/www/html/resources/stylesheet.css';
}
?>
</style>
<?php
$page_content = file_get_contents("/var/www/content/header.html") . file_get_contents("/var/www/content/tutorials/how-to-set-up-openvpn-with-obfsproxy.html");
echo $page_content;
?>
