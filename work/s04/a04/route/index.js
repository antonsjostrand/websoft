/**
 * Root routes used in the application
 * 
 * @author Anton Sjöstrand
 */
"use strict";

var express = require('express');
var router  = express.Router();

// Add a route for the path /
router.get('/', (req, res) => {
    res.send("Assignment 4 - root");
});

module.exports = router;