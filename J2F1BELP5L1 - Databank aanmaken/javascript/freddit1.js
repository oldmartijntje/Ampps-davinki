var types = ["location", "people", "activity", "objects", "activity", "objects", "people"];
var questions = {
    "location": ["Where did you grow up?", "Where do you live now?", "Where do you want to live?", "Where do you want to go on vacation?",
        "What's a location you dispise?", "What's a location you love?", "What's a location you've always wanted to visit?", "What's a location you've always wanted to live in?",
        "What's the last place you have been?", "What is a great place to eat?", "What is a great place to shop?", "What is a great place to visit?", "What is a great place to live?",
        "Last place you have pooped?", "If you could live in any fictional world from a book, movie, or TV show, which one would you choose?", "Last place you have peed?", "Last place you have slept?", "Last place you have eaten?", "Last place you have drank?", "Last place you have smoked?"],
    "people": ["Who is your favorite person?", "Who is your least favorite person?", "Who is your best friend?", "Who is your worst enemy?", "Who is your favorite celebrity?", "Who is your least favorite celebrity?",
        "Who would you want to be stuck on a deserted island with?", "Who would you want to be stuck in a elevator with?", "Who would you want to be stuck in a car with?", "Who would you want to be stuck in a house with?",
        "What is your mom's name?", "What is your dad's name?", "What is your best friend's name?", "What is your worst enemy's name?", "What is your favorite celebrity's name?", "Who would you want to rickroll?",
        "Most annoying politician?", "A person you dispise?", "A person you love?", "A person you've always wanted to meet?", "A person you've always wanted to be friends with?", "A person you've always wanted to date?",
        "Who's voice doesn't match the person?", "If you could trade lives with any fictional villain who would it be?"],
    "moment": ["When was the last time you have eaten?", "When was the last time you have drank?", "When was the last time you have slept?", "When was the last time you have pooped?",
        "When did you meet your first girlfriend/boyfriend?", "When did you meet your best friend?", "When did you meet your worst enemy?", "When is your birthday?",
        "When did you get your first kiss?"],
    "numbers": ["How many fingers do you have?", "How many times have you been arrested?", "How many times have you been to jail?", "How many times have you been to prison?",
        "A random number between 1 and 100.000?", "How many dollars would you want to have?", "What's your weight?"],
    "activity": ["[NSFW] What's a sex position that you've never tried that you're curious about?", "What's your favourite morning routine?", "What are your hobbies?", "A thing you hate to do?", "A thing you love to do?", "What's your favourite thing to do on a rainy day?",
        "[NSFW] What's the most NSFW thing you've caught your sibling(s) doing?", "Most annoying chore?", "Thing to do on a hot summer day?", "Something you can do to annoy someone?", "What would you do if you had 1 million dollars for just 24 hours?",
        "What are some \"dumb ways to die\"?", "What are you really good at?", "What is the most impressive thing your cat has ever done?", "If you knew right now you're going to live for another 200 years, what would you do?", "What's the best job in the world?", "what 'old person' things do you do?", "What hobby would you dare say is a TOTAL waste of time?", "If you woke up tomorrow and suddenly had 30 hours per day for the rest of your life, what would you do?",
    ],
    "objects": ["What do you have too many of?", "What's the weirdest movie you have ever seen?", "What is something you like to eat?", "What is something you like to drink?",
        "What is your favourite recipe to cook?", "What food would you buy more often if it was cheaper?", "What animal that's usually considered ugly do you find cute?", "What is your favorite alcoholic drink?", "Best movie ever?", "The most annoying thing you have ever seen?", "What's the most annoying thing you have ever smelled?", "The best things to eat with chopsticks?", "What's the best comedy movie you have ever watched?",
        "What smell reminds you of being in elementary school?", "It's Pi day. What kind of pie are you having?", "what are the best games to play when going pooping?", "What is your favorite type of pie?", "What's the most recent thing you bought online?", "What's the best breakfast?"],
    "thoughts": ["What do you guys think about when trying to sleep?", "Whats something you wish you knew earlier?!", "What is your favorite memory of a grandparent?", "what movie fan theory actually sounds plausible?", "What is the biggest lie you've told and got successfully away with?", "Reddit, what's your idea of the perfect day?", "Reddit, what seemed like a good idea at the time?", "A possible way the world could end", "How do you think the world will end?", "Something you would want to happen.", "Describe a possible future.", "A memory taken out of context", "Describe a scene from a movie", "Something you would do if the law didn't exist for an hour.", "Something to prevent at all costs", "Something you would change if you could time travel?", "Best movie scene?", "What do you want to happen in the future", "What's the weirdest dream you've ever had?", "What's the most unsettling dream you've ever had?", "What's something you thought would be great but wasn't?"]
};

