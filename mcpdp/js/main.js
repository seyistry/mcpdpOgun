if ($("#error").html() == "") {
    $("#error").hide();
}
if ($("#success").html() == "") {
    $("#success").hide();
}

$("form").submit(function(e){
    var error = "";
    
    if ($("#teller").val() == "") {
        error += "<br>The teller field is required.";
    }
    
    if ($("#title").val() == "") {
        error += "<br>Select a title. ";
    }
    
    if ($("#program").val() == "") {
        error += "<br>Select a program.";
    }

    if ($("#fullName").val() == "") {
        error += "<br>The Full Name field is required.";
    }
    
    if ($("#status").val() == "") {
        error += "<br>Select your status.";
    }

    if ($("#sex").val() == "") {
        error += "<br>Select your sex.";
    }

    if ($("#pow").val() == "") {
        error += "<br>The Place of work field is required.";
    }

    if ($("#speciality").val() == "") {
        error += "<br>The speciality field is required.";
    }

    if ($("#phone").val() == "") {
        error += "<br>The Phone number field is required.";
    }

    if ($("#email").val() == "") {
        error += "<br>The email field is required.";
    }

    if ($("#licence").val() == "") {
        error += "<br>The license field is required.";
    }

    if ($("#exp").val() == "") {
        error += "<br>The expiring date field is required.";
    }

    if (error != "") {
        error = "<strong>There were error(s) in your form:</strong>" + error;
        $("#error").html(error);
        $("#error").show();
        return false;
    } else {
        $("#error").hide();
        $("form").unbind("submit").submit();
        return true;
    }
});
