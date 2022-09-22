<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Livewire</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    @livewireStyles
    <!-- @vite('resources/css/app.css') -->
    <!-- <link rel="stylesheet" href="url('resources/css/app.css')"> -->
    <!-- @import('resources/css/app.css') -->

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="w-100">
    <livewire:navbar />
    <livewire:heroes />
    <livewire:features />
    <hr>
    <livewire:pricing />
    <hr>
    <livewire:products />
    <hr>
    <livewire:subscriptionutil />
    <hr>
    <!-- <livewire:customer-reviews> -->
    <hr>
    <livewire:reviews>
    <hr>
    {{$clientIP}}
    <hr>
    <livewire:footer />
    @livewireScripts
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger-cx/bootstrap.js?v=1"></script>
    <df-messenger df-cx="true" location="asia-south1" chat-title="usip-bot" agent-id="417ea6f4-5881-499b-b5df-954ae1c8b87f" language-code="en">
    </df-messenger>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>