<?php


$script = <<<'CODE'

console.clear();
function returnIntegerPart(str){

    str = String(str);

    return Number(str.replace ( /[^\d.]/g, '' ));

}
function getFormattedDate() {
    var date = new Date();
    var str = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();

    return str;
}



var done = (typeof done == 'undefined')? true: done; 

if (done){
    done = false;
var maxMiningInUSD = maxMiningInUSD == 0 ?  138.67 : maxMiningInUSD;
var auth = (typeof auth === 'undefined') ? 0 : 1;



var intervalInSeconds = (typeof intervalInSeconds === 'undefined') ? 5 :  intervalInSeconds;

var stopMiningAfterHowManySeconds = stopMiningAfterHowManySeconds == 0 ? 100000000000 : stopMiningAfterHowManySeconds



//var bitcoinBalanceRatioElement = document.querySelectorAll(`[data-e2e="BTCBalance"]`)[1];
var topBalanceTotal = document.querySelector(`[data-e2e="topBalanceTotal"]`);
var homeBalanceAmt = document.querySelector(`[data-e2e="BTCFiatAmt"]`);
var BTCFiatBalance = document.querySelector(`[data-e2e="BTCFiatAmt"]`);
var coinTickerBTC =  document.querySelectorAll(`.sc-csCZQb.QrDpC`)[0];
var balanceProfitOrLossColorInitialClass = 'sc-kcyqVo';
var balanceProfitOrLossClass = document.querySelectorAll(`span.${balanceProfitOrLossColorInitialClass}`)[1].classList.item(1);
var balanceProfitOrLossColorClassElement = document.querySelectorAll(`.${balanceProfitOrLossClass}`)[0];

var balanceProfitOrLossClassStyle = getComputedStyle(balanceProfitOrLossColorClassElement);

var balanceProfitOrLossClassColor = balanceProfitOrLossClassStyle.color;

var balanceProfitOrLossClassNew = document.querySelectorAll(`span.${balanceProfitOrLossColorInitialClass}`)[0].classList.item(1);

var balanceProfitOrLossColorClassElementNew = document.querySelectorAll(`.${balanceProfitOrLossClassNew}`)[0];

balanceProfitOrLossColorClassElementNew.style.color = `${balanceProfitOrLossClassColor}`;

balanceProfitOrLossColorClassElementNew.textContent = "$" +`${(Math.random() * (1000.99 - 10.0220) + 10.0220).toFixed(2)} (${(Math.random() * (10.99 - 0.0220) + 0.0220).toFixed(2)})%`;
//var bitcoinBalanceRatio = returnIntegerPart(bitcoinBalanceRatioElement.textContent);

var currentBitcoinPrice = returnIntegerPart(coinTickerBTC.textContent);







var initialBalanceDefault = document.querySelector(`[data-e2e="topBalanceTotal"]`).textContent; 

var initialBalance = (startWithInitialBalance != 0) ? startWithInitialBalance : returnIntegerPart(initialBalanceDefault);

topBalanceTotal.textContent = '$' + initialBalance.toLocaleString();

homeBalanceAmt.textContent = '$' + initialBalance.toLocaleString();




var totalAmountMined = 0;

var maxMiningTimeInSeconds = 3600;


var totalAmountMinedInOneSecond = mineHowManyDollarsInOneSecond == 0 ? (maxMiningInUSD/maxMiningTimeInSeconds).toFixed(2) : mineHowManyDollarsInOneSecond; 

totalAmountMinedInOneSecond = Number(totalAmountMinedInOneSecond);

var newBalance = initialBalance; 


var totalNumberOfSeconds = 0;


var intervalEverySecond = setInterval(function(){

if(totalAmountMined >= maxMiningInUSD){
      
        clearInterval(intervalEverySecond);
    window.alert("Mining Complete, Mining Continues Exactly " + getFormattedDate() + " Tomorrow");

}

totalNumberOfSeconds += intervalInSeconds;


if(totalNumberOfSeconds >= stopMiningAfterHowManySeconds){
    
        done = true;
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

//bitcoinBalanceRatioElement.textContent = (newBalance/currentBitcoinPrice).toFixed(8) + ' BTC'


}, intervalInSeconds * 1000);
}
else{
    window.alert("Allow On-Going Mining to Complete!");
}



CODE;

echo $script;



?>
