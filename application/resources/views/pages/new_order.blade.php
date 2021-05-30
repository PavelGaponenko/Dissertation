<div class="container-fluid" style="padding-left: 30%; padding-right: 30%">
    <div class="row">
        <div class="col-12">
            <form action="/add" method="POST">
                <div class="mb-3 text-center">
                    <h3>Новый заказ</h3>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Наименование">
                </div>

                <div class="mb-3">
                    <select class="form-select" name="type" placeholder="Вид работы">
                        @foreach($typesJobs as $typeJob)
                            <option value="{{$typeJob->id}}">{{$typeJob->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="order_date" placeholder="Дата">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="job_time" placeholder="Время работы">
                </div>

                <div class="row g-3 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Время начала" name="start_date">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Время окончания" name="finish_date">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Координата X" name="coordinate_x">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Координата Y" name="coordinate_y">
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-success">Создать заказ</button>
            </form>

            @if (isset($alert) && $alert == true)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <strong>Заказ создан!</strong> <a href="/orders">Все заказы</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
</div>
