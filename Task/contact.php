<!DOCTYPE HTML>  
<html>
<head>

<style>
        .error {
            color: #FF0000;
        }
        .container {
  background-color: "rgba(255, 255, 255, 0.5);";
  margin-top: 10px;
  margin-right: 400px;
  margin-bottom: 30px;
  margin-left: 300px;
}
.container1 {
  background-color:azure;
  margin-top: 10px;
  margin-right: 700px;
  margin-bottom: 30px;
  margin-left: 30px;
}
    </style>

</head>


    

<body style="background-image:url(http://www.justinmaller.com/img/projects/thumbnail/THUMB__4oio.jpg); background-size: cover; background-repeat:no-repeat;">
 


<?php
// define variables and set to empty values
$nameErr = $fathernameErr = $emailErr = $genderErr = $mobileErr = $stateErr = $districtErr = $cityErr = $courseErr = $pincodeErr =  $stateErr =  $cityErr =  $districtErr =  $courseErr = "";
$name = $fathername = $email = $gender = $address = $mobile = $state = $district = $city = $course = $pincode =   $state =  $city =  $district =  $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["fathername"])) {
    $fathernameErr = "Father Name is required";
  } else {
    $fathername = test_input($_POST["fathername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fathername)) {
      $fathernameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    // check if URL address syntax is valid
    if (!preg_match("/^[0-9]*$/",$mobile)) {
      $mobileErr = "Invalid mobile number";
    }    
  }

  if (empty($_POST["pincode"])) {
    $pincodeErr = "Pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
    // check if URL address syntax is valid
    if (!preg_match("/^[0-9]*$/",$pincode)) {
      $pincodeErr = "Invalid pincode";
    }    
  }
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["state"])) {
    $stateErr = "State is required";
  } else {
    $state = test_input($_POST["state"]);
  }
  if (empty($_POST["pincode"])) {
    $pincodeErr = "Pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
  }
  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }
  if (empty($_POST["district"])) {
    $districtErr = "District is required";
  } else {
    $district = test_input($_POST["district"]);
  }
  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class=container >
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

	<tr><td><label for="name">Name: </label> </td>
	<td><input type="text" name="name">
 	 <span class="error">* <?php echo $nameErr;?></span></td></tr>
 	

  <tr><td><label for="fathername">  FatherName </label></td>
  <td><input type="text" name="fathername">
  <span class="error">* <?php echo $fathernameErr;?></span></td></tr>
 
  	
  <tr><td><label for="email">
  E-mail: </label></td>
  <td><input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span></td></tr>
 

  <tr><td><label for="mobile">
  Mobile: </label></td>
  <td> <input type="text" name="mobile">
  <span class="error">*<?php echo $mobileErr;?></span></td></tr>

 
 
  <tr><td><label for="address"> Address: </label></td>
  <td><textarea name="address" rows="5" cols="40"></textarea></td></tr>


  <tr><td><label for="gender">
  Gender:</label></td>
  <td><input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span></td></tr>


  <tr><td><label for="pincode">
  Pincode: </label></td>
  <td><input type="text" name="pincode">
  <span class="error">*<?php echo $pincodeErr;?></span></td></tr>
  
  
  <tr><td>
        <label for="state">
            <span class="label-text">State:</span> 
       
        </label></td>
		<td> <select name="state" class="form-control" id="state">
		<option value=""></option>
            <option value="Tamilnadu">Tamilnadu</option>
            <option value="Kerala">kerala</option>
            <option value="karnataka">Karnataka</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
        </select><span class="error">*<?php echo $stateErr;?></span></td></tr>
		
	
	
		<tr><td>	<label for="district">
            <span class="label-text">District</span> 
            
        </label></td>
		<td>  <select name="district" class="form-control" id="district">
        <option value=""></option>
            <option value="Cuddalore">Cuddalore</option>
            <option value="Tuticorin">Tuticorin</option>
            <option value="Sivakasi">Sivakasi</option>
            <option value="Villupuram">Villupuram</option>
        </select><span class="error">*<?php echo $districtErr;?></span></td></tr>
		
		<tr><td><label for="city">
            <span class="label-text">City</span> 
            
        </label></td>
		<td> <select name="city" class="form-control" id="city">
        <option value=""></option>
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Cochin">Cochin</option>
        </select><span class="error">*<?php echo $cityErr;?></span></td></tr>
	
		<tr><td><label for="course">
            <span class="label-text">Course</span> 
        </label></td>
		<td>  <select name="course" class="form-control" id="course">
        <option value=""></option>
            <option value="BE">BE</option>
            <option value="BTECH">BTECH</option>
            <option value="BSC">BSC</option>
            <option value="BCA">BCA</option>
        </select> <span class="error">*<?php echo $courseErr;?></span></td></tr>

<tr><td>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="reset">  
</td></tr>
</form>
</table>
<div class=container1>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $fathername;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
echo "<br>";
echo $pincode;
echo "<br>";
echo $state;
echo "<br>";
echo $district;
echo "<br>";
echo $city;
echo "<br>";
echo $course;

?></div>

</body>
</html>