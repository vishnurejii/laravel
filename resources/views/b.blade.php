<h1>odd/even</h1>

@for ($i=0 ; $i<10 ; $i++)
    @if($i % 2 == 0)
        <h1>{{ $i }} is even</h1>
    @else
        <h1>{{ $i }} is odd</h1>
    @endif
@endfor

{!! " <h1> hi </h1>" !!}
{!!"<script> alert('int221 etp will be held in june 2036') </script>"!!}
{!!"<script> alert('time table updated') </script>"!!}


@php $cars=["zen","alto","swift","audi"];
@endphp
<ul>
    @foreach($cars as $car)
    @if($loop->first)
    <li style="color: red"> {{$loop->count}}-{{$car}}</li>
    @endif
    <li>{{$loop->count}}-{{$car}}</li>

    @endforeach
</ul>



