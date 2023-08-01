$(document).ready(function(){
    //varify admin password
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();
        // alert(current_password);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/check-admin_password',
            data:{current_password:current_password},
            success:function(resp){
                // alert( resp);
                if(resp=="false"){
                    $("#check_password").html("<font color='red'>Current password is incorrect!</font>");
                }else if(resp=="true"){
                    $("#check_password").html("<font color='green'> password is correct</font>");
                }
            },error:function(){
                alert('Error');
            }
        })
    })
});