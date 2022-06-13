<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(url('css/main.css')); ?>">
    <script src="<?php echo e(url('js/main.js')); ?>"></script>
</head>
<body class="bg-load">
    <div class="center-left center-top">
        <img class="logo" src="https://cdn.discordapp.com/attachments/697333601410220033/981986217375715328/Logo.png.png" alt="logo">
    </div>
    <div class="center-left">
        <div id="loadProgress">
            <div id="loadBar">
                <script>
                    loading();
                </script>
                <?php
                    return view('home');
                ?>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Windows\xampp\htdocs\busket\resources\views/index.blade.php ENDPATH**/ ?>