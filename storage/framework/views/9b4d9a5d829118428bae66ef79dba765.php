<?php $__env->startSection('title', 'Vote CRUD'); ?>

<?php $__env->startSection('content'); ?>

    <br><h1>Show All Vote</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vote</th>
                <th>Contents ID</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $votes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($vote->id); ?></td>
                    <?php if($vote->vote == 1): ?>
                        <td>Like</td>
                    <?php else: ?>
                        <td>Dislike</td>
                    <?php endif; ?>
                    <td><?php echo e($vote->contents_id); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
    <h5>SumLike: <?php echo e($SumLike); ?></h5>
    <h5>SumDisLike: <?php echo e($SumDisLike); ?></h5>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blog018\resources\views/vote/index.blade.php ENDPATH**/ ?>