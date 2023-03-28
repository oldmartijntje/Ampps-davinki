<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freddit Editor</title>
</head>
<body>
    <label for="types">Specific type filter:</label>

    <select name="types" id="types">
        <option value="any">any</option>
        <option value="location">location</option>
        <option value="people">people</option>
        <option value="moment">moment</option>
        <option value="numbers">numbers</option>
        <option value="activity">activity</option>
        <option value="objects">objects</option>
        <option value="thoughts">thoughts</option>
    </select>
    <?php
    require_once "includes/config.php";
    $sql = "SELECT * FROM answers";
        if($result = $mysqli->query($sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_array()){
                ?><script>
                var obj = JSON.parse('<?php echo json_encode($row) ?>');
                console.log(obj)
            </script><?php
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