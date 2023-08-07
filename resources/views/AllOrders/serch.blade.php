<div class="container mt-4">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col">{{'Заказ №' . $order->id}}</div>
                            <div class="col">{{$order->region_id}}</div>
                            <div class="col">{{$order->created_at}}</div>
                            <div class="col">{{$order->status ? 'Выполнен' : 'Не выполнен';}}</div>
                        </div>
                    </div>
                    
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="container">
                        <h3>Отправление</h3>
                        <div class="row mb-3">
                            <div class="col"><strong>Район: </strong>{{$order->name}}</div>
                            <div class="col"><strong>Курьерские: </strong>{{$order->price . 'р'}}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col mb-3"><strong>Отправление: </strong>{{$order->AddSender}}</div>
                            <div class="col mb-3"><strong>кв/офис: </strong>{{$order->AddSenderApartment}}</div>
                            <div class="col mb-3"><strong>Этаж: </strong>{{$order->AddSenderfloor}}</div>
                        </div>
                        
                        <div class="mb-3"><strong>н/т Отправителя: </strong>{{$order->PhoneSender . ' ' . $order->NameSender}}</div>
                        <div class="mb-3"><strong>Комментарии: </strong>{{$order->comments}}</div>
                        
                        <div class="row mb-3">
                            <div class="col"><strong>к/мест: </strong>{{$order->NumberSeats}}</div>
                            <div class="col"><strong> Вес: </strong>{{$order->Weight . 'кг'}}</div>
                        </div>
    
                        <h3>Получение</h3>
                        <div class="mb-3"><strong>Получение: </strong>{{$order->AddRecipient}}</div>
                        <div class="mb-3"><strong>н/т Получателя: </strong>{{$order->PhoneRecipient . ' ' . $order->RecipientName}}</div>
                        
                        <div class="row justify-content-between">
                            <a href="{{route('Order.edit', $order->id)}}" class="btn btn-primary col-4">Изменить</a>
                            <form action="{{route('Order.delete', $order->id)}}" method="post" class="col">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                        






                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

