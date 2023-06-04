$('form').submit(function (e) {
    var error = "";

    if ($("#subject").val() == "") {
        error += 'Subject feild is required. <br>';
    }
    if ($("#message").val() == "") {
        error += 'Content feild is required. <br>';
    }
    if ($("#email").val() == "") {
        error += 'Email feild is required. <br>';
    }
    if (error != "") {
        $("#error").html("<div class='alert alert-danger' role='alert'><p><strong>There were errors in your form</strong></p>" + error + "</div>");

        return false;
    }
    else {
        return true;
    }
})