btn_goto_top = document.getElementById("btn-goto-top");
btn_goto_bottom = document.getElementById("btn-goto-bottom");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 154) {
        btn_goto_top.className = "show";
        btn_goto_bottom.className = "show";
        // console.log("high " + y);
    } else {
        btn_goto_top.className = "hide";
        btn_goto_bottom.className = "hide";
        // console.log("low " + y);
    }
};

window.addEventListener("scroll", myScrollFunc);