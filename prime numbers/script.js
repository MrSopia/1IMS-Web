var number, i;
var Prime = false;

number = prompt("give number");

var x = number / 2;

for (i = 2; i <= x; i++)
{
    if (number % i == 0)
    {
        Prime = false;
        console.log(Prime);
        for (var j = 1; j <= number; j++)
            if (number % j == 0)
                console.log(" " + j);
        break;
    }
}

if (Prime == true)
{
    console.log(Prime);
}