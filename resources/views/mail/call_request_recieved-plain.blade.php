Запрос на обратную связь #{{$request->id}} от {{$request->created_at->format('d.m.Y H:i')}}

Имя: {{$request->name}}
Фамилия: {{$request->lastname}}
Почта: {{$request->email}}
Телефон: {{$request->phone}}
Тип: {{$request->data}}
Комментарий: {{$request->comment}}

{{config('app.url')}}
Это письмо сгенерировано автоматически. Не отвечайте на него.
