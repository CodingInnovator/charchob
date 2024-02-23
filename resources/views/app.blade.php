<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <script src="{{ $_ENV['APP_URL'] . '/resources/js/app.js' }}"></script>
    <link href="{{ $_ENV['APP_URL'] . '/resources/css/output.css' }}" rel="stylesheet">
</head>

<body class="font-english bg-gray-900 flex items-center justify-center h-screen">
    <div class="bg-gray-800 text-white p-6 rounded-xl w-fit space-y-8">
        <div class="space-y-3">
            <h1 class="font-bold text-3xl">{{ $_ENV['APP_NAME'] }} Framework</h1>
            <h2>You can send parameters from the controller and use them in views.</h2>
        </div>
        <div class="space-y-1">
            <div>+ Name: {{ htmlspecialchars($name) }}</div>
            <div>+ Email: {{ htmlspecialchars($email) }}</div>
            <div>+ Password: {{ htmlspecialchars($password) }}</div>
        </div>
        <div>Your application URL: <a class="text-blue-500 underline" href="{{ $_ENV['APP_URL'] }}">{{ $_ENV['APP_URL'] }}</a></div>
    </div>
</body>

</html>