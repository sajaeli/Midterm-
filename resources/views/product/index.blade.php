@extends('layouts/app')

@section('content')
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            Products - ERP System
        </a>
    </div>
</nav>
<main class="container p-4">
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('product.create') }}" class="btn btn-info">add product</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($products as $product)
                            
                            <td>
                                {{ $product->title }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>

                            <td>
                                {{ $product->created_at }}
                            </td>
                            <td>
                                <a class="btn btn-secondary" href="{{ route('product.edit',$product->id) }}">
                                    update
                                </a>
                                <form action="{{ route('product.delete',$product->id) }}" method="post" accept-charset="utf-8">
                                    @csrf
                                    {{ method_field('delete') }}

                                    <button class="btn btn-danger">deleted</button>

                                </form>
                            </td>

                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
