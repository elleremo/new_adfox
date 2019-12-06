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
<?php
//php -S 127.0.0.1:8085
//require_once 'my_api.php';

?>
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
            <fieldset>

                <div class="view_banner">
                    <img src="" id="img_ban">

                </div>

                <input type="file" name="file" id="upload" placeholder="wevwovwe">

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
    <div class="stats">
        <div class="stat stat__brodude">
            <h5 class="title">BroDude</h5>
            <span class="active">67</span>
            <span class="paused">10</span>
            <span class="confirm">869</span>
        </div>
        <span class="subdiv"></span>
        <div class="stat stat__heroine">
            <h5 class="title">Heroine</h5>
            <span class="active">5</span>
            <span class="paused">1</span>
            <span class="confirm">198</span>
        </div>
    </div>

</main>

<script src="public/js/vue.js"></script>
<script src="public/js/app.js"></script>

</body>
</html>

