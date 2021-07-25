<!doctype html>
<html lang="ru">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Домашка</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .bg-primary-user {
        background-color: #388e3c;
    }

    .footer-text {
        color: black;
    }

    .bg-secondary-user {
        background-color: #c0ca33;
    }

    body {
        font-family: 'Helvetica';
    }
</style>

</head>
<body class="bg-white text-dark">
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-primary-user border-bottom shadow-sm">

        <a class="my-0 mr-md-auto fw-weight-normal text-white text-decoration-none head" href="http://prosto-site/">
            Домашнее задание 9А
        </a>
    </div>

    <div class="container mb-5">
        @yield("content")
    </div>

    <footer class="text-muted bg-secondary-user pt-5 pb-5 footer">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col">
                    <p class="footer-text">Пишите или смотрите дз.</p>
                </div>

                <div class="col d-flex justify-content-end">
                    <p class="float-right">
                        <a class="footer-text " href="#top"><img src="{{asset('images/north_black_24dp.svg')}}"> Наверх</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>
</html>
