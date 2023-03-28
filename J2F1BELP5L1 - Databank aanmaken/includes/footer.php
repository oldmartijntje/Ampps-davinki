<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script>
        function goToWebSearchByElementText(id) {
            search = document.getElementById(id).innerText;
            window.location.href = `https://www.google.com/search?q=${search}&oe=UTF-8`;
        }
    </script>
    <footer class="footer">
        <div class="footerHeader">
            <h1 class="whiteText"><a href="?page=footer" class="inTextLink">Footer</a></h1>
        </div>
        <div class="footerContent">
            <div class="footerColumn">
                <h1 class="columnTitle">Date:</h1>
                <p class="columnText" id="footerClock"></p>
                <script>
                    date = new Date();
                    displayDate = `${date.getDate()}-${date.getMonth()}-${date.getFullYear()}`;
                    document.getElementById("footerClock").innerHTML = displayDate;
                </script>
            </div>
            <div class="footerColumn">
                <h1 class="columnTitle">Creator:</h1>
                <p class="columnText glitchTextEffect pointer" id="username" data-value="OldMartijntje" onclick="goToWebSearchByElementText('username')">OldMartijntje</p>
                <p class="whiteText"><a href="https://github.com/oldmartijntje" target="_blank" class="inTextLink">Github</a></p>
                <script>
                    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
                    const ignoreString = ' .\n\r';
                    const elements2 = document.getElementsByClassName("glitchTextEffect");
                    for (let i = 0; i < elements2.length; i++) {
                        elements2[i].addEventListener("mouseover", event => {
                            let iterations = 0;
                            const interval = setInterval(() => {
                                event.target.innerText = event.target.innerText.split("").map((letter, index) => {
                                    if (index < iterations) {
                                        return event.target.dataset.value[index].toUpperCase();
                                    }
                                    if (ignoreString.indexOf(event.target.dataset.value[index]) >= 0) {
                                        return event.target.dataset.value[index].toUpperCase();
                                    }
                                    return characters[Math.floor(Math.random() * characters.length)];
                                }).join("");
                                if (iterations >= event.target.dataset.value.length) clearInterval(interval)
                                iterations += 1 / 6 * event.target.dataset.value.length / 15;
                            }, 30);
                        });
                    }
                </script>
            </div>
            <div class="footerColumn">
                
            </div>
        </div>
    </footer>
</body>
</html>