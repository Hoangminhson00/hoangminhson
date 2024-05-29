@extends('layout.master')
@section('Content')
<form method="get" action="{{route('admin.product.getProductsByName')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <h1>Select Year</h1> 
        <div class="mb-3">
            <label for="" class="form-label">Select Year</label>
            <input for="SelectYear" name = "SelectYear"  type="text">
            
            <select
            class="form-select form-select-lg"
            name="selectYear"
            id=""
        >
            <option selected>Select one</option>
            <?php
                for ($year = 2015; $year <= 2030; $year++) {
                    echo '<option value="' . $year . '">' . $year . '</option>';
                }
            ?>
        </select>

        </div>
            
            <button
                type="submit"
                class="btn btn-primary"
                name ="btSearch"
            >
                Search Year
            </button>
</form>
<table>
    <tbody>
        <thead>
            <tr>    
                <th Class=\"text-center\">PID</th>
                <th Class=\"text-center\">Name</th>
                <th Class=\"text-center\">Company</th>
                <th Class=\"text-center\">Year</th>
                <th Class=\"text-center\">Band</th>
                <th Class=\"text-center\">Image</th>
                <th Class=\"text-center\">Edit</th>
                <th Class=\"text-center\">Delete</th>
            </tr>
        </thead>
    </tbody>
</table>
@foreach($products as $product)
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
        <tr>
                <td class=\"text-left\">{{$product->pid}}</td>
                <td class=\"text-left\">{{$product->pname}}</td>
                <td class=\"text-left\">{{$product->company}}</td>
                <td class=\"text-left\">{{$product->year}}</td>
                <td class=\"text-left\">{{$product->band}}</td>
                <td class=\"text-left\"><img src="{{$product->pimage}}" alt = "Image"></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteProduct/{{$product->pid}}">Delete</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateProduct/{{$product->pid}}">Edit</a></td>
        </tr>
        </thead>
    </table>
</div>
@endforeach
@endsection