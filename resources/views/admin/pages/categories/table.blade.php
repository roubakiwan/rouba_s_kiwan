@extends('admin.layouts.app')
@section('content')
    <!-- Static Table Start -->
    <div class="static-table-area mg-t-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Basic Table</h1>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <table class="table">
                                    <a href="{{route('categories.create')}}">ADD</a>
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>quality</th>
                                        <th>source</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($who as $categories)
                                        <tr>
                                            <td>{{$categories->name}}</td>
                                            <td>{{$categories->quality}}</td>
                                            <td>{{$categories->source}}</td>
                                            <td>
                                                <a href="{{route('categories.destroy',$categories->id)}}">Delete</a>
                                            </td>
                                            <td>
                                                <a href="{{route('categories.update',$categories->id)}}">update</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list mt-b-30">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Sparkle Table</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline10-list mt-b-30">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Border Table</h1>
                            </div>
                        </div>
                        <div class="sparkline10-graph">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline11-list mt-b-30">
                        <div class="sparkline11-hd">
                            <div class="main-sparkline11-hd">
                                <h1>Peity Table</h1>
                            </div>
                        </div>
                        <div class="sparkline11-graph">
                            <div class="static-table-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
