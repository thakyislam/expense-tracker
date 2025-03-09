<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expense List</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
       
        table, th, td {
            border: 1px solid black !important;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Expense List</h2>

        

     
        <div class="mb-3 text-end">
            <a href="<?php echo e(route('expenses.create')); ?>" class="btn btn-primary">Add Expense</a>
        </div>
      

        <table class="table table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($expense->id); ?></td>
                    <td><?php echo e($expense->category->name); ?></td>
                    <td>$<?php echo e(number_format($expense->amount, 2)); ?></td>
                    <td><?php echo e($expense->date); ?></td>
                    <td><?php echo e($expense->description); ?></td>
                    <td>
                        <!-- Edit Button -->
                       <a href="<?php echo e(route('expenses.edit', $expense->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Button -->
                        <form action="<?php echo e(route('expenses.destroy', $expense->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>  
                            <?php echo method_field('DELETE'); ?>  
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</body>
</html>
<?php /**PATH C:\Users\Thaky\Downloads\expense-tracker-main\resources\views/expenses/index.blade.php ENDPATH**/ ?>