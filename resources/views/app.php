<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="<?php echo $_ENV['APP_URL'] . "/resources/css/output.css" ?>" rel="stylesheet">
</head>

<body class="font-english bg-gray-900 flex items-center justify-center h-screen">
    <div class="bg-gray-800 text-white p-6 rounded-xl w-fit space-y-8">
        <div class="space-y-3">
            <h1 class="font-bold text-3xl"><?php echo $_ENV['APP_NAME'] ?> Framework</h1>
            <h2>You can sent parameter from controller and use in views.</h2>
        </div>
        <div class="space-y-1">
            <div>+ Name: <?php echo $data['name'] ?></div>
            <div>+ Email: <?php echo $data['email'] ?></div>
            <div>+ Password: <?php echo $data['password'] ?></div>
        </div>
        <div>You're application URL: <a class="text-blue-500 underline" href="<?php echo $_ENV['APP_URL'] ?>"><?php echo $_ENV['APP_URL'] ?></a></div>
    </div>
</body>

</html>