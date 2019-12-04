<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADFOX</title>

    <link rel="stylesheet" href="public/css/vendor/normalize.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<main>

    <div class="form-wrapper">
        <form action="">

            <fieldset>
                <div class="input-text">
                    <input type="url" id="url-input" name="url" autofocus="" required="" class="input">
                    <label for="url-input">URL</label>
                </div>
                <div class="input-text">
                    <input type="text" id="name-input" name="url" autofocus="" required="" class="input">
                    <label for="name-input">Name</label>
                </div>
                <div class="input-text">
                    <input type="text" id="image-input" name="url" autofocus="" required=""
                           class="input">
                    <label for="image-input">Image link</label>
                </div>
            </fieldset>

            <fieldset class="options">
                <div class="grid">
                    <input type="number" name="views" id="views" value="50000" min="0" step="5000" required=""
                           class="input input_count-views-">
                    <input type="time" name="time" id="time" value="00:00" step="3600" required="" class="input
                    input_time">
                    <input type="date" name="date" class="input input_date" >

                </div>

            </fieldset>
        </form>
    </div>
</main>

<script src="public/js/vue.js"></script>
<script src="public/js/app.js"></script>

</body>
</html>


<?php
//php -S 127.0.0.1:8085
require_once 'my_api.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//header('Content-Type: application/json');

$adfox = new myApi();


//$adfox->checkAuth();
//$adfox->getCampaigns();
//$adfox->getActiveBanners('heroine');
//$adfox->getBannersByCampaign('brodude');
//$adfox->getBannersByAccount();

//echo(json_encode($campaignList));
//echo(json_encode($activeBannerList));
//echo(json_encode($bannersByCampaign));


//echo(json_encode($adfox->getResults()));
//echo(json_encode($adfox->getResults()));

//echo json_encode($_GET);
?>


