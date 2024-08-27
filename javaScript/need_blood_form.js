const name=document.getElementById("name");
const gender=document.getElementById("gender");
const blood_group_type=document.getElementById("blood_group_type");
const unit=document.getElementById("unit");
const address=document.getElementById('address');
const dname=document.getElementById('dname');
const rdate=document.getElementById('rdate');
const email=document.getElementById('email');
const contact_number=document.getElementById('contact_number');
const reason=document.getElementById('reason');

const name_error=document.getElementById('name_error');
const gender_error=document.getElementById('gender_error');
const blood_group_type_error=document.getElementById('blood_group_type_error');
const unit_error=document.getElementById('unit_error');
const address_error=document.getElementById('address_error');
const rdate_error=document.getElementById('rdate_error');
const email_error=document.getElementById('email_error');
const contact_number_error=document.getElementById('contact_number_error');
const reason_error=document.getElementById('reason_error');
const dname_error=document.getElementById('dname_error');

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
    if(gender.value==='' || gender==null){
        e.preventDefault();
        gender_error.innerHTML="Gender is required";
    }else{
        gender_error.innerHTML="";
    }
    if(blood_group_type.value==='' || blood_group_type==null){
        e.preventDefault();
        blood_group_type_error.innerHTML="Blood Group Type is required";
    }else{
        blood_group_type_error.innerHTML="";
    }
    if(address.value==='' || address==null){
        e.preventDefault();
        address_error.innerHTML="Address is required";
    }else{
        address_error.innerHTML="";
    }
    if(rdate.value==='' || rdate==null){
        e.preventDefault();
        rdate_error.innerHTML="Required Date is required";
    }else{
        rdate_error.innerHTML="";
    }
    if(email.value==='' || email==null){
        e.preventDefault();
        email_error.innerHTML="Email is required";
    }else{
        email_error.innerHTML="";
    }
    if(contact_number.value==='' || contact_number==null){
        e.preventDefault();
        contact_number_error.innerHTML="Contact Number is required";
    }else{
        contact_number_error.innerHTML="";
    }
    if(reason.value==='' || reason==null){
        e.preventDefault();
        reason_error.innerHTML="Reason is required";
    }else{
        reason_error.innerHTML="";
    }
    if(dname.value==='' || dname==null){
        e.preventDefault();
        dname_error.innerHTML="Doctor Name is required";
    }else{
        dname_error.innerHTML="";
    }
    if(unit.value==='' || unit==null){
        e.preventDefault();
        unit_error.innerHTML="Doctor Name is required";
    }else{
        unit_error.innerHTML="";
    }

})