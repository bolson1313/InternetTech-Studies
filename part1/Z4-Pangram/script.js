function pangram(str){
    let string = str.value;
    string = string.toLowerCase().replace(/[^a-z]/g, '');
    let isPangram = false;
    let counter = 0;
    for(let i = 0; i < string.length; i++){
        if(string.charCodeAt(i) >= 97 && string.charCodeAt(i) <= 122){
            counter++;
        }
    }
    if(counter >= 26){
        isPangram = true;
    }
}