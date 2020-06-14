@extends('backend.master')

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
                            @foreach ($products_list as $item)
                            <tr>
                                <td style="">{{$item->id}}</td>
                                <td style="">{{$item->prd_name}}</td>
                                <td style="">{{$item->prd_price}}</td>
                                <td style="text-align: center"><img width="130" height="180" src="img/download.jpeg" />
                                </td>
                                @if ($item->prd_status == 1)
                                <td><span class="label label-success">Còn hàng</span></td>
                                @else
                                <td><span class="label label-danger">Hết hàng</span></td>
                                @endif
                                <td>{{$item->cat_name}}</td>
                                <td class="form-group">
                                    <a href="product-edit.html" class="btn btn-primary"><i
                                            class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="product-edit.html" class="btn btn-danger"><i
                                            class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row text-center">
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            {!! $products_list->links() !!}
                            {{-- <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul> --}}
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->