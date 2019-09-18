function nobackbutton(){

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button"
window.onhashchange=function(){
    window.location.hash="no-back-button";}
}

document.oncontextmenu = function() {
return false
}
function right(e) {

if (navigator.appName == 'Netscape' && e.which == 3) {
 alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
 return false;
}
else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {

return false;
}
return true;
}
document.onmousedown = right;










  $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-55px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-55px'},200);
                    }
                );
            });

function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
    document.getElementById("main").style.marginLeft = "350px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
} 

$(document).ready(function(){
    
     $("#fomrconsulta").submit(function(event) {       
       
       event.preventDefault();
                $.ajax({
			url:$("#fomrconsulta").attr("action"),
			type:$("#fomrconsulta").attr("method"),
			data:$("#fomrconsulta").serialize(),
			success :function(data){
            
            document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
document.body.style.backgroundColor = "white";           
                
                $("#contetabla").empty();
                $("#contetabla").html(data); 
                
            }
		});      
       
       
   });
    
});



    

