<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4 p-sm-5">
                    
                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-dark">Create an Account</h3>
                        <p class="text-muted small">Please fill in the details below to register</p>
                    </div>

                    <form action="{{route('auth.register')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-medium">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-medium">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            </div>
                        </div>


                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-medium">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                            Register Account
                        </button>

                    </form>

                    <!-- Footer Link -->
                    <div class="text-center mt-4">
                        <p class="small text-muted mb-0">Already have an account? <a href="{{route('auth.login')}}" class="text-primary text-decoration-none fw-semibold">Sign in</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>