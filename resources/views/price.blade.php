<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}" />
    <link>
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  display: flex;
  flex-direction: column;
  height: 100vh;
  max-height: 100vh;
}

header {
  flex-grow: 60;
  display: flex;
  background-color: #000;
  position: relative;
  /* background-color: #000; */
}

header .logo {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
}

header .symbol-header {
  flex: 2;
}

header .content-header {
  /* flex: 10; */
  width: 100%;
  display: flex;
  flex-direction: column;
}

header .content-header .title {
  color: rgb(253, 233, 55);
  font-size: 40px;
  flex: 1;
  font-weight: 700;
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

header .content-header .content {
  position: relative;
  flex: 1;
}

header .content-header .text-main {
  height: 100%;
  font-size: 40px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 700;
  align-items: center;
  justify-content: center;
  display: flex;
  color: rgb(221, 23, 1);
}

header .content-header .text-contact {
  position: absolute;
  right: 10px;
  bottom: 2px;
  color: #fff;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
}

main {
  flex-grow: 60;
  background-color: red;
}

footer {
  background-color: #000;
  flex-grow: 25;
}

.header-main {
  position: relative;
}

.header-main .title-unit {
  position: absolute;
  color: #fff;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  font-family: 700;
  font-size: 24px;
}

.header-main .title-main {
  display: flex;
  justify-content: center;
  color: #fff;
  font-family: 700;
  font-size: 40px;
  margin-top: 5px;
}

.price-container {
  display: flex;
  margin-top: 5px;
}

.price-container table {
  flex: 2;
}

.price-container .symbol-container .title {
    font-weight: 700;
    font-size: 40px;
    color: #fff;
    margin-left: 40px;
    display: flex;
    justify-content: center;
    text-align: center;
}

.price-container .symbol-container {
  flex: 1;
 
}

.logo-container {
    
}

table {
  border-collapse: collapse;
}



td,
th {
  border: 2px solid #fff;
  /* padding: 0.5rem; */
  text-align: left;
  padding: 25px;

}

table td {
    width: 33.3%;
    text-align: center;
    font-weight: 700;
    font-size: 40px;
    color: rgb(253, 233, 55);
  }

thead tr th {
  text-align: center;
  color: rgb(253, 233, 55);
  font-size: 40px;
  font-weight: 700;
  border-bottom: 4px solid #fff;
}

marquee { 
    font-size: 30px;
    padding: 10px 0;
    display: flex;
    color: rgb(43, 235, 43);
    align-items: center;
    height: 100%;
}
    </style>
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