<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',


        '/vendor/bootstrap/css/bootstrap.min.css',
        '/vendor/icofont/icofont.min.css',
        '/vendor/boxicons/css/boxicons.min.css',
        '/vendor/venobox/venobox.css',
        '/vendor/owl.carousel/assets/owl.carousel.min.css',
        '/vendor/aos/aos.css',

        // template main css file

        '/css/style.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',

    ];
    public $js = [
        '/vendor/jquery/jquery.min.js',
        '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        '/vendor/jquery.easing/jquery.easing.min.js',
        '/vendor/php-email-form/validate.js',
        '/vendor/waypoints/jquery.waypoints.min.js',
        '/vendor/counterup/counterup.min.js',
        '/vendor/isotope-layout/isotope.pkgd.min.js',
        '/vendor/venobox/venobox.min.js',
        '/vendor/owl.carousel/owl.carousel.min.js',
        '/vendor/typed.js/typed.min.js',
        '/vendor/aos/aos.js',

        // Template main js file
        '/js/main.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset', 
    ];
}

