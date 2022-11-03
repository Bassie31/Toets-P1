<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $allChecked = false;
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $allChecked = false;
    } else {
      $email = test_input($_POST["email"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Toets P1</title>
</head>
<body>
<div id="main">
    <script>
        	    function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function veranderKleur(kleur) {
                document.body.style.background = kleur;
            }

            function wit () {
                document.body.style.backgroundColor="#e9d8a6"
            }

    </script>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</div>
</form>

    <input type="checkbox" id="L" name="gender"  onclick="veranderKleur('#ff9c56');" ondblclick="wit()">
    <label for="html">L</label>
    <input type="checkbox" id="H" name="gender" value="H" onclick="veranderKleur('#f716a2');" ondblclick="wit()">
    <label for="css">H</label>
    <input type="checkbox" id="B" name="gender" value="B" onclick="veranderKleur('#3a0f49');" ondblclick="wit()">
    <label for="javascript">B</label>
    <input type="checkbox" id="T" name="gender" value="T" onclick="veranderKleur('#00ac6d');" ondblclick="wit()">
    <label for="html">T</label>
    <input type="checkbox" id="M" name="gender" value="M" onclick="veranderKleur('#0000ff');" ondblclick="wit()">
    <label for="css">M</label>
    <input type="checkbox" id="V" name="gender" value="V" onclick="veranderKleur('#f5aac5');" ondblclick="wit()">
    <label for="javascript">V</label><br>
    

    Wilt u beoordelen: <input type="checkbox" id="myCheck" onclick="myFunction()">

    <div id="text" style="display:none">
        <img src="images/Rood_face_trans.png" alt="title"></img>
        <input type="checkbox" id="L" name="rating" value="rood">
        <img src="images/oranje_face_trans.png" alt="title"></img>
        <input type="checkbox" id="L" name="rating" value="oranje">
        <img src="images/geel_face_trans.png" alt="title"></img>
        <input type="checkbox" id="L" name="rating" value="geel">
        <img src="images/groen_face_trans.png" alt="title"></img>
        <input type="checkbox" id="L" name="rating" value="groen">
        <img src="images/donker_groen_face_trans.png" alt="title"></img>
        <input type="checkbox" id="L" name="rating" value="dgroen">
    </div>
</body>
</html>
