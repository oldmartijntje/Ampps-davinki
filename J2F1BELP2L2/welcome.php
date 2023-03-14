<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulier</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body><?php if ($_POST != "" && $_POST != null){ ?>
    Welcome <?php echo htmlspecialchars( $_POST["name"] ); ?><br>
    Your email address is: <?php echo htmlspecialchars( $_POST["email"] ); ?>
    <?php } else { ?>
        <form action="welcome.php" method="post">
        <label for="fname">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="lname">Mail:</label><br>
        <input type="email" id="email" name="email" required>
        <input type="submit">
    </form> 
    <?php } ?>
</body>