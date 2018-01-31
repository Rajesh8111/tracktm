(function(){   

    //ADD TASK POPUP SHOW
    $("#add_task").click(function (e) {
        e.preventDefault;
        $('#add_task_modal').modal('show');
    });

    //Document Loaded
    $(document).ready(function(){

         //Set Title for Navbar
        $('#navbar-title').text("Tasks Panel"); 


        //Shift Check
        $.ajax({
            url : "php/checkShift.php",
            type: "POST",
            data : '',
            success: function(data, textStatus, jqXHR)
            {
                $('#shift').text(data);
                if(data=='End Shift'){
                $('#shift').toggleClass("btn-success");
                }
                else if(data=='Start Shift'){
                $('#shift').toggleClass("btn-danger");                    
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });


    //Toggle Shift
    $(document).on('click','#shift',function(e){
        e.preventDefault;        
        var shift = $('#shift').text();
        $.ajax({
            url : "php/toggleShift.php",
            type: "POST",
            data : "method="+shift,
            success: function(data, textStatus, jqXHR)
            {
                if(data=='true'){
                    if(shift=='Start Shift')
                    alert('Shift Started');
                    else if(shift=='End Shift'){
                    alert('Shift Ended');
                    }
                    window.location.href='task_panel.php';
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });

})();