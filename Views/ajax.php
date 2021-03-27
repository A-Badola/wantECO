<script type="text/javascript">
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
            
        
</script>

<?php
    
?>