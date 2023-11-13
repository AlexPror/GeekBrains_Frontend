function calc(operation) {
    x = 1;
    y = 2;
    switch(operation) {
        case '+': 
            result = add(x,y)
            break
        case '-':
            result = sub(x,y)
            break
    }
    alert(result)
}

function add(x, y) {
    result = x + y;
    return result
}


function sub() {

    result = x - y;

}