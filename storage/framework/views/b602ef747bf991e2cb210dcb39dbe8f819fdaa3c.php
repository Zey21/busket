<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Local -->
    <link rel="stylesheet" href="<?php echo e(url('css/main.css')); ?>">
    <script src="<?php echo e(url('js/main.js')); ?>"></script>
</head>
<body class="bg-base">
    <div class="flex mgt-100 font-Poppin">
        <div class="mgl-100">
            <a href="/user">
                <img class="logo" src="https://cdn.discordapp.com/attachments/697333601410220033/981986217375715328/Logo.png.png" alt="logo">
            </a>
        </div>
        <div class="mgl-500 mgt-15">
            <a class="st-25 white" href="/user">
                Home
            </a>
        </div>
        <div class="mgl-150 mgt-15">
            <a class="st-25 white" href="/ticket">
                Pesan
            </a>
        </div>
        <div class="mgl-150 mgt-15">
            <a class="st-25 white" href="/history">
                Riwayat
            </a>
        </div>
        <div class="mgl-150 mgt-15">
            <a class="st-25 white" href="/account">
                Account
            </a>
        </div>
        <div class="mgl-150 mgt-15">
            <div class="st-25 rect-100 bg-white bor10">
                <a  class="pdl-12" href="/home">
                    Logout
                </a>
            </div>
        </div>
    </div>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\Windows\xampp\htdocs\busket\resources\views/layout/user.blade.php ENDPATH**/ ?>