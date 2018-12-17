@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Basic Example 3</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cats as $cat)
                            <tr>
                                <td>
                                    {{$cat -> id}}
                                </td>
                                <td>
                                    {{$cat -> name}}
                                </td>
                                <td>
                                    <a href="{{route('admin.update_category_get', ['id' => $cat->id])}}">
                                        <button type="button" class="btn btn-info" title="Edit" ><i class="fa fa-edit"></i></button>

                                    </a>
                                    <a href="{{route('admin.delete_category', ['id' => $cat->id])}}">
                                        <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    </a>
                                   </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>THÊM DANH MỤC</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{route('admin.add_category')}}" method="post" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label>THÊM DANH MỤC</label>
                                <input type="text" class="form-control" name="name" required="">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">THÊM DANH MỤC</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
