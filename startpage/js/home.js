

function date (){
    var today = new Date;
    if (today.getDay == 3){
        document.getElementById('date').innerHTML="wednesday my dudes";
    } else {
        document.getElementById('date').innerHTML= today.toDateString();
    }
    if (today.getDate == 6 && today.getMonth == 5) {
        document.getElementById('date').innerHTML= "your birthday!";
    }
}

function countdown(){
    var countDownDate = new Date("Feb 1, 2018 09:15:00").getTime();
    var x = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;
    
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      document.getElementById("countdown").innerHTML = days + "D " + hours + "H "
      + minutes + "M " + seconds + "S ";
    
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
}

function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }
  
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    t = setTimeout(function() {
      startTime()
    }, 500);
  }

function openPages(num){
    switch (num) {
        case 0: 
            window.open('http://reddit.com');
            window.open('http://facebook.com'); 
            window.open('https://youtube.com');
            break;
        case 1:
            window.open('https://optima.jamk.fi/learning/id2/bin/user?rand=33161');
            window.open('https://asio.jamk.fi/pls/asio/amk'); 
            window.open('https://elmo.jamk.fi/'); 
            break;
    }  
}
