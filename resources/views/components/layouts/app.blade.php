<!-- filepath: resources/views/components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warehouse Inventory</title>
    @livewireStyles
</head>
<body>
    
    {{ $slot }}
    @livewireScripts
</body>
</html>