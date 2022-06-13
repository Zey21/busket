

<?php $__env->startSection('content'); ?>

<div>
    <div class="rect-300-4 bg-white logcenter-left mgt-200 bor10 purple cont-shdw">
        <br><br>
        <img class="mgl-110 icon-1" src="https://cdn.discordapp.com/attachments/697333601410220033/984081540155838464/User_2.png" alt="">
        <h1 class="mgl-110">Login</h1>
        <form action="/user">
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text" placeholder="username">
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text"placeholder="password">
            <br>
            <button type="submit" class="rect-200-04-btn mgl-40 mgt-10 borlog white bg-purple pdl">Submit</button>
        </form>
        <h5 class="mgl-55">Belum punya akun ? <a class="blue" href="/signup"> Daftar disini </a></h5>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\xampp\htdocs\busket\resources\views/login.blade.php ENDPATH**/ ?>