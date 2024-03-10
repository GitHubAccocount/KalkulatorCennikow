<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kalkulator pozwalający obliczyć jak zmieni się rachunek za prąd po uwzględnieniu cennika oferowanego
    przez firme Tauron. Cenniki: Prąd z Serwisantem 24H, Prąd EKO + LAS, Prąd EKO z Serwisantem komputerowym 24H, Prąd z usługami Zdrowie i Opieka 24H">
    <meta name="keywords" content="cennik, oferta, oferta Tauron, cennik Tauron, Tauron rabat, oferta od Tauron, cennik od Tauron, serwisant 24h, 
    serwisant 24h Tauron, Prąd z Serwisantem 24H, Prąd EKO + LAS, Prąd EKO z Serwisantem komputerowym 24H, Prąd z usługami Zdrowie i Opieka 24H,
    kalkulator ofert, kalkulator">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <title>Kalkulator Cenników z Tauron</title>
</head>
<body class="bg-gradient-to-r from-gray-300  to-gray-400 font-roboto">
  <div class="flex justify-center items-center xl:py-3 p-3">
    <div class="bg-slate-50 max-h-fit min-h-screen p-5 xl:w-1/2 w-full rounded-md shadow-xl relative pb-20">
      @yield('content')
    </div>
  </div>
</body>
</html>