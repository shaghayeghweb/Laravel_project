<!DOCTYPE html>
<html>
<head>
    <title>تست فرم</title>
</head>
<body>
@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif
<form method="POST" action="{{route('test')}}">
    @csrf

    <button type="submit">ارسال تست</button>
</form>
</body>
</html>
