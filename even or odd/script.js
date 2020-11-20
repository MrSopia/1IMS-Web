var length = 5;
var numbers = [length];

for (var i = 0; i < length; i++) {
    numbers[i] = prompt("give number");
    console.log(typeof numbers[i]);

    if (numbers[i] % 2 == 0)
    {
        console.log("Number "+ numbers[i] + " is even.");
    }
    else
    {
        console.log("Number "+ numbers[i] + " is odd.");
    }
}