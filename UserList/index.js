document.getElementById("button").addEventListener("click", insertrow);



function insertrow(){
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;

    var table = document.getElementById("table");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = firstname;
    cell2.innerHTML = lastname;
}
