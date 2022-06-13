

<?php $__env->startSection('content'); ?>

<div class="rect-1200-7 mgl-350 mgt-100 bg-white purple bor10 cont-shdw">
    <br>
    <h1 class="align-c">Riwayat Pemesanan</h1>
    <!-- Auto Read with Loop -->
    <div class="flex warp">
        <div class="">
            <h5 class="rect-600 bg-purple white mgl-100 pdl-10">Tanggal Pemesanan</h5>
            <a href="/print">
                <div class="borlog rect-600 mgl-300 mgt-20 purple">
                    <h3 class="align-c">Riwayat 1</h3>
                </div>
            </a>
            <a href="/print">
                <div class="borlog rect-600 mgl-300 mgt-20 purple">
                    <h3 class="align-c">Riwayat 2</h3>
                </div>
            </a>
        </div>
        <div class="">
            <h5 class="rect-600 bg-purple white mgl-100 pdl-10">Tanggal Pemesanan</h5>
            <a href="/print">
                <div class="borlog rect-600 mgl-300 mgt-20 purple">
                    <h3 class="align-c">Riwayat 1</h3>
                </div>
            </a>
            <a href="/print">
                <div class="borlog rect-600 mgl-300 mgt-20 purple">
                    <h3 class="align-c">Riwayat 2</h3>
                </div>
            </a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\xampp\htdocs\busket\resources\views/history.blade.php ENDPATH**/ ?>