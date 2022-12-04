<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            margin-bottom: 20px;
        }
        
        .space {
            padding: 0 12px;
            visibility: hidden;
        }

        .line {
            height: 1px;
            width: 100%;
            background-color: #000;
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 0 15px;">
    <h1>Đổi bảng giá</h1>
    <form class="row g-3" method="POST" action="change">
        @csrf
        @foreach ($prices as $price)
            <span class='input-group-text'>{{$price->name}}</span>
            <div class='d-flex'>
                <span class='w-25'>Mua vào</span>
                <input type='text' name="{{'mua_vao'.$price->id}}" class='form-control number-separator' value="{{$price->mua_vao}}">
            </div>
            <div class='d-flex'>
                <span class='w-25'>Bán ra</span>
                <input type='text' name="{{'ban_ra'.$price->id}}" class='form-control number-separator' value="{{$price->ban_ra}}">
            </div>
            <input type='hidden' name="{{'name'.$price->id}}" value='{{$price->name}}'>
            <div class='line'></div>
        @endforeach

        <button type="submit" class="btn btn-success" style="margin-bottom: 40px;">Cập nhật</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/amiryxe/easy-number-separator/easy-number-separator.js"></script>
    <script>
        easyNumberSeparator({
            selector: '.number-separator',
            separator: '.'
        })

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
    </script>
</body>
</html>