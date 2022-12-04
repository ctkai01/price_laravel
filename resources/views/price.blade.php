<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}" />
    <link>
</head>
<body>
    <header>
        <!-- <div class="symbol-header" style="background-color: blue;"> -->
        <img src="{{ asset('logo_ring.png') }}" class="logo" height="80" />
        <!-- </div> -->
        <div class="content-header">
            <div class="title">DOANH NGHIỆP VÀNG BẠC VIỆT HOÀN</div>
            <div class="content">
                <div class="text-main">Giá Vàng Hôm Nay</div>
                <div class="text-contact">
                    <div class="time" style="margin-bottom: 5px; color:coral"></div>
                    <div class="address" style="margin-bottom: 10px;">Ngã 3 - Cát Thịnh - Văn Chấn - Yên Bái</div>
                    <div class="phone">ĐT: 0346 147 495</div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="header-main">
            <div class="title-unit">ĐVT: 1000đ/ chỉ</div>
            <div class="title-main">BẢNG GIÁ VÀNG</div>
        </div>
        <div class="price-container">
            <table>
                <thead>
                    <tr>
                        <th>Loại vàng</th>
                        <th>Mua vào</th>
                        <th>Bán ra</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <td>{{$price->name}}</td>
                            <td class='price_value'>{{$price->mua_vao}}</td>
                            <td class='price_value'>{{$price->ban_ra}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="symbol-container">
                <div class="title">Điểm Bán Vàng Ủy Quyền Của Tập Đoàn </div>

                <div class="logo-container" style="display: flex;
    justify-content: center; margin-top: 10px;">
                    <img src="{{ asset('doji.jpeg') }}" style="width: 415px; height: auto;" />
                </div>
            </div>
        </div>
    </main>
    <footer>
        <marquee direction="left">Doanh nghiệp Vàng Bạc Việt Hoàn Kính Chào Quý Khách - Chúc Quý Khách Hàng An Khanh Thịnh Vượng </marquee>
    </footer>
</body>
</html>