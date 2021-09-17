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

    <div class="container my-4">
        <form action="/deleteDay-{{ $days->id }}" method="post">
            @csrf

            <button class="btn bg-secondary-user" type="submit">Удалить</button>
        </form>
    </div>

    <div class="container my-4">
        <form action="/redactDay-{{ $days->id }}" method="post">
            @csrf

            <div class="form-row">
                <label class="w-100">День</label>
                <textarea name="title"> {{$days->name_of_day}} </textarea>
            </div>

            <div class="form-row mt-2">
                <label class="w-100">Дата</label>
                <textarea name="date"> {{$days->date}} </textarea>
            </div>


            <div class="my-4">
                <label>Пишите дз и расписание сюда</label>
                <textarea name="text" class="col-12" rows="14">{{ $days->subjects_and_homeworks}}</textarea>
            </div>

            <button class="btn bg-secondary-user" type="submit">Сохранить</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>
</html>
