var speed=5;
var destination=0;
var marginY=0;
var scroller=null;

function down(ele){
    destination=document.getElementById(ele).offsetTop;
    scroller=setTimeout(function(){
        down(ele);
    },1);
    marginY=marginY+speed;
    if(marginY>=destination){
        clearTimeout(scroller);
    }
    window.scroll(0,marginY);
}

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('#c', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('#c', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
    $(".dropdown-submenu").hover(            
        function() {
            $('#h1', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('#h1', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});