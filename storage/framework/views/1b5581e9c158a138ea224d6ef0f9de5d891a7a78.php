

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: cyan;"><?php echo e(__('instruktur')); ?></div>

                <div class="card-body">
                <a class="btn btn-info" href="/instruktur/create">add instruktur</a>
<table class="table table-hover">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>no_ktp</th>
        <th>no_sim</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php $__currentLoopData = $instruktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($i->id); ?></td>
        <td><?php echo e($i->nama); ?></td>
        <td><?php echo e($i->no_ktp); ?></td>
        <td><?php echo e($i->no_sim); ?></td>
        <td><?php echo e($i->alamat); ?></td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/instruktur/<?php echo e($i->id); ?>/edit">edit</a>
            <form action="/instruktur/<?php echo e($i->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/instruktur/index.blade.php ENDPATH**/ ?>