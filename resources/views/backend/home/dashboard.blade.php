@extends('backend.master')
@section('title')
    Admin :: Home
@endsection
@section('content')
    @php
        $userLimit = 100;
        $total_admin = App\Models\User::get();
        $total_admin_count = $total_admin->count();
        $total_normal_admin = App\Models\User::where('role', '1')->get();
        $total_normal_admin_count = $total_normal_admin->count();
        $total_super_admin = App\Models\User::where('role', '2')->get();
        $total_super_admin_count = $total_super_admin->count();


    @endphp
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="zmdi zmdi-home"></i>Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                        class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                        class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    @if (Auth::user()->role == '2')
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="{{ route('manage_admin') }}">
                    <div class="card  domains">
                        <div class="body bg-secondary text-white">
                            <h6>Total Normal Admin</h6>
                            <h2> {{ $total_normal_admin_count ?? '' }} / {{ $total_admin_count ?? '' }}</h2>
                            <small>Progress Status</small>
                            <div class="progress">
                                @if ($total_normal_admin_count > 0)
                                    <div class="progress-bar l-green" role="progressbar"
                                        aria-valuenow="{{ $total_normal_admin_count }}" aria-valuemin="0"
                                        aria-valuemax="100"
                                        style="width: {{ ($total_normal_admin_count / $total_admin_count) * 100 }}%;"></div>
                                @else
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 0%;"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="{{ route('manage_admin') }}">
                    <div class="card domains">
                        <div class="body bg-warning text-white">
                            <h6>Total Super Admin</h6>
                            <h2> {{ $total_super_admin_count ?? ''}} / {{ $total_admin_count ?? ''}}</h2>
                            <small>Progress Status</small>
                            <div class="progress">
                                @if ($total_super_admin_count > 0)
                                    <div class="progress-bar l-green" role="progressbar"
                                        aria-valuenow="{{ $total_super_admin_count }}" aria-valuemin="0"
                                        aria-valuemax="100"
                                        style="width: {{ ($total_super_admin_count / $total_admin_count) * 100 }}%;"></div>
                                @else
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 0%;"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @elseif(Auth::user()->role == '1')
        <div class="row">
            <div class="card bg-success py-3 px-3 text-white">
                Hii <strong class="fw-bold text-uppercase">{{ Auth::user()->name }}</strong>, Welcome Back to Admin Panel.
            </div>
        </div>
    @else
        <div class="row">
            <div class="card bg-warning py-5 px-3">
                Hii <strong class="fw-bold text-uppercase">{{ Auth::user()->name }}</strong>, you are reqested to be an
                admin, it's need authorized approval. Please wait till then & in the mean time you can visit our <a
                    href="{{ url('/') }}">Website</a>
            </div>
        </div>
    @endif
@endsection
