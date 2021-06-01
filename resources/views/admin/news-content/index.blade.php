@extends('brackets/admin-ui::admin.layout.default')

@section('title', 'Berita')

@section('body')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Berita
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
                            <td style="justify-content: normal"><a href="/admin/news/banner/show">Banner</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection