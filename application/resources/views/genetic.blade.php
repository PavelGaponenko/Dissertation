<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genetic</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="../js/main.js"></script>
    <!-- подключаем необходимые js-файлы -->
    <script type="text/javascript" src="js/raphael-min.js">
    </script>
    <script type="text/javascript" src="js/dracula_graffle.js">
    </script>
    <script type="text/javascript" src="js/dracula_graph.js">
</head>
<body>
    <p>ГЕНЕТИЧЕСКИЙ АЛГОРИТМ</p>
    <div>
        @foreach($result as $value)
            <p>{{$value}}</p>
        @endforeach
{{--        @foreach($state as $population)--}}
{{--            <hr>--}}
{{--            <p><b>Популяция:</b></p>--}}
{{--            @foreach($population['chromosomes'] as $chromosome)--}}
{{--                <p>{{$chromosome}}</p>--}}
{{--            @endforeach--}}
{{--            <p>Родители:</p>--}}
{{--            @foreach($population['parents'] as $parent)--}}
{{--                <p>{{$parent}}</p>--}}
{{--            @endforeach--}}
{{--            <p>Потомки (в результате кроссовера):</p>--}}
{{--            @foreach($population['childs'] as $child)--}}
{{--                <p>{{$child}}</p>--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
    </div>
</body>
</html>
