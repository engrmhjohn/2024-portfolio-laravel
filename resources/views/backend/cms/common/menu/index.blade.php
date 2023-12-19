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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Menu
            </div>
            <div class="card-body">
                <a href="{{ route('admin.add_menu') }}" class="btn btn-dark btn-lg fw-bold" title="Add New">
                    <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                </a> 
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th>Item</th>
                                <th class="bg-danger text-center text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menu as $item)
                            <tr>
                                <td><img src="{{ asset($item->logo) }}" alt="" style="max-width: 200px;"></td>
                                <td>{{ $item->en_menu_first_name }}</td>
                                <td>{{ $item->en_menu_last_name }}</td>
                                <td>{{ $item->en_menu_intro }}</td>
                                <td>{{ $item->en_menu_about }}</td>
                                <td>{{ $item->en_menu_service }}</td>
                                <td>{{ $item->en_menu_team }}</td>
                                <td>{{ $item->en_menu_education }}</td>
                                <td>{{ $item->en_menu_work }}</td>
                                <td>{{ $item->en_menu_contact }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.edit_menu', $item->id) }}" title="Edit Menu"><button class="btn btn-primary"><i class="zmdi zmdi-edit" aria-hidden="true"></i></button></a>
                                </td>
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