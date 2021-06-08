<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="template.css">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>


<!--header-->
    <header class="navbar navbar-dark bg-dark">
        <logo class="text-primary"> BznBuilder</logo>
        <op>introduction</op>
        <op class="bg-light" style="padding:1.5%;">Discover my business stage</op>
        <op>Identify my best finance options </op>
        <op>My country opportunities</op>
        <op>My funding strategy</op>
        </header>

  <div class="container bg-light" style="padding: 5%; " >

   <!--score-->
   <div class="row">
     <div class="col">
   <div style="text-align: left;  ">
   <h3>Thanks for taking the survey!</h3> <br />
           <?php 
            include 'backend\database\user.php';
           session_start();
           $email=$_SESSION['email'];
           $newuser =new user;
            $score=$newuser->score_is($email);
            if($score[0]>=0.5)
            { //growth success
           ?>
          <div class=" text-white bg-success p-3 rounded mb-2" >
          Your Score is : <?php echo $score[0]; ?>
         </div>
    <h4 class="text-success">Your business stage is GROWTH.</h4>

    <?php
            }
            else
            { //fail try again
              ?>
              <div class="text-white p-3 rounded mb-2 bg-danger "> 
              Your Score is : <?php echo $score[0]; ?>
              </div>
              <h4 class="text-danger">Your business stage is Withering.</h4>
    <?php
            }       ?>
    </div>
          </div>
    <!--invite-->
    <div class="col">

    <div class="card bg-light mb-3" style="max-width: 50rem;">
    <div class="text-center">
  <div class="card-header">Congratulation !</div>
          </div>
  <div class="card-body">
    <h5 class="card-title">Invite Your Co-Founders</h5>
    <p class="card-text">Our business should now be generating a consisting source of income
and regularly attract new customers. Cash flow should start to improve
as periodic revenues help to cover on­going expenses,
and you should be looking forward to seeing your profits
progress gradually and progressively.
Remember at this stage an exhaustive business plan includes
especially the economic­financing plan as crucial element to meet possibleinvestors.
The financing plan has to include the profit and loss statement
(that is the summary of all the company’s income and expenses
during a year, and the results obtained); the cash flow plan and
the break­even point calculation, indicating the minimum volume
of sales that allows all fixed costs to be covered.
By now you will have assessed your business,
examined future opportunities, and put an in­depth strategy in place.</p>
  



<!-- Button trigger modal -->
<div class="col text-center"> 
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Invite Your Co-Founders</button>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="backend\backend.php">
      <div class="modal-body">
      <div class="col text-center" > 
      the best way to come to a fair cinsensus on youe eqiuty split is to start a conversation 
      with your co-founders ,enter their email addresses below to invite them to go through this experice on thier own.
       Afterwards,compare and contrast your results!
       <div class="row">
         <div class="col"> email:</div> 
         <div class="col"> 
       <input type="email" name="cofounderemail" class="form-control" placeholder="name@example.com" >
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="send" value="Send" class="btn btn-primary">
      </div>
          </form>
  </div>
</div>
</div>
          </div>
          </div>
</div>
          </div>
<!--save-->
<div class="form-group" style="text-align: right;">
<form action="backend\backend.php" method="post">
<input type="submit" name="savescore" class="btn btn-primary mb-2" value="Save & Countinue" style="margin: 9% 0% 0% 0%;">
</form>
</div>

</div>
<!--footer-->
<footer>  
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" >
               Copyright 2021 BznsBuilder. All Rights Reserved
            </div>

</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
  <script>

  </script>
</html>