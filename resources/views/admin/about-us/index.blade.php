@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Homepage')

@section('body')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Homepage
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
                            <td style="justify-content: normal"><a href="/admin/about-us/banner/show">Banner</a></td>
                        </tr>
                        <tr>
                            <td style="justify-content: normal"><a href="/admin/about-us/section1/show">Section 1</a></td>
                        </tr>
                        <tr>
                            <td style="justify-content: normal"><a href="/admin/about-us/section2/show">Section 2</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection