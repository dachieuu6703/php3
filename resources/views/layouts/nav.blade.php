<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Site Title - Centered -->
        <div class="navbar-brand mx-auto text-center">
            <h1 class="site-title">
                <a href="{{ route('home') }}">Book Store</a>
            </h1>
        </div>

        <!-- Collapsible Navbar for responsiveness -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <nav class="nav justify-content-center w-100">
                <!-- Dropdown Menu for Categories -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="categoryDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Loại sách
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                        @foreach ($categories as $category)
                            <li class="dropdown-submenu" data-category-id="{{ $category->id }}">
                                <a class="dropdown-item dropdown-toggle" href="#">{{ $category->name }}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('category.books', ['id' => $category->id, 'sort' => 'high']) }}">
                                            Sản phẩm giá cao
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('category.books', ['id' => $category->id, 'sort' => 'low']) }}">
                                            Sản phẩm giá thấp
                                        </a></li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Other Links -->
                {{-- <a class="nav-link" href="{{ route('books') }}">Sách</a> --}}
                <a class="nav-link" href="{{ route('list') }}">Danh sách sản phẩm</a>
            </nav>
        </div>
    </div>
</nav>
