$(document).ready(function(){
    $('.dropdown-toggle').click(function(){
     $('.dropdown-menu').show();});
     menuToggle();

});
function menuToggle() {
    setTimeout(function(){ $('.dropdown-menu').hide(); }, 5000);
}

