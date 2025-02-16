<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1</title>
    <link rel="stylesheet" href="exstyles.css"> <!-- Link to my CSS file -->
</head>
<body>
    <h1>Weather Conditions</h1>
    <div class="content">
        <?php
            // Array of weather conditions and their corresponding icons
            $weather_conditions = array(
                "rain" => "img/rain.png",
                "sunshine" => "img/sunshine.png",
                "clouds" => "img/clouds.png",
                "hail" => "img/hail.png",
                "sleet" => "img/sleet.png",
                "snow" => "img/snowy.png",
                "wind" => "img/wind.png"
            );
            echo "We've seen all kinds of weather this month. At the beginning of the month, we had " .
                 "<img src='" . $weather_conditions['snow'] . "' alt='Snow' class='icon'>" .
                 "<img src='" . $weather_conditions['wind'] . "' alt='Wind' class='icon'>" .
                 " and then came " .
                 "<img src='" . $weather_conditions['sunshine'] . "' alt='Sunshine' class='icon'>" .
                 " with a few " .
                 "<img src='" . $weather_conditions['clouds'] . "' alt='Clouds' class='icon'>" .
                 " and some " .
                 "<img src='" . $weather_conditions['rain'] . "' alt='Rain' class='icon'>" .
                 ". At least we didn't get any " .
                 "<img src='" . $weather_conditions['hail'] . "' alt='Hail' class='icon'>" .
                 " or " .
                 "<img src='" . $weather_conditions['sleet'] . "' alt='Sleet' class='icon'>" .
                 ".";
        ?>
    </div>
</body>
</html>