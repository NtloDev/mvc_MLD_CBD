<div  id="addquestion">

    <div class="container">
        <h3>Registor Student</h3>
        <form id="formStudent" class="formStudent" method="post">

            <!-- <div class="form-group">
                <input type="text" class="form-control" name="matricule" id="matricule" placeholder="matricule">
                <small class="error text-danger"></small>
                <small class="error text-danger" id="Erreurmatricule"></small>
            </div> -->
            <div class="form-group">
                <input type="text" class="form-control"  name="firstname"  id="firstname" placeholder="firstName">
                <small class="error text-danger" id="Erreurfirstname"></small>
            </div>
            <div class="form-group">
                <input type="type" class="form-control" name="lastname"  id="lastname" placeholder="LastName">
                <small class="error text-danger" id="Erreurlastname"></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone"  id="phone" placeholder="phone">
                <small class="error text-danger" id="ErreurPhone"></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="mail"  id="mail" placeholder="mail">
                <small class="error text-danger" id="ErreurMail"></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="birthday"  id="birthday" placeholder="birth date">
                <small class="error text-danger" id="ErreurBirthday"></small>
            </div>

            <div style="margin-top:15px;clear:both">
            <span style="border:2px solid #FFF; margin:5px;border-radius:10%"><input type="radio" id="cholarshipsroom" name="cholarshipsroom"> cholarships and room</span>
            <span style="border:2px solid #FFF; margin:5px;border-radius:10%"><input type="radio" id="cholarships" name="cholarships"> cholarships </span>
            <span style="border:2px solid #FFF; margin:5px;border-radius:10%"><input type="radio" id="nocholarships" name="nocholarships"> no cholarships</span>
              
            </div>
            
            <small class="error text-danger" id="ErreurChoix"></small>

            <div class="added"></div>


            <button type="submit" id="submit" name="submit" class="btn btn-primary" style="bottom:0;float:left;clear:both;background:#3ADDDD">Add</button>
        </form>
    </div>
    
</div>

<div id="Error"></div>
