//This is redundant as fuck
var games = [
    {
        "title": "Counter-Strike: Global Offensive",
        "price": 0.00,
        "genre": "FPS",
        "rating": 4
    },
    {
        "title": "Dota 2",
        "price": 0.00,
        "genre": "MOBA",
        "rating": 3
    },
    {
        "title": "Goose Goose Duck",
        "price": 4.99,
        "genre": "Action",
        "rating": 2
    },
    {
        "title": "Apex Legends",
        "price": 0.00,
        "genre": "FPS",
        "rating": 4
    },
    {
        "title": "PUBG: BATTLEGROUNDS",
        "price": 29.99,
        "genre": "FPS",
        "rating": 5
    },
    {
        "title": "Lost Ark",
        "price": 49.99,
        "genre": "Action",
        "rating": 1
    },
    {
        "title": "Grand Theft Auto V",
        "price": 29.99,
        "genre": "FPS",
        "rating": 3
    },
    {
        "title": "Call of Duty®: Modern Warfare® II | Warzone™ 2.0",
        "price": 19.99,
        "genre": "FPS",
        "rating": 3
    },
    {
        "title": "Team Fortress 2",
        "price": 0.00,
        "genre": "FPS",
        "rating": 5
    },
    {
        "title": "Rust",
        "price": 39.99,
        "genre": "Action",
        "rating": 5
    },
    {
        "title": "Unturned",
        "price": 0.00,
        "genre": "RPG",
        "rating": 1
    },
    {
        "title": "ELDEN RING",
        "price": 59.99,
        "genre": "RPG",
        "rating": 5
    },
    {
        "title": "ARK: Survival Evolved",
        "price": 10.00,
        "genre": "RPG",
        "rating": 1
    },
    {
        "title": "War Thunder",
        "price": 0.00,
        "genre": "Simulation",
        "rating": 2
    },
    {
        "title": "Sid Meier's Civilization VI",
        "price": 29.99,
        "genre": "Simulation",
        "rating": 3
    },
    {
        "title": "Football Manager 2023",
        "price": 59.99,
        "genre": "Simulation",
        "rating": 3
    },
    {
        "title": "Warframe",
        "price": 0.00,
        "genre": "Looter-shooter",
        "rating": 3
    },
    {
        "title": "EA SPORTS™ FIFA 23",
        "price": 59.99,
        "genre": "Sport",
        "rating": 1
    },
    {
        "title": "Destiny 2",
        "price": 0.00,
        "genre": "FPS",
        "rating": 5
    },
    {
        "title": "Red Dead Redemption 2",
        "price": 59.99,
        "genre": "RPG",
        "rating": 4
    },
    {
        "title": "Tom Clancy's Rainbow Six Siege",
        "price": 19.99,
        "genre": "Simulation",
        "rating": 3
    },
    {
        "title": "The Witcher 3: Wild Hunt",
        "price": 39.99,
        "genre": "RPG",
        "rating": 4
    },
    {
        "title": "Terraria",
        "price": 9.99,
        "genre": "Sandbox",
        "rating": 5
    },
    {
        "title": "Stardew Valley",
        "price": 14.99,
        "genre": "Sandbox",
        "rating": 1
    },
    {
        "title": "Left 4 Dead 2",
        "price": 9.99,
        "genre": "FPS",
        "rating": 4
    },
    {
        "title": "Don't Starve Together",
        "price": 5.09,
        "genre": "RPG",
        "rating": 3
    },
    {
        "title": "MIR4",
        "price": 19.99,
        "genre": "RPG",
        "rating": 3
    },
    {
        "title": "PAYDAY 2",
        "price": 9.99,
        "genre": "Action",
        "rating": 2
    },
    {
        "title": "Path of Exile",
        "price": 0.00,
        "genre": "RPG",
        "rating": 4
    },
    {
        "title": "Project Zomboid",
        "price": 14.99,
        "genre": "Simulation",
        "rating": 4
    },
    {
        "title": "Valheim",
        "price": 19.99,
        "genre": "Sandbox",
        "rating": 5
    },
    {
        "title": "Muck",
        "price": 0.00,
        "genre": "Action",
        "rating": 3
    },
    {
        "title": "Minecraft Java Edition",
        "price": 25.00,
        "genre": "Sandbox",
        "rating": 4
    },
    {
        "title": "Minecraft Windows 10 edition",
        "price": 30.00,
        "genre": "Sandbox",
        "rating": 3
    },
    {
        "title": "Minecraft Pocket Edition",
        "price": 7.00,
        "genre": "Sandbox",
        "rating": 4
    },
    {
        "title": "Crush Crush",
        "price": 0.00,
        "genre": "Simulation",
        "rating": 3
    },
    {
        "title": "Crush Crush DLC",
        "price": 5.69,
        "genre": "Simulation",
        "rating": 5
    },
    {
        "title": "Fortnite",
        "price": 0.00,
        "genre": "Action",
        "rating": 3
    },
    {
        "title": "Among us",
        "price": 9.00,
        "genre": "Action",
        "rating": 3
    },
    {
        "title": "Subway Surfers",
        "price": 0.00,
        "genre": "Simulation",
        "rating": 2
    },
    {
        "title": "Roblox",
        "price": 0.00,
        "genre": "Action,Sandbox,Simulation,FPS,RPG,Looter-shooter,Sport",
        "rating": 4
    },
    {
        "title": "DayZ",
        "price": 44.99,
        "genre": "Simulation",
        "rating": 3
    }
]
page = 0;
ActiveGenreFilter = '';
ActiveCostFilter = 100;
ActiveRatingFilter = 0;
activeToast = 0;
var cart = [];
var snackbarMessage = [];

