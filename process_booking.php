

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book a Carwash | AUTOCARE</title>
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
      padding: 20px;
      text-align: center;
      color: #ff4d4d;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
      padding: 20px;
    }

    #booking-form {
      background-color: #1c1c1c;
      padding: 30px;
      border-radius: 12px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 0 15px rgba(255, 77, 77, 0.1);
    }

    #booking-form h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #ff4d4d;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: 500;
    }

    input, select {
      width: 100%;
      height: 44px;
      padding: 10px;
      background-color: #222;
      border: 1px solid #444;
      border-radius: 6px;
      color: #fff;
      box-sizing: border-box;
      font-size: 15px;
      margin-bottom: 15px;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #ff4d4d;
      box-shadow: 0 0 5px rgba(255, 77, 77, 0.5);
    }

    button {
      width: 100%;
      height: 44px;
      padding: 12px;
      background-color: #ff4d4d;
      border: none;
      border-radius: 6px;
      color: #000;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
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
    }

    @media (max-width: 500px) {
      #booking-form {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <header>
    <h1>AUTOCARE Carwash Booking</h1>
  </header>

  <main>
    <div id="booking-form">
      <h2>Book a Service</h2>
      <form method="post" action="index.php">
        <input type="hidden" name="action" value="book">

        <label for="uname">Full Name:</label>
        <input type="text" name="uname" required>

        <label for="contact">Contact Number:</label>
        <input type="tel" name="contact" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <label for="service">Select Service:</label>
        <select name="service" required>
          <option value="carwash">Carwash</option>
          <option value="interior_exterior">Interior/Exterior Cleaning</option>
          <option value="carwax">Car Wax</option>
        </select>

        <label for="datetime">Preferred Date & Time:</label>
        <input type="datetime-local" name="datetime" required>

        <button type="submit" name="submit">Book Now</button>
      </form>
    </div>
  </main>

  <footer>
    <p>© 2025 AUTOCARE — All Rights Reserved</p>
  </footer>
</body>
</html>
