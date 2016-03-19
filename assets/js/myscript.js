
function app () {
    onScroll();
    window.addEventListener("scroll", onScroll);
    window.addEventListener("resize", onScroll);
}

function onScroll () {
    var element = document.getElementById("logos");
    var navbar = document.querySelector(".navbar");
    var opreation = (element.offsetHeight ) - 56 - window.pageYOffset;

    console.log(element.clientHeight , element.clientTop , window.pageYOffset)
    
    if (opreation <= 0 ) navbar.style.top = "0px";
    else navbar.style.top = opreation + "px";
}

window.addEventListener("load", app);


