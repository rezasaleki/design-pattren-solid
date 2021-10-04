<?php

use App\Adapter\CarismaPal;
use App\Adapter\CarismaPalAdapter;
use App\Adapter\PayPal;
use App\Adapter\PayPalAdapter;
use App\Decorator\Email;
use App\Decorator\RezaEmailBody;
use App\Facade\Facebook;
use App\Facade\GooglePlus;
use App\Facade\SocialMedia;
use App\Facade\Twitter;
use App\Factory\CarOrder;
use App\Proxy\ProxyImage;
use App\Singleton\ConnectDb;
use App\Singleton\ConnectDbWithoutSingleton;
use App\Template\PaperBack;

$app = require_once './bootstrap/app.php';

// Adapter Pattern

// $paypal = new PayPal();
// $paypal->sendPayment(1000);

$paypalAdapter = new PayPalAdapter(new PayPal());
$paypalAdapter->pay(2000);

$carismaPalAdapter = new CarismaPalAdapter(new CarismaPal());
$carismaPalAdapter->pay(5000);

// Decorator Pattern

$email = new Email();
$email->loadBody();

$email = new RezaEmailBody($email);
$email->loadBody();

// Factory

$carOrder = new CarOrder();
$carOrder->order('r');
$carOrder->order('s');
$carOrder->order('206');
var_dump($carOrder->getCarOrders());


// Facade

// Legacy Code
$twitter = new Twitter();
$twitter->setMessage('would say that agian please');
$twitter->share();

$socialMedia = new SocialMedia(new Twitter(), new Facebook(), new GooglePlus());
$socialMedia->shareMessage('Facade Design Pattern')->shareonSocial();

// Template 

$paperback = new PaperBack();
$paperback->generateName('The Clean Code');


// Singleton
// ConnectDbWithoutSingleton
$instance = new ConnectDbWithoutSingleton();
$conn = $instance->getConnection();
var_dump($conn);

$instance = new ConnectDbWithoutSingleton();
$conn = $instance->getConnection();
var_dump($conn);


$instanceSingleton1 = ConnectDb::instance();
$conn = $instanceSingleton1->getConnection();
var_dump($instanceSingleton1);

$instanceSingleton2 = ConnectDb::instance();
$conn = $instanceSingleton2->getConnection();
var_dump($instanceSingleton2);

// Proxy 

$filename = 'test.png';


$image2 = new ProxyImage($filename);

// Call some other methods to attach image to related user. 

echo 'image object attached to user object .';


echo $image2->display();//loading  image and use system resourc
