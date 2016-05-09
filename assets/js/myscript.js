
function app () {
    onScroll();
    window.addEventListener("scroll", onScroll);
    window.addEventListener("resize", onScroll);

    var elements = document.querySelectorAll("#moocselection a");
    var questions = document.querySelectorAll(".Question");
    
    var modal = document.querySelector(".modal");
    var modalContent = document.querySelector(".modal--content");

    var menuItem = document.querySelectorAll("#bs-example-navbar-collapse-1 a");



    for (var i = menuItem.length - 1; i >= 0; i--) {
        if (!menuItem[i].getAttribute("hreflang")) {

            menuItem[i].addEventListener("click", function (e , el) {
                e.preventDefault();
                animation( function (position) {window.scrollTo(0, position)},
                    300,
                    window.pageYOffset,
                    (document.querySelector(this.getAttribute("href")).offsetTop) - 60)

            }.bind(menuItem[i]))
        }
    }

  

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

var animation = function (effectFrame, duration, from, to, easing, framespacing) {
    var start = Date.now(), change;

    if (animation.existing) {
        window.clearTimeout(animation.existing);
    }

    duration = duration || 1000;
    if (typeof from === 'function') {
        easing = from;
        from = 0;
    }
    easing = easing || function(x, t, b, c, d) { return c * t / d + b; };
    from = from || 0;
    to = to || 1;
    framespacing = framespacing || 1;
    change = to - from;

    (function interval() {
        var time = Date.now() - start;
        if (time < duration) {
            effectFrame(easing(0, time, from, change, duration));
            animation.existing = window.setTimeout(interval, framespacing);
        } else {
            effectFrame(to);
        }
    }());
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


