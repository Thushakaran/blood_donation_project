const name=document.getElementById("name");
const phone=document.getElementById("phone");
const email=document.getElementById("email");
const message=document.getElementById("message");
const hospital=document.getElementById("hospital");
const form=document.getElementById('form');

const name_error=document.getElementById('name_error');
const phone_error=document.getElementById('phone_error');
const email_error=document.getElementById('email_error');
const hospital_error=document.getElementById('email_error');
const message_error=document.getElementById('message_error');

form.addEventListener('submit',(e)=>{
    var email_check=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
    if(!email.value.match(email_check)){
        e.preventDefault();
        email_error.innerHTML="Valid email is required";
    }

    if(name.value==='' || name.value==null){
        e.preventDefault();
        name_error.innerHTML="Name is required";
    }else{
        name_error.innerHTML="";
    }
    if(phone.value==='' || phone==null){
        e.preventDefault();
        phone_error.innerHTML="Phone number is required";
    }else{
        phone_error.innerHTML="";
    }
    if(email.value==='' || email==null){
        e.preventDefault();
        email_error.innerHTML="Email is required";
    }else{
        email_error.innerHTML="";
    }
    if(hospital.value==='' || hospital==null){
        e.preventDefault();
        hospital_error.innerHTML="Hospital is required";
    }else{
        hospital_error.innerHTML="";
    }
    if(message.value==='' || message==null){
        e.preventDefault();
        message_error.innerHTML="Message is required";
    }else{
        message_error.innerHTML="";
    }

})