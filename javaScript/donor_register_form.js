const name=document.getElementById('name');
const fname=document.getElementById('fname');
const gender=document.getElementById('gender');
const dateofbirth=document.getElementById('dateofbirth');
const blood_group=document.getElementById('blood_group');
const body_weight=document.getElementById('body_weight');
const email=document.getElementById('email');
const province=document.getElementById('province');
const district=document.getElementById('district');
const address=document.getElementById('address');
const contact_no=document.getElementById('contact_no');
const last_blood_donoted_date=document.getElementById('last_blood_donoted_date');
const new_donor=document.getElementById('new_donor');
const checkbox=document.getElementById('checkbox');
const form=document.getElementById('form');

const name_error=document.getElementById('name_error');
const fname_error=document.getElementById('fname_error');
const gender_error=document.getElementById('gender_error');
const dateofbirth_error=document.getElementById('dateofbirth_error');
const blood_group_error=document.getElementById('blood_group_error');
const province_error=document.getElementById('province_error');
const district_error=document.getElementById('district_error');
const address_error=document.getElementById('address_error');
const contact_no_error=document.getElementById('contact_no_error');
const new_donor_error=document.getElementById('new_donor_error');
const body_weight_error=document.getElementById('body_weight_error');
const email_error=document.getElementById('email_error');
const checkbox_error=document.getElementById('checkbox_error');


form.addEventListener('submit',(e)=>{

    var email_check=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

    if(name.value==='' || name.value==null){
        e.preventDefault();
        name_error.innerHTML="Name is required";
    }
    else{
        name_error.innerHTML="";
    }
    if(fname.value==='' || fname.value==null){
        e.preventDefault();
        fname_error.innerHTML="Father Name is required";
    }
    else{
        fname_error.innerHTML="";
    }
    if(email.value==='' || email.value==null){
        e.preventDefault();
        email_error.innerHTML="Email Name is required";
    }
    else{
        email_error.innerHTML="";
    }
    if(gender.value==='' || gender.value==null){
        e.preventDefault();
        gender_error.innerHTML="Gender is required";
    }
    else{
        gender_error.innerHTML="";
    }
    if(dateofbirth.value==='' || dateofbirth.value==null){
        e.preventDefault();
        dateofbirth_error.innerHTML="Date of Birth is required";
    }
    else{
        dateofbirth_error.innerHTML="";
    }
    if(blood_group.value==='' || blood_group.value==null){
        e.preventDefault();
        blood_group_error.innerHTML="Blood Group is required";
    }
    else{
        blood_group_error.innerHTML="";
    }
    if(body_weight.value==='' || body_weight.value==null){
        e.preventDefault();
        body_weight_error.innerHTML="Body Weight is required";
    }
    else{
        body_weight_error.innerHTML="";
    }
    if(province.value==='' || province.value==null){
        e.preventDefault();
        province_error.innerHTML="Province is required";
    }
    else{
        province_error.innerHTML="";
    }
    if(district.value==='' || district.value==null){
        e.preventDefault();
        district_error.innerHTML="District is required";
    }
    else{
        district_error.innerHTML="";
    }
    if(address.value==='' || address.value==null){
        e.preventDefault();
        address_error.innerHTML="Address is required";
    }
    else{
        address_error.innerHTML="";
    }
    if(contact_no.value==='' || contact_no.value==null){
        e.preventDefault();
        contact_no_error.innerHTML="Contact No is required";
    }
    else{
        contact_no_error.innerHTML="";
    }
    
    if(!email.value.match(email_check)){
        e.preventDefault();
        email_error.innerHTML="Valid email is required";
    }
    if (!checkbox.checked) {
        e.preventDefault();
        alert("Please agree to the terms and conditions.");
    }
})


function validateCheckbox() {
  const checkbox = document.getElementById('checkbox');
  if (!checkbox.checked) {
    alert("Please agree to the terms and conditions.");
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}



