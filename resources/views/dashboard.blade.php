@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid p-4">
    <!-- Top Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Dashboard Overview</h3>
            <p class="text-muted small mb-0">Welcome back, Superman! Here is what's happening today.</p>
        </div>
        <div>
            <button class="btn btn-primary btn-sm rounded-2 shadow-sm me-2">
                <i class="bi bi-plus-lg me-1"></i> Add Product
            </button>
            <button class="btn btn-outline-secondary btn-sm rounded-2 shadow-sm">
                <i class="bi bi-download me-1"></i> Export Report
            </button>
        </div>
    </div>

    <!-- Metric Cards (Symmetric 4-Column Grid) -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-uppercase text-muted fw-semibold small">Total Products</span>
                        <h3 class="fw-bold my-1">1,248</h3>
                        <span class="text-success small fw-medium"><i class="bi bi-arrow-up-short"></i> +12% this month</span>
                    </div>
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3 fs-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-seam"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-uppercase text-muted fw-semibold small">Categories</span>
                        <h3 class="fw-bold my-1">24</h3>
                        <span class="text-muted small">Active groups</span>
                    </div>
                    <div class="bg-info bg-opacity-10 text-info p-3 rounded-3 fs-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-uppercase text-muted fw-semibold small">Low Stock Alert</span>
                        <h3 class="fw-bold my-1 text-danger">8</h3>
                        <span class="text-danger small fw-medium"><i class="bi bi-exclamation-triangle"></i> Action required</span>
                    </div>
                    <div class="bg-danger bg-opacity-10 text-danger p-3 rounded-3 fs-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-exclamation-octagon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-uppercase text-muted fw-semibold small">Total Users</span>
                        <h3 class="fw-bold my-1">16</h3>
                        <span class="text-success small fw-medium"><i class="bi bi-person-check"></i> All active</span>
                    </div>
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-3 fs-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Symmetric Main Content Area (Two Equal Columns) -->
    <div class="row g-4">
        <!-- Left Section: Low Stock Items -->
        <div class="col-12 col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 pt-3 pb-0 d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0">Low Stock Warning</h5>
                    <a href="#" class="text-decoration-none small">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr class="text-muted small">
                                    <th>PRODUCT</th>
                                    <th>CATEGORY</th>
                                    <th>IN STOCK</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-semibold">Wireless Mouse M185</td>
                                    <td>Electronics</td>
                                    <td class="text-danger fw-bold">2 units</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Critical</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Mechanical Keyboard K380</td>
                                    <td>Electronics</td>
                                    <td class="text-warning fw-bold">5 units</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Low</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">Office Chair Ergonomic</td>
                                    <td>Furniture</td>
                                    <td class="text-warning fw-bold">4 units</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Low</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">HD Monitor 27 inch</td>
                                    <td>Electronics</td>
                                    <td class="text-danger fw-bold">1 unit</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Critical</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section: Quick Actions & Recent Activity -->
        <div class="col-12 col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 pt-3 pb-0">
                    <h5 class="fw-bold mb-0">Recent Activity</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 d-flex align-items-center border-0 mb-2">
                            <div class="bg-light p-2 rounded-circle me-3">
                                <i class="bi bi-box-arrow-in-down text-primary fs-5"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold small">Stock Added: 50x USB Cable</div>
                                <div class="text-muted extra-small">Added by Superman • 10 mins ago</div>
                            </div>
                        </li>
                        <li class="list-group-item px-0 d-flex align-items-center border-0 mb-2">
                            <div class="bg-light p-2 rounded-circle me-3">
                                <i class="bi bi-folder-plus text-info fs-5"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold small">New Category: Office Supplies</div>
                                <div class="text-muted extra-small">Created by Superman • 2 hrs ago</div>
                            </div>
                        </li>
                        <li class="list-group-item px-0 d-flex align-items-center border-0">
                            <div class="bg-light p-2 rounded-circle me-3">
                                <i class="bi bi-person-plus text-success fs-5"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold small">New User Registered: Batman</div>
                                <div class="text-muted extra-small">Role: Inventory Manager • 5 hrs ago</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection