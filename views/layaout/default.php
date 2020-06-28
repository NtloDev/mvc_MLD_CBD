<!--  -->
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL?>/public/css/styles.css">
  </head>
  <body>
    <div class="container-fluid" id="login">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">

                <h2 style="text-align: center;">Gestion Allocation Chambres</h1>
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <!-- menu -->
                                    <ul id="menu">
                                        <a href='http://localhost/mvc_MLD_CBD/admin/Students'><li id='listquestion'><strong>Students</strong></li></a>
                                        <a href='http://localhost/mvc_MLD_CBD/admin/StudentRegistor'><li id='listquestion'><strong>registor Students</strong></li></a>
                                        <a href='http://localhost/mvc_MLD_CBD/admin/Rooms'><li id='listquestion'><strong>Rooms</strong></li></a>
                                        <a href='#'><li id='listquestion'><strong>Not yet</strong></li></a>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <hr>
                                        <?= @$container ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=URL?>/public/js/script.js"></script>
  </body>
</html>

<script>

    $(document).on('click','#cholarshipsroom',function(){

    if( $('input[name=cholarshipsroom]').is(':checked') ){

        $(".added").before(
            `
            <div class="form-group">
                <select class="form-control col-12" style="display: inline-table;float:left" name="choix" id="choix">
                    <option>type room</option>
                    <option value="pension">special</option>
                    <option value="partialscholarships">duel</option>
                </select>
                <small class="error text-danger" id="ErreurChoix"></small>
            </div>
            <div class="form-group">
                <select class="form-control col-12" style="display: inline-table;float:left" name="choix" id="choix">
                    <option>type of Student</option>
                    <option value="pension">pension</option>
                    <option value="partialscholarships">partial scholarships</option>
                </select>
                <small class="error text-danger" id="ErreurChoix"></small>
            </div>
            `
        );
    }
    });

    $(document).on('click','#cholarships',function(){

    if( $('input[name=cholarships]').is(':checked') ){

        $(".added").before(
            `
            <div class="form-group">
                <input type="text" class="form-control" name="adress"  id="adress" placeholder="adress">
                <small class="error text-danger" id="ErreurAdress"></small>
            </div>
            <div class="form-group">
                <select class="form-control col-12" style="display: inline-table;float:left" name="choix" id="choix">
                    <option>type of Student</option>
                    <option value="pension">pension</option>
                    <option value="partialscholarships">partial scholarships</option>
                </select>
                <small class="error text-danger" id="ErreurChoix"></small>
            </div>
            `
        );
    }
});

    $(document).on('click','#nocholarships',function(){

        if( $('input[name=nocholarships]').is(':checked')){

        $(".added").before(
            `
            <div class="form-group">
                <input type="text" class="form-control" name="adress"  id="adress" placeholder="adress">
                <small class="error text-danger" id="ErreurAdress"></small>
            </div>
            `
                );
        }
});


</script>