
const OPERATIONS = {
    sum: '+',
    substract: '-',
    multiply: '*',
    division: '/'
};


function calculate( a, b, operation ) {
    // console.log(a, b, operation);
    
    switch (operation) {
        case OPERATIONS.sum:
            return sum(a, b);
            break;
        case OPERATIONS.substract:
            return substract(a, b);
            break;
        case OPERATIONS.multiply:
            return multiply(a, b);
            break;
        case OPERATIONS.division:
            return division(a, b);
            break;
        default:
            break;
    }
}