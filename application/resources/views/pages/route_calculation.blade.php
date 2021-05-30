<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

<div class="container-fluid" style="padding-left: 10%; padding-right: 10%">

    <div class="row">
        <div class="col-12">
            <div class="mb-3 text-center">
                <h3>Рассчет маршрута</h3>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Генетический алгоритм</h5>
                    <p class="card-text">Время выполнения: 00:00:12</p>
                    <a href="#" class="btn btn-primary">Выполнить рассчет</a>
                    <a href="#" class="btn btn-primary">Открыть список заказов</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Метод ветвей и границ</h5>
                    <p class="card-text">Время выполнения: 00:00:15</p>
                    <a href="#" class="btn btn-primary">Выполнить рассчет</a>
                    <a href="#" class="btn btn-primary">Открыть список заказов</a>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div>--}}
{{--                <p>Генетический алгоритм</p>--}}
{{--                @foreach($result as $value)--}}
{{--                    <p>{{$value}}</p>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-12">--}}

{{--        </div>--}}
{{--    </div>--}}
</div>

<div class="container-fluid" style="padding-left: 20%; padding-right: 20%; margin-top: 50px;">
    <div class="row">
        <div class="col-12">
            <div id="map" style="width: 100%; height: 400px"></div>
            <script type="text/javascript">

                ymaps.ready(init);
                function init(){
                    // Создание карты.
                    var myMap = new ymaps.Map("map", {
                        // Координаты центра карты.
                        // Порядок по умолчанию: «широта, долгота».
                        // Чтобы не определять координаты центра карты вручную,
                        // воспользуйтесь инструментом Определение координат.
                        center: [55.76, 37.64],
                        // Уровень масштабирования. Допустимые значения:
                        // от 0 (весь мир) до 19.
                        zoom: 7
                    });
                }

                ymaps.route([
                    'Королев',
                    { type: 'viaPoint', point: 'Мытищи' },
                    'Химки',
                    { type: 'wayPoint', point: [55.811511, 37.312518] }
                ], {
                    mapStateAutoApply: true
                }).then(function (route) {
                    route.getPaths().options.set({
                        // балун показывает только информацию о времени в пути с трафиком

                        // вы можете настроить внешний вид маршрута
                        strokeColor: '0000ffff',
                        opacity: 0.9
                    });
                    // добавляем маршрут на карту
                    map.geoObjects.add(route);
                });


            </script>

        </div>
    </div>
</div>
