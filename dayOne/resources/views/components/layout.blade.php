<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout </title>
</head>

<body>
    <nav>
        <x-nav-link href="/" style="color:green" >Home</x-nav-link>
        <x-nav-link href="/about" style="color: yellow;">About</x-nav-link>
        <x-nav-link href="/contact" style="color: red;">Contact</x-nav-link>
    </nav>

    {{ $slot }}
</body>
</html>
