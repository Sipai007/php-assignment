<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Feedback Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 40px;
    }

    form {
      background-color: #fff;
      padding: 30px;
      max-width: 600px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      margin-top: 20px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <form action="#" method="POST">
    <h2>Hotel Feedback Form</h2>

    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" placeholder="Your full name" required>

    <label for="contact">Contact Info (Phone or Email):</label>
    <input type="text" id="contact" name="contact" placeholder="Enter phone number or email" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="10" max="100" placeholder="Your age" required>

    <label for="rating">Rate Your Stay (1 = Poor, 5 = Excellent):</label>
    <select id="rating" name="rating" required>
      <option value="">-- Select Rating --</option>
      <option value="1">1 ★</option>
      <option value="2">2 ★★</option>
      <option value="3">3 ★★★</option>
      <option value="4">4 ★★★★</option>
      <option value="5">5 ★★★★★</option>
    </select>

    <label for="comments">Additional Comments:</label>
    <textarea id="comments" name="comments" rows="5" placeholder="Share your experience..."></textarea>

    <input type="submit" name="save" value="Submit Feedback">
  </form>
  <a href="view.php">view Feedback</a>

</body>
</html>

<?php
if(isset($_POST['save']))

{
$name=$_POST['name'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$rating=$_POST['rating'];
$comments=$_POST['comments'];

$query="INSERT INTO tbl_res (name,contact,age,rating,comments) VALUES('$name','$contact','$age','$rating','$comments')";
$data=mysqli_query($con,$query);

echo "<script>
alert('data added ')
</script>";





}

?>
