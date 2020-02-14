/**
 * Lotto routes and functions
 * 
 * @author Anton Sjöstrand
 * 
*/

"use strict"

var express = require('express');
var router  = express.Router();

// Add a route for the path /lotto
router.get('/lotto', (req, res) => {
    let lotto = {};

    lotto.lottoRow = lottoDraw();

    res.render("lotto", lotto);
});

function lottoDraw(){
    let lottoRow = [];
    
    for (let i = 0; i < 7; i++){
        let randomNumber = Math.floor(Math.random() * 36);
        if (randomNumber == 0){
            i--;
            continue;
        }
        lottoRow.push(randomNumber);
    }

    return lottoRow;
}

function test(){
    return "TESTING FUNCTTIONS";
}

module.exports = router;