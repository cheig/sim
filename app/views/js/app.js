
function addListener(element,e,fn){
    if(element.addEventListener){
        element.addEventListener(e,fn,false);
    } else {
        element.attachEvent("on" + e,fn);
    }
}
addListener(document,"click",function(evt){
    var evt = window.event?window.event:evt,target=evt.srcElement||evt.target;
    if(target.className == "drop-icon"){
        document.getElementById("menu").style.display = "block";
        return;
    }else{
        while(target.nodeName.toLowerCase() != "div" && target.nodeName.toLowerCase() != "html"){
                target = target.parentNode;
            }
            if(target.nodeName.toLowerCase() == "html"){
                document.getElementById("menu").style.display = "none";
        }


    }
    // if(target.className == "drop-icon") {
    //     var temp = document.getElementsByClassName("drop-menu").style.display;
    //     temp == "none" ? document.getElementsByClassName("drop-menu").style.display = " " : document.getElementsByClassName("drop-menu").style.display = "none";
    // }
})