<?php $__env->startSection('title', 'Content CRUD'); ?>

<?php $__env->startSection('content'); ?>

    <br><h1>First time to my blog content.</h1>

    <div class="mb-2">
        <a href="<?php echo e(url('content/create')); ?>" role="button" class="btn btn-sm btn-success">Create Content</a>
        <a href="<?php echo e(url('vote')); ?>" role="button" class="btn btn-sm btn-success">Show All Vote</a>
    </div>

    <table class="table table-bordered" id="tbContent">
        <thead>
            <tr>
                <th>ID</th>
                <th>Topic</th>
                <th>Tags</th>
                <th>Links</th>
                <th>Create Date</th>
                <th style="width: 80px">Status</th>
                <th style="width: 180px">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($content->id); ?></td>
                    <td><a href="<?php echo e(url('#')); ?>" class="detail-item"
                        data-topic="[ <?php echo e($content->topic); ?> ]"
                        data-detail="<?php echo e($content->description); ?>"><?php echo e($content->topic); ?></a></td>
                    <td><?php echo e($content->tags); ?></td>
                    <td><a href="<?php echo e($content->links); ?>" target="_blank"><?php echo e($content->links); ?></a></td>
                    <td><?php echo e($content->created_at->format('d/m/Y H:i')); ?></td>
                    <?php if($content->status == 1): ?>
                        <td>แสดง</td>
                    <?php else: ?>
                        <td>ไม่แสดง</td>
                    <?php endif; ?>
                    <td>
                        <a href="<?php echo e(url("content/{$content->id}/edit")); ?>" role="button"
                            class="btn btn-sm btn-warning">Edit</a>
                        <?php if($content->status == 1): ?>
                            <button type="=button" class="btn btn-sm btn-danger delete-item"
                            data-id="<?php echo e($content->id); ?>">Disable</button>
                        <?php else: ?>
                            <button type="=button" class="btn btn-sm btn-success delete-item"
                            data-id="<?php echo e($content->id); ?>">Enable</button>
                        <?php endif; ?>
                        <a href="<?php echo e(url("vote/{$content->id}/create")); ?>" role="button"
                            class="btn btn-sm btn-info">Vote</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
    <?php echo e($contents->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        document.querySelector('#tbContent').addEventListener('click', (e) => {
            if (e.target.matches('.delete-item')) {
                console.log(e.target.dataset.id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be edit status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete($url + '/content/' + e.target.dataset.id).then((response) => {
                            Swal.fire(
                                'Success!',
                                'Your status has been edited.',
                                'success'
                            );
                            setTimeout(() => {
                                window.location.href = $url + '/content';
                            }, 2000);
                        });
                    }
                });
            }
            else if(e.target.matches('.detail-item')) {
                Swal.fire({
                    title: e.target.dataset.topic,
                    text: e.target.dataset.detail,
                    icon: 'info',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'close'
                })
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blog018\resources\views/content/index.blade.php ENDPATH**/ ?>