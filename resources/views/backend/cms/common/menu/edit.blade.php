@extends('backend.master')
@section('title')
    CMS :: Manage Menu
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-lg btn-success" href="{{ route('admin.manage_menu') }}">Menu Manage</a>
            <a class="btn btn-lg btn-success" href="{{ route('admin.manage_footer') }}">Footer Manage</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Menu</strong></h2>
                </div>
                <div class="body">
                    <a href="{{ route('admin.manage_menu') }}" class="btn btn-lg btn-dark" title="Go Back">
                        Go Back
                    </a>
                    <form action="{{ route('admin.update_menu') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_home') ? 'has-error' : '' }}">
                                    <label for="menu_home" class="control-label">{{ 'Menu Home' }}</label>
                                    <input class="form-control" name="menu_home" type="text" id="menu_home" value="{{ isset($menu->menu_home) ? $menu->menu_home : '' }}">
                                    {!! $errors->first('menu_home', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_about_us') ? 'has-error' : '' }}">
                                    <label for="menu_about_us" class="control-label">{{ 'Menu About Us' }}</label>
                                    <input class="form-control" name="menu_about_us" type="text" id="menu_about_us" value="{{ isset($menu->menu_about_us) ? $menu->menu_about_us : '' }}">
                                    {!! $errors->first('menu_about_us', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_gallery') ? 'has-error' : '' }}">
                                    <label for="menu_gallery" class="control-label">{{ 'Menu Gallery' }}</label>
                                    <input class="form-control" name="menu_gallery" type="text" id="menu_gallery" value="{{ isset($menu->menu_gallery) ? $menu->menu_gallery : '' }}">
                                    {!! $errors->first('menu_gallery', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_contact_us') ? 'has-error' : '' }}">
                                    <label for="menu_contact_us" class="control-label">{{ 'Menu Contact Us' }}</label>
                                    <input class="form-control" name="menu_contact_us" type="text" id="menu_contact_us" value="{{ isset($menu->menu_contact_us) ? $menu->menu_contact_us : '' }}">
                                    {!! $errors->first('menu_contact_us', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_course') ? 'has-error' : '' }}">
                                    <label for="menu_course" class="control-label">{{ 'Menu Course' }}</label>
                                    <input class="form-control" name="menu_course" type="text" id="menu_course" value="{{ isset($menu->menu_course) ? $menu->menu_course : '' }}">
                                    {!! $errors->first('menu_course', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group {{ $errors->has('menu_registration') ? 'has-error' : '' }}">
                                    <label for="menu_registration" class="control-label">{{ 'Menu Registration' }}</label>
                                    <input class="form-control" name="menu_registration" type="text" id="menu_registration" value="{{ isset($menu->menu_registration) ? $menu->menu_registration : '' }}">
                                    {!! $errors->first('menu_registration', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group {{ $errors->has('registration_link') ? 'has-error' : '' }}">
                                    <label for="registration_link" class="control-label">{{ 'Registration Link' }}</label>
                                    <textarea rows="4" class="form-control" name="registration_link" placeholder="Please type what you want...">{{ isset($menu->registration_link) ? $menu->registration_link : '' }}</textarea>
                                    {!! $errors->first('registration_link', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Logo Image</h2>
                                    </div>
                                    <div class="body">
                                        <img class="img-fluid" src="{{ asset($menu->logo) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h2>Logo Image</h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" name="logo" class="dropify" accept=".jpg, .png, .jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
