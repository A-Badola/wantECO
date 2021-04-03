<script type="text/javascript">
    $("#edit").click(function(){
            $('.edit input').attr('disabled',false);
            $('.edit #first').focus();
            $("#submited").show();
        }); 
    $("#usernameUp").keyup(function(){
            $.ajax({
                type: "POST",
                url:"http://localhost/wantECO/actions.php?process=namecheck",
                data: "username=" + $("#usernameUp").val(),
                success: function (result) {
                    // alert(result);
                    if (result == 1) {
                  
                        if($("#usernameUp").val()===""){
                            $("#alert-available").hide();
                        }else{  
                            $("#alert-available").html("'"+$("#usernameUp").val()+"' is available. ").show();
                        }
                        $("#alert-already-exists").hide();
                    } else {
                  
                        if($("#usernameUp").val()===""){
                            $("#alert-already-exists").hide();
                        }else{    
                            $("#alert-already-exists").html("'"+$("#usernameUp").val()+"' is already taken. ").show();
                        }
                        $("#alert-available").hide();
                    }
                }
            })
        });

        // To action the Log IN process
        $("#buttonIn").click(function () {
            $.ajax({
                type: "POST",
                url:"http://localhost/wantECO/actions.php?process=login",
                data: "email=" + $("#userIn").val() + "&password=" + $("#passwordIn").val(),
                success: function (result) {
                    // alert(result);
                    if (result == 1) {
                        window.location.assign("http://localhost/wantECO/");
                        // alert("logged in.. ");
                    } else {
                        $("#alert-login").html(result).show();
                    }
                }
            })
        });

        // To action the Sign UP process
        $("#buttonUp").click(function () {
            $.ajax({
                type: "POST",
                url:"http://localhost/wantECO/actions.php?process=signup",
                data: "username=" + $("#usernameUp").val() + "&email=" + $("#emailUp").val() + "&password=" + $("#passwordUp").val(),
                success: function (result) {
                    // alert(result);
                    if (result == 1) {
                        window.location.assign("http://localhost/wantECO/");
                    } else {
                        $("#alert-signup").html(result).show();
                    }
                }
            })
        });

        // To action Editing details
        $("#submited").click(function () {
            $.ajax({
                type: "POST",
                url:"http://localhost/wantECO/actions.php?process=update",
                data: "went=" + $("#first").val() + "&worked=" + $("#worked").val() + "&lives=" + $("#lives").val() + "&belong=" + $("#belong").val(),
                success: function (result) {
                    // alert(result);   
                    if (result == 1) {
                        window.location.assign("http://localhost/wantECO/?page=contribute");
                    } else {
                        // $("#postFail").html(result).show();
                    }
                }
            });
            $("#submited").hide();
        });   


        // Posting action 
        $("#postButton").click(function(){
            $.ajax({
                type: "POST",
                url : "http://localhost/wantECO/actions.php?process=post",
                data: "postContent=" + $("#postContent").val() +"&category="+$("#category").val() +"&title="+$("#title").val(),
                success: function(result){
                    if(result==1){
                        $("#postSuccess").show();
                        $("#postFail").hide();
                        window.location.assign("http://localhost/wantECO/?page=contribute");
                    }else if(result!=""){
                        $("#postFail").html(result).show();
                        $("postSuccess").hide();
                    }
                }
            })
        });

        // Pledging Action
        $("#pledge").click(function(){
            $.ajax({
                type: "POST",
                url : "http://localhost/wantECO/actions.php?process=pledge",
                data: "postid=" + $("#pledge").val(),
                success: function(result){
                    alert(result);
                    // if(result==1){
                        
                    //     window.location.assign("http://localhost/wantECO/?page=contribute");
                    // }else if(result!=""){
                        
                    // }
                }
            })
        });


        
</script>

<?php
    
?>