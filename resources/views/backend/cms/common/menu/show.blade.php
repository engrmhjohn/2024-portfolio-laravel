@extends('backend.master')
@section('title')
CMS :: Menu
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
                    <i class="zmdi zmdi-mail-reply"></i> Go Back
                </a>
                <form action="{{ route('admin.save_menu') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_first_name') ? 'has-error' : '' }}">
                                <label for="en_menu_first_name" class="control-label">{{ 'Menu First Name' }}</label>
                                <input class="form-control" name="en_menu_first_name" type="text" id="en_menu_first_name">
                                {!! $errors->first('en_menu_first_name', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_last_name') ? 'has-error' : '' }}">
                                <label for="en_menu_last_name" class="control-label">{{ 'Menu Last Name' }}</label>
                                <input class="form-control" name="en_menu_last_name" type="text" id="en_menu_last_name">
                                {!! $errors->first('en_menu_last_name', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_intro') ? 'has-error' : '' }}">
                                <label for="en_menu_intro" class="control-label">{{ 'Menu Intro' }}</label>
                                <input class="form-control" name="en_menu_intro" type="text" id="en_menu_intro">
                                {!! $errors->first('en_menu_intro', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_about') ? 'has-error' : '' }}">
                                <label for="en_menu_about" class="control-label">{{ 'Menu About' }}</label>
                                <input class="form-control" name="en_menu_about" type="text" id="en_menu_about">
                                {!! $errors->first('en_menu_about', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_service') ? 'has-error' : '' }}">
                                <label for="en_menu_service" class="control-label">{{ 'Menu Service' }}</label>
                                <input class="form-control" name="en_menu_service" type="text" id="en_menu_service">
                                {!! $errors->first('en_menu_service', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_team') ? 'has-error' : '' }}">
                                <label for="en_menu_team" class="control-label">{{ 'Menu Team' }}</label>
                                <input class="form-control" name="en_menu_team" type="text" id="en_menu_team">
                                {!! $errors->first('en_menu_team', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_education') ? 'has-error' : '' }}">
                                <label for="en_menu_education" class="control-label">{{ 'Menu Education' }}</label>
                                <input class="form-control" name="en_menu_education" type="text" id="en_menu_education">
                                {!! $errors->first('en_menu_education', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_work') ? 'has-error' : '' }}">
                                <label for="en_menu_work" class="control-label">{{ 'Menu Work' }}</label>
                                <input class="form-control" name="en_menu_work" type="text" id="en_menu_work">
                                {!! $errors->first('en_menu_work', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('en_menu_contact') ? 'has-error' : '' }}">
                                <label for="en_menu_contact" class="control-label">{{ 'Menu Contact' }}</label>
                                <input class="form-control" name="en_menu_contact" type="text" id="en_menu_contact">
                                {!! $errors->first('en_menu_contact', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection