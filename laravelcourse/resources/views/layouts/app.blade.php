<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Online Store')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('product.index') }}">Online Store</a>
      <a class="nav-link text-white" href="{{ route('product.create') }}">Create product</a>
    </div>
  </nav>

  <div class="container my-4">
    <h2 class="mb-4">@yield('subtitle')</h2>
    @yield('content')
  </div>
</body>
</html>