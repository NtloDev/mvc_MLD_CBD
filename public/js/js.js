//les variable
const form = document.querySelector(".add");
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const user = document.getElementById('user');
const pwd = document.getElementById('pwd');
const cpwd = document.getElementById('cpwd');




//functions
function checkRequired(inputArray) {
    inputArray.forEach(input =>{
        if (input.value.trim() === '') {
            showError(input,`${input.id} is requis`);

        }
        else
        {
            showSuccess(input);
        }
    });
}

//
function showError(input,message) {
    const formControl =input.parentElement;
    formControl.className = "form-group error";

    const small = formControl.querySelector('small');
    small.innerText=message;
}

function showSuccess(input){
    const formControl =input.parentElement;
    formControl.className = "form-group success";

    const small = formControl.querySelector('small');
    small.innerText ='';
}


function checkfirstNameValid(input) {
    const re = /^[A-Za-z][A-Za-z0-9]{5,31}$/;
   
    if(re.test(input.value)){
        showSuccess(input);
    }
    else
    {
        showError(input,'your first Name is not valid !')
    }
}
function checklastNameValid(input) {
    const re = /^[A-Za-z][A-Za-z0-9]{5,31}$/;
    if(re.test(input.value)){
        showSuccess(input);
    }
    else
    {
        showError(input,'your Last Name is not valid !')
    }
}
function checkPwdValid(input,min,max)
{

    if (input.value.length  < min || input.value.length > max)
    {
        showError(input,'le nombre de caracteres de entre 3 à 15');
    }
    else
    {
        showSuccess(input);
    }
}

function checkPasswordMatch(input,input2) {
    if (input.value !== input2.value) {
        showError(input2,'password pas identique');
    }
    else
    {
        showSuccess(input);
    }
}





//Events

form.addEventListener('submit',(e)=>{

    checkRequired([firstname,lastname,user,pwd,cpwd]);
    checkfirstNameValid(firstname);
    checklastNameValid(lastname);
    checkPwdValid(pwd,4,16);
    checkPasswordMatch(pwd,cpwd);
});

