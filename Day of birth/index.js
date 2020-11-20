document.getElementById("button").addEventListener("click", datecalc);

function datecalc() {
    var daysalive = 0;
    var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds

    var today = new Date();
    var dob = new Date(document.getElementById("frm1").elements.namedItem("DateOfBirth").value);
    var weekday = new Array(7);

    daysalive = Math.round(Math.abs((dob.getTime() - today.getTime())/(oneDay)));

    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var n = weekday[dob.getDay()];


    if (dob.getFullYear()%2 == 0){
        document.body.style.backgroundColor = "lightblue";
    }
    else{
        document.body.style.backgroundColor = "red";
    }

    document.getElementById("result1").innerHTML = n + "<br>";
    document.getElementById("result2").innerHTML = daysalive + " days old<br>";
}