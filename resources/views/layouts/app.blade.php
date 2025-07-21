<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Portfolio') | Sabbir</title>

  <!-- Font & Icon Support -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Optional: Include Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Global Styles -->
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px 0;
    }

    main {
      min-height: 70vh;
    }
  </style>

  @stack('styles') <!-- For additional CSS from child views -->
</head>
<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')

  @stack('scripts') <!-- For additional JS from child views -->
</body>
</html>
