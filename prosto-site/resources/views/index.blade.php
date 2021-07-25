@extends("layout")

@section("content")
    <div class="container">
        <div class="my-4">
            <form action="/addDay">
                <button class="btn bg-secondary-user" type="submit">Добавить новый день</button>
            </form>
        </div>
        @foreach($days as $day)
            <div class="col-12 col-md-4 my-4 text-dark text-decoration-none">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <h4>{{ $day->name_of_day }}</h4>
                        <h4>{{$day->date}}</h4>
                    </div>

                    <div class="col justify-content-end d-flex">

                        <a class="" href="/redactDay-{{ $day->id }}">
                            <img src="{{asset('images/create_black_24dp.svg')}}" alt="Редактировать">
                        </a>

                    </div>
                </div>
                <pre class="mt-2" style="font-family: Helvetica,serif">{{$day->subjects_and_homeworks}}</pre>
            </div>
        @endforeach
    </div>
@endsection
