function dwodimensionArray(){
    let array = [
        [1, 2, 3, 4],
        [6, 7, 8, 9],
        [10, 11, 12, 13],
        [15, 16, 17, 18]
    ];
    console.log("przed zmiana: "+array);


    for(let i = 0; i < array.length; i++){
        for(let j = 0; j < array.length; j++){
            array[i][j] = array[i][j] + 1;
        }
    }
    console.log("po zmianie: "+array);
}
dwodimensionArray();