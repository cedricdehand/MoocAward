
function app () {
    onScroll();
    window.addEventListener("scroll", onScroll);
    window.addEventListener("resize", onScroll);

    var elements = document.querySelectorAll("#moocselection a");
    var questions = document.querySelectorAll(".Question");
    
    var modal = document.querySelector(".modal");
    var modalContent = document.querySelector(".modal--content");

    for (var i = elements.length - 1; i >= 0; i--) {
        elements[i].addEventListener("click", function (e , el) {
            e.preventDefault();
            var video = this.getElementsByTagName("iframe");
            modal.style.display = "block";
            var cln = video[0].cloneNode(true);
            modalContent.innerHTML = "";
            modalContent.appendChild(cln);
        }.bind(elements[i]))
    }


    for (var i = questions.length - 1; i >= 0; i--) {
        questions[i].addEventListener("click", function (e , el) {
            e.preventDefault();
            var p = this.getElementsByTagName("p");

            p[0].style.display = p[0].style.display == "block" ||  p[0].style.display  == "none" ?
             p[0].style.display == "block" ? "none" : "block" : "block";
        }.bind(questions[i]))
    }


}

function closeModal () {
    var modal = document.querySelector(".modal");
    modal.style.display = "none";
}

function onScroll () {
    var element = document.getElementById("logos");
    var navbar = document.querySelector(".navbar");
    var opreation = (element.offsetHeight ) - 56 - window.pageYOffset;
    
    if (opreation <= 0 ) navbar.style.top = "0px";
    else navbar.style.top = opreation + "px";
}

window.addEventListener("load", app);


