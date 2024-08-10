<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .male {
            background-color: #b3d9ff;
        }
        .female {
            background-color: #ffb3b3;
        }
        .button-group {
            text-align: center;
            margin-top: 20px;
        }
        .button-group a {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }
        .button-group a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Summary</h1>
        <?php
        
        if (empty($_POST['name']) || empty($_POST['email'])) {
            header("Location: register.php");
            exit();
        }

        $name = htmlspecialchars($_POST['name']);
        $dob = htmlspecialchars($_POST['dob']);
        $sex = htmlspecialchars($_POST['sex']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $department = htmlspecialchars($_POST['department']);
        $program = htmlspecialchars($_POST['program']);
        $mobile = htmlspecialchars($_POST['mobile']);

        
        $bgColor = ($sex === 'Male') ? 'male' : 'female';
        ?>

        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td class="<?php echo $bgColor; ?>"><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>College Department</td>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <td>Program</td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>

        <div class="button-group">
            <a href="register.php">Go Back</a>
        </div>
    </div>
</body>
</html>