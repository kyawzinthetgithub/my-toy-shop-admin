@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <h3 class="mb-3 fs-5">Admin Dashboard</h3>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="#"
                                    class="nav-link d-flex justify-content-between align-items-center">Admin
                                    List <i class="ti ti-file-description fs-6"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="#"
                                    class="nav-link d-flex justify-content-between align-items-center">User
                                    List <i class="fa-solid fa-users"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="{{ route('admin#categoryList') }}"
                                    class="nav-link d-flex justify-content-between align-items-center">Category <i
                                        class="fa-solid fa-bars-staggered"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="{{ route('admin#productList') }}"
                                    class="nav-link d-flex justify-content-between align-items-center">Products <i
                                        class="fa-solid fa-shop"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="#"
                                    class="nav-link d-flex justify-content-between align-items-center">Orders <i
                                        class="ti ti-cards"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-danger">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold"><a href="#"
                                    class="nav-link d-flex justify-content-between align-items-center">Contact Message <i
                                        class="fa-solid fa-comment-dots"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