var answers = {
    "location": ["the twin towers", "Philedelfia", "USA", "Underneath the toilet bowl", "your mom", "in my bed", "on mars", "nazi germany", "USSR", "area 51", "my basement"],
    "people": ["my girlfriend", "Mario", "Donald Trump", "Joe Bidome", "Santa", "Myself", "Nobody", "your mom"],
    "moment": ["september 11 2001", "Yesterday", "Today", "a week ago", "never :c", "500BC", "2020", "last christmas :c", "when I was born"],
    "numbers": [Math.floor(Math.random() * 100)],
    "activity": ["playing hide and seek", "playing truth or dare", "having a stare contest", "getting drunk", "watching you", "opening a door and closing it afterwards", "eating cereal", "eating breakfast", "dying", "cooking", "swimming", "recording youtube videos", "taking your virginity", "drinking beer", "waking up", "petting cats", "watching disney movies", "binge watching the whole MCU", "hacking the fbi", "getting your IP adress", "watching hub videos", "pooping", "doing the dishes", "your mom", "playing minecraft", "playing fortnite", "playing roblox", "playing minecraft", "playing a boardgame", "strategizing on how to take over the tri-state area"],
    "objects": ["my girlfriend", "a beard", "my fist", "dice", "bathtubs", "the whole raid shadow legends lore", "the bible", "plutonium", "uranium", "lasagna", "the bee movie", "your mom", "cheese", "pancake", "a lego brick", "your ugly face", "piss", "beer"],
    "thoughts": ["death", "boobs", "how to use computers", "don't date kids", "how quantum mechanics work", "how to visualize the 4th dimension", "my girlfriend", "not to go on roblox"]
}

var typeIDName = "type";
var answerIDName = "answer";
var labelIDName = "label";

var amount = 5;
var lastAmount = 0;
var blocked = false;

var hiddenSidebar = false;

function getQuestion(type) {
    var question = questions[type][Math.floor(Math.random() * questions[type].length)];
    return question;
}

function getType() {
    return types[Math.floor(Math.random() * types.length)]
}

function formID(number, name) {
    id = `${name}${number}`;
    return id;
}

var myEle = document.getElementById("secondPage");

if (myEle) {
    blocked = true;
} else {
    for (let index = 1; index < amount + 1; index++) {

    }
}
function sidebarClick() {
    if (hiddenSidebar) {
        document.getElementById("sidebar").style.display = "block";
        hiddenSidebar = false;
        document.getElementById("content").style.marginLeft = "250px";
        document.getElementById("sideBarToggleImg").src = "images/cross.png";
    } else {
        document.getElementById("sidebar").style.display = "none";
        hiddenSidebar = true;
        document.getElementById("content").style.marginLeft = "0px";
        document.getElementById("sideBarToggleImg").src = "images/toggle.png";
    }
}
sidebarClick();

function createQuestions(index) {
    label = createElement("label", ["question"], formID(index, labelIDName));
    label.for = "fname";
    hiddenInput = createElement("input", [], formID(index, typeIDName));
    hiddenInput.name = formID(index, typeIDName);
    hiddenInput.type = "hidden";
    questionInput = createElement("input", ["inputText"], formID(index, "answer"));
    questionInput.type = "text";
    questionInput.required = true;
    questionInput.name = formID(index, "answer");
    type = getType();
    assambler([[document.getElementById("questions"), label, hiddenInput, questionInput]]);
    document.getElementById(formID(index, typeIDName)).value = type;
    document.getElementById(formID(index, labelIDName)).innerText = getQuestion(type);
}

function changeAmount() {
    amount = document.getElementById("questionAmountBox").value;
    if (amount < 1) {
        document.getElementById("questionAmountBox").value = 1;
        amount = 1;
    }
    if (blocked) {
        return;
    } else {
        if (amount > lastAmount) {
            for (let index = 1; index < Number(amount) + 1; index++) {
                if (index > lastAmount) {
                    createQuestions(index);
                }
            }
        } else if (Number(amount) < Number(lastAmount)) {
            for (let index = 1; index < Number(lastAmount) + 1; index++) {
                if (index > amount) {
                    deleteQuestions(index);
                }
            }
        }
        document.getElementById("amount").value = amount;
        lastAmount = Number(amount);
    }

}

function assambler(pieces = []) {
    for (var i = 0; i < pieces.length; i++) {
        for (var j = 1; j < pieces[i].length; j++) {
            pieces[i][0].appendChild(pieces[i][j]);
        }
    }
}

function createElement(type, classesList, id = '', text = '', dataValue = '', title = '') {
    var element = document.createElement(type);
    classesList.forEach(classOfList => {
        element.classList.add(classOfList);
    });
    if (id != '') {
        element.id = id;
    }
    element.dataset.value = dataValue;
    element.innerText = text;
    return element;
}

function deleteQuestions(index) {
    document.getElementById(formID(index, typeIDName)).remove();
    document.getElementById(formID(index, answerIDName)).remove();
    document.getElementById(formID(index, labelIDName)).remove();
}

function iAmNotFunny() {
    assambler([[document.getElementById("invisibleSpan"), createElement("h1", ["notFunnyText", "formText"], '', "Yes you are not funny, We'll help you."), createElement("p", ["notFunnySubtext", "formText"], '', "This is Easteregg number 2.")]]);
    amount = document.getElementById("questionAmountBox").value;
    for (let index = 1; index < Number(amount) + 1; index++) {
        type = document.getElementById(formID(index, "type")).value;
        document.getElementById(formID(index, "answer")).value = answers[type][Math.floor(Math.random() * answers[type].length)];
    }
    return "Yep you are not, here is some help. Also this is a secret easter egg."
}

changeAmount();
