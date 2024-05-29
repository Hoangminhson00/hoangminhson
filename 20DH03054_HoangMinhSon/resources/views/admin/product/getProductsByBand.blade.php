@extends('layout.master')

@section('content')
<div class="altert alert-success">
    {{session('Note')}}
</div>

<form method="get" action="{{route('admin.product.getProductsByBand')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Select Band</h1> 
    <div class="mb-3">
            <label for="" class="form-label">Select gender</label>
            <select
                class="form-select form-select-lg"
                name="Selectgender"
                id="">
                <option value="nam">nam</option>
                <option value="nu">nu</option>
              
            </select>
        </div>
        
        <button
            type="submit"
            class="btn btn-primary"
            name ="btSearch"
        >
            Submit
        </button>
</form>
<table>
    <tbody>
        <thead>
            <tr>    
                <th Class=\"text-center\">ID</th>
                <th Class=\"text-center\">Name</th>
                <th Class=\"text-center\">Gender</th>
                <th Class=\"text-center\">Duty</th>
                <th Class=\"text-center\">Daynum</th>
                
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
                <td class=\"text-left\">{{$product->id}}</td>
                <td class=\"text-left\">{{$product->name}}</td>
                <td class=\"text-left\">{{$product->gender}}</td>
                <td class=\"text-left\">{{$product->duty}}</td>
                <td class=\"text-left\">{{$product->daynum}}</td>
               
                <a href="deleteProduct/{{$product->pid}}">Delete</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateProduct/{{$product->pid}}">Edit</a></td>
        </tr>
        </thead>
    </table>
</div>
                    @endforeach
               

@endsection