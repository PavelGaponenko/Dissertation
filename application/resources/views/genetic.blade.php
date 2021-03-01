<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genetic</title>
</head>
<body>
    <p>ГЕНЕТИЧЕСКИЙ АЛГОРИТМ</p>
    <div>
        @foreach($state as $population)
            <hr>
            <p><b>Популяция:</b></p>
            @foreach($population['chromosomes'] as $chromosome)
                <p>{{$chromosome}}</p>
            @endforeach
            <p>Родители:</p>
            @foreach($population['parents'] as $parent)
                <p>{{$parent}}</p>
            @endforeach
            <p>Потомки (в результате кроссовера):</p>
            @foreach($population['childs'] as $child)
                <p>{{$child}}</p>
            @endforeach
        @endforeach
    </div>
</body>
</html>
