@extends('layout')
@section('content')

 <div class="container">
        <form method="POST" action="{{ route('Order.store')}}">
            {{-- немного защитим наш проект @csrf--}}
            @csrf
            <h3>Заполните данные отправителя</h3>
            <div class="row">
                <div class="col mb-3">
                    <label for="NameSender" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="NameSender" name="NameSender" required>
                </div>
                <div class="col mb-3">
                    <label for="PhoneSender" class="form-label">Номер телефона</label>
                    <input type="tel" class="form-control" id="PhoneSender" name="PhoneSender" required>
                </div>
            </div>
            <h5>Точные данные помогут курьеру найти вас быстрее</h5>
            <div class="mb-3">
                <label for="region" class="form-label">Район</label>
                <select class="form-control" id="region" name="region_id">
                    @foreach($regions as $region)
                        <option value="{{$region->region}}" selected >{{$region->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="AddSender" class="form-label">Адрес</label>
                    <input type="text" class="form-control" id="AddSender" name="AddSender" required>
                </div>
                <div class="col mb-3">
                    <label for="AddSenderApartment" class="form-label">кв/офис</label>
                    <input type="text" class="form-control" id="AddSenderApartment" name="AddSenderApartment" required>
                </div>
                <div class="col mb-3">
                    <label for="AddSenderfloor" class="form-label">Этаж</label>
                    <input type="text" class="form-control" id="AddSenderfloor" name="AddSenderfloor" required>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="NumberSeats" class="form-label">Колличество мест</label>
                    <input type="number" class="form-control" id="NumberSeats" name="NumberSeats" required>
                </div>
                <div class="col mb-3">
                    <label for="Weight" class="form-label">Примерный вес</label>
                    <input type="number" class="form-control" id="Weight" name="Weight" required>
                </div>
            </div>
            
            <h3>Заполните данные получателя</h3>
            <div class="row">
                <div class="col mb-3">
                    <label for="RecipientName" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="RecipientName" name="RecipientName" required>
                </div>
                <div class="col mb-3">
                    <label for="PhoneRecipient" class="form-label">Номер телефона</label>
                    <input type="tel" class="form-control" id="PhoneRecipient" name="PhoneRecipient" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="AddRecipient" class="form-label">Адрес</label>
                <input type="text" class="form-control" id="AddRecipient" name="AddRecipient" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Комментарий к заказу</label>
                <textarea class="form-control" id="comments" name="comments"></textarea>
            </div>

            
            <button type="submit" class="btn btn-primary mb-3">Готово</button>
        </form>
    </div>

@endsection