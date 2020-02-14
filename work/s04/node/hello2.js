/**
 * A simple test program.
 *
 * @author Anton Sjöstrand
 */
"use strict";

function main() {
    let a = 1;
    let b;
    let range = "";
    let randomNumber = Math.floor(Math.random() * 11);
    let counter = 0;
    let date = new Date().toLocaleDateString();

    b = a + 1;

    for (let i=0; i < 9; i++) {
        range += i + ", ";
    }

    console.info("Random number = " + randomNumber);

    if (randomNumber > 5){
        console.info("The random number is bigger than 5");
    } else{
        console.info("The random number is less than or equal to 5");
    }

    while(counter < 5){
        console.info("While - the counter is : " + counter)
        counter++;
    }

    console.info("Todays date is: " + date);
    console.info("Hello World");
    console.info(range.substring(0, range.length - 2));
    console.info(a, b);
}

main();