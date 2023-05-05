function getGreeting() {
    let time = new Date().getHours();
    if (time >= 5 && time < 12) {
        return "Good morning";
    } else if (time >= 12 && time < 18) {
        return "Good afternoon";
    } else {
        return "Good evening";
    }
}

function checkGreeting() {
    const greetDiv = document.getElementById("greetingText");
    if (greetDiv) {
        const greet = getGreeting();
        greetDiv.innerHTML = greet;
    }
}

checkGreeting();
setInterval(checkGreeting, 5000);
