Заказ {{$order->getCodedId()}} готов к отгрузке
Ваш заказ поступил на склад, ждем Вас в нашем центре.
Заказ можно забрать по адресу {{$order->place->address}}
@foreach ($order->goods as $item)
    {{$item->goods->fullname}}</span>  x{{$item->amount}}
@endforeach

https://outletshin.ru
Это письмо сгенерировано автоматически. Не отвечайте на него.
