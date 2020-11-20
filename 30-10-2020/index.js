// id = document.getElementById("heading1") ID IS UNIQUE
// classname = document.getElementsByClassName("heading1") class="heading1"
// tagname = document.getElementsByTagname("body") <body></body>
// document.querySelector("") .class #id tagname -> 1 dom element 
// document.querySelectorAll("") .class tagname -> collection van dom elementen weergeven

// var heading1 = document.getElementById("heading1");

// document.getElementById("heading1").style.backgroundColor = "pink";
// document.querySelector("h2").style.backgroundColor = "pink";
// document.querySelector("#heading1").style.backgroundColor = "pink";
// document.querySelector(".heading1").style.backgroundColor = "pink";

// document.getElementsByTagName("h2")[0].style.backgroundColor = "yellow";
// document.getElementsByTagName("h2")[1].style.backgroundColor = "yellow";
// console.log(document);
// console.log(document.getElementsByTagName("h2"));
// console.log(document.querySelectorAll(".heading2"));

// console.log(document.getElementById("navigation").children[0].children);
// console.log(document.getElementById("navigation").parentElement);
// console.log(document.querySelectorAll("#navigation ul li")[0].parentElement);

// var heading1 = document.getElementById("heading1");

// heading1.innerText = "Collin"; // als tekstschouwen
// heading1.innerHTML = "Collin <span>Van der Vorst</span>"; // als html gaan aanschouwen
// // heading1.style.color = "green";

// console.log(heading1.id);
// heading1.setAttribute("attribute", "attribute-value");

// heading1.setAttribute("class", "heading-green"); // overschrijven
// // heading1.classList.add("heading-green"); // classe toevoegen

// console.log(heading1);

// console.log(document.querySelectorAll(".heading2"));
// document.querySelectorAll(".heading2")[1].innerHTML = "Rock Werchter";

console.log(document.querySelector("#navigation ul"));

var headingBottom = document.createElement("h2");
headingBottom.innerHTML = "Toegevoegd op het einde";

// // In de html tag op het einde gaan toevoegen
// document.querySelectorAll("#placeholder p")[1].append(headingBottom); 

// // In de html tag in het begin gaan toevoegen
// document.querySelectorAll("#placeholder p")[1].prepend(headingBottom); 

// // Na de html tag toevoegen
// document.querySelectorAll("#placeholder p")[1].after(headingBottom);

// Voor de html tag toevoegen
// document.querySelectorAll("#placeholder p")[1].before(headingBottom);

// document.querySelector("body").append("Toegevoegd op het einde");

var nav = document.querySelector("#navigation");
document.body.removeChild(nav);