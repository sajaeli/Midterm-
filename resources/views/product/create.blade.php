@extends('layouts.app')

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
        <div class="col-md-4">
            <!-- MESSAGES -->
            <!-- ADD Product FORM -->
            <div class="card card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input autofocus="" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Product Title" type="text">
                        </input>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control  @error('description') is-invalid @enderror" name="description" placeholder="Product Description" rows="2">{{ old('description') }}
                        </textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control  @error('price') is-invalid @enderror" min="0" name="price" placeholder="Product Price" value="{{ old('price') }}" type="number">
                        </input>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input class="btn btn-success btn-block" name="save_product" type="submit" value="Save Product">
                    </input>
                    <a href="{{ route('product.index') }}" class="btn btn-danger d-block mt-2">Back</a>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
