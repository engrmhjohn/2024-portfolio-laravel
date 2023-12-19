@extends('backend.master')
@section('title')
CMS :: Common
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-lg btn-success" href="{{ route('admin.manage_menu') }}">Menu Manage</a>
        <a class="btn btn-lg btn-success" href="{{ route('admin.manage_footer') }}">Footer Manage</a>
    </div>
</div>
@endsection