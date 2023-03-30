<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
<?php

require_once "includes/config.php";
$sql = "SELECT * FROM article WHERE id = " . $_GET['article'] . "";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
            ?><script>
                <?php
                $newDict = [];
                foreach($row as $key=>$value) {
                    $newDict[$key] = stripslashes(trim(HTMLspecialchars($value)));
                    $newDict[$key] = str_replace('\'', '', $newDict[$key]);
                } 
                // Loop through each property in the object
                foreach ($newDict as $key => $value) {
                    // If the property value is a string containing unescaped "\r" characters
                    if (is_string($value) && strpos($value, "\r") !== false) {
                        // Replace unescaped "\r" characters with escaped "\r" characters
                        $newDict[$key] = str_replace("\r\n", " ", $value);
                    }
                }?>
            var obj = JSON.parse('<?php echo json_encode($newDict) ?>');
            console.log(obj)
        </script>
        <div class="page">
            <article class="article">
                <h1 class="articleHeaderText"><?php echo $newDict['name'] ?></h1>
                <p class="homeText"><?php echo $newDict['text'] ?></p>
                <div class="imageRowDiv">
                    <div class="imageWithSubtext" style="width:40%;">
                        <img src="<?php echo $newDict['image'] ?>" alt="<?php echo $newDict['image'] ?>" class="articleImage">
                        <p class="articleImageSubtext"><?php echo $newDict['imageSubtext'] ?></p>
                    </div>
                    <div class="fullImageRow" style="width:55%;">
                        <h3 class="subTitle"><?php echo $newDict['next2imageHeader'] ?></h3>
                        <p class="homeText"><?php echo $newDict['next2imageParagraph'] ?></p>
                        <p class="homeText"><?php echo $newDict['next2imageParagraph2'] ?></p>
                    </div>
                </div>
            </article>

        </div>
        
        
        <?php
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