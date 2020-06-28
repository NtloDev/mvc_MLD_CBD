$(function () {
    $('#submitAdd').hide();
    $('#firstname').keyup(function() {
        if (Validatefirstname()) {
            $('#firstname').css('borderBottom','2px solid green');
            $('#ErrorFirstname').html('valid');
            $('#ErrorFirstname').css('color','green');
            $('#ErrorFirstname').css('fontWeight','bolder');
        }
        else
        {
            $('#firstname').css('borderBottom','2px solid red');
            $('#ErrorFirstname').html('invalid ');
            $('#ErrorFirstname').css('color','red');
            $('#ErrorFirstname').css('fontWeight','bolder');
        }
        Validate();
    });

    $('#lastname').keyup(function() {
        if (Validatelastname()) {
            $('#lastname').css('borderBottom','2px solid green');
            $('#ErrorLastname').html('valid');
            $('#ErrorLastname').css('color','green');
            $('#ErrorLastname').css('fontWeight','bolder');
        }
        else
        {
            $('#lastname').css('borderBottom','2px solid red');
            $('#ErrorLastname').html('invalid ');
            $('#ErrorLastname').css('color','red');
            $('#ErrorLastname').css('fontWeight','bolder');
        }
        Validate();
    });


    $('#user').keyup(function() {
        if (Validateuser()) {
            $('#user').css('borderBottom','2px solid green');
            $('#ErrorUser').html('valid');
            $('#ErrorUser').css('color','green');
            $('#ErrorUser').css('fontWeight','bolder');
        }
        else
        {
            $('#user').css('borderBottom','2px solid red');
            $('#ErrorUser').html('invalid ');
            $('#ErrorUser').css('color','red');
            $('#ErrorUser').css('fontWeight','bolder');
        }
        Validate();
    });

    $('#pwd').keyup(function() {
        if (Validatepassword()) {
            $('#pwd').css('borderBottom','2px solid green');
            $('#ErrorPassword').html('valid');
            $('#ErrorPassword').css('color','green');
            $('#ErrorPassword').css('fontWeight','bolder');
        }
        else
        {
            $('#pwd').css('borderBottom','2px solid red');
            $('#ErrorPassword').html('invalid ');
            $('#ErrorPassword').css('color','red');
            $('#ErrorPassword').css('fontWeight','bolder');
        }
        Validate();
    });

    $('#pwd2').keyup(function() {
        if (Validatepasswordconfirm()) {
            $('#pwd2').css('borderBottom','2px solid green');
            $('#ErrorPassword2').html('invalid');
            $('#ErrorPassword2').css('color','green');
            $('#ErrorPassword2').css('fontWeight','bolder');
        }
        else
        {
            $('#pwd2').css('borderBottom','2px solid red');
            $('#ErrorPassword2').html('les mots de pass ne correspondent pas');
            $('#ErrorPassword2').css('color','red');
            $('#ErrorPassword2').css('fontWeight','bolder');
        }
        Validate();
    });
});


function Validatefirstname() {
    var firstname = $('#firstname').val();
    var reg = /^[a-zA-Z]{3,15}$/;
    if (reg.test(firstname)) {
        return true;
    }
    else
    {
        return false;
    }
}

function Validatelastname() {
    var lastname = $('#lastname').val();
    var reg = /^[a-zA-Z]{3,15}$/;
    if (reg.test(lastname)) {
        return true;
    }
    else
    {
        return false;
    }
}

function Validateuser() {

    $.ajax({
        type:"post",
        url:"src/traitement.php",
        data:{
            'user':$('#user').val()
        },
        success:function(data){
            let vall;
            if (data == "success") {
                $('#ErrorUser').html('ok');
                vall = 1;
            }
            else
            {
                $('#ErrorUser').html(data)
                vall = 2;
            }
        }
    });
    if (vall==1) {
        return true;
    }
    else
    {
        return false;
    }
}

function Validatepassword() {
    var pwd = $('#pwd').val();
    var reg = /^[a-zA-Z0-9@]{6,15}$/;
    if (reg.test(pwd)) {
        return true;
    }
    else
    {
        return false;
    }
}
function Validatepasswordconfirm() {
    var pwd = $('#pwd').val();
    var pwd2 = $('#pwd2').val();
    if (pwd === pwd2) {
        return true;
    }
    else
    {
        return false;
    }
}

function Validate() {
    if (Validatefirstname() && Validatelastname() && Validateuser() && Validatepassword() && Validatepasswordconfirm()) {
        $('#submitAdd').show();
    }
    else
    {
        $('#submitAdd').hide();
    }
}




$('#login-form').on('submit',function(e){
    
    $.ajax({
        url:'../../src/traitement.php',
        type:'POST',
        data:$('#loginform').serialize(),
        success:function (result)
        {
            $('#error').html(result);
        }
    });

    // e.preventDefault();
});
