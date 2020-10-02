<?php

include "sync.php";

$json_string = Sync::readConfig();

$json_object = json_decode($json_string,true);

//Set filled mode and parameter
if(isset($_POST['applyMode']) && isset($_POST['vSLA']) && $_POST['vSLA'] != "")
{
    //Mode
    if(isset($_POST['mode']) && $_POST['mode'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['mode'] = (int) $_POST['mode'];
    }


    //Parameter 0-5
    if(isset($_POST['param0']) && $_POST['param0'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][0] = (float) $_POST['param0'];
    }

    if(isset($_POST['param1']) && $_POST['param1'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][1] = (float) $_POST['param1'];
    }

    if(isset($_POST['param2']) && $_POST['param2'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][2] = (float) $_POST['param2'];
    }

    if(isset($_POST['param3']) && $_POST['param3'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][3] = (float) $_POST['param3'];
    }

    if(isset($_POST['param4']) && $_POST['param4'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][4] = (float) $_POST['param4'];
    }

    if(isset($_POST['param4']) && $_POST['param4'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][4] = (float) $_POST['param4'];
    }

    if(isset($_POST['param5']) && $_POST['param5'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['modeParameter'][5] = (float) $_POST['param5'];
    }
    
}
//Set filled system settings
elseif(isset($_POST['applySystem'])  && isset($_POST['vSLA']) && $_POST['vSLA'] != "" && isset($_POST['segment']) && $_POST['segment'] != "")
{
    //Inverted mapping
    $json_object['virtualSLAs'][(int) $_POST['vSLA']]['segments'][(int) $_POST['segment']]['inverted'] = isset($_POST['isInverted']);

    //Destination LED-Array
    if(isset($_POST['destSLA']) && $_POST['destSLA'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['segments'][(int) $_POST['segment']]['destSLA'] = (int) $_POST['destSLA'];
    }

    //Length of segment
    if(isset($_POST['length']) && $_POST['length'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['segments'][(int) $_POST['segment']]['length'] = (int) $_POST['length'];
    }

    //First LED of section
    if(isset($_POST['firstSourceLED']) && $_POST['firstSourceLED'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['segments'][(int) $_POST['segment']]['firstSourceLED'] = (int) $_POST['firstSourceLED'];
    }

    //First LED of physical LED-Array
    if(isset($_POST['firstDestLED']) && $_POST['firstDestLED'] != "")
    {
        $json_object['virtualSLAs'][(int) $_POST['vSLA']]['segments'][(int) $_POST['segment']]['firstDestLED'] = (int) $_POST['firstDestLED'];
    }

}
$json_string = json_encode($json_object,JSON_PRETTY_PRINT);

Sync::writeConfig($json_string);

header("Location: /led.php", true, 303);
?>