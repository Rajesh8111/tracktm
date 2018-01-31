(function(){
    $(document ).ready(function(){
        // Login Check 
        $.ajax({
            url : "php/validateLogin.php",
            type: "POST",
            data : '',
            success: function(data, textStatus, jqXHR)
            {
                if(data=='true'){
                window.location.href = "task_panel.php";
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                
            }
        });
    });


    //Login with Credentials
    $('#btn-login').click(function(){

        var username = $('#username').val();
        var password = $('#password').val();

        if(username == '' || password == ''){
            $('#err').text("username or password missing.");
            return false;
        }

        $.ajax({
            url: 'php/login.php',
            type: 'post',
            data: "username="+username
                    +"&password="+password,
            success: function(data){
                //$('#response pre').html( JSON.stringify( data ) );
                if(data == 'true'){
                   window.location.href = "task_panel.php";
                }
                else{
                    $('#err').text("invalid username or password.");
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });

   
   
})();