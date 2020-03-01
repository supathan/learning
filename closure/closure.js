

function main($number){

    var a = $number;

    return function(value){
        console.log(a+value);
    }
}

var add12 = main(12);

var add13 = main(13);


add12(2);