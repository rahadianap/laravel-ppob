@extends('layouts.app')

@section('content')
<div class="container">
    <form method="get" action="{{route('search')}}" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    <br/>
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-3 mb-sm-5">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $res)
                    <tr>
                        <td>{{ $res["product_nominal"] }}</td>
                        <td>{{ $res["product_description"] }}</td>
                        <td id="price">{{ $res["product_price"] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $result->links() }}
        </div>
    </div>
</div>
@endsection