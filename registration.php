<?php

include "connection.php"; // ✅ This must be at the top
if (isset($_POST['register'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $enc_password = md5($pass);

    $sql_insert = "INSERT INTO wis (Username, Password, Firstname, Lastname, Birth, Email, Contact) 
                   VALUES ('$uname', '$enc_password', '$fname', '$lname', '$birth', '$email', '$contact')";

    $result = mysqli_query($conn, $sql_insert);

if ($result) {
    echo "<script>alert('REGISTERED SUCCESSFULLY'); window.location.href = 'login.php';</script>";
    exit(); // always good to stop script after redirect
} else {
    echo "<script>alert('Registration failed. Please try again.');</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register | AUTOCARE</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #111;
      color: #f1f1f1;
    }

    header {
      background-color: #000;
      color: #ff4d4d;
      text-align: center;
      padding: 20px;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
      padding: 20px;
    }

    #registration-form {
      background-color: #1c1c1c;
      padding: 30px;
      border-radius: 12px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 0 15px rgba(255, 77, 77, 0.2);
    }

    #registration-form h2 {
      text-align: center;
      color: #ff4d4d;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin: 12px 0 5px;
      font-weight: 500;
    }

    input {
      width: 100%;
      height: 44px;
      padding: 10px 12px;
      background-color: #222;
      border: 1px solid #444;
      border-radius: 6px;
      color: #fff;
      box-sizing: border-box;
      font-size: 15px;
    }

    input:focus {
      outline: none;
      border-color: #ff4d4d;
      box-shadow: 0 0 5px rgba(255, 77, 77, 0.5);
    }

    button {
      width: 100%;
      height: 44px;
      padding: 10px;
      background-color: #ff4d4d;
      border: none;
      border-radius: 6px;
      color: #000;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      margin-top: 10px;
    }

    button:hover {
      background-color: #cc0000;
    }

    footer {
      background-color: #000;
      color: #888;
      text-align: center;
      padding: 12px;
      font-size: 0.9em;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    @media (max-width: 500px) {
      #registration-form {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <header>
    <h1>AUTOCARE</h1>
  </header>

  <main>
    <div id="registration-form">
      <h2>Register</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="uname">Username:</label>
        <input type="text" name="uname" required>

        <label for="pass">Password:</label>
        <input type="password" name="pass" required>

        <label for="fname">First Name:</label>
        <input type="text" name="fname" required>

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" required>

        <label for="birth">Date of Birth:</label>
        <input type="date" name="birth" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required>

        <label for="contact">Contact Number:</label>
        <input type="tel" name="contact" required>

        <button name="register">Register</button>
        
      </form>
    </div>
  </main>

  <footer>
    <p>© 2025 AUTOCARE — All Rights Reserved<br>Made by Rishi A.</p>
  </footer>
</body>
</html>
