<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>henk</h1>
    <?php 
    include "variables.php";
        foreach($fruit as $value) {
            if ($value != "henk") {
                echo $value . '<br>';
            }
        }
    ?>
</body>
</html>