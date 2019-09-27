$(document).ready(function() {

    $(".card").click(function() {
        var uid = this.id;
        console.log(uid);
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "testing.php",
            data: 'id='+uid,
            dataType: "html",   //expect html to be returned
            success: function(response){
                $(".modal-content").html(response);
                //alert(response);
            }

        });
    });
});