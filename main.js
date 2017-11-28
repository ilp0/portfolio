function myFunction() {
    var x = document.getElementById("mobileNavBar");
    if (x.className === "mobnav") {
        x.className += " responsive";
    } else {
        x.className = "mobnav";
    }
}

var count = 0;
function klikkeri(){
   
    var text = document.getElementById("profilesubtitle");
    count += 1;
    text.innerHTML = count;
    if(count >= 50 && count < 55){
        text.innerHTML = "lopeta jo"
    } 
    if(count > 99 && count < 105){
        text.innerHTML = "kaikki ok?"
    }
    if(count > 249 && count < 255){
        text.innerHTML = "tästä lähti ilmoitus ilpolle ip-osoitteesi kera että täällä joku klikkailee hulluna profiilikuvaa";        
    }
    if (count > 999){
        text.innerHTML = "voitit pelin, luuseri"
    }
}


