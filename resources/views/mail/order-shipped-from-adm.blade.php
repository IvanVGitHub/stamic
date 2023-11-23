@extends('mail.mail-template')
@section('header')
    Заказ #{{$order->getCodedId()}} принят в работу
@endsection
@section('mail-content')
    <x-mail.template.row pt="10" pb="10" color="#777777">
        Состав заказа:
    </x-mail.template.row>
    @foreach ($order->goods as $item)
        <x-mail.template.row pt="4" pb="4">
            {{$loop->iteration}}: <span style="font-weight: 700">{{$item->goods->fullname}}</span>
            x{{$item->amount}} ({{$item->goods->category->name}}).
        </x-mail.template.row>
    @endforeach
    <x-mail.template.row fontsize="20" pt="8" pb="10">
        <span style="font-weight: 700">Сумма заказа:</span>  {{$order->getDiscountedSum()}} ₽
        @if($order->getSum() != $order->getDiscountedSum())
            <span style="font-size: 16px; color:#777777 ">({{$order->getSum()}} ₽ без учета скидки)</span>
        @endif
    </x-mail.template.row>
    <x-mail.template.delimiter />
    <x-mail.template.row pt="15" pb="10" color="#777777">

    </x-mail.template.row>
{{--    <x-mail.template.row align="center" pt="15" pb="10" pl="10" pr="10" color="#777777">--}}
{{--        <span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ed8e20;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="{{route('order.show', [$order])}}" class="es-button es-button-1" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#ffffff;font-size:18px;border-style:solid;border-color:#ed8e20;border-width:15px 30px;display:inline-block;background:#ed8e20;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Просмотреть заказ</a></span>--}}
{{--    </x-mail.template.row>--}}
@endsection
