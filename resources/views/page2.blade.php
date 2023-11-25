<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex items-center justify-center h-screen font-serif bg-slate-800" >  
    <div class="w-1/2 flex items-center justify-between bg-white shadow-md rounded-md" style="60%">
        <div class="w-1/2 h-full rounded-tl-sm rounded-bl-md p-6">
            <div class="border  border-slate-500 rounded-md" style="height: 80%">
                <a href=""><img src="{{asset("images/basket1.jpg")}}" alt="" class="h-full w-full rounded-md"></a>
            </div>
            <div class=" flex items-center justify-between mt-2 gap-2" style="height: 20%">
                <div class="w-1/4 h-full border border-slate-500 object-contain rounded-md"> <a href=""><img src="{{asset('images/noir1.jpg')}}" alt="" class="w-full h-full object-contain  rounded-md"></a></div>
                <div class="w-1/4 h-full border border-slate-500 object-contain rounded-md"> <a href=""><img src="{{asset('images/noir2.jpg')}}" alt="" class="w-full h-full object-contain rounded-md"></a></div>
                <div class="w-1/4 h-full border border-slate-500 object-contain rounded-md"><a href=""> <img src="{{asset('images/noir3.jpg')}}" alt="" class="w-full h-full object-contain rounded-md"></a></div>
                <div class="w-1/4 h-full border border-slate-500 object-contain rounded-md"> <a href=""><img src="{{asset('images/noir4.jpg')}}" alt="" class="w-full h-full object-contain rounded-md"></a></div>
            </div>
        </div>
        <div class="w-1/2 h-full rounded-tr-md rounded-br-md p-6">
            <h1 class="text-slate-800 font-bold text-xs">SNEAKER COMPANY</h1>
            <h2 class="text-black text-2xl font-bold my-2">Fall Limited Edition Sneakers</h2>
            <p class="text-justify text-sm py-2" style="font-size: 10px"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam reiciendi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, amet?</p>
            
            <div class="my-2 flex items-center">
                <div class=" flex flex-col">
                    <p class="text-black text-2xl font-bold">$125.00</p>
                    <p class="text-gray-800 text-sm">$250.00</p>
                </div>
                <div class="mx-3">
                    <p class="text-slate-800 text-sm bg-slate-300 py-1 px-4 rounded-md">50%</p>
                </div>
            </div>
            <div class="flex items-center mt-6">
                <div class="bg-gray-200 rounded-md p-3  px-3 flex items-center justify-center ">
                    <p class="text-slate-800 font-bold px-1"><a href="">-</a></p>
                    <p class="px-1"><a href="">0</a></p>
                    <p class="text-slate-800 font-bold px-1"><a href="">+</a></p>
                </div>
                <div  class="flex items-center rounded-md justify-center mx-2 px-5 py-3 cursor-pointer border bg-slate-800">
                    <p class="px-2 text-white cursor-pointer">@include('include.icon')</p>
                    <p class="px-2 text-white cursor-pointer flex">Add to cart</p>
                </div>
            </div>
        
        </div>
    </div>
    <button class="ml-2"><a href="{{route('page3')}}" class=" p-2 px-4 bg-white text-slate-800 rounded-md">Page Suivante</a></button>
</body>
</html>