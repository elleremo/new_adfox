<?php
require_once 'my_api.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//header('Content-Type: application/json');

$adfox = new myApi();




//$adfox->checkAuth();
$adfox->getCampaigns('advanced');
//$adfox->getActiveBannersByAccount();
//$adfox->getBannersByCampaign('brodude');
//$adfox->getBannersByAccount();

//echo(json_encode($campaignList));
//echo(json_encode($activeBannerList));
//echo(json_encode($bannersByCampaign));

//$adfox->getStatByCampaign('brodude');

//echo(json_encode($adfox->getResults()));
print_r($adfox->getResults());
//echo json_encode($_GET);

