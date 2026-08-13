<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Our Platform</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Custom Styling for Symmetrical Aesthetics */
    body {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .hero-section {
      padding: 80px 0 60px;
    }
    .feature-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 12px;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
    }
    .icon-wrapper {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar (Symmetrical Layout) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">
        <i class="bi bi-layers-half me-2"></i>PROJECT LOGO
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link active fw-semibold" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Contact</a></li>
        </ul>
        <div class="d-flex gap-2">
          <a href="/login" class="btn btn-outline-primary rounded-pill px-4">Log In</a>
          <a href="/register" class="btn btn-primary rounded-pill px-4">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section (Centered Symmetrical Layout) -->
  <section class="hero-section text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <span class="badge bg-primary-subtle text-primary fw-semibold px-3 py-2 rounded-pill mb-3">
            Welcome to the Future
          </span>
          <h1 class="display-4 fw-bold text-dark mb-3">
            Streamline Your Workflow with Precision
          </h1>
          <p class="lead text-secondary mb-4">
            A balanced and powerful application tailored to manage your tasks, secure your data, and scale your operations efficiently.
          </p>
          <div class="d-flex justify-content-center gap-3 mb-5">
            <a href="/register" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm">
              Get Started Free <i class="bi bi-arrow-right ms-2"></i>
            </a>
            <a href="#features" class="btn btn-white border btn-lg rounded-pill px-4 shadow-sm">
              Explore Features
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Symmetrical 3-Column Feature Section -->
  <section id="features" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Why Choose Our System?</h2>
        <p class="text-muted">Designed with symmetry, simplicity, and performance in mind.</p>
      </div>

      <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-4">
          <div class="card feature-card h-100 p-4 text-center shadow-sm">
            <div class="card-body">
              <div class="icon-wrapper bg-primary-subtle text-primary">
                <i class="bi bi-shield-check fs-3"></i>
              </div>
              <h4 class="card-title fw-bold">Secure Access</h4>
              <p class="card-text text-muted">
                Enterprise-grade security using modern authentication standards like Laravel Sanctum to protect your account.
              </p>
            </div>
          </div>
        </div>

        <!-- Feature 2 (Center Focus) -->
        <div class="col-md-4">
          <div class="card feature-card h-100 p-4 text-center shadow-sm border-primary">
            <div class="card-body">
              <div class="icon-wrapper bg-primary text-white">
                <i class="bi bi-lightning-charge fs-3"></i>
              </div>
              <h4 class="card-title fw-bold">Fast Performance</h4>
              <p class="card-text text-muted">
                Optimized endpoints and sleek frontend assets ensure quick page loads and smooth interactions.
              </p>
            </div>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
          <div class="card feature-card h-100 p-4 text-center shadow-sm">
            <div class="card-body">
              <div class="icon-wrapper bg-primary-subtle text-primary">
                <i class="bi bi-graph-up-arrow fs-3"></i>
              </div>
              <h4 class="card-title fw-bold">Scalable Architecture</h4>
              <p class="card-text text-muted">
                Built to seamlessly grow from a lightweight project to an enterprise platform without friction.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Symmetrical Footer -->
  <footer class="mt-auto py-4 bg-dark text-white-50 border-top">
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-md-4 text-md-start">
          <span class="fw-semibold text-white">&copy; 2026 Your Project Name</span>
        </div>
        <div class="col-md-4 my-2 my-md-0">
          <a href="#" class="text-white-50 me-3"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="text-white-50 me-3"><i class="bi bi-twitter-x fs-5"></i></a>
          <a href="#" class="text-white-50"><i class="bi bi-github fs-5"></i></a>
        </div>
        <div class="col-md-4 text-md-end">
          <a href="#" class="text-white-50 me-3 text-decoration-none">Privacy</a>
          <a href="#" class="text-white-50 text-decoration-none">Terms</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>