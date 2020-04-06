window.onload = () => {

    const nameval = () => {
        const regex = /^[a-zA-Z ]{1,}$/;
        const name = document.querySelector('input[name="myFName"]');
        if (!regex.test(name.value)){
            alert('Please enter proper name');
            // name.focus();
            console.log('name-true');
            return false;
        }
        else{
            console.log('name-false');
            return true;
        }
    }
    
    const emailval = () => {
        const regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
        const email = document.querySelector('input[name="myEmail"]');
        if (!regex.test(email.value)){
            alert('Please enter proper email');
            // email.focus();
            console.log('email-true');
            return false;
        }
        else{
            console.log('email-false');
            return true;
        }
    }
    
    const passval = () => {
        const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        const pass = document.querySelectorAll('input[name="myPwd"]');
        if (!regex.test(pass[0].value) && !regex.test(pass[1].value) && (pass[0].value === pass[1].value)){
            alert('Please enter proper password');
            // url.focus();
            console.log('pass-true');
            return false;
        }
        else{
            console.log('pass-false');
            return true;
        }
    }

    const cpassval = () => {
        const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        const cpass = document.querySelectorAll('input[name="myCPwd"]');
        if (cpass.value!=pass.value){
            alert('Please enter proper password');
            // url.focus();
            console.log('pass-true');
            return false;
        }
        else{
            console.log('pass-false');
            return true;
        }
    }
    
    const submitval = () => {

        let value;
        console.log('submitval');
        // setTimeout(nameval,1000);
        // setTimeout(emailval,1000);
        // setTimeout(passval,1000);
        // setTimeout(dateval,1000);
        // setTimeout(telval,1000);
        value = nameval();
        value = emailval();
        value = passval();
        value = cpassval();

        return value;
    }

    const signin = document.querySelector('#submitButton');
    
    signin.addEventListener('click', ()=> {

        if(submitval()){

            const email = document.querySelector('input[name="myEmail"]');
            const h3 = document.querySelector('body h3');

            sessionStorage.setItem('email', email.value);
            console.log(sessionStorage.getItem('email'));
            h3.innerHTML = sessionStorage.getItem('email');
            // setTimeout(() => {'console.log("Wait for 5 secs")'}, 5000);

        }
    });

}

