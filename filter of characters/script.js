var characters = [
    {
        name: "Joffrey Baratheon",
        age: 18,
        dead: true
    },
    {
        name: "Jon Snow",
        age: 25,
        dead: false
    },
    {
        name: "Cersei Lannister",
        age: 40,
        dead: true
    },
    {
        name: "Sansa Stark",
        age: 18,
        dead: false
    },
];
for (var i = 0; i < characters.length; i++) {
    if (characters[i].dead === true){
        document.write(characters[i].name + " is dead <br>");
    }
}

for (var i = 0; i < characters.length; i++) {
    if (characters[i].age >= 20){
        document.write(characters[i].name + " is older than 20 years <br>");
    }
}