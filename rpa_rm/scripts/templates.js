(function(){


    //Document Loaded
    $(document).ready(function(){

        //load templates       
        $.ajax({
            url : "php/loadTemplates.php",
            type: "POST",
            data : '',
            success: function(data, textStatus, jqXHR)
            {
                $.each(JSON.parse(data), function(idx, obj) {
                    $('#docs-panel').append("\
                    <li class='list-group-item d-flex justify-content-between align-items-center'>\
                    <a href='templates/"+obj+"' class='text-dark' download>\
                        <img src='svg/ic_move_to_inbox_black_24px.svg' >&nbsp;"+obj+"</a>\
                    <button type='button' id='delete' class='badge badge-info float-right d-inline' \
                    data-id='"+obj+"'>\
                    Delete File</button></li>");
                });
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });

    
    });

     //Upload Documents
     $("#upload").click(function(e){
         e.preventDefault();
        var file_data = $("#file").prop('files')[0];
        if(file_data !=null){
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: 'php/uploadTemplate.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert('File Uploaded Successfully'); // display response from the PHP script, if any
                    window.location.href = 'templates.php';
                },
                error: function(e){
                    alert(e);
                } 
            });
        }
        else{
            alert('No Files Selected for uploading...');
        }
    });

        //Delete File
        $(document).on('click','#delete',function(e){
             var filename = $(this).data('id');
             var res = window.confirm('Are you sure to remove file : '+filename);
             if(res==true){
                $.ajax({
                    url: 'php/removeTemplate.php',
                    type: 'post',
                    data: "file="+filename,
                    success: function(data){
                        if(data == 'true'){
                            alert('Removed Successfully');
                           window.location.href = "templates.php";
                        }
                        else{
                        }
                    },
                    error: function(errorThrown){
                        console.log(errorThrown);
                    }
                });
        }
    });
})();