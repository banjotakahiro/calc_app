<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($operator == 'addition')
        @php
            $answer = $value_1 + $value_2;
        @endphp
    @elseif ($operator == 'subtraction')
        @php
            $answer = $value_1 - $value_2;
        @endphp
    @elseif ($operator == 'multiplication')
        @php
            $answer = $value_1 * $value_2;
        @endphp
    @elseif ($operator == 'division')
        @php
            $answer = $value_1 / $value_2;
        @endphp
    @else
        @php
            $answer = '計算できません';
        @endphp
    @endif
    <h1>計算アプリ</h1>
    <h3>{{ $answer }}</h3>
</body>
</html>
