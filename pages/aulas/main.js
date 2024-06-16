function showmenu(){
    if(document.getElementById('menuLR').style.display != "flex"){
        document.getElementById('menuLR').style.display = "flex";
        document.getElementById('first').style.display = "flex";
    }
    else{
        document.getElementById('menuLR').style.display = "none";
        document.getElementById('second').style.display = "none";
    }
}

function chosemenu(){
        document.getElementById('first').style.display = "none";
        document.getElementById('second').style.display = "flex";
}