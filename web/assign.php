<?php

include "sync.php";

$json_string = Sync::readConfig();

if(isset($_POST['vSLA']) && isset($_POST['mode']))
{
    $json_object = json_decode($json_string,true);

    $json_object['virtualSLAs'][(int) $_POST['vSLA']]['mode'] = (int) $_POST['mode'];

    $json_string = json_encode($json_object,JSON_PRETTY_PRINT);

    Sync::writeConfig($json_string);
}

header("Location: /led.php", true, 303);
?>