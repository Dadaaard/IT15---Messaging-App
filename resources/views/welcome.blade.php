<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        background-color: #f3f4f6;
      }

      * {
        margin: 0%;
      }

      .container-main {
        border-radius: 10px;
        background-color: #ffffff; /* Example style */
        -webkit-box-shadow: -1px 6px 17px -1px rgba(0,0,0,0.06); 
box-shadow: -1px 6px 17px -1px rgba(0,0,0,0.06);
        padding: 100px; /* Example style */
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: fit-content;
        margin: 0 auto;
        height: 100vh;
        flex-direction: column; /* Changed flex direction to column */
      }

      .link-container {
        margin: 10px;
        padding: 10px 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease-in-out;
        color: white;
        background-color: #1f2937;
        font-size: 0.75rem;
        font-weight: 550;
        font-family: Verdana, sans-serif;
      }

      .link-container:hover {
        background-color: rgb(55 65 81);
      }

      .link-container:active {
        background-color: rgb(17 24 39);
      }

      .welcome-text {
        text-align: center;
        font-size: 1.25rem;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="welcome-text">Welcome to our platform!</h1>
      <div class="container-main">
        @if (Route::has('login'))
          @auth
            <a class="link-container" href="{{ route('Messages') }}">
              Dashboard
            </a>
          @else
            <a class="link-container" href="{{ route('login') }}"> LOG IN </a>

            @if (Route::has('register'))
              <a class="link-container" href="{{ route('register') }}"
                >REGISTER</a
              >
            @endif
          @endauth
        @endif
      </div>
    </div>
  </body>
</html>