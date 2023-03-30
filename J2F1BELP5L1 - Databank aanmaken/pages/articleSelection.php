<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        require_once "includes/config.php";
        $sql = "SELECT * FROM articles";
        if($result = $mysqli->query($sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $newDict = [];
                    foreach($_POST as $key=>$value) {
                        $newDict[$key] = stripslashes(trim(HTMLspecialchars($value)));
                        $newDict[$key] = str_replace('\'', '"', $newDict[$key]);
                    } ?>
                    <script>
                    var obj = JSON.parse('<?php echo json_encode($newDict) ?>');
                    </script>
                    <h1>You can go to this awesome page:</h1>
                    <h1 class="whiteText"><a class="inTextLink" href="?page=article&article=<?php echo $row['id'] ?>" data-value="<?php echo $row['title'] ?>" class="menuItem whiteText magic"><?php echo $row['title'] ?></a></h1><?php
            }
                $result->free();
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
        
        // Close connection
        $mysqli->close();
        ?>
</body>
</html>