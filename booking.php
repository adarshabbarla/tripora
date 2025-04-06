<!DOCTYPE html>
<html>
<head>
<?php
$submitted = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST["destination"];
    $departure = $_POST["departure"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $conn = new mysqli("localhost", "root", "", "bookingform");

    if ($conn->connect_error) {
        $error = "Database connection failed";
    } else {
        $stmt = $conn->prepare("INSERT INTO `form` (`destination`, `departure_city`, `name`, `phone`, `email`)  VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $destination, $departure, $name, $phone, $email);

        if ($stmt->execute()) {
            $submitted = true;
        } else {
            $error = "Insert error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>

 <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Travel Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            width: 400px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type=text], input[type=email] {
            width: 100%;
            padding: 10px 14px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 15px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1d4ed8;
        }
        .success {
            background-color: #d1fae5;
            color: #065f46;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
        }
        .error {
            background-color: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>FILL THE FORM</h2>

    <?php if ($submitted): ?>
        <div class="success">✔ Form submitted successfully! Payment link sent to your email.</div>
    <?php elseif ($error): ?>
        <div class="error">⚠ <?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <input type="text" name="destination" placeholder="Destination" required>
        </div>
        <div class="form-group">
            <input type="text" name="departure" placeholder="Departure City" required>
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
