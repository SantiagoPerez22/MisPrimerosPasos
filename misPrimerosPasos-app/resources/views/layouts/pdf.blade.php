<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Reporte PDF')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .card {
            border: 1px solid #ddd;
            margin-top: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }
        .card-title {
            margin: 0;
            font-size: 1.25rem;
        }
        .card-subtitle {
            margin: 0;
            font-size: 1rem;
            color: #6c757d;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
