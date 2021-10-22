@extends('layouts.app')

@section('content')


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking BoxIcon for Icon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="wrapper">

      <section class="input-part">
        <p class="info-txt"></p>
        <div class="content">
          <input type="text" spellcheck="false" placeholder="Enter city name" required>
          <div class="separator"></div>
          <button>Get Device Location</button>
        </div>
      </section>

      <section class="weather-part">
        <img src="" alt="Weather Icon">
        <div class="temp">
          <span class="numb">_</span>
          <span class="deg">°</span>C
        </div>

        <div class="weather">_ _</div>

        <div class="location">
          <i class='bx bx-map'></i>
          <span>_, _</span>
        </div>

        <div class="bottom-details">
          <div class="column feels">
            <i class='bx bxs-thermometer'></i>
            <div class="details">
              <div class="temp">
                <span class="numb-2">_</span>
                <span class="deg">°</span>C
              </div>
              <p>Feels like</p>
            </div>
          </div>

          <div class="column humidity">
            <i class='bx bxs-droplet-half'></i>
            <div class="details">
              <span>_</span>
              <p>Humidity</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <script src="script.js"></script>
    <div>
      <input type="button" class="btn btn-primary" value=" BACK " onclick="history.back(-1)">
    </div>

  </body>
</html>

@endsection