/**
 * Script that fetches data from the provided API.
 */
(function () {
    "use strict";
    
    //Used to bypass the CORS-error when fetching data from the API through the browser.
    var corsFixer = "https://cors-anywhere.herokuapp.com/";
    var apiUrl = "https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/";
    var targetUrl = corsFixer + apiUrl;

    console.log(targetUrl)
    console.log("Fetching data..")

    fetch(targetUrl)
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            console.log(myJson)

            var code;

            //Create array containing municipalities. 
            var municipalities = myJson.Kommuner;

            //Fill select with municipalities
            var selectHTML;
            municipalities.forEach(element => {
                selectHTML += "<option value=\"" + element.Namn + "\">" + element.Namn + "</option>";
            })

            var select = document.getElementById('municipalitySelect');
            select.innerHTML = selectHTML;

            //Wait for select of municipality.
            select.addEventListener("change", function(){
                var name = select.options[select.selectedIndex].value;
                
                municipalities.forEach(element => {
                    if(element.Namn === name){
                        code = element.Kommunkod;
                    }
                })
            });

            var button = document.getElementById('fetchSchools');
            button.addEventListener("click", function(){

                console.log("Fetching schools in code: " + code);

                fetch(targetUrl + code)
                    .then((response) => {
                        return response.json();
                    })
                    .then((myJson) => {
                        console.log('Data retrieved, filling table..');

                        //Create array containing schools.
                        var fetchedSchools = myJson.Skolenheter;
            
                        //Set up thead columns.
                        var tableHTML = "<thead>";
                        tableHTML += "<tr class=\"schoolColumn\"><th>Skolenhetskod</th>";
                        tableHTML += "<th>Skolenhetnamn</th>";
                        tableHTML += "<th>Kommunkod</th>";
                        tableHTML += "<th>PeOrgNr</th></tr>";
                        tableHTML += "</thead>";
            
                        //Set up tbody rows.
                        var typeOfRow = 1;
                        tableHTML += "<tbody>";
                        fetchedSchools.forEach(element => {
                            tableHTML += "<tr class=\"schoolRow" + typeOfRow + "\"><td>" + element.Skolenhetskod + "</td>";
                            tableHTML += "<td>" + element.Skolenhetsnamn + "</td>";
                            tableHTML += "<td>" + element.Kommunkod + "</td>";
                            tableHTML += "<td>" + element.PeOrgNr + "</td></tr>";

                            typeOfRow = typeOfRow ? 0 : 1;
                        });
                        tableHTML += "</tbody>";
            
                        //Write to DOM
                        var table = document.getElementById('schoolTable')
                        table.innerHTML = tableHTML;
            
                        console.log(myJson);
                    })


        });
    });
         
}());