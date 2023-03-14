<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulier</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js" defer></script>
</head>

<body><?php if ($_POST != "" && $_POST != null){ ?>
    Welcome <?php echo htmlspecialchars( $_POST["name"] ); ?><br>
    <?php } else { ?>
        <form method="post">
        <label for="fname">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="fname" id="label1"></label><br>
        <input type="text" id="question1" name="question1" required><br>
        <label for="fname" id="label2"></label><br>
        <input type="text" id="question2" name="question1" required><br>
        <label for="fname" id="label3"></label><br>
        <input type="text" id="question3" name="question1" required><br>
        <label for="fname" id="label4"></label><br>
        <input type="text" id="question4" name="question1" required><br>
        <label for="fname" id="label5"></label><br>
        <input type="text" id="question5" name="question1" required><br>
        <input type="submit">
    </form> 
    <?php } ?>
</body>