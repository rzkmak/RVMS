/*
    SPA - Script for RVMS
*/
    /*
        Authentication Function
    */
    $(document).ready(function(){
        $('body').on('click', '#login-submit', function() { 
            var loginForm = $('#login-form').serialize();
            $.ajax({
                url : $('#login-form').attr('action'),
                type : "POST",
                data : loginForm,
                mimeType : "multipart/form-data",
                cache : false,
                processData : false,
                success : function(data){
                    var response = JSON.parse(data);
                    if(response.login){
                        // $("#main-content").load(base_url+"home/index");
                        window.location.replace(base_url+"home/index");
                        history.pushState({}, 'RVMS - Home', base_url+'home/index');
                    }else{
                        // display notif
                    }
                }
            });
        });
    
        $('body').on('click','#logout-link',function(){
            $.ajax({
                url : base_url+'authentication/logout',
                type : "POST",
                cache : false,
                processData : false,
                success : function(data){
                    var response = JSON.parse(data);
                    if(response.logout){
                        // redirect to logout
                        window.location.replace(base_url+"authentication/index");
                    }else{
                        // display notif
                    }
                }
            });
        });
    });
    
        /*
            End Authentication Function
        */