function genreFilter() {
    document.getElementById("myDropdown").classList.toggle("showItemsFromDropdown");
}

function ratingFilter() {
    document.getElementById("myDropdown2").classList.toggle("showItemsFromDropdown");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('showItemsFromDropdown')) {
                openDropdown.classList.remove('showItemsFromDropdown');
            }
        }
    }
}

for (let i = 0; i < games.length; i++) {
    var gameRow = document.createElement("div");
    gameRow.classList.add("game", "row");
    gameRow.classList.add("noverflow")
    var game = document.createElement("div");
    game.classList.add("gameInfo", "border", "fancy-background", "width", "noverflow", "row");
    var cartButton = document.createElement("button");
    cartButton.dataset.value = "Add to cart";
    cartButton.innerText = "Add to cart";
    cartButton.classList.add("smallWidth", "border", "fancy-background", "magic");
    cartButton.id = games[i].title;
    var gameName = document.createElement("p");
    var gameGenre = document.createElement("p");
    var gameRating = document.createElement("p");
    var gamePrice = document.createElement("p");
    gameName.innerText = games[i].title;
    gameName.dataset.value = gameName.innerText;
    gameGenre.innerText = games[i].genre;
    gameRating.innerText = `${games[i].rating}/5`;
    gameRating.dataset.value = gameRating.innerText;
    if ((games[i].genre.match(/,/g) || []).length == 6) {
        gameGenre.innerText = "All";
    }
    gameGenre.dataset.value = gameGenre.innerText;
    if (games[i].price == 0) {
        gamePrice.innerText = "Free";
    } else {
        gamePrice.innerText = "€" + games[i].price;
    }
    gamePrice.dataset.value = gamePrice.innerText;
    gameName.classList.add("margin", "name", "bigWidth", "magic", "noverflow");
    gameGenre.classList.add("margin", "genre", "mediumWidth", "magic", "noverflow");
    gameRating.classList.add("margin", "rating", "smallestWidth", "magic", "noverflow");
    gamePrice.classList.add("margin", "price", "smallWidth", "magic", "noverflow");
    cartButton.onclick = function () {
        gameToCart(this.id);
    };
    game.appendChild(gameName);
    game.appendChild(gameGenre);
    game.appendChild(gameRating);
    game.appendChild(gamePrice);
    gameRow.appendChild(cartButton);
    gameRow.appendChild(game);
    document.getElementById("gameList").appendChild(gameRow);
}
document.getElementById("gameListCartPage").innerHTML = document.getElementById("gameList").innerHTML;

for (let i = 0; i < games.length; i++) {
    document.getElementById("gameListCartPage").children[i].children[0].onclick = function () {
        gameFromCart(this.id);
    }
    document.getElementById("gameListCartPage").children[i].children[0].innerText = "Remove from cart";
    document.getElementById("gameListCartPage").children[i].children[0].dataset.value = "Remove from cart";
}

