<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Login') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
        <link href="/admin/assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-gray">
    <div class="container-fluid p-5">
            {{ $slot }}
        </div>
    </body>
</html>
