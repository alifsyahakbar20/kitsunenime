<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </form>

    </div>

    <div class="main-content">
        <header>
            <h1>{{ $title ?? 'Welcome' }}</h1>
        </header>
        {{ $slot }}
    </div>
</body>

</html>
