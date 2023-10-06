<div class="section {{$class ?? ''}} {{($light ?? false) ? "content-light" : ''}}" id="{{$id}}">
    <div class="container">
        <div>
            {{$slot}}
        </div>
    </div>
</div>
