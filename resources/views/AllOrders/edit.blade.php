@extends('layout')
@section('content')

<div class="container">
    <form method="POST" action="{{ route('Order.update', $order->id) }}">
    @csrf
    @method('patch')
    <div class="row">
        <div class="col-5 mb-3">
            <label for="status" class="form-label">Статус заказа</label>
            <select name="status" id="status" class="form-control">
                <option value="0" @if(!$order->status) {{'selected'}} @endif>Не выполнен</option>
                <option value="1" @if($order->status ) {{'selected'}} @endif>Выполнен</option>
            </select>
        </div>
    </div>
    <h3>Данные отправителя</h3>
    <div class="row">
        <div class="col mb-3">
            <label for="NameSender" class="form-label">Имя</label>
            <input value="{{$order->NameSender}}" type="text" class="form-control" id="NameSender" name="NameSender" required>
        </div>
        <div class="col mb-3">
            <label for="PhoneSender" class="form-label">Номер телефона</label>
            <input value="{{$order->PhoneSender}}" type="tel" class="form-control" id="PhoneSender" name="PhoneSender" required>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="region" class="form-label">Район</label>
        <select class="form-control" id="region" name="region">
            @foreach($regions as $region)
                
                <option value="{{$region->region}}" {{$order->region_id === $region->region ? 'selected' : ''}}>{{$region->name}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="AddSender" class="form-label">Адрес</label>
            <input value="{{$order->AddSender}}" type="text" class="form-control" id="AddSender" name="AddSender" required>
        </div>
        <div class="col mb-3">
                <label for="AddSenderApartment" class="form-label">кв/офис</label>
                <input value="{{$order->AddSenderApartment}}" type="text" class="form-control" id="AddSenderApartment" name="AddSenderApartment">
            </div>
        <div class="col mb-3">
            <label for="AddSenderfloor" class="form-label">Этаж</label>
            <input value="{{$order->AddSenderfloor}}" type="text" class="form-control" id="AddSenderfloor" name="AddSenderfloor">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="NumberSeats" class="form-label">Колличество мест</label>
            <input value="{{$order->NumberSeats}}" type="number" class="form-control" id="NumberSeats" name="NumberSeats" required>
        </div>
        <div class="col mb-3">
            <label for="Weight" class="form-label">Примерный вес</label>
            <input value="{{$order->Weight}}" type="number" class="form-control" id="Weight" name="Weight" required>
        </div>
    </div>
    <h3>Данные получателя</h3>
    <div class="row">
        <div class="col mb-3">
            <label for="RecipientName" class="form-label">Имя</label>
            <input value="{{$order->RecipientName}}" type="text" class="form-control" id="RecipientName" name="RecipientName" required>
        </div>
        <div class="col mb-3">
            <label for="PhoneRecipient" class="form-label">Номер телефона</label>
            <input value="{{$order->PhoneRecipient}}" type="tel" class="form-control" id="PhoneRecipient" name="PhoneRecipient" required>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="AddRecipient" class="form-label">Адреc</label>
        <input value="{{$order->AddRecipient}}" type="text" class="form-control" id="AddRecipient" name="AddRecipient" required>
    </div>
    <div class="mb-3">
        <label for="comments" class="form-label">Комментарий к заказу</label>
        <input value="{{$order->comments}}" class="form-control" id="comments" name="comments">
    </div>

    
    <button type="submit" class="mb-3 btn btn-primary">Готово</button>
    </form>
</div>

@endsection