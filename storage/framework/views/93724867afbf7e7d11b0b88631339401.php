<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .login-container {
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-facebook {
            background-color: #1877f2;
            color: white;
            border-radius: 50px;
            font-size: 18px;
            padding: 10px;
        }
        .btn-facebook:hover {
            background-color: #0d65d9;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h2 class="mb-3 text-primary fw-bold">Expense Tracker</h2>

        <div class="login-container">
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('show.login')); ?>" class="btn btn-facebook w-100 mb-3">
                <i class="bi bi-person-circle"></i> Login
            </a>
            <a href="<?php echo e(route('show.register')); ?>" class="btn btn-success w-100 mb-3">
                <i class="bi bi-person-plus"></i> Register
            </a>
            <?php endif; ?>
         
            <?php if(auth()->guard()->check()): ?>
            <span class="border-r-2 pr-2">
                hi ,<?php echo e(Auth::user()->name); ?>

            </span>
            <a href="/expenses" class="btn btn-outline-dark w-100">
                <i class="bi bi-list-ul"></i> Check Expenses
            </a>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger w-100 mb-3">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
            <?php endif; ?>
            
           
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Thaky\Downloads\expense-tracker-main\resources\views/home.blade.php ENDPATH**/ ?>