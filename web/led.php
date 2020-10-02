<!DOCTYPE html>
<html>

<head>
<h1>LED-Station</h1>
</head>

<body>
 
    <h3>Modify the configuration</h3>

    <form action="/sync_handler.php" method="POST">
        <input type="submit" value = "Synchronize">
        <textarea name="input" id="json-input" class="text" cols="86" rows ="20" name="confirmationText" value=""><?php include "sync.php"; echo Sync::readConfig(); ?></textarea>
    </form>

    <form action="/sync_handler.php" method="POST">
        <input type="submit" name="reset" value = "Reset">
    </form>

    <form action="/assign.php" method="POST">
        Assign Mode <input type="text" name="mode" value = "0"> to Virtual LED-Array No. <input type="text" name="vSLA" value = "0"><input type="submit" name="assign" value = "Apply">
    </form>

</body>

</html>