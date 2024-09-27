@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ $book->thumbnail }}" class="img-fluid" alt="{{ $book->title }}">
            </div>
            <div class="col-md-6">
                <h2>£{{ $book->price }}</h2>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                <p><strong>Publication Date:</strong> {{ $book->publication }}</p>
                <p><strong>Quantity Available:</strong> {{ $book->quantity }}</p>
                <p>{{ $book->description }}</p>

                <!-- Thêm vào giỏ hàng (giả sử bạn có giỏ hàng) -->
                <form method="POST">
                    @csrf
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
