@extends('layout')

@section('content')
    <h1>Home, passing data !!</h1>
    Name: {{$name}}<br>
    Age: <?=$age?><br>
    Surname: {{$surname}}<br>
    Fones:
    <ul>
    @foreach ($fones as $fone)
        <li>{{ $fone }}</li>
    @endforeach
    </ul>

    {{rand(1,100)}}<br>

    <a href="{{route('my_route')}}">Link</a><br>

    @php
        $sport = "soccer";
        echo "my favorite sport is $sport <br>"
    @endphp

    <p>
        Blade Directives<br>

        @if ($age === 1)
            I am very young !
        @elseif ($age > 1)
            I am young !
        @else
            I wasn't born yet !
        @endif<br>

        @unless ($age == 100)
            Test.<br>
        @endunless

        @for ($i = 0; $i < 10; $i++)
            <p>The current value is {{ $i }}</p>
        @endfor
        
        @foreach ($fones as $fone)
            @if ($loop->first)
                The first fone is {{$fone}}.<br>
            @endif
        
            @if ($loop->last)
                The last fone is {{$fone}}.
            @endif
        
            {{-- <p>This is fone {{ $fone->id }}</p> --}}
        @endforeach

    </p>

@endsection
    <!--html comment -->
    {{-- blade comment --}}


@section('test')
    <h1>Teste !!</h1>
@endsection