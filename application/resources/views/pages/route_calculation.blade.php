<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-3 text-center">
                <h3>Рассчет маршрута</h3>
            </div>
            <div>
                <p>Генетический алгоритм</p>
                @foreach($result as $value)
                    <p>{{$value}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
