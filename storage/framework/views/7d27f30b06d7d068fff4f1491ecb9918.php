<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expense</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Expense</h2>
        <form action="<?php echo e(route('expenses.update', $expense->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Category Field -->
            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <select name="category_id" class="form-select" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e($expense->category_id == $category->id ? 'selected' : ''); ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Name Field -->
            

            <!-- Amount Field -->
            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" value="<?php echo e(old('amount', $expense->amount)); ?>" required>
            </div>

            <!-- Date Field -->
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" name="date" id="date" class="form-control" value="<?php echo e(old('date', $expense->date)); ?>" required>
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="3" required><?php echo e(old('description', $expense->description)); ?></textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Expense</button>
            <a href="<?php echo e(route('expenses.index')); ?>" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Thaky\Downloads\expense-tracker-main\resources\views/expenses/edit.blade.php ENDPATH**/ ?>