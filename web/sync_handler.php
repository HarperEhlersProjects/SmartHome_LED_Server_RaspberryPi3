<?php

include "sync.php";

if(isset($_POST['reset']))
{
    Sync::resetConfig();
}

if(isset($_POST['input']) && !empty($_POST['input']))
{
    Sync::writeConfig($_POST['input']);
}

header("Location: /led.php", true, 303);

?>