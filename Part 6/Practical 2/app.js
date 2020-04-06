$(() => {
    $(".login").click(() => {
        if( $("#name").val()==='admin' && $("#password").val()==='password') {
            $("#first").hide();
            $("#second").show();
            console.log('Login called');
        }
        else {
            alert("Please try again");
        }
    });
   
    $(".logout").click(() => {
        $("#first").show();
        $("#second").hide();
        console.log('Logout called');
    });
 
 
});