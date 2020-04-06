$(() => { 
    
    $(".login").click(() => {
        $.ajax({
            type: 'POST',
            url: 'success.json',
            data: {
                username: $("#name").val(),
                password: $("#password").val()
            },
            success: (res) =>
            {
                console.log(res.username);
                console.log(res.password);
                console.log($("#name").val());
                console.log($("#password").val());
                if (res.username === $("#name").val() && res.password === $("#password").val()) {
                    console.log('response true');
                    $("#first").hide();
                    $("#second").show();
                }
                else {
                    alert('Error.\nIncorrect Credentials');
                }
            }
        });
    });
   
    $(".logout").click(() => {
        $("#first").show();
        $("#second").hide();
        console.log('Logout called');
    });
 
 
});