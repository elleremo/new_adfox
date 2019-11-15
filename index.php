<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');

require_once 'afdox_api.php';

$data = array(
    "loginAccount" => 'Bilirium',
    "loginPassword" => '43522a07b6e4abf8f50aeaa99d7b8e7019bd7b446e33dd39c05e53a79ca4a02e',
    "object" => 'account',
    "action" => 'auth',
    'brodudeID' => '526462',
    'heroineID' => '757292'
);

$adfox = new Adfox_API();
$adfox->setLogin($data['loginAccount']);
$adfox->setPassword($data['loginPassword']);

class myApi {

}


//$auth = $adfox->request('account', 'auth');
//$campaignList = $adfox->getList('campaign',  ['show' => 'common']);
//$activeBannerList = $adfox->getList('activeBanners',
//    ['date' => date('Y-m-d'),
//        "limit" => '1000',
//    ]);

$bannersByCampaign = $adfox->getList('banner',
    ["limit" => '1000',
     'object' => 'campaign',
     "objectID" => $data['heroineID']
    ]);

//echo(json_encode($campaignList));
//echo(json_encode($activeBannerList));
echo(json_encode($bannersByCampaign));


//echo(json_encode($adfox->options));
