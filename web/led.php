<!DOCTYPE html>
<html>

<head>
<!--<h1>LED-Station</h1>-->
</head>

<body>

    <h2>Change mode or parameters of specified sector</h2>

    <form action="/assign.php" method="POST">
        <b>Section </b> <br>
        <input type="text" name="vSLA" value = "0"><br>
        <b>Mode </b> <br>
        <input type="text" name="mode"><br>
        Parameters <br>
        <input type="text" name="param0"><br>
        <input type="text" name="param1"><br>
        <input type="text" name="param2"><br>
        <input type="text" name="param3"><br>
        <input type="text" name="param4"><br>
        <input type="text" name="param5"><br>
        <input type="text" name="param6"><br>

        <input type="submit" name="applymode" value = "Apply">
    </form>

    <h2>System Settings</h2>

    <form action="/assign.php" method="POST">
        <b>Section </b> <br>
        <input type="text" name="vSLA" value = "0"><br>
        <b>Segment </b> <br>
        <input type="text" name="segment"><br>
        Inverted Mapping? <input type="checkbox" name="isInverted" value = "false"><br>
        Destination LED-Array <br>
        <input type="text" name="destSLA"><br>
        Length <br>
        <input type="text" name="length"><br>
        Segment LED <br>
        <input type="text" name="firstSourceLED"><br>
        mapped to physical LED <br>
        <input type="text" name="firstDestLED"><br>

        <input type="submit" name="applySystem" value = "Apply">
    </form>

    <h2>Modify the json directly</h2>

    <form action="/sync_handler.php" method="POST">
        <input type="submit" value = "Synchronize">
        <textarea name="input" id="json-input" class="text" cols="86" rows ="20" name="confirmationText" value=""><?php include "sync.php"; echo Sync::readConfig(); ?></textarea>
    </form>

    <form action="/sync_handler.php" method="POST">
        <input type="submit" name="reset" value = "Reset">
    </form>

</body>
</html>