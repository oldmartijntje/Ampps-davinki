<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>good website</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script>
        function notFound404() {
            window.location.href = "?page=fsgsgsd";
        }
    </script>
    <?php require 'includes/header.php'; ?>
    <?php $redirectDict = array(
        'home' => 'pages/home.php',
        'Freddit' => 'pages/freddit.php',
        'PWV' => 'pages/gamePicker.php',
        'time' => 'pages/time.php',
        '404' => 'pages/404notFound.php',
        'footer' => 'includes/footer.php',
        'header' => 'includes/header.php',
        'index' => 'index.php',
        'FredditSecret' => 'pages/secret1.php',
        "Fredditor" => "pages/fredditEditor.php",);
        ?>
    
    <?php if (isset($_GET['page'])) {
        if (array_key_exists($_GET['page'], $redirectDict)) {
            require $redirectDict[$_GET['page']];
        } else {
            require 'pages/404notFound.php';
        }
    } else {
        require 'pages/home.php';
    }
    ?>
    <?php require 'includes/footer.php'; ?>
</body>
</html>