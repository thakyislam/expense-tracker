<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center text-primary mb-4">Login</h2>
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    class="form-control" 
                                    required 
                                    value="<?php echo e(old('email')); ?>"
                                    placeholder="Enter your email">
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    class="form-control" 
                                    required 
                                    placeholder="Enter your password">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Log in</button>

                            <!-- Error Handling -->
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger mt-3">
                                    <ul class="mb-0">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Thaky\Downloads\expense-tracker-main\resources\views/auth/login.blade.php ENDPATH**/ ?>