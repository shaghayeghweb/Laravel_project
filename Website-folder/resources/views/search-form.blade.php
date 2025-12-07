<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('search')}}" method="post" class="menu-search-form">
    @csrf
    <div class="input-group">
        <input type="search" name="search" class="form-control" placeholder=" جستجو "/>
        <button type="submit">
            <i class="ti-arrow-right"></i>
        </button>
    </div>
</form>
</body>
</html>
