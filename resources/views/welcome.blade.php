<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Livewire</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
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

        #nav-logo {
            width: 3rem;
        }

        #heroes {
            background-color: #e0f5f6;
            height: 250px;
        }

        #heroes-text {
            color: #5e7fb1;
        }

        #heroes-text h2 {
            font-size: 1.25rem;
            font-weight: bold;
        }

        #heroes-text h3 {
            font-size: 1rem;
        }

        .dark-color {
            background-color: #5e7fb1;
        }

        #heroes-text button {
            color: white;
            font-size: 0.75rem;
        }

        #heroes-features {
            display: none;
        }

        #heroes-video {
            margin: auto;
        }

        #heroes-video iframe {
            width: 80%;
            margin: auto;
        }

        #features-heading {
            font-size: 1.5rem;
        }

        #features-description {
            font-size: 0.5rem;
        }

        #pricing-header {
            font-size: 1.25rem;
        }

        #pricing-description {
            font-size: 0.75rem;
        }

        #pricing-products p {
            font-size: 0.75rem;
        }

        #pricing-products hr {
            height: 2px;
            background-color: rgb(24 24 27);
            width: 35%;
            border-width: 0;
        }

        #pricing-products .card {
            width: 75%;
        }

        #new-products {
            font-size: 1.25rem;
        }

        .product-card {
            width: 50%;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS6oT9JX6EUrNIX38YM6Es69yQk7AvMiU-bQ&usqp=CAU');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .product-card:hover {
            scale: 110%;
        }

        .bg-slate-500 {
            background-color: rgb(100 116 139);
        }

        .product-price {
            width: 23%;
        }

        .uppercase {
            text-transform: uppercase;
        }

        #subscription-helper .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            width: 17%;
        }

        .overflow-visible {
            overflow: visible;
        }

        .w-full {
            width: 100%;
        }

        .carousel-control-wrapper {
            position: absolute;
            width: 50%;
            top: 0;
            bottom: 0;
            outline: 0;
        }

        .carousel-control-wrapper button:focus {
            outline: 0;
        }

        .carousel-control-wrapper button {
            outline: 0;
        }

        .carousel-control-wrapper button:hover {
            outline: 0;
            color: white;
        }

        #customer-reviews {
            height: 500px;
            overflow: visible;
        }

        #customer-review-bg {
            height: 260px;
            background-image: url('assets/images/techbg.png');
            background-size: cover;
            overflow: visible;
        }

        #customer-review-content {
            position: relative;
        }

        #customer-reviews-image-wrapper {
            position: absolute;
            right: 0.5rem;
            top: -5vh;
        }

        #customer-reviews-image-wrapper img {
            width: 6rem;
        }

        footer {
            background-color: #f0f0f0;
            min-height: 40vh;
            max-height: 100%;
        }

        footer div:first-child {
            height: 83%;
        }

        .text-xs {
            font-size: 0.5rem;
        }

        .text-sm {
            font-size: 0.75rem;
        }

        .text-lg {
            font-size: 1.25rem;
        }

        .text-xl {
            font-size: 1.5rem;
        }

        .text-sky-600 {
            color: rgb(2 132 199);
        }

        .text-blue-800 {
            color: rgb(30 64 175);
        }

        .text-slate-800 {
            color: rgb(30 41 59);
        }

        .bg-sky-600 {
            background-color: rgb(2 132 199);
        }

        .btn-link {
            text-decoration: none !important;
        }

        /* tablets */
        @media only screen and (min-width: 768px) {
            #heroes {
                height: 300px;
            }

            #heroes-text {
                padding-left: 4rem;
                padding-right: 4rem;
            }

            #heroes-text h2 {
                font-size: 2.25rem;
            }

            #heroes-text h3 {
                font-size: 2rem;
            }

            #heroes-text button {
                font-size: 1rem;
            }

            #heroes-features .feature-heading {
                font-size: 1.5rem;
            }

            #heroes-video {
                height: 200px;
                margin: auto;
            }

            #heroes-video iframe {
                width: 80%;
                height: 80%;
                margin: auto;
            }

            #features-heading {
                font-size: 2.5rem;
            }

            #features-description {
                font-size: 1rem;
            }

            .features-card img {
                width: 75%;
            }

            #pricing-header {
                font-size: 2rem;
            }

            #pricing-description {
                font-size: 1.25rem;
            }

            #pricing-products p {
                font-size: 1rem;
            }

            #pricing-products .card-title {
                font-size: 1.75rem !important;
            }

            #new-products {
                font-size: 2rem;
            }

            .product-card {
                width: 66%;
                background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS6oT9JX6EUrNIX38YM6Es69yQk7AvMiU-bQ&usqp=CAU');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }

            #customer-reviews-image-wrapper {
                position: absolute;
                right: 2.5rem;
                top: -10vh;
            }

            #customer-reviews-image-wrapper img {
                width: 9rem;
            }

            .text-md-sm {
                font-size: 0.75rem;
            }

            .text-md-base {
                font-size: 1rem;
            }

            .text-md-lg {
                font-size: 1.25rem;
            }

            .text-md-xl {
                font-size: 1.5rem;
            }

            .text-md-2xl {
                font-size: 1.75rem;
            }

            .text-md-3xl {
                font-size: 2rem;
            }

        }

        /* laptops */
        @media only screen and (min-width: 992px) {
            #heroes {
                height: 500px;
            }

            #heroes-text {
                padding-left: 8rem;
                padding-right: 8rem;
            }

            #heroes-features {
                display: block;
            }

            #heroes-video {
                height: 50vh;
                margin: auto;
            }

            #heroes-video iframe {
                width: 60%;
                height: 100%;
                margin: auto;
            }

            #pricing-header {
                font-size: 2.5rem;
            }

            #pricing-products .card {
                width: 75%;
            }

            #customer-reviews-image-wrapper {
                position: absolute;
                right: 5rem;
                top: -10vh;
            }

            #customer-reviews-image-wrapper img {
                width: 12rem;
            }

            #subscription-helper .carousel-indicators {
                position: absolute;
                right: 0;
                bottom: -50px;
                left: 0;
                width: 17%;
            }
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
    <livewire:customer-reviews />
    <hr>
    <livewire:reviews>
        <hr>
        <livewire:footer />
        @livewireScripts
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger-cx/bootstrap.js?v=1"></script>
        <df-messenger df-cx="true" location="asia-south1" chat-title="usip-bot" agent-id="417ea6f4-5881-499b-b5df-954ae1c8b87f" language-code="en">
        </df-messenger>
</body>

</html>