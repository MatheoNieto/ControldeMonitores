history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};
document.oncontextmenu = function () {
    return false
}

function right(e) {

    if (navigator.appName == 'Netscape' && e.which == 3) {
        return false;
    } else if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2) {

        return false;
    }
    return true;
}
document.onmousedown = right;

function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "320px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

$(document).ready(function(){ 
   
    $("#fomrconsultar").submit(function(ev){
        
        ev.preventDefault();
        
           $.ajax({
			url:$("#fomrconsultar").attr("action"),
			type:$("#fomrconsultar").attr("method"),
			data:$("#fomrconsultar").serialize(),
			success :function(data){
            
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
document.body.style.backgroundColor = "white";           
                
                $("#contenreporte").empty();
                $("#contenreporte").html(data); 
                
            }
		}); 
        
    });
    
    
    
    
    
});







