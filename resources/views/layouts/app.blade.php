<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TRAVELGUIDEx</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        nav {
    padding: 8px;
    z-index: 9;
}

nav a:hover {
    color: red;
}

.logo {
    float: left;
    padding: 8px;
    margin-left: 16px;
    margin-top: 8px;
}

.logo a {
    color: #000;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 18px;
    letter-spacing: 0px;
    text-decoration: none;
}

nav ul {
    float: right;
}

nav ul li {
    display: inline-block;
    float: left;
}

nav ul li:not(:first-child) {
    margin-left: 48px;
}

nav ul li:last-child {
    margin-right: 24px;
}

nav ul li a {
    display: inline-block;
    outline: none;
    color: #000;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 14px;
    letter-spacing: 1.2px;
    font-weight: 600;
}

@media screen and (max-width: 864px) {
    .logo {
          padding: 0;
    }

    .nav-wrapper {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: -1;
          background: #fff;
          opacity: 0;
          transition: all 0.2s ease;
    }

    .nav-wrapper ul {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          width: 100%;
    }

    .nav-wrapper ul li {
          display: block;
          float: none;
          width: 100%;
          text-align: right;
          margin-bottom: 10px;
    }

    .nav-wrapper ul li:nth-child(1) a {
          transition-delay: 0.2s;
    }

    .nav-wrapper ul li:nth-child(2) a {
          transition-delay: 0.3s;
    }

    .nav-wrapper ul li:nth-child(3) a {
          transition-delay: 0.4s;
    }

    .nav-wrapper ul li:nth-child(4) a {
          transition-delay: 0.5s;
    }

    .nav-wrapper ul li:not(:first-child) {
          margin-left: 0;
    }

    .nav-wrapper ul li a {
          padding: 10px 24px;
          opacity: 0;
          color: #000;
          font-size: 14px;
          font-weight: 600;
          letter-spacing: 1.2px;
          transform: translateX(-20px);
          transition: all 0.2s ease;
    }

    .nav-btn {
          position: fixed;
          right: 10px;
          top: 10px;
          display: block;
          width: 48px;
          height: 48px;
          cursor: pointer;
          z-index: 9999;
          border-radius: 50%;
    }

    .nav-btn i {
          display: block;
          width: 20px;
          height: 2px;
          background: #000;
          border-radius: 2px;
          margin-left: 14px;
    }

    .nav-btn i:nth-child(1) {
          margin-top: 16px;
    }

    .nav-btn i:nth-child(2) {
          margin-top: 4px;
          opacity: 1;
    }

    .nav-btn i:nth-child(3) {
          margin-top: 4px;
    }
}

#nav:checked + .nav-btn {
    transform: rotate(45deg);
}

#nav:checked + .nav-btn i {
    background: #000;
    transition: transform 0.2s ease;
}

#nav:checked + .nav-btn i:nth-child(1) {
    transform: translateY(6px) rotate(180deg);
}

#nav:checked + .nav-btn i:nth-child(2) {
    opacity: 0;
}

#nav:checked + .nav-btn i:nth-child(3) {
    transform: translateY(-6px) rotate(90deg);
}

#nav:checked ~ .nav-wrapper {
    z-index: 9990;
    opacity: 1;
}

#nav:checked ~ .nav-wrapper ul li a {
    opacity: 1;
    transform: translateX(0);
}

.underline-001 {
    border-bottom: 1px solid red;
}

ul li {
    list-style: none;
    font-size: 15px;
    margin-top: 30px;
}

.heading-002 h2 {
    margin-top: 20px;
}

.recents-list {
    margin-top: 119px;
}

.footer {
    margin-top: 119px;
}

.textSlide {
    margin-top: 150px;
}
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
