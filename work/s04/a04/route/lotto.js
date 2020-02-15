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
    let queryString = req.query.row;
    
    if (queryString === undefined){
        let jsonResponse = formatJsonResponse(lottoRow);

        let lotto = {
            data : jsonResponse,
        };
    
        res.render("lotto", lotto);
        
    }else {
        queryString = req.query.row.split(",");
        let numberOfMatches = calculateMatchingNumbers(lottoRow, queryString);
        let matchingNumbersList = matchingNumbers(lottoRow, queryString);

        let jsonResponse = formatJsonResponse(lottoRow, queryString, numberOfMatches, matchingNumbersList);

        let lotto = {
            data : jsonResponse,
        };

        res.render("lotto", lotto);

    }

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

function formatJsonResponse(lottoRow, queryRow = "", numberOfMatches = "", matchingNumbersList = ""){

    let returnObject = {
        "lottoRow" : JSON.parse(JSON.stringify(lottoRow)),
        "queryRow" : JSON.parse(JSON.stringify(queryRow)),
        "numberOfMatches" : JSON.stringify(numberOfMatches),
        "matchingNumbers" : JSON.parse(JSON.stringify(matchingNumbersList)),
       };

    return JSON.parse(JSON.stringify(returnObject));

}

function matchingNumbers(lottoRow, queryRow){
    let matchingNumbersList = [];
    let copyOfLottoRow = lottoRow.slice(0);
    let index = 0;

    for(let i = 0; i < 7; i++){
        let number = queryRow[i];

        for(let j = 0; j < copyOfLottoRow.length; j++){
            let lottoNumber = copyOfLottoRow[j];

            if (number == lottoNumber){
                copyOfLottoRow.splice(j, 1);
                matchingNumbersList[index++] = lottoNumber;
                break;
            }
        }
    }

    return matchingNumbersList;
}

module.exports = router;