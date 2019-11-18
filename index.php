

<?php
//php -S 127.0.0.1:8085
require_once 'my_api.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');




$adfox = new myApi();


//$adfox->checkAuth();
//$campaignList = $adfox->getCampaigns();
//$activeBanners = $adfox->getActiveBanners();
$bannersByCampaign = $adfox->getBannersByCampaign('heroine');

//echo(json_encode($campaignList));
//echo(json_encode($activeBannerList));
//echo(json_encode($bannersByCampaign));


echo(json_encode($adfox->getResults()));
