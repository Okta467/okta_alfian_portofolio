btn_goto_top = document.getElementById("btn-goto-top");
btn_goto_bottom = document.getElementById("btn-goto-bottom");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 154) {
        btn_goto_top.style.opacity = "1";
        btn_goto_bottom.style.opacity = "1";
        btn_goto_top.style.visibility = "visible";
        btn_goto_bottom.style.visibility = "visible";
        // console.log("high " + y);
    } else {
        btn_goto_top.style.opacity = "0";
        btn_goto_bottom.style.opacity = "0";
        btn_goto_top.style.visibility = "hidden";
        btn_goto_bottom.style.visibility = "hidden";
        // console.log("low " + y);
    }
};

window.addEventListener("scroll", myScrollFunc);