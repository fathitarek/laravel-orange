<html>
    <body>

        {{$x}}

        @if ($x<5)
            <p>less than</p>
            @elseif ($x>5)
            <p>greater than </p>
            @else
            <p>eqaual 5</p>
        @endif


        @for ($i = 0; $i < count($arr); $i++)
            {{$arr[$i]}} <br>
        @endfor

        @foreach ( $age as $value)
            {{$value}}
        @endforeach
    </body>
</html>