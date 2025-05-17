<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}" /> --}}
    {{-- <link> --}}
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
  /* flex-grow: 60; */
  height: 15%;
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
  font-size: 30px;
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
  font-size: 30px;
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
  /* display: none; */
}

main {
  /* flex-grow: 60; */
  background-color: red;
  height: 78%;

}

footer {
  background-color: #000;
  flex-grow: 25;
}

.header-main {
  position: relative;
  background: green;
  padding: 5px 0;
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
  font-size: 30px;
  /* margin-top: 5px; */
}

.price-container {
  display: flex;
  /* margin-top: 5px; */
}

.price-container table {
  /* flex: 2; */
  width: 74%;
}

.logo-container img {
  width: 71%;
}

.price-container .symbol-container .title {
    font-weight: 700;
    font-size: 30px;
    color: #fff;
    margin-left: 30px;
    display: flex;
    justify-content: center;
    text-align: center;
}

.price-container .symbol-container {
  /* flex: 1; */
  width: 29%;
  border: solid 1px #fff;
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
  padding: 17px;

  white-space: nowrap;         /* Prevent text wrapping */
  overflow: hidden;            /* Hide anything that overflows */
  text-overflow: ellipsis;

}
/* 
.element td {
  padding: 20px;

} */

table td {
    /* width: 33.33%; */
    text-align: center;
    font-weight: 700;
    font-size: 30px;
    color: rgb(253, 233, 55);
  }

thead tr th {
  text-align: center;
  color: #fff;
  /* color: rgb(253, 233, 55); */
  font-size: 30px;
  font-weight: 700;
  border-bottom: 4px solid #fff;
  background: rgb(12, 34, 202)
}

/* tbody .title {
width: 40%;
} */

marquee { 
    font-size: 30px;
    padding: 10px 0;
    display: flex;
    color: rgb(43, 235, 43);
    align-items: center;
    height: 100%;
}
/* 
thead td {
  background: rgb(12, 34, 202)
} */

.title-time {
  position: absolute;
  color: #fff;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  font-family: 700;
  font-size: 20px;
}
    </style>
</head>
<body>
    <header>
        <!-- <div class="symbol-header" style="background-color: blue;"> -->
        {{-- <img src="{{ asset('logo_ring.png') }}" class="logo" height="80" /> --}}
        <img src="https://i.postimg.cc/90GQz0Fh/logo-ring.png" class="logo" height="80" />
      
        <!-- </div> -->
        <div class="content-header">
            <div class="title">DOANH NGHIỆP VÀNG BẠC VIỆT HOÀN</div>
            <div class="content">
                <div class="text-main">Giá Vàng Hôm Nay</div>
                <div class="text-contact">
                    {{-- <div class="time" style="margin-bottom: 5px; color:coral"></div> --}}
                    <div class="address" style="margin-bottom: 10px;">Ngã 3 - Cát Thịnh - Văn Chấn - Yên Bái</div>
                    <div class="phone">ĐT: 0346 147 495</div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="header-main">
            <div class="title-unit">ĐVT: VNĐ/ chỉ</div>
            <div class="title-main">BẢNG GIÁ VÀNG</div>
             <div class="title-time" style="color:#fff"></div>
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
                        <tr class="element">
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
                    <img src="https://i.postimg.cc/5thJvJrN/doji.jpg" style="height: auto;" />
                </div>
            </div>
        </div>
    </main>
    <footer>
        <marquee direction="left">Doanh nghiệp Vàng Bạc Việt Hoàn. Điểm bán ủy quyền vàng nhẫn ép vỉ 999.9 và trang sức 10K, 14K, 18K và 24K của Tập Đoàn Vàng Bạc Đá Quý Doji.</marquee>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/locale/vi.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
<script src="https://unpkg.com/currency.js@~2.0.0/dist/currency.min.js"></script>
<script>
  setInterval(() => {
    const dayOfWeekString = ['Chủ nhật', 'Thứ hai', 'thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy'];
    const month = moment().format('MM');
    const day = moment().format('DD')
    const year = moment().format('YYYY')
    const time = moment().format('HH:mm:ss')
    const dayOfWeek = moment().format('e')
    
    const dateTime = `${dayOfWeekString[dayOfWeek]}, Ngày ${day} tháng ${month} năm ${year} - ${time}`
    
    document.querySelector('.title-time').textContent = dateTime
}, 1000)

</script>
</body>
</html>