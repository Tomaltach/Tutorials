function toThePower(num, exp) {
    var value = num;
    
    for(var i=1; i<exp; i++) {
        value = value * num;
    }
    return value;
}

var value = toThePower(13, 23);

alert(value);

Math.pow(2,3);
alert(value);