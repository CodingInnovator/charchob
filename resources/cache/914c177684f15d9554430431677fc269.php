<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="<?php echo e($_ENV['APP_URL'] . '/resources/css/output.css'); ?>" rel="stylesheet">
</head>

<body class="font-english bg-gray-900 flex items-center justify-center h-screen">
    <div class="bg-gray-800 text-white p-6 rounded-xl w-fit space-y-8">
        <div class="space-y-3">
            <h1 class="font-bold text-3xl"><?php echo e($_ENV['APP_NAME']); ?> Framework</h1>
            <h2>You can send parameters from the controller and use them in views.</h2>
        </div>
        <div class="space-y-1">
            <div>+ Name: <?php echo e(htmlspecialchars($name)); ?></div>
            <div>+ Email: <?php echo e(htmlspecialchars($email)); ?></div>
            <div>+ Password: <?php echo e(htmlspecialchars($password)); ?></div>
        </div>
        <div>Your application URL: <a class="text-blue-500 underline" href="<?php echo e($_ENV['APP_URL']); ?>"><?php echo e($_ENV['APP_URL']); ?></a></div>
    </div>
</body>

</html><?php /**PATH /Users/alirezatahriri/Documents/GitHub/charchob/resources/views/app.blade.php ENDPATH**/ ?>