function palindrom(){
    var input = document.getElementById("inputText");
    var str = input.value;
    var re = /[^A-Za-z0-9]/g
    var lowCase = str.toLowerCase().replace(re, '');
    var reverseString = str.split('').reverse().join('');

    if(str == reverseString){
        console.log("true");
    } else {
        console.log("false");
    }
}