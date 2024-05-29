


@extends('layout.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading ">
    <div class="col-lg-8">
        <h2><strong>Thêm mới Sản Phẩm</strong></h2>
        <ol class="breadcrumb " style="margin-boiton:10px">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li class="active"><strong>Thêm mới Sản Phẩm</strong></li>
        </ol>
    </div>
</div>

@if (session('Note'))
    <div class="alert alert-success">
       {{session('Note')}}
    </div>
@endif

    <form action="{{route('admin.product.insertProduct')}}" method="post" class="box" enctype="multipart/form-data">
        @csrf
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="text-right mb15">
                <button  type="submit" class="btn btn-info "><i class="fa fa-plus mr5"></i>Lưu lại</button>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-desription"><p>Nhập thông tin của người sử dụng</p>
                        <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row mb15">
                                <div class="col-lg-6">
                                    <div class="form-row">
                                        <label for="" class="control-lable text-right">ID
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <input 
                                        type="text" 
                                        class="form-control"
                                        name="id"
                                        value="{{old('id')}}"
                                        autocomplete="off"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-row">
                                        <label for="" class="control-lable text-right">Name
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <input 
                                        type="text" 
                                        class="form-control"
                                        name="name"
                                        value="{{old('name')}}"
                                        autocomplete="off"
                                        >
                                    </div>
                                </div>
                            </div>
    
                                    <div class="row mb15">
                                <div class="col-lg-6">
                                    <div class="form-row">
                                        <label for="" class="control-lable text-left">Duty
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <input 
                                        type="text" 
                                        class="form-control"
                                        name="duty"
                                        value="{{old('duty')}}"
                                        autocomplete="off"
                                        >
                                    </div>
    
                            
                                    <div class="row mb15">
                                <div class="col-lg-6">
                                    <div class="form-row">
                                        <label for="" class="control-lable text-left">Daynum
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <input 
                                        type="text" 
                                        class="form-control"
                                        name="daynum"
                                        value="{{old('daynum')}}"
                                        autocomplete="off"
                                        >
                                    </div>
                            <div class="row mb15">
                                <div class="col-lg-6">
                                    <div class="form-row">
                                        <label for="" class="control-lable text-left">Gender
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <select class="form-control m-b" name="selectgender" id="">
                                            <option value="nam">Nam</option>
                                            <option value="nu">Nu</option>
                                            
                                        </select>
                                    </div>
                                </div>
    
                            
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </form>
@endsection


