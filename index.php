<?php include_once "Views/Includes/header.php" ?>
<?php

require_once 'autoload.php';

$home = new HomeController();

$pages = [
    'index',
    'boutique',
    'DetailProduct',
    'deleteProduit',
    'updateProduit',
    'Panier',
    'Dashboard',
    'Profile',
    'SignIn',
    'SignUp'
];

if (isset($_GET['url'])) {
    if (in_array($_GET['url'], $pages)) {
        $page = $_GET['url'];
        $home->index($page);
    } else {
        include 'views/Includes/404.php';
    }
} else {
    $home->index('index');
}
?>
<?php include_once "Views/Includes/footer.php" ?>