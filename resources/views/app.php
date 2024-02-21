<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            line-height: 1.75;
        }

        html,
        body {
            font-size: 16px;
            box-sizing: border-box;
            font-family: 'Tomorrow', monospace;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 18px !important;
            font-weight: 500;
        }

        .container {
            margin: 25px;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
        }

        .heading {
            margin-left: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>User Information</h1>
            <h2>Show info like (name and email and password)</h2>
        </div>
        <div>+ Name: <?php echo $data['name'] ?></div>
        <div>+ Email: <?php echo $data['email'] ?></div>
        <div>+ Password: <?php echo $data['password'] ?></div>
    </div>
</body>

</html>