// var number1 = 4;
// var number2 = 8;
// var number3 = 12;
// var number4 = 16;
// var resultx;

// function crazyCalculation(a,b){
//     var result = (a+b)*2;

//     return result;
// }

// console.log((number1 + number2) * 2);
// console.log((number1 + number3) * 2);
// console.log((number1 + number4) * 2);
// console.log((number2 + number3) * 2);
// var result1 = crazyCalculation(number1, number2)
// var result2 = crazyCalculation(number1, number3)
// var result3 = crazyCalculation(number1, number4)
// var result4 = crazyCalculation(number2, number3)

// console.log(result1);
// console.log(result2);
// console.log(result3);
// console.log(result4);

// var heading1 = document.querySelector("#heading1");
// var heading2 = document.querySelector("#heading2");

function changeColor(color){
    document.querySelector("body").style.backgroundColor = color;
}

// heading1.addEventListener("click" , function(){
//     changeColor("blue");
// });

// heading2.addEventListener("click" , function(){
//     changeColor("green");
// });

console.log(document.querySelectorAll("#colorpicker li"));
var colorItems = document.querySelectorAll("#colorpicker li");

function changeColor(element){
    element.style.backgroundColor = "red";
    element.style.color = element.innerText;
}

for (var i = 0; i < colorItems.length; i++){
    colorItems[i].addEventListener("click", function(){
        // console.log("is er op mij geklikt?");
        // console.log(this.innerText);
        changeColor(this);
    })
}


// colorItems[0].addEventListener("click", function(){
//     // console.log("is er op mij geklikt?");
//     // console.log(this.innerText);
//     changeColor(this);
// })

// colorItems[1].addEventListener("click", function(){
//     // console.log("is er op mij geklikt?");
//     // console.log(this.innerText);
//     changeColor(this);
// })

// colorItems[2].addEventListener("click", function(){
//     // console.log("is er op mij geklikt?");
//     // console.log(this.innerText);
//     changeColor(this);
// })