function gameToCart(game) {
    if (cart.includes(game)) {
        snackbar("Game already in cart")
    } else {
        cart.push(game);
        snackbar(`Added ${game} to cart`)
    }
    showGamesInCart();
}

function snackbar(message) {
    snackbarMessage.push(message);
    var x = document.getElementById("snackbar");
    var messageToShow = getToastMessage();
    x.className = "show";
    x.innerText = messageToShow;
    activeToast += 1;
    setTimeout(function () {
        activeToast -= 1;
        if (activeToast == 0) {
            x.className = x.className.replace("show", "");
        }
        snackbarMessage.shift();
        x.innerText = getToastMessage();
    }, 5000);
}

function getToastMessage() {
    var message = snackbarMessage[0];
    for (let index = 0; index < snackbarMessage.length - 1; index++) {
        message = `${message}\n${snackbarMessage[index + 1]}`;
    }
    return message;
}

function gameFromCart(game) {
    if (cart.includes(game)) {
        cart.splice(cart.indexOf(game), 1);
        console.log(cart);
        snackbar(`Removed ${game} from cart`)
    } else {
        console.log("Game not in cart");
        snackbar("Game not in cart")
    }
    showGamesInCart();
}

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
const ignore = ' .\n\r';
const elements = document.getElementsByClassName("magic");
for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener("mouseover", event => {
        let iterations = 0;
        const interval = setInterval(() => {
            event.target.innerText = event.target.innerText.split("").map((letter, index) => {
                if (index < iterations) {
                    return event.target.dataset.value[index].toUpperCase();
                }
                if (ignore.indexOf(event.target.dataset.value[index]) >= 0) {
                    return event.target.dataset.value[index].toUpperCase();
                }
                return letters[Math.floor(Math.random() * letters.length)];
            }).join("");
            if (iterations >= event.target.dataset.value.length) clearInterval(interval)
            iterations += 1 / 6 * event.target.dataset.value.length / 15;
        }, 30);
    });
}

function filterThis(filter = false) {
    console.log(filter)
    if ((filter != false && isNaN(filter)) || filter == '') {
        ActiveGenreFilter = filter;
    } else if (!isNaN(filter) && typeof filter == 'number') {
        ActiveCostFilter = filter;
    } else if (!isNaN(filter) && typeof filter == 'string') {
        ActiveRatingFilter = Number(filter);
    }
    if (ActiveGenreFilter != '' && isNaN(ActiveGenreFilter)) {
        for (let i = 0; i < document.getElementById("gameList").children.length; i++) {
            if (games[i].genre.includes(ActiveGenreFilter) && games[i].price <= ActiveCostFilter && (games[i].rating == ActiveRatingFilter || ActiveRatingFilter == 0)) {
                document.getElementById("gameList").children[i].style.display = "";
            } else {
                document.getElementById("gameList").children[i].style.display = "none";
            }
        }
    } else {
        for (let i = 0; i < document.getElementById("gameList").children.length; i++) {
            if (games[i].price <= ActiveCostFilter && games[i].rating == ActiveRatingFilter || ActiveRatingFilter == 0) {
                document.getElementById("gameList").children[i].style.display = "";
            } else {
                document.getElementById("gameList").children[i].style.display = "none";
            }
        }
    }
}

function showGamesInCart() {
    for (let i = 0; i < document.getElementById("gameListCartPage").children.length; i++) {
        if (cart.includes(games[i].title)) {
            document.getElementById("gameListCartPage").children[i].style.display = "";
        } else {
            document.getElementById("gameListCartPage").children[i].style.display = "none";
        }
    }
    calculatePrice();
}

function changePage(pageToShow) {
    page = pageToShow;
    if (page == 0) {
        document.getElementById("mainPage").style.display = "";
        document.getElementById("ShoppingCartPage").style.display = "none";
    } else if (page == 1) {
        document.getElementById("mainPage").style.display = "none";
        document.getElementById("ShoppingCartPage").style.display = "";
    }
}

function calculatePrice() {
    let price = 0;
    for (let i = 0; i < cart.length; i++) {
        price += games.find(game => game.title == cart[i]).price;
    }
    price = Math.floor(price * 100) / 100;
    document.getElementById("displayCartAmount").innerText = `Total: €${price}`;
    document.getElementById("displayCartAmount").dataset.value = `Total: €${price}`;
}

showGamesInCart();
changePage(0);
