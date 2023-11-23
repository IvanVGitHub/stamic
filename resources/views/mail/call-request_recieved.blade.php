@extends('mail.mail-template')
@section('header')
    Получен запрос на обратную связь в форме #{{$request->id}}
@endsection
@section('mail-content')
    <x-mail.template.row pt="15" pb="10" color="#777777">
        Запрос на обратную связь #{{$request->id}} от {{$request->created_at->format('d.m.Y H:i')}} <br><br>
        Имя: {{$request->name}} <br>
        Фамилия: {{$request->lastname}} <br>
        Почта: <a href="mailto:{{$request->email}}">{{$request->email}}</a>  <br>
        Телефон: {{$request->phone}} <br>
        Тип: {{$request->data}}<br>
        Комментарий: {{$request->comment}}<br>
    </x-mail.template.row>
@endsection
