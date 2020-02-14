/**
 * Express server - Assignment 4
 * 
 * @author Anton Sjöstrand
 * 
 */
"use strict";

const port    = 1337;
const path    = require("path");
const express = require("express");
const app     = express();
const routeIndex = require("./route/index.js");
const routeLotto = require("./route/lotto.js");
const middleware = require("./middleware/index.js");

app.set("view engine", "ejs");

app.use(middleware.logIncomingToConsole);
app.use(express.static(path.join(__dirname, "report")));
app.use("/", routeIndex);
app.use("/", routeLotto);

app.listen(port, logStartUpDetailsToConsole);

/**
 * Log app details to console when starting up.
 *
 * @return {void}
 */
function logStartUpDetailsToConsole() {
    let routes = [];

    // Find what routes are supported
    app._router.stack.forEach((middleware) => {
        if (middleware.route) {
            // Routes registered directly on the app
            routes.push(middleware.route);
        } else if (middleware.name === "router") {
            // Routes added as router middleware
            middleware.handle.stack.forEach((handler) => {
                let route;

                route = handler.route;
                route && routes.push(route);
            });
        }
    });

    console.info(`Server is listening on port ${port}.`);
    console.info("Available routes are:");
    console.info(routes);
}
