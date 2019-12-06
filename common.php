<?php
require_once 'my_api.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');

$adfox = new myApi();

if


//$adfox->checkAuth();
//$adfox->getCampaigns();
//$adfox->getActiveBanners();
//$adfox->getBannersByCampaign('brodude');
//$adfox->getBannersByAccount();

//echo(json_encode($campaignList));
//echo(json_encode($activeBannerList));
//echo(json_encode($bannersByCampaign));

//$adfox->getStatByCampaign('heroine');


//echo(json_encode($adfox->getResults()));
//echo(json_encode($adfox->getResults()));

echo json_encode($_GET);
