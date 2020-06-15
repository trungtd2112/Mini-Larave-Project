@extends('backend.master')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="{{asset('admin/product/add')}}" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products_list as $product)
                            <tr>
                                <td style="">{{$product->id}}</td>
                                <td style="">{{$product->prd_name}}</td>
                                <td style="">{{$product->prd_price}} vnd</td>
                                <td style="text-align: center"><img width="130" height="180"
                                        src="images/products/{{$product->prd_image}}"></td>
                                <td><span class="label label-success">Còn hàng</span></td>
                                <td>{{$product->cat_name}}</td>
                                <td class="form-group">
                                <a href="{{asset('admin/product/edit')}}/{{$product->id}}" class="btn btn-primary"><i
                                            class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{asset('admin/product/delete')}}/{{$product->id}}" class="btn btn-danger"><i
                                            class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-center">
                    <nav aria-label="Page navigation example">
                        {!!$products_list->links()!!}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endsection