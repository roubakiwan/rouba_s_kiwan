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
                                    <a href="{{route('products.create')}}">ADD</a>
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>quality</th>
                                        <th>price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($input as $products)
                                        <tr>
                                            <td>
                                                @foreach(explode(';',$products->image) as $item)
                                                    <img src="{{asset($item)}}" alt="/">
                                                @endforeach
                                            </td>
                                            <td>{{$products->name}}</td>
                                            <td>{{$products->quality}}</td>
                                            <td>{{$products->price}}</td>
                                            <td>
                                                <a href="{{route('products.destroy',$products->id)}}">Delete</a>
                                            </td>
                                            <td>
                                                <a href="{{route('products.update',$products->id)}}">update</a>
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
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Data</th>
                                        <th>User</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
