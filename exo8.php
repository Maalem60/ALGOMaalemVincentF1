
<?php

function repeter_Image($url, $nombreFois)
{
    for ($i = 0; $i < $nombreFois; $i++) {
        echo '<img src="' . $url . '" alt="Image petit chien">';
    }
}

$url = "https://my.mobirise.com/data/userpic/764.jpg";
repeter_Image($url, 4);

?>
