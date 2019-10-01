<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
</head>
<body>

<form action="utilityUpload.php" method="post" enctype="multipart/form-data">
    Title:
    <input type="text" name="uti-title" id="title">

    Type:
    <select name="uti-type" id="type">
        <option value="smoke">Smoke</option>
        <option value="flash">Flash</option>
        <option value="molotov">Molotov</option>
    </select>

    Map:
    <select name="uti-map" id="map">
        <option value="1">de_inferno</option>
    </select>

    Execution:
    <select name="uti-exec" id="execution">
        <option value="standing">Standing</option>
        <option value="jumpthrow">Jumpthrow</option>
        <option value="crouched">Crouched</option>
        <option value="walk_and_jump">Walk and Jump</option>
    </select>

    Created by:
    <select name="uti-creator" id="creator">
        <option value="1">Ali 'rec0il' Øztürk</option>
    </select>

    Upload the media:
    <input type="file" name="myfile" id="fileToUpload">
    <input type="submit" name="submit" value="Upload utility now" >
</form>

</body>
</html>