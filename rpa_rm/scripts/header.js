(function(){
    //Validate Session
    $.ajax({
        url : "php/validateLogin.php",
        type: "POST",
        data : '',
        success: function(data, textStatus, jqXHR)
        {
            if(data=='false'){
                window.location.href = "login.php";
            }
            else{
                var json = JSON.parse(data);
                var emp_id = json["emp_id"];
                var username = json["username"];
                var role_id = json["role_id"];
                var avatar = atob(json["avatar"]);
                
                //set username
                $("#username").text(username);

                //set avatar
                //$('#avatar').attr('src',avatar); 
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert(errorThrown);
        }
    });
})();