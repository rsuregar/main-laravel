@extends('layouts.atlantis')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Avatars</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Base</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Avatars</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sizing</h4>

                    </div>
                    <div class="card-body">
                        <p class="demo">
                            <div class="avatar avatar-xxl">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xl">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-lg">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-sm">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Status Indicator</h4>

                    </div>
                    <div class="card-body">
                        <p class="demo">
                            <div class="avatar avatar-online">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-offline">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-away">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Shape</h4>

                    </div>
                    <div class="card-body">
                        <p class="demo">
                            <div class="avatar">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded">
                            </div>

                            <div class="avatar">
                                <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Group</h4>

                    </div>
                    <div class="card-body">
                        <p class="demo">
                            <div class="avatar-group">
                                <div class="avatar">
                                    <img src="{{ asset('atlantis') }}/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('atlantis') }}/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('atlantis') }}/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                </div>
                                <div class="avatar">
                                    <span class="avatar-title rounded-circle border border-white">CF</span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ini adaalah halaman avatar --}}
</div>
@endsection
