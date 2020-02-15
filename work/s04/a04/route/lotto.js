/**
 * Lotto routes and functions
 * 
 * @author Anton Sjöstrand
 * 
*/

"use strict"

var express = require('express');
var router  = express.Router();

//Add a route for the path /lotto
router.get('/lotto', (req, res) => {
    let lottoRow = lottoDraw();
    let jsonResponse = formatJsonResponse(lottoRow);

    let lotto = {
        data : jsonResponse,
    };

    res.render("lotto", lotto);
});

//Route for /lotto-json
router.get('/lotto-json', (req, res) => {
    let queryString = req.query.row.split(",");
    let lottoRow = lottoDraw();
    let numberOfMatches = calculateMatchingNumbers(lottoRow, queryString);

    let jsonResponse = formatJsonResponse(lottoRow, queryString, numberOfMatches);

    let lotto = {
        data : jsonResponse,
    };

    res.render("lotto", lotto);

})

function lottoDraw(){
    let lottoRow = [];
    
    for (let i = 0; i < 7; i++){
        let randomNumber = Math.floor(Math.random() * 36);
        if (randomNumber == 0){
            i--;
            continue;
        }
        if (lottoRow.includes(randomNumber)){
            i--;
            continue;
        }
        lottoRow.push(randomNumber);
    }

    return lottoRow;
}

function calculateMatchingNumbers(lottoRow, queryRow){
    let numberOfMatches = 0;
    let copyOfLottoRow = lottoRow.slice(0);

    for(let i = 0; i < 7; i++){
        let number = queryRow[i];

        for(let j = 0; j < copyOfLottoRow.length; j++){
            let lottoNumber = copyOfLottoRow[j];

            if (number == lottoNumber){
                copyOfLottoRow.splice(j, 1);
                numberOfMatches++;
                break;
            }
        }
    }

    return numberOfMatches;
}

function formatJsonResponse(lottoRow, queryRow = undefined, numberOfMatches = undefined){

    let returnObject = {
        "lottoRow" : JSON.stringify(lottoRow),
        "queryRow" : JSON.stringify(queryRow),
        "numberOfMatches" : JSON.stringify(numberOfMatches),
    }

    return JSON.parse(JSON.stringify(returnObject));

}

module.exports = router;