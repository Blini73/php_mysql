<?php include "header.php";    ?>
<form>
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Name">  
  </div>
<div class="form-group">
    <label for="exampleInputLastname">Lastname</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Lastname">
  </div>
  <div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include  "footer.php" ?>