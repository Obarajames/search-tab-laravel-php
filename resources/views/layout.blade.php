<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white h-screen p-0 m-0">
    <nav class="bg-blue-500 p-4 sticky   p-4 fixed top-0 w-full z-10 " >
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">KenyaSlack</h1>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-white">Login</a>
                <a href="#" class="text-white">Register</a>
            </div>
        </div>
    </nav>

    <!-- Your content goes here -->
    {{-- <x-banner/> --}}
    <x-search/>

   
    

{{-- 
        
    @foreach($listings as $listing)
    <x-data :listing="$listing" />
    @endforeach

    --}}
@foreach ($listings as $listing)
<div class="grid grid-cols-3 gap-1 mt-2" >
    <h1>{{$listing['title']}}</h1>
    <p>{{$listing['description']}}</p>
</div>
 
@endforeach

{{-- footer --}}
<footer class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <p>&copy; 2023 KenyaSlack. All Rights Reserved.</p>
        <div class="flex items-center space-x-4">
            <a href="#" class="text-white">Privacy Policy</a>
            <a href="#" class="text-white">Terms of Service</a>
        </div>
    </div>
</footer>

</body>
</html>