
<!DOCTYPE html>
<html>
<body>

<h2 style="background-color: orange"><b>REGISTRATION FORM OF REJOLA</b></h2>
  

<form action="form.php" >
  <label for="name"><b>First name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="age"><b>Age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
  
  <label for="gender"><b>Gender:</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="transgender">
  <label for="other">Other</label><br><br>
  
  
  <label for="languages"><b>LANGUAGEs:</label><br>
  <input type="checkbox" id="Hindi" name="languages[]" value="Hindi">
  <label for="hindi"> Hindi</label><br>
  <input type="checkbox" id="English" name="languages[]" value="English">
  <label for="english"> English</label><br>
  <input type="checkbox" id="Others" name="languages[]" value="Others">
  <label for="others"> Others</label><br><br>
  
  
  <label for="city">City</label>
    <select id="city" name="city">
      <option value="Kolkata">Kolkata</option>
      <option value="Pune">Pune</option>
      <option value="Chennai">Chennai</option>
      <option value="Punjab">Punjab</option>
      <option value="New delhi">New delhi</option>
    </select>
   
 
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p><B>HAVE A GOOD DAY VISIT REJOLA PUBLIC SCHOOL AGAIN THANKYOU.</p>













</body>
</html>