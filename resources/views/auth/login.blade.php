<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
                        <h3 class="fw-bold text-dark">Welcome Back</h3>
                        <p class="text-muted small">Please sign in to your account</p>
                    </div>

                    <form action="#" method="POST" class="needs-validation" novalidate>
                        
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
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label fw-medium mb-0">Password</label>
                                <a href="#" class="text-primary text-decoration-none small">Forgot password?</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                            </div>
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label text-muted small" for="remember">
                                Remember me on this device
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                            Sign In
                        </button>

                    </form>

                    <!-- Footer Link -->
                    <div class="text-center mt-4">
                        <p class="small text-muted mb-0">Don't have an account? <a href="{{route('auth.registerForm')}}" class="text-primary text-decoration-none fw-semibold">Register here</a></p>
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