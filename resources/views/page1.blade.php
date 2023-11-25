<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-teal-200 flex items-center justify-center h-screen font-sanchez">  
    <div class="flex items-center justify-between bg-white rounded-md shadow-sm border p-7 w-1/2 h-1/2">
        <div class=" pr-8 rounded-bl-md rounded-tl-md w-1/2 h-full">
            <p>Bill</p>
            <div class="flex items-center justify-between w-full rounded-sm  bg-teal-50 p-1">
                <p>$</p>
                <p>0</p>
            </div>
            <div class="mt-3">
                <p class="mt-2">Select Tip %</p>
                <div class="flex">
                    <p class="p-0 w-1/3 bg-teal-950 mt-1 flex items-center justify-center rounded-md text-white">5%</p>
                    <p class="p-2 w-1/3 ml-2 bg-teal-950  mt-1 flex items-center justify-center rounded-md text-white">10%</p>
                    <p class="p-2 w-1/3 ml-2 bg-teal-950  mt-1 flex items-center justify-center rounded-md text-white">15%</p>
                </div>
                <div class="flex">
                    <p class="p-0 w-1/3 bg-teal-950 mt-1  flex items-center justify-center rounded-md text-white">25%</p>
                    <p class="p-2 w-1/3 ml-2 bg-teal-950 mt-1  flex items-center justify-center rounded-md text-white">50%</p>
                    <p class="p-2 w-1/3 ml-2 bg-teal-50 mt-1  flex items-center justify-center rounded-md text-teal-950">Custom</p>
                </div>
            </div>
            <div class="mt-4">
                <p>Number of People</p>
                <div class="flex items-center justify-between w-full rounded-sm bg-teal-50 p-1">
                    <p>$</p>
                    <p>0</p>
                </div>
            </div>
        </div>
        <div class="border border-teal-600 p-5 text-white pt-9 bg-teal-950 w-1/2 rounded-md h-full">
            <div class="flex items-center justify-between">
                <div class="text-md">
                    <p>Tip Amount</p>
                    <p class="text-teal-800">/ person</p>
                </div>
                <div>
                    <p class="text-3xl text-teal-600 font-extrabold">$0.000</p>
                </div>
            </div>
            <div class="flex items-center my-6 justify-between">
                <div class="text-md">
                    <p>Total</p>
                    <p class="text-teal-800">/ person</p>
                </div>
                <div>
                    <p class="text-3xl text-teal-600 font-extrabold">$0.000</p>
                </div>
            </div>
            <div class="">
                <p class="flex items-center cursor-pointer text-teal-950 py-1 rounded-md bg-teal-900 my-12 mb-10 justify-center">RESET</p>
            </div>

        </div>
    </div>
    <button class="ml-2"><a href="{{route('page2')}}" class="  p-2 px-4 bg-teal-900 text-white rounded-md">Page Suivante</a></button>
</body>
</html>