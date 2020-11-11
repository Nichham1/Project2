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

<form class="container" method="get" action="success.php">
    
    <div class="form-row">
        <div class="col">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>

        <div class="col">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    
    <br/>
    <div class="form-row">
        <div class="col">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
            <small id="dobhelp" class="form-text text-muted"></small>
        </div>

        <div class="col">
            <label for="selectionex">Area of expertiese</label>
            <select class="form-control" id="selectionex" name="selectionex">
                <option> Database Administrator</option>
                <option>Software Developer </option>
                <option>Web Administrator</option>
                <option>Network Engineer</option>
                <option>Other</option>
            </select>
        </div>
    </div>

    <br/>
    
    <div class="form-group">
        <label for="emailaddress">Email address</label>
        <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp" name="emailaddress">
        <small id="emailHelp" class="form-text text-muted">Don't worry this is between me and you ;-).</small>
    </div>

    <div class="form-group">
        <label for="contactnumber">Phone number</label>
        <input type="number" class="form-control" id="contactnumber" aria-describedby="phoneHelp" name="contactnumber">
        <small id="phoneHelp" class="form-text text-muted">We won't call you so don't ask.</small>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <small id="passwordHelp" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
    </div>
    
    <!----<div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> ---->

    <button type="submit" class="btn btn-success btn-block" name="completion">Submit</button>
  
</form>


<?php require_once'includes/footer.php'; ?>