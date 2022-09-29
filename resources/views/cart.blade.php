<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cart Overview</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        .uppercase {
            text-transform: uppercase;
        }
        .text-xs {
            font-size: 0.5rem;
        }

        .text-sm {
            font-size: 0.75rem;
        }

        .text-base {
            font-size: 1rem;
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

        .bg-sky-200 {
            background-color: rgb(186 230 253);
        }

        #cart-heroes {
            background-color: #e0f5f6;
            height: 250px;
            overflow: hidden;
        }

        /* tablets */
        @media only screen and (min-width: 768px) {
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

            .text-md-4xl {
                font-size: 2.25rem;
            }

            #cart-heroes {
                background-color: #e0f5f6;
                height: 250 px;
                overflow: hidden;
            }

            #cart-summary {
                max-height: 250px;
            }
        }

        @media only screen and (min-width: 992px) {
            #cart-heroes {
                background-color: #e0f5f6;
                height: 285px;
                overflow: hidden;
            }
        }
    </style>
</head>

<body class="w-100">
    <livewire:navbar />
    <livewire:cart-heroes />
    <div class="row d-flex justify-content-center mt-5 px-md-4">
        <div class="col-7 d-none d-md-block">
            <livewire:cart-overview />
        </div>
        <livewire:cart-summary />
    </div>
</body>

</html>