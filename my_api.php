<?php

require_once 'afdox_api.php';


class myApi extends Adfox_API
{
	public $lastStatus = 4;
	public $json = [];

	private const DATA = array("loginAccount"  => 'Bilirium',
	                           "loginPassword" => '43522a07b6e4abf8f50aeaa99d7b8e7019bd7b446e33dd39c05e53a79ca4a02e',
	                           "object"        => 'account',
	                           "action"        => 'auth',
	                           'brodudeID'     => '526462',
	                           'heroineID'     => '757292');

	public function __construct($data = array()) {
		parent::__construct($data);
		$this->setLogin(myApi::DATA['loginAccount']);
		$this->setPassword(myApi::DATA['loginPassword']);
	}

	function getList($actionObject, $add = array()) {
		$this->options['object'] = 'account'; // по-умолчанию
		$this->options['action'] = 'list'; // по-умолчанию
		$this->options['actionObject'] = $actionObject;

		$this->options = array_merge($this->options, $add);
		return $this->getResults();
	}

	function request($object, $action, $actionObject = '', $show = "advanced") {
		$this->options['object'] = $object;
		$this->options['action'] = $action;
		$this->options['actionObject'] = $actionObject;
		$this->options['show'] = $show;

		return $this->getResults();
	}


// Получить список баннеров по аккаунту
	function getBannersByAccount() {
			$this->getList('banner',
				[
					'show' => 'advanced',
					'limit' => 1000,
					'search' => 'intimi.shop' //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
				]);
	}

	function getStatByCampaign($magName) {
		if ($magName == 'heroine')
			$nameID = myApi::DATA['heroineID'];
		if ($magName == 'brodude')
			$nameID = myApi::DATA['brodudeID'];

		$this->getList('banner',
		array(
			'object' => 'campaign',
			'action' => 'info',
			"objectID" => $nameID,
			'dateStart' => '2019-01-01',
			'limit' => 1000
		));

	}

	// Получить список баннеров по кампании
	function getBannersByCampaign($magName) {
//        if ($magName !== 'heroine' || $magName !== 'brodude') {
//            return false;
//        }

		if ($magName == 'heroine')
			$name = myApi::DATA['heroineID'];
		if ($magName == 'brodude')
			$name = myApi::DATA['brodudeID'];

		return $this->getList(
			'banner',
			array(
				"limit"    => '1000',
				'object'   => 'campaign',
				"objectID" => $name)
		);
	}


	// Получить список активных баннеров на текущую дату
	function getActiveBanners() {
		return $this->getList(
			'activeBanners',
			[
				'date'     => date('Y-m-d'),
				'limit'    => '1000',
			]);
	}

	// Получить список кампаний
	function getCampaigns() {
		return $this->getList('campaign', ['show' => 'common']);
	}

	// Проверить авторизацию
	function checkAuth() {
		$results = $this->request('account', 'auth');
		return json_encode($this->getResults());
		//        $status = $results['status']['code'];
//        if ($status == 0) {
//            echo 'Авторизация прошла успешно';
//        } else {
//            echo  json_encode( $this->getResults());
//        }
	}
}
