@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Danh sách sản phẩm</h1>
        <div class="row">
            <!-- Product Card Start -->
            @foreach ($books as $book)
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="{{ route('products.show', $book->id) }}">{{ $book->title }}</a>
                            </h5>
                            <p class="card-text">
                                £{{ $book->price }} <span class="text-muted"><s>£{{ $book->original_price }}</s></span>
                                <span class="badge bg-danger">20% OFF</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Product Card End -->
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $books->links() }}
        </div>
    </div>
@endsection
