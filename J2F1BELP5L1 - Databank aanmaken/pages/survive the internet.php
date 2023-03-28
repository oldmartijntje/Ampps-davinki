<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freddit</title>
    <link rel="stylesheet" type="text/css" href="css/freddit.css">
    <script src="javascript/freddit1.js" defer></script>
</head>

<body>
<div class="sidebar" id="sidebar">
    <div class="sidebarContent">
        <header class="title">
            <img src="images/reddit-logo.png" class="logo" alt="">
            <h1 class="sidebarText">Freddit</h1>
        </header>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target = "_blank" class="clickable sidebarItem marginBottom">
            <div class="clickable sidebarItem marginBottom">
                <img src="images/yt.png" class="logo clickable marginLeft sidebarItem" alt="">
                <h3 class="sidebarText clickable sidebarItem">The creation of..</h3>
            </div>
        </a>
        <div class="marginBottom sidebarItem">
            <h3 class="sidebarItem sidebarText marginLeft" style="margin-bottom: 0px;">Amount of questions</h3>
            <input type="number" class="marginLeft borderRadius marginBottom" value='5' style="width: 165px;" onchange="changeAmount()" id="questionAmountBox">
        </div>
    </div> 
    <footer class="marginBottom ffooter">
        <a target="_blank" href="https://github.com/oldmartijntje" class="clickable sidebarItem">
            <div class="clickable sidebarItem">
                <img src="images/oldmartijntje.png" class="logo clickable sidebarItem marginLeft borderRadius" alt="">
                <p class="sidebarText clickable sidebarItem">OldMartijntje 2023©</p>
            </div>
        </a>
    </footer>
</div>
  
<div class="content" id="content">
<button id="sideBarToggle" class="marginBottom" onclick="sidebarClick()"><img id="sideBarToggleImg" class="logo grey" src="images/toggle.png" alt=""></button>
<?php if ($_POST != "" && $_POST != null && count(array_filter($_POST))==count($_POST) && array_key_exists(sprintf("answer%s",$_POST["amount"]),$_POST)){ ?>
    <span id="secondPage"></span><br>
    <script>
        var obj = JSON.parse('<?php echo json_encode($_POST) ?>');
        amount = 0;
        amount = obj["amount"];
        document.getElementById("secondPage").setAttribute("data-value", obj["name"]);
    </script>
    <div class="page" id="fullPage">
    </div>
    <script src="javascript/freddit2.js"></script>
        <script>
            for (let index = 1; index < Number(amount)+1; index++) {
                createPost(index, obj[formID(index, "type")], obj[formID(index, "answer")], document.getElementById("secondPage").dataset.value)
                postFiller(index, obj[formID(index, "type")], obj[formID(index, "answer")], document.getElementById("secondPage").dataset.value)
            }
        </script>
    <?php } else { ?>
        <?php if (!($_POST == "" || $_POST == null) && (count(array_filter($_POST))!=count($_POST))) {
            echo "<h1 class='error'>* Please fill in the form </h1>";
            } else if (!($_POST == "" || $_POST == null) && !array_key_exists(sprintf("answer%s",$_POST["amount"]),$_POST)) {
                echo sprintf("<h1 class='error'>* Please fill in the form<br>You tried to send a form with %s questions but no answers? </h1>", $_POST["amount"]);
            }
        ?>
        <form method="post" id="theForm">
            <input type="hidden" id="amount" name="amount" value="5" />
            <div id="questions" class="form">
                <span id="invisibleSpan" class="noTopMargin"></span>
                <label class="question" for="fname">Username:</label>
                <input class="inputText" type="text" id="name" name="name" required><br>
            </div>
            <input class="submit" type="submit">
        </form> 
        <?php if (!($_POST == "" || $_POST == null) && (count(array_filter($_POST))!=count($_POST))) {?> 
            <script>
                function formID(number, name) {
                    id = `${name}${number}`;
                    return id;
                }

                var obj = JSON.parse('<?php echo json_encode($_POST) ?>');
                amount = 0;
                amount = obj["amount"];
                document.getElementById("amount").value = obj["amount"];
                document.getElementById("questionAmountBox").value = obj["amount"];
                document.getElementById("name").value = obj["name"];
            </script>
            <script src="javascript/freddit2.js"></script>
        <?php } ?>
    <?php } ?>
    </div>
</body>