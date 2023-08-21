;

<?php $__env->startSection('title', 'Content CRUD'); ?>;

<?php $__env->startSection('content'); ?>
    <?php if(empty($contents->id)): ?>
        <h1>Create Content</h1>
    <?php else: ?>
        <h1>Edit Content</h1>
    <?php endif; ?>

    <form action="<?php echo e(empty($contents->id) ? url('/content') : url('/content/' . $contents->id)); ?>" method="post">

        <?php if(!empty($contents->id)): ?>
            <?php echo method_field('put'); ?>
        <?php endif; ?>

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="topic">Topic</label>

            <input type="text" class="form-control" id="topic" name="topic"
                value="<?php echo e(old('topic', $contents->topic)); ?>">

            <?php $__errorArgs = ['topic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback d-block"><?php echo e($errors->first('topic')); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>


        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo e(old('description', $contents->description)); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback
                    d-block"><?php echo e($errors->first('description')); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>
        <div class="mb-3">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags"
                value="<?php echo e(old('tags', $contents->tags)); ?>">
            <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback
                    d-block"><?php echo e($errors->first('tags')); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="links">Links</label>
            <input type="text" class="form-control" id="links" name="links"
                value="<?php echo e(old('links', $contents->links)); ?>">
            <?php $__errorArgs = ['links'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback
                    d-block"><?php echo e($errors->first('links')); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
        <a href="<?php echo e(url('/content')); ?>"" role="button" class="btn btn-sm btn-danger">Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blog018\resources\views/content/form.blade.php ENDPATH**/ ?>