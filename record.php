<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudent's Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<marquee behavior="alternate"><h1>Tangaza University College Student's Details</h1></marquee>

<div>
<form action="connect.php" method="post" name="Reg" id="form">

  <label>Admission Number:</label>
  <input type="text" name="Admission_Number" id="AdminNo" placeholder="Enter your Admn No" required autocomplete="off"><br>

  <label>Name:</label>
  <input type="text" name="Name" id="Name" placeholder="Enter your Name" required autocomplete="off"><br>

  <label>Course:</label>
  <input type="text" name="Course" id="Course" placeholder="Enter your Course" required autocomplete="off"><br>

  <label>Year of Admission:</label>
  <input type="text" name="Year_of_Admission" id="AdminYr" placeholder="Enter your year of Admn" required autocomplete="off" /> <br><br><br>

  <button type="submit" id="btn">Save Data</button>
     </form>
</div>
</body>
</html>