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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Footer
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_footer') }}" class="btn btn-dark btn-lg fw-bold" title="Add New">
                        <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                    </a>
                    @foreach ($footer as $item)
                        <a href="{{ route('admin.edit_footer', $item->id) }}" title="Edit Footer"><button
                                class="btn btn-primary btn-lg"><i class="zmdi zmdi-edit" aria-hidden="true"></i> Edit Footer</button></a>
                    @endforeach
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Contact Title</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Quick Link Title</th>
                                    <th>Course Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $item)
                                    <tr>
                                        <td>{{ $item->footer_contact_title }}</td>
                                        <td>{{ $item->footer_address }}</td>
                                        <td>{{ $item->footer_phone }}</td>
                                        <td>{{ $item->footer_email }}</td>
                                        <td>{{ $item->footer_quick_link_title }}</td>
                                        <td>{{ $item->footer_course_title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Map Title</th>
                                    <th>Map Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $item)
                                    <tr>
                                        <td>{{ $item->footer_map_title }}</td>
                                        <td>{{ $item->footer_map_link }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Facebook Link</th>
                                    <th>Youtube Link</th>
                                    <th>Instagram Link</th>
                                    <th>Linkedin Link</th>
                                    <th>Copyright Text</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $item)
                                    <tr>
                                        <td>{{ $item->fb_link }}</td>
                                        <td>{{ $item->yt_link }}</td>
                                        <td>{{ $item->instagram_link }}</td>
                                        <td>{{ $item->linkedin_link }}</td>
                                        <td>{{ $item->footer_copyright_text }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Brochure Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $item)
                                    <tr>
                                        <td><iframe height="600" width="100%"
                                                src="{{ asset($item->footer_brochure_link) }}"></iframe></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
