<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- my css style sheet link -->
    <link rel="stylesheet" href="./css/style.css">
    <title>php-dischi-json</title>
</head>

<body>

    <div id="app">

        <section class="vh-100">

            <header>

                <div id="logo_container">
                    <img src="./images/logo.svg" alt="logo">
                </div>


            </header>

            <main>
                <h1>{{message}}</h1>

                <ul>
                    <li v-for="(album, index) in data">

                        {{ album.title }}

                    </li>
                </ul>


            </main>

        </section>

    </div>

    <!-- BOOTSTRAP JAVASCRIPT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <!-- VUE JS 3 - CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- my javascript sheet link -->
    <script src="./js/script.js"></script>

</body>

</html>