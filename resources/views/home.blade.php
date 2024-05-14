{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>LocoTrust home</title>
</head>

<body>
    {{-- =========================================================================Nav============================================================================= --}}

    @include('includes.nav')

    {{-- =========================================================================Nav============================================================================= --}}
    <div class="container">
        <div id="bienvenue">
            <h1>Bienvenue sur LocoTrust !</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias et porro numquam, ipsum omnis qui
                amet provident fugiat doloribus pariatur repellendus officiis magnam, quam cupiditate. Minus at placeat
                alias consequuntur.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias et porro numquam, ipsum omnis qui
                amet provident fugiat doloribus pariatur repellendus officiis magnam, quam cupiditate. Minus at placeat
                alias consequuntur.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias et porro numquam, ipsum omnis qui
                amet provident fugiat doloribus pariatur repellendus officiis magnam, quam cupiditate. Minus at placeat
                alias consequuntur.</p>
        </div>

        <div id="presentation">

            <h2>Présentation</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>

        </div>

        <div id="actu">

            <h2>Actus immobilières</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fuga aut, officiis id itaque quod vel
                quisquam aliquid sed sint, ducimus possimus omnis porro similique. Voluptatem, fugiat incidunt.
                Accusamus, laudantium.</p>

        </div>


    </div>





    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
