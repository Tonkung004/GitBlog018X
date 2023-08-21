;

<?php $__env->startSection('title', 'Content CRUD'); ?>;

<?php $__env->startSection('content'); ?>

    <h1>First time to my blog content.</h1>

    <div class="mb-2">
        <a href="<?php echo e(url('content/create')); ?>" role="button" class="btn btn-sm btn-success">Create Content</a>
    </div>

    <table class="table table-bordered" id="tbContent">
        <thead>
            <tr>
                <th>ID</th>
                <th>Topic</th>
                <th>Tags</th>
                <th>Links</th>
                <th>Create Date</th>
                <th style="width: 150px">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($content->id); ?></td>
                    <td><a href="<?php echo e(url('content/{$content->id}/show')); ?>"><?php echo e($content->topic); ?></a></td>
                    <td><?php echo e($content->tags); ?></td>
                    <td><a href="<?php echo e($content->links); ?>" target="_blank"><?php echo e($content->links); ?></a></td>
                    <td><?php echo e($content->created_at->format('d/m/Y H:i')); ?></td>
                    <td>
                        <a href="<?php echo e(url("content/{$content->id}/edit")); ?>" role="button"
                            class="btn btn-sm btn-warning">Edit</a>

                        <button type="=button" class="btn btn-danger delete-item"
                            data-id="<?php echo e($content->id); ?>">Delete</button>

                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        document.querySelector('#tbContent').addEventListener('click', (e) => {

            if (e.target.matches('.delete-item')) {

                console.log(e.target.dataset.id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be delete this record!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'

                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete($url + '/content/' + e.target.dataset.id).then((response) => {
                            Swal.fire(
                                'Deleted!',
                                'Your record has been deleted.',
                                'success'
                            );

                            setTimeout(() => {
                                window.location.href = $url + '/content';
                            }, 2000);

                        });
                    }
                });
            }
        });
    </script>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BlogXXX\resources\views/content/index.blade.php ENDPATH**/ ?>