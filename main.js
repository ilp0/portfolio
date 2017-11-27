function myFunction() {
    var x = document.getElementById("mobileNavBar");
    if (x.className === "mobnav") {
        x.className += " responsive";
    } else {
        x.className = "mobnav";
    }
}
