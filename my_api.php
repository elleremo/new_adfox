<?php

require_once 'afdox_api.php';


class myApi extends Adfox_API
{
    public $lastStatus = 4;
    public $json = [];

    private const DATA = array(
        "loginAccount" => 'Bilirium',
        "loginPassword" => '43522a07b6e4abf8f50aeaa99d7b8e7019bd7b446e33dd39c05e53a79ca4a02e',
        "object" => 'account',
        "action" => 'auth',
        'brodudeID' => '526462',
        'heroineID' => '757292');

    public function __construct($data = array())
    {
        $this->setAuthData();
        parent::__construct($data);
    }

    function setAuthData()
    {
        $this->setLogin(myApi::DATA['loginAccount']);
        $this->setPassword(myApi::DATA['loginPassword']);
    }

    // Сбросить options, установить авторизацию и смержить опции
    function resetOptions()
    {
        $this->options = [];
        $this->setAuthData();
    }

    function mergeOptions($arr)
    {
        $this->options = array_merge($this->options, $arr);
    }


    function getList($options)
    {
        $this->resetOptions();
        $this->mergeOptions($options);
        $this->get();
    }

// Получить список баннеров по аккаунту
// https://yandex.ru/dev/adfox/doc/v.1/account/account-list-banner-docpage/
    function getBannersByAccount($search = '', $show = 'advanced')
    {
        $options = [
            'object' => 'account', // по-умолчанию
            'action' => 'list',   // по-умолчанию
            'actionObject' => 'banner',

            'limit' => 1000,
            // 'search' => 'intimi.shop', //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            'show' => $show
        ];

        $this->getList($options);
    }

    // Получить список баннеров по аккаунту
    // https://yandex.ru/dev/adfox/doc/v.1/account/account-list-campaign-docpage/
    function getStatByCampaign($magName)
    {
        if ($magName == 'heroine')
            $nameID = myApi::DATA['heroineID'];
        if ($magName == 'brodude')
            $nameID = myApi::DATA['brodudeID'];

        $options = [
            'object' => 'account',
            'action' => 'list',
            "actionObject" =>'campaign',
            "actionObjectID" => $nameID,
            'dateStart' => '2019-05-05'
        ];

        $this->getList($options);

    }

// Получить список баннеров по кампании
// https://yandex.ru/dev/adfox/doc/v.1/campaign/campaign-list-banner-docpage/

    function getBannersByCampaign($magName)
    {

        if ($magName == 'heroine')
            $name = myApi::DATA['heroineID'];
        if ($magName == 'brodude')
            $name = myApi::DATA['brodudeID'];

        $options = [
            'object' => 'campaign',
            'action' => 'list',
            'actionObject' => 'banner',

            "limit" => 1000,
            "objectID" => $name
        ];

        $this->getList($options);

    }


// Получить список активных баннеров на текущую дату
// https://yandex.ru/dev/adfox/doc/v.1/account/account-list-activeBanners-docpage/

    function getActiveBannersByAccount()
    {
        $options = [
            'object' => 'account', // по-умолчанию
            'action' => 'list',   // по-умолчанию
            'actionObject' => 'activeBanners',

            'date' => date('Y-m-d'),
            'limit' => 1000,
        ];

        $this->getList($options);


    }

// Получить список кампаний
// https://yandex.ru/dev/adfox/doc/v.1/account/account-list-campaign-docpage/

    function getCampaigns($show = 'common')
    {
        $options = [
            'object' => 'account', // по-умолчанию
            'action' => 'list',   // по-умолчанию
            'actionObject' => 'campaign',
            'show' => $show
        ];

        $this->getList($options);


    }

// Проверить авторизацию
// https://yandex.ru/dev/adfox/doc/v.1/account/account-auth-docpage/
    function checkAuth()
    {
        $options = [
            'object' => 'account', // по-умолчанию
            'action' => 'auth'  // по-умолчанию
        ];

        $this->getList($options);


    }
}
