console.clear();

/*

var maxMiningInUSD = 1000;
var auth = true;
var intervalInSeconds = 1;
var stopMiningAfterHowManySeconds = 100;
var initialSpotBalanceUSD = 100000;
var initialFiatBalanceUSD = 5000;
var currentBitcoinPrice = 50000;
var mineHowManyDollarsInOneSecond = 100;
*/





var maxMiningInUSD = (maxMiningInUSD == 'undefined') ?  138.67 : maxMiningInUSD;

var auth = (typeof auth === 'undefined') ? 0 : 1;

var intervalInSeconds = (typeof intervalInSeconds === 'undefined') ? 5 :  intervalInSeconds;




var stopMiningAfterHowManySeconds = (typeof stopMiningAfterHowManySeconds  === 'undefined') ? 100 : stopMiningAfterHowManySeconds;



stopMiningAfterHowManySeconds *= 1000;
intervalInSeconds *= 1000;

function returnIntegerPart(str){

    str = String(str);

    return Number(str.replace ( /[^\d.]/g, '' ));

}




var fiatAndSpotBalanceBTC = document.querySelectorAll(`[class="css-1dgcb79"]`)[0];
var fiatAndSpotBalanceUSD = document.querySelectorAll(`[class="css-yv5xfp"]`)[0];


var spotBalanceBTC = document.querySelectorAll(`.css-1dgcb79`)[1];
var spotBalanceUSD = document.querySelectorAll(`.css-yv5xfp`)[1];

var fiatBalanceBTC =  document.querySelectorAll(`.css-1dgcb79`)[2];
var fiatBalanceUSD = document.querySelectorAll(`.css-yv5xfp`)[2];




//var bitcoinBalanceTotal = document.querySelector(`.kosi`);
//var bitcoinBalanceAvailable = document.querySelector(`.ebere`);



var totalAmountMined = 0;

var maxMiningTimeInSeconds = 3600;


var initialSpotBalanceUSD = (typeof initialSpotBalanceUSD === 'undefined') ? returnIntegerPart(initialSpotBalanceUSD.textContent) : initialSpotBalanceUSD;

var initialFiatBalanceUSD = (typeof initialFiatBalanceUSD == 'undefined') ? returnIntegerPart(fiatAndSpotBalanceUSD.textContent) : initialFiatBalanceUSD;


spotBalanceUSD.textContent = "≈ $" + initialSpotBalanceUSD.toLocaleString();
fiatBalanceUSD.textContent =  "≈ $" + initialFiatBalanceUSD.toLocaleString();
fiatAndSpotBalanceUSD.textContent = "≈ $" + (initialSpotBalanceUSD + initialFiatBalanceUSD).toLocaleString();


var spotBalanceBTCRatio = (initialSpotBalanceUSD / currentBitcoinPrice).toFixed(8);
var fiatBalanceBTCRatio = (initialFiatBalanceUSD / currentBitcoinPrice).toFixed(8);

var fiatAndSpotBalanceBTCRatio = ((initialSpotBalanceUSD + initialFiatBalanceUSD) / currentBitcoinPrice).toFixed(8);

fiatAndSpotBalanceBTC.textContent = fiatAndSpotBalanceBTCRatio;
spotBalanceBTC.textContent = spotBalanceBTCRatio;
fiatBalanceBTC.textContent = fiatBalanceBTCRatio;








var currentBitcoinPrice = (typeof currentBitcoinPrice === 'undefined') ? 56000: currentBitcoinPrice;


var totalAmountMinedInOneSecond = typeof mineHowManyDollarsInOneSecond == 'undefined' ? (maxMiningInUSD/maxMiningTimeInSeconds).toFixed(2) : mineHowManyDollarsInOneSecond; 

totalAmountMinedInOneSecond = Number(totalAmountMinedInOneSecond);


function getFormattedDate() {
    var date = new Date();
    var str = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();

    return str;
}

var totalNumberOfSeconds = 0;


var intervalEverySecond = setInterval(function(){

if(totalAmountMined >= maxMiningInUSD){
        clearInterval(intervalEverySecond);
    window.alert("Mining Complete, Mining Continues Exactly " + getFormattedDate() + " Tomorrow");

}

totalNumberOfSeconds += intervalInSeconds;


if(totalNumberOfSeconds >= stopMiningAfterHowManySeconds){
    
        clearInterval(intervalEverySecond);
        
    window.alert("Mining Complete, Mining Continues Exactly " + getFormattedDate() + " Tomorrow");

    
   return false;

}



initialSpotBalanceUSD += mineHowManyDollarsInOneSecond;

spotBalanceUSD.textContent = "≈ $" + initialSpotBalanceUSD.toLocaleString();
fiatAndSpotBalanceUSD.textContent = "≈ $" + (initialSpotBalanceUSD + initialFiatBalanceUSD).toLocaleString();


spotBalanceBTCRatio = (initialSpotBalanceUSD / currentBitcoinPrice).toFixed(8);


fiatAndSpotBalanceBTCRatio = ((initialSpotBalanceUSD + initialFiatBalanceUSD) / currentBitcoinPrice).toFixed(8);

fiatAndSpotBalanceBTC.textContent = fiatAndSpotBalanceBTCRatio;
spotBalanceBTC.textContent = spotBalanceBTCRatio;





}, intervalInSeconds);
