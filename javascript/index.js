alert("Loaded with external js");

console.log("Hello my lovely console");
console.warn("this is a warning");

alert("popup");
var promptName = prompt("Give me your name hoe");
console.log(promptName);

document.write("<h2>Hellow</h2>");

//one line comment

/*
    commentaar verschillende lijnen
*/

var number1 = 5;
var number2 = 7;
var total = number1 + number2;

console.log(number1);
console.log(number2);
console.log(total);
console.log(typeof total);

var firstname = "Laurence";
var name = 'Leysen'
var nickname = "Laurence \"chinaman\" Leysen" // of var openen met '' en dan in het midden "" gebruiken
var fullname = firstname + " " + name;

console.log(firstname);
console.log(name);
console.log(typeof firstname);
console.log(typeof name);
console.log(fullname);

console.log(number1 + number2);

// zoek typescript

/* undefined */
var undefinedvar;
console.log(undefinedvar);
console.log(typeof undefinedvar);

// Boolean
var isFalse = false;
var isTrue = true;

console.log(isFalse);
console.log(isTrue);

console.log(typeof isFalse);
console.log(typeof isTrue);

//object aka array
var colors = ["blauw", "roos", "groen"];
console.log(colors[0]);
console.log(colors[1]);
console.log(colors[2]);
console.log(typeof colors);

var person = {
    firstname: "Laurence",
    name: "Leysen",
    age: 18,
    hasmoney: false,
    split:[
        "pull",
        "push",
        "arms",
        "repeat"
    ]
}

console.log(person);
console.log(typeof person);
console.log(person.split);

console.warn(person["name"]);



//array in object
var student = [
{
    name: "Laurence"
},
{
    name: "Collin"
}
];

console.log(student[1].name);

