@extends('backend.master')
@section('title')
CMS :: Footer
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
                <h2><strong>Footer</strong></h2>
            </div>
            <div class="body">
                <a href="{{ route('admin.manage_footer') }}" class="btn btn-lg btn-dark" title="Go Back">
                    <i class="zmdi zmdi-mail-reply"></i> Go Back
                </a>
                <form action="{{ route('admin.save_footer') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_contact_title') ? 'has-error' : '' }}">
                                <label for="footer_contact_title" class="control-label">{{ 'Footer Contact Title' }}</label>
                                <input class="form-control" name="footer_contact_title" type="text" id="footer_contact_title">
                                {!! $errors->first('footer_contact_title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_address') ? 'has-error' : '' }}">
                                <label for="footer_address" class="control-label">{{ 'Footer Address' }}</label>
                                <textarea rows="4" class="form-control" name="footer_address" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('footer_address', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_phone') ? 'has-error' : '' }}">
                                <label for="footer_phone" class="control-label">{{ 'Footer Phone' }}</label>
                                <input class="form-control" name="footer_phone" type="text" id="footer_phone">
                                {!! $errors->first('footer_phone', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_email') ? 'has-error' : '' }}">
                                <label for="footer_email" class="control-label">{{ 'Footer Email' }}</label>
                                <input class="form-control" name="footer_email" type="text" id="footer_email">
                                {!! $errors->first('footer_email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('fb_link') ? 'has-error' : '' }}">
                                <label for="fb_link" class="control-label">{{ 'Footer Facebook Link' }}</label>
                                <textarea rows="4" class="form-control" name="fb_link" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('fb_link', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('yt_link') ? 'has-error' : '' }}">
                                <label for="yt_link" class="control-label">{{ 'Footer Youtube Link' }}</label>
                                <textarea rows="4" class="form-control" name="yt_link" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('yt_link', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('instagram_link') ? 'has-error' : '' }}">
                                <label for="instagram_link" class="control-label">{{ 'Footer Instagram Link' }}</label>
                                <textarea rows="4" class="form-control" name="instagram_link" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('instagram_link', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('linkedin_link') ? 'has-error' : '' }}">
                                <label for="linkedin_link" class="control-label">{{ 'Footer Linkedin Link' }}</label>
                                <textarea rows="4" class="form-control" name="linkedin_link" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('linkedin_link', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_quick_link_title') ? 'has-error' : '' }}">
                                <label for="footer_quick_link_title" class="control-label">{{ 'Footer Quick Link Title' }}</label>
                                <input class="form-control" name="footer_quick_link_title" type="text" id="footer_quick_link_title">
                                {!! $errors->first('footer_quick_link_title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_course_title') ? 'has-error' : '' }}">
                                <label for="footer_course_title" class="control-label">{{ 'Footer Course Title' }}</label>
                                <input class="form-control" name="footer_course_title" type="text" id="footer_course_title">
                                {!! $errors->first('footer_course_title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_map_title') ? 'has-error' : '' }}">
                                <label for="footer_map_title" class="control-label">{{ 'Footer Map Title' }}</label>
                                <input class="form-control" name="footer_map_title" type="text" id="footer_map_title">
                                {!! $errors->first('footer_map_title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_copyright_text') ? 'has-error' : '' }}">
                                <label for="footer_copyright_text" class="control-label">{{ 'Footer Copyright Text' }}</label>
                                <input class="form-control" name="footer_copyright_text" type="text" id="footer_copyright_text">
                                {!! $errors->first('footer_copyright_text', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_map_link') ? 'has-error' : '' }}">
                                <label for="footer_map_link" class="control-label">{{ 'Footer Map Link' }}</label>
                                <textarea rows="4" class="form-control" name="footer_map_link" placeholder="Please type what you want..."></textarea>
                                {!! $errors->first('footer_map_link', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group {{ $errors->has('footer_brochure_btn_text') ? 'has-error' : '' }}">
                                <label for="footer_brochure_btn_text" class="control-label">{{ 'Footer Brochure Button Text' }}</label>
                                <input class="form-control" name="footer_brochure_btn_text" type="text" id="footer_brochure_btn_text">
                                {!! $errors->first('footer_brochure_btn_text', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Brochure Upload</h2>
                                </div>
                                <div class="body">
                                    <input type="file" name="footer_brochure_link" class="dropify" accept=".pdf, .doc, .docx">
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