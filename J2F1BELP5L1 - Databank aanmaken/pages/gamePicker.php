<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/gamePicker.js" defer></script>
    <link rel="stylesheet" href="css/gamePicker.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ca1dbf1ecc.js" crossorigin="anonymous"></script>
</head>

<!-- Action,Sandbox,Simulation,FPS,RPG,Looter-shooter,Sport -->

<body class="maxHeight">
    <header class="row">
        <img style="margin: 20px;" class="logo" src="images/steam2.0.png" alt="">
        <h1>
            <span class="fancy-text magic" data-value="Pressurized water vapor.">Pressurized water vapor.</span>
        </h1>
    </header>
    <div id="mainPage" class="scroll">
        <div class="main">
            <header class="space_between">
                <div class="dropdown">
                    <button onclick="genreFilter()" class="dropbtn fancy-background border magic"
                        data-value="Genre Filter">Genre Filter</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="genreFilterItem magic" data-value="Action" onclick="filterThis('Action')">Action</p>
                        <p class="genreFilterItem magic" data-value="Sandbox" onclick="filterThis('Sandbox')">Sandbox
                        </p>
                        <p class="genreFilterItem magic" data-value="Simulation" onclick="filterThis('Simulation')">
                            Simulation</p>
                        <p class="genreFilterItem magic" data-value="FPS" onclick="filterThis('FPS')">FPS</p>
                        <p class="genreFilterItem magic" data-value="RPG" onclick="filterThis('RPG')">RPG</p>
                        <p class="genreFilterItem magic" data-value="Looter-shooter"
                            onclick="filterThis('Looter-shooter')">Looter-shooter</p>
                        <p class="genreFilterItem magic" data-value="Sport" onclick="filterThis('Sport')">Sport</p>
                        <p class="genreFilterItem magic" data-value="Disable Filter" onclick="filterThis('')">Disable
                            Filter</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="ratingFilter()" class="dropbtn fancy-background border magic"
                        data-value="Rating Filter">Rating Filter</button>
                    <div id="myDropdown2" class="dropdown-content">
                        <p class="genreFilterItem magic" data-value="Disable" onclick="filterThis('0')">Disable</p>
                        <p class="genreFilterItem magic" data-value="Rating 1/5" onclick="filterThis('1')">Rating 1/5
                        </p>
                        <p class="genreFilterItem magic" data-value="Rating 2/5" onclick="filterThis('2')">Rating 2/5
                        </p>
                        <p class="genreFilterItem magic" data-value="Rating 3/5" onclick="filterThis('3')">
                            Rating 3/5</p>
                        <p class="genreFilterItem magic" data-value="Rating 4/5" onclick="filterThis('4')">Rating 4/5
                        </p>
                        <p class="genreFilterItem magic" data-value="Rating 5/5" onclick="filterThis('5')">Rating 5/5
                        </p>
                    </div>
                </div>
                <button data-value="To Cart" class="border magic fancy-background" onclick="changePage(1)">To
                    Cart</button>
                <input type="number" class="square border fancy-background" value="100"
                    onchange="filterThis(Number(value))"></input>
            </header>
            <div class="content border padding" id="gameList"></div>
        </div>

        <footer class="footer2 fancy-text lotOfBottomMargin">
            <h1>Footer</h1>
        </footer>
    </div>
    <div id="ShoppingCartPage" class="scroll">
        <header class="space_between">
            <button data-value="To Shop" class="border magic fancy-background square" onclick="changePage(0)">To
                Shop</button>
            <div class="row">
                <button data-value="Calculate Price" class="border magic fancy-background square"
                    onclick="calculatePrice()">Calculate Price</button>
                <div id="displayCartAmount" class="border magic fancy-background wider text-align-center">meow</div>
            </div>
        </header>
        <div class="content border padding" id="gameListCartPage"></div>
        <footer class="footer2 fancy-text lotOfBottomMargin">
            <h1>Footer</h1>
        </footer>
    </div>
    <div id="snackbar">Some text some message..</div>
</body>

</html>