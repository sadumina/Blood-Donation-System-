

var sideBaropen=false;
var sideBar= document.getElementById("sidebar");

function openSidebar(){

    if(sideBaropen){

        sideBar.classList.add["sidebar-responsive"];
        sideBaropen=true;
    }
}

function closeSidebar(){

    if(sideBaropen){

        sideBar.classList.remove["sidebar-responsive"];
        sideBaropen=false;
    }
}