$(document).ready(function(){

    //creer une question
    createStudent();



});



function createStudent(){

$('#formStudent').on('submit',function(e){
    e.preventDefault();
 
    var matricule = $('#matricule').val();
    if (matricule != "")
    {
        $('#Erreurmatricule').html('');
    }
    else
    {
        $('#Erreurmatricule').html('The matricule No. field is required');
    }

    var firstname = $('#firstname').val();
    if (firstname != "")
    {
        var reg = /^[a-zA-Z]{3,15}$/;
        if (reg.test(firstname))
        {
            $('#Erreurfirstname').html("");
        }
        else
        {
            $('#Erreurfirstname').html('Must be 3-15 characters long.');
        }
    }
    else
    {
        $('#Erreurfirstname').html('The firstname No. field is required');
    }

    var lastname= $('#lastname').val();
    if (lastname!= "")
    {
        var reg = /^[a-zA-Z]{3,15}$/;
        if (reg.test(lastname))
        {
            $('#Erreurlastname').html("");
        }
        else
        {
            $('#Erreurlastname').html('Must be 3-15 characters long.');
        }
    }
    else
    {
        $('#Erreurlastname').html('The lastname No. field is required');
    }

        
    var phone = $('#phone').val();
    if (phone!= "")
    {
            $('#Erreurphone').html("");
    }
    else
    {
        $('#ErreurPhone').html('The phone No. field is required');
    }


    var mail = $('#mail').val();
    if (mail != "")
    {
        var regMail =/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
        if (regMail.test(mail))
        {
            $('#ErreurMail').html("");
        }
        else
        {
            $('#ErreurMail').html('your mail is note valid !');
        }
    }
    else
    {
        $('#ErreurMail').html('The mail No. field is required');
    }

    var birthday = $('#birthday').val();
    if (birthday != "")   
    {
        var regbirthday =/^([0-2][0-9]|(3)[0-1])[/.-](((0)[0-9])|((1)[0-2]))[/.-]\d{4}$/i;
        if (regbirthday.test(birthday))
        {
            $('#ErreurBirthday').html("");
        }
        else
        {
            $('#ErreurBirthday').html('your birthday is note valid !');
        }
    }
    else
    {
        $('#ErreurBirthday').html('The birthday No. field is required');
    }

    var adress= $('#adress').val();
    if (adress!= "")
    {
        var reg = /^[a-zA-Z0-9]{3,15}$/;
        if (reg.test(adress))
        {
            $('#Erreuradress').html("");
        }
        else
        {
            $('#ErreurAdress').html('Must be 3-15 characters long.');
        }
    }
    else
    {
        $('#ErreurAdress').html('The adress No. field is required');
    }
   

    var choix= $('#choix').val();
    if (choix!= "")
    {
       
            $('#ErreurChoix').html("");
        
    }
    else
    {
        $('#ErreurChoix').html('The choix No. field is required');
    }




    var formQestion= $("#formStudent");
        $.ajax({
            url:'http://localhost/mvc_MLD/admin/delete',
                type:'POST',
                data:formQestion.serialize(),

                success:function(reponse)
                {
                    if (reponse == 'success') {
                        $('#Error').html('');
                        // alert('inscrire avec succés');
                    }
                    else
                    {
                        // alert('inscrire echec');
                    }
                }
        });
});
}



