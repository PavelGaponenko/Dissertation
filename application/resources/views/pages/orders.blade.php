<div class="container-fluid" style="padding-left: 10%; padding-right: 10%">
    <div class="row">
        <div class="col-9">
            <div class="mb-3 text-center">
                <h3>Заказы</h3>
            </div>

            @foreach($orders as $order)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Заказ №{{$order->id}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Наименование заказа: {{$order->name}}</h6>
                        <p class="card-text">Вид работы: {{$order->type_job_id}}</p>
                        <p class="card-text">Дата: {{$order->order_date}}</p>
                        <p class="card-text">Время работы: job_time</p>
                        <p class="card-text">Дата начала: {{$order->start_date}} - Дата окончания {{$order->finish_date}}</p>
                        <a href="#" class="btn btn-warning">Редактировать</a>
                        <a href="#" class="btn btn-outline-danger">Удалить</a>
                    </div>
                </div>
                <br>
            @endforeach
        </div>

        <div class="col-3">
            <div class="mb-3 text-center">
                <h3>Фильтр</h3>
            </div>

            <form action="">
                <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Инженерно-геологические изыскания</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" id="" placeholder="Дата">
                </div>

                <button class="btn btn-primary">Применить фильтр</button>
            </form>
        </div>
    </div>
</div>
