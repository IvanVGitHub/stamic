Заказ {{$order->getCodedId()}} принят в работу

@foreach ($order->goods as $item)
    {{$item->goods->fullname}}</span>  x{{$item->amount}}
@endforeach

https://outletshin.ru
Это письмо сгенерировано автоматически. Не отвечайте на него.
