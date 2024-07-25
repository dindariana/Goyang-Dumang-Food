let tcolorA = document. getElementById('tColorA'),
tColorB = document.getElementById('tColorB'),
tColorC = document.getElementById('tColorc'),
iconA = document.querySelector('.fa-credit-card'),
iconB = document.querySelector('.fa-building-columns'),
iconC = document.querySelector('.fa-wallet'),
cDetails = document.querySelector('.card-details');

function doFun(){
tColorA.style.color = "greenyellow";
tColorB.style.color = "0444";
tColorC.style.color = "0444";
iconA.style.color = "greenyellow";
iconB.style. color = "#aaa";
iconC.style.color = "#aaa";
cDetails.style.display = "block";
}
function doFunA(){
        tColorA.style.color = "#444";
        tColorB.stylelcolor = "greenyellow";
        tColorc.style.color = "#444";
        iconA.style.color = "#aaa";
        iconB.style.color = "greenyellow";
        iconC.style.color = "#aaa";
        cDetails.style.display = "none";
}
function doFunB(){
    tColorA.style.color = "#444";
    tColorB.style.color = "#444";
    tColorC.style.color = "greenyellow";
    iconA.style.color = "#aaa";
    iconB.style.color = "#aaa";
    iconC.style.color = "greenyellow";
    cDetails.style.display = "none";
}

