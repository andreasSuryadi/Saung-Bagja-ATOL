@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.admin-user.actions.create'))

@section('body')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ trans('admin.home.actions.sub-menu') }}
            </div>

            <div class="card-body" id="card-body-1">
                <table class="table table-hover table-listing">
                    <thead>
                        <tr>
                            <th>Sub Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="justify-content: normal"><a href="/admin/home/banner">Banner</a></td>
                        </tr>
                        <tr>
                            <td style="justify-content: normal"><a href="/admin/home/about-us">About Us</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection