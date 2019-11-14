$(document).ready(function() {

    $(".card").click(function() {
        var uid = this.id;
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "modal-data.php",
            data: 'id='+uid,
            dataType: "html",   //expect html to be returned
            success: function(response){
                $(".modal-body").html(response);
                //alert(response);
            }

        });
    });
});