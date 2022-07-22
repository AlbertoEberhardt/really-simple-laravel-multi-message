window.addEventListener("load", function(){
    var close_buttons = document.querySelectorAll(".message .close")
    Array.from(close_buttons).forEach(function(item){
        item.addEventListener("click", function(){
            fade(this.closest(".message"))
        })
    })
})


function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.remove();
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 25);
}
