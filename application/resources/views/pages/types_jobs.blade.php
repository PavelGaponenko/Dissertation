<div class="container-fluid" style="padding-left: 30%; padding-right: 30%">
    <div class="row">
        <div class="col-12">
            <form action="/addType" method="POST">
                <div class="mb-3 text-center">
                    <h3>Добавить тип работы</h3>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Наименование вида работы">
                </div>

                <br>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="mb-3 text-center">
                <h3>Типы работ</h3>
            </div>
            @foreach($typesJobs as $typeJob)
                <div class="alert alert-primary" role="alert">
                    {{$typeJob->name}} <a href="/delType?id={{$typeJob->id}}" class="btn btn-outline-danger">Удалить</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
