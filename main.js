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
var text2 = document.getElementById("profilesubtitle_m");
var picture = document.getElementById("profkuva");
var picture2 = document.getElementById("profkuva_m");
    count += 1;
    text.innerHTML = count;
    text2.innerHTML = count;
    picture.width = picture.width * (1 - count/10000);
    picture.height = picture.height * (1 - count/10000);
    picture2.width = picture2.width * (1 - count/10000);
    picture2.height = picture2.height * (1 - count/10000);
    if(count >= 50 && count < 55){
        text.innerHTML = "lopeta jo";
        text2.innerHTML = "lopeta jo";
        
    } 
    if(count > 99 && count < 105){
        text.innerHTML = "hei oikeesti";
        text2.innerHTML = "hei oikeesti";
    }
    if(count > 224 && count < 300){
        text.innerHTML = "tästä lähti ilmoitus ilpolle ip-osoitteesi kera että täällä joku klikkailee hulluna päitä (voit jo lopettaa)"; 
        text2.innerHTML = "tästä lähti ilmoitus ilpolle ip-osoitteesi kera että täällä joku klikkailee hulluna päitä (voit jo lopettaa)";       
    }
    if (count > 999){
        text.innerHTML = "luuseri";
        text2.innerHTML = "luuseri";
    }
}


