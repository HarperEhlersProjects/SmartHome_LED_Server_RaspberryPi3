<?php

include "sync.php";

//Replace config file with default config file (Reset button)
if(isset($_POST['reset']))
{
    Sync::resetConfig();
}

//Replace content of config file (Synchronize button)
if(isset($_POST['input']) && !empty($_POST['input']))
{
    Sync::writeConfig($_POST['input']);
}

header("Location: /led.php", true, 303);
?>