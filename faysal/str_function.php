<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="">Enter File Name</label>
        <input type="text" name="ex">
        <br>
        <input type="submit" name="sub" value="Find Extension">
    </form>

    <?php

    if (isset($_POST['sub'])) {
        $extenion = $_POST['ex'];
        $ex = explode(".", $extenion);
        $file_ex = $ex[array_key_last($ex)];
        if ($file_ex == "jpg" || $file_ex  == "png" ||  $file_ex  == "svg") {
            echo "valid Extention " .$file_ex;
        } else {
            echo $file_ex;
        }
    }

    ?>
</body>

</html>