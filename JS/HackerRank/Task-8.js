'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });
    
    main();    
});

function readLine() {
    return inputString[currentLine++];
}


function vowelsAndConsonants(s) {
    // Print all vowels in the string on a new line.
    for (const c of s) {
        if('aeiou'.includes(c.toLowerCase())){
            console.log(c);
        }
    }
    // Print all consonants in the string on a new line.
    for (const c of s) {
        if(!'aeiou'.includes(c.toLowerCase())){
            console.log(c);
        }
    }
}


function main() {
    const s = readLine();
    
    vowelsAndConsonants(s);
}