<?php 
$title = 'Registration Form';
require_once'includes/header.php';
?>
<!------
first name 
last name
date of birth (use date picker)
specialty (data base admin soft developer web admin )
email address 
contact number 

----->
<h1 class="text-center" >Registration for IT Confrence</h1>

<form class="container">
    
    <div class="form-row">
        <div class="col">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname">
        </div>

        <div class="col">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname">
        </div>
    </div>
    
    <br/>
    <div class="form-row">
        <div class="col">
            <label for="dateofbith">Date of Birth</label>
            <input type="date" class="form-control" id="dateofbith">
            <small id="dateofbirthhelp" class="form-text text-muted"></small>
        </div>

        <div class="col">
            <label for="exampleFormControlSelect1"></label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
    </div>

    <br/>
    
    <div class="form-group">
        <label for="emailaddress">Email address</label>
        <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Don't worry this is between me and you ;-).</small>
    </div>

    <div class="form-group">
        <label for="contactnumber">Phone number</label>
        <input type="number" class="form-control" id="contactnumber">
        <small id="phonenumberHelp" class="form-text text-muted">We won't call you so don't ask.</small>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
        <small id="passwordHelp" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
    </div>
    
    <!----<div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> ---->

    <button type="submit" class="btn btn-primary">Submit</button>
  
</form>


<?php require_once'includes/footer.php'; ?>