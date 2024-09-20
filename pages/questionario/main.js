function showDiv2() {
    document.getElementById('div2').classList.remove('hidden');
}

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
function showDiv1() {
    document.getElementById('div1').classList.remove('hidden');
    document.getElementById('div2').classList.add('hidden');
}

function showDiv2() {
    document.getElementById('div2').classList.remove('hidden');
    document.getElementById('div1').classList.add('hidden');
}