function numberGenerator() {
    let num = 1;
    function checkNumber() {
        console.log(num);
    }
    num++;
    return checkNumber;
}
const number = numberGenerator();
number(); 
function createCounter() {
    let count = 0;
    return function () {
        count += 1;
        return count;
    }
}
const counter1 = createCounter();
const counter2 = createCounter();
console.log(counter1());
console.log(counter1()); 
console.log(counter2()); 

