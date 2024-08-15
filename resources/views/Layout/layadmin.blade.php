<!DOCTYPE html>
<html>
<head>
     <link href="/styles/flowbite.min.css" rel="stylesheet"/>
     <script src="/styles/flowbite.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
     <script src="https://cdn.tailwindcss.com"></script>
<head>

<body>
    <header>
        @include('component.admin_header')
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>