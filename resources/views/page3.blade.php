<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex items-center justify-center h-screen font-poppins bg-white" >  
    <div class="border border-gray-300 rounded-md w-3/4 p-5 shadow-md" style="height: 90%">
        <div class=" flex items-center flex-col gap-2  h-1/4 w-full">
            <p class="text-2xl font-extralight">Reliable, efficient delivery</p>
            <h1 class="text-3xl font-bold">Powered by Technology</h1>
            <p class="text-xs  text-gray-500 my-1">Our Artificial intelligence powered use milions of projects data point encure that your procedure is successful</p>
        </div>
        <div class="flex items-center gap-2 p-4 h-3/4 w-full">
            <div class="w-1/3 h-2/4 border border-t-teal-400 p-4 border-t-4 rounded-md shadow-xl">
                <div class="h-full w-full">
                    <h2 class="font-bold text-black">Supervisor</h2>
                    <p class="text-xs text-gray-500 my-1">Mentors activity to identify projects readblocks.</p>
                    <div class="flex items-center mt-10px justify-end  h-2/4 my-14px">
                        <div class="w-1/3 h-3/4">
                            <a href="" title="Votre loupe"><img src="{{asset("images/loupe.png")}}" alt="" class="w-full h-full object-contain"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-full flex flex-col gap-4 px-2 ">
                <div class="h-1/2 w-full border border-t-red-700 border-t-4 p-4 rounded-md shadow-xl">
                    <div class="h-full w-full">
                        <h2 class="font-bold text-black">Team Builder</h2>
                        <p class="text-xs text-gray-500 my-1">Scans our talents network to create the optimal team to your project.</p>
                        <div class="flex items-center mt-10px justify-end  h-2/4 my-14px">
                            <div class="w-1/3 h-3/4">
                                <a href="" title="Votre maison"><img src="{{asset("images/house.png")}}" alt="" class="w-full h-full object-contain"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-1/2 w-full border border-t-yellow-600 border-t-4 p-4 rounded-md shadow-xl">
                    <div class="h-full w-full">
                        <h2 class="font-bold text-black">Karma</h2>
                        <p class="text-xs text-gray-500 my-1">Regulary evaluates our talents to ensure quality.</p>
                        <div class="flex items-center mt-10px justify-end  h-2/4 my-14px">
                            <div class="w-1/3 h-3/4">
                                <a href="" title="Votre lumière"><img src="{{asset("images/light.png")}}" alt="" class="w-full h-full object-contain"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 h-2/4 border border-t-blue-600 border-t-4 p-4 shadow-xl rounded-md">
                <div class="h-full w-full">
                    <h2 class="font-bold text-black">Calculator</h2>
                    <p class="text-xs text-gray-500 my-1">Uses data from post project to provide better delivery estimates.</p>
                    <div class="flex items-center mt-10px justify-end  h-2/4 my-14px">
                        <div class="w-1/3 h-3/4">
                            <a href="" title="Vore ordinateur"><img src="{{asset("images/computer.png")}}" alt="" class="w-full h-full object-contain"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="ml-2"><a href="{{route('page4')}}" class=" border p-2 px-4 bg-black text-black rounded-md">Page Suivante</a></button>
</body>
</html>