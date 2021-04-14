<?php


$script = <<<CODE

console.clear();

var maxMiningInUSD = maxMiningInUSD == 0 ?  138.67 : maxMiningInUSD;

var auth = (typeof auth === 'undefined') ? 0 : 1;

var intervalInSeconds = (typeof intervalInSeconds === 'undefined') ? 5 :  intervalInSeconds;

var stopMiningAfterHowManySeconds = stopMiningAfterHowManySeconds == 0 ? 100000000000 : stopMiningAfterHowManySeconds

function returnIntegerPart(str){

    str = String(str);

    return Number(str.replace ( /[^\d.]/g, '' ));

}


var bitcoinBalanceRatioElement = document.querySelectorAll(`[data-e2e="BTCBalance"]`)[1];
var topBalanceTotal = document.querySelector(`[data-e2e="topBalanceTotal"]`);
var homeBalanceAmt = document.querySelector(`[data-e2e="homeBalanceAmt"]`);
var BTCFiatBalance = document.querySelector(`[data-e2e="BTCFiatBalance"]`);
var coinTickerBTC =  document.querySelector(`[data-e2e="coinTickerBTC"]`);

var bitcoinBalanceRatio = returnIntegerPart(bitcoinBalanceRatioElement.textContent);

var currentBitcoinPrice = returnIntegerPart(coinTickerBTC.textContent);



var initialBalanceDefault = document.querySelector(`[data-e2e="topBalanceTotal"]`).textContent; 

var initialBalance = (startWithInitialBalance != 0) ? startWithInitialBalance : returnIntegerPart(initialBalanceDefault);



var totalAmountMined = 0;

var maxMiningTimeInSeconds = 3600;


var totalAmountMinedInOneSecond = mineHowManyDollarsInOneSecond == 0 ? (maxMiningInUSD/maxMiningTimeInSeconds).toFixed(2) : mineHowManyDollarsInOneSecond; 

totalAmountMinedInOneSecond = Number(totalAmountMinedInOneSecond);

var newBalance = initialBalance; 

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



totalAmountMined += totalAmountMinedInOneSecond;
newBalance += totalAmountMinedInOneSecond;
 


    topBalanceTotal.textContent = '$' + newBalance.toLocaleString();

homeBalanceAmt.textContent = '$' + newBalance.toLocaleString();

BTCFiatBalance.textContent = '$' + newBalance.toLocaleString();

//console.log((newBalance/currentBitcoinPrice).toFixed(8) + ' BTC')

bitcoinBalanceRatioElement.textContent = (newBalance/currentBitcoinPrice).toFixed(8) + ' BTC'


}, intervalInSeconds * 1000);



CODE;



if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET'){
    die();
}

echo $script;

?>
