@extends('layout.master')

@section('content')

<div class="wrapper wrapper-content  fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class="text-uppercase">Product List</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a class="changeStatusAll" data-value="2"  data-field ="status" data-model='' >Active toàn bộ</a></li>
                        <li><a class="changeStatusAll" data-value="1" data-field ="status" data-model='' >Unactive toàn bộ</a></li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
              
               <table class="table table-striped table-bordered">
                <thead>
                <tr>    
                <th Class=\"text-center\">ID</th>
                <th Class=\"text-center\">Name</th>
                <th Class=\"text-center\">Gender</th>
                <th Class=\"text-center\">Duty</th>
                <th Class=\"text-center\">Daynum</th>
                
            </tr>
                </thead>
                <tbody>
                    @if(count($products) > 0)
                        @foreach($products as $product)
                        <tr>
                <td class= \"text-left\"> {{$product-> id}} </td>
                <td class= \"text-left\"> {{$product -> name}} </td>
                <td class= \"text-left\"> {{$product -> gender}} </td>
                <td class= \"text-left\"> {{$product -> duty}} </td>
                <td class= \"text-left\"> {{$product -> daynum}} </td>
               
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                <a href="admin/product/deleteProduct"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="admin/product/updateProduct/{{$product->pid}}">Edit</a></td>
            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class=/"text-center"/>No products found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
    
@endsection
