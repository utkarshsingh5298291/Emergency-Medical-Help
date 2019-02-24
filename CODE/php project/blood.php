<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="style2.css" rel="stylesheet">

        <title>Forms in Bootstrap</title>
    </head>
    <body>
    	<?php include 'includes/header.php'; ?>
         <!-- .........................................................navbar...........................................................................-->
       
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <form >
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            Gender
                        <div class="radio">
                            <label><input type="radio" name="gender" value="male"> Male</label>
                            <label><input type="radio" name="gender" value="female"> Female</label>
                            <label><input type="radio" name="gender" value="other"> Other</label>
                        </div>
                        </div>
                        <div class="form-group">
                            Blood Group
                            <select name="BloodGroup" class="form-control">
                                <option selected hidden value="">Select code</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                 <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                 <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                             <label for="Date">Date</label>
                            <input type="Date" class="form-control"  placeholder="dob" name="dob" required = "true">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text"  class="form-control" id="Address" name="Address">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

       <?php include "includes/footer.php"; ?>
</body>
</html>