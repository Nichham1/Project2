<?php 
$title = 'Success';
require_once'includes/header.php';
require_once'';
?>

    <h1 class="text-center text-success"> You have been registred!</h1>

    <br/>
<!--THis code prints out data entered while using the get function --->
    <!-----div id="profilecard " class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <?php //echo $_GET['firstname'].' '.$_GET['lastname']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php //echo $_GET['selectionex']; ?></h6>
            <p class="card-text"> Email: <?php //echo $_GET['emailaddress']; ?> </p>
            <p class="card-text"> Phone number:  <?php //echo $_GET['contactnumber']; ?></p>
            <p class="card-text"> Date of Birth: <?php //echo $_GET['dob']; ?></p>
            
        </div>
    </div>---->

    <div id="profilecard " class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $_POST['firstname'].' '.$_POST['lastname']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST['selectionex']; ?></h6>
            <p class="card-text"> Email: <?php echo $_POST['emailaddress']; ?> </p>
            <p class="card-text"> Phone number:  <?php echo $_POST['contactnumber']; ?></p>
            <p class="card-text"> Date of Birth: <?php echo $_POST['dob']; ?></p>
            
        </div>
    </div>

  <br/>
    <?php  ?>

<?php require_once'includes/footer.php'; ?>