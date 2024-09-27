<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: 0;
        }

        .dropdown-submenu.show .dropdown-menu {
            display: block;
        }

        .site-title>a {
            font-size: 2.5rem;
            font-weight: bold;
            color: #5CB85C;
            text-decoration: none;
        }

        .nav-link {
            font-weight: 500;
            color: #333;
        }

        .nav-link.active {
            color: #5CB85C;
        }

        .navbar .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Mobile adjustments to ensure toggler shows and navbar collapses */
        @media (max-width: 992px) {
            .navbar .container {
                flex-direction: row;
            }

            .navbar-collapse {
                text-align: center;
            }

            .navbar-toggler {
                margin-right: 10px;
            }

            .site-title {
                margin: 0 auto;
            }

            .navbar-nav {
                margin-top: 10px;
            }
        }
    </style>
    @yield('css')
</head>

<body>
    @include('layouts.nav')

    <div class="py-4">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle dropdown-submenu hover effect
        document.querySelectorAll('.dropdown-submenu').forEach(function(submenu) {
            submenu.addEventListener('mouseenter', function() {
                // Close other open submenus
                document.querySelectorAll('.dropdown-submenu').forEach(function(otherSubmenu) {
                    if (otherSubmenu !== submenu) {
                        otherSubmenu.classList.remove('show');
                    }
                });
                // Show the hovered submenu
                submenu.classList.add('show');
            });

            // Hide the submenu when mouse leaves
            submenu.addEventListener('mouseleave', function() {
                submenu.classList.remove('show');
            });
        });

        // Prevent submenus from closing on click (optional if you want them to stay open when clicked)
        document.querySelectorAll('.dropdown-item.dropdown-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                let submenu = this.nextElementSibling;
                if (submenu && submenu.classList.contains('dropdown-menu')) {
                    e.preventDefault();
                    submenu.classList.toggle('show');
                }
            });
        });
    </script>
</body>

</html>
