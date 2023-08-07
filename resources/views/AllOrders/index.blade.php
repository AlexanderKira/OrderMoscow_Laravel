@extends('layout')
@section('content')

<h1>Все заказы</h1>
<div class="container">
    <form action="index.php?page=AllOrders&action=search" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="order-search" id="order-search" class="form-control" placeholder="Номер заказа">
            </div>
            <div class="col">
                <select class="form-control" id="region-search" name="region-search">
                        <option value="{{ null }}">Все районы</option>
                    @foreach($regions as $region)
                        <option value="{{$region->region}}">{{$region->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="date" name="date-search" id="date-search" class="form-control">
            </div>
            <div class="col">
                <select name="status-search" id="status-search" class="form-control">
                    <option value="2">любой статус</option>
                    <option value="0">Не выполнен</option>
                    <option value="1">Выполнен</option>
                </select>
            </div>
            <button type="submit" class="col mb-3 btn btn-primary">Найти</button>
        </div>
    </form>
</div>


@foreach ($orders as $order)
    @include('AllOrders.serch')
@endforeach


@endsection

