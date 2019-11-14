$(document).ready(function(){

    // Lift card and show stats on Mouseover
    $('[id="map-card"]').hover(function(){
        $(this).addClass('animate');
    }, function(){
        $(this).removeClass('animate');
    });
});