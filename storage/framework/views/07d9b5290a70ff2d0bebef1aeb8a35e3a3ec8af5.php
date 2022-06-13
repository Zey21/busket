

<?php $__env->startSection('content'); ?>

<div>
    <div class="rect-600-4 bg-white mgl-700 mgt-200 bor10 purple cont-shdw">
        <br><br>
        <h1 class="mgl-230">Register</h1>
        <form action="/login">
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text" placeholder="username"> 
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text"placeholder="password"> <br>
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text" placeholder="email">
            <input class="rect-200-04 borlog purple mgl-40 mgt-10 pdl-20" type="text"placeholder="NIK"> <br>
            <input class="rect-500-04 borlog purple mgl-40 mgt-10 pdl-20" type="text" placeholder="no-telf">
            <br>
            <button type="submit" class="rect-500-04-btn mgl-40 mgt-10 borlog white bg-purple pdl">Submit</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\xampp\htdocs\busket\resources\views/signup.blade.php ENDPATH**/ ?>