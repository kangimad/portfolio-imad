<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- MyCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/mycss.css') }}">

    <title>Kangimad - Portfolio</title>
</head>

<body>

    <header>
        @include('pages.navbar')
    </header>

    <main>

        <section id="hero">
            @include('pages.hero')
        </section>

        <section id="about">
            @include('pages.about')
        </section>

        <section id="projects">
            @include('pages.projects')
        </section>

        <section id="contact">
            @include('pages.contact')
        </section>

    </main>

    <footer>
        @include('pages.footer')
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
