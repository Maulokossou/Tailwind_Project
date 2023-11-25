<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>  
    <div class="flex items-center justify-center h-screen font-montserrat bg-gray-100"  data-aos="zoom-in-down">
        <div class="flex items-center bg-white max-w-lg shadow-lg border 
        rounded-2xl">
            <div class=" border-r w-1/2 h-500">
                <img src="{{asset('images/bouteille.jpg')}}" alt="" class="h-full w-full rounded-tl-2xl rounded-bl-2xl">
            </div>
            <div class=" h-500 w-1/2 p-4 bt-red-200">
                <p class="font-gruppo">PERFUM</p>
                <p class="font-bold text-xl mt-3 mb-3">Gabrielle Essence Eau De Parfum</p>
                <p class=>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, fuga modi odit quis minima commodi. Ullam, vel amet.</p>
                <div class="flex aligns-center mt-3 mb-3">
                    <p class="font-bold text-xl text-green-800">$149.99</p>
                    <p class="text-gray-600 text-sm ml-3">$169.99</p>
                </div>
                <div class="flex items-center justify-center cursor-pointer mt-2 mb-2 border rounded-md border-green-800 p-2 bg-green-800 text-white">
                    <p class="mr-2"> @include("include.icon")</p>
                    <p class="">Add to cart</p>
                </div>
            </div>
        </div>
        <button class="ml-2"><a href="{{route('page1')}}" class=" border p-2 px-4 bg-green-800 text-white rounded-md">Page Suivante</a></button>
    </div> 
</body>
</html>