<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Used New Taste</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
			
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.p {
				font-size: 1.4em;
				text-align: justify;
				text-align-last: center;
			}
			
			.bgkuy {
				background-color: #808080;
                color: #fff;
                
			}
			
			.nav {
			float: left;
			border-left: 1px solid gray;
			border-bottom: 1px solid gray;
			max-width: 160px;
			margin: 0;
			padding: 1em;
					}
					
			.article {
			margin-left: 170px;
			border-left: 1px solid gray;
			border-right: 1px solid gray;
			padding: 1em;
			overflow: hidden;
			}
			
			footer {
			padding: 1em;
			color: black;
			background-color: gray;
			clear: left;
			text-align: center;
        </style>
		
		<!--style-->
    </head>
	
	
	    <body>

            <div class="content">
                <div class="title m-b-md">
                    Used New Taste
                </div>

                <div class="links">
					<a href="{{ url('/') }}	">Home</a>
                    <a href="{{ url('produk') }}">Produk</a>
                    <a href="{{ url('tentangkami') }}">Tentang Kami</a>
                    <a href="{{ url('caraorder') }}">Cara Order</a>
					
                </div>
            </div>
        </div>

<div class="p">	
		
<div class="bgkuy">

<hr><h1>Produk</h1><hr>
</div>
	
	  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
      </div>
        <a href="{{ url('/caraorder') }}" target="_blank"><img src="{{ url('/img/dota2.jpg') }}" alt="Dota 2 Mouse" style="width:130px;height:150px;"></a><hr>
		<a href="{{ url('/caraorder') }}" target="_blank"><img src="{{ url('/img/razer.png') }}" alt="Keyboard Razer V2 Pink Edition" style="width:250x;height:200px;"></a><hr>
		<a href="{{ url('/caraorder') }}" target="_blank"><img src="{{ url('/img/panthera.png') }}" alt="Keyboard Razer V2 Pink Edition" style="width:200px;height:150px;"></a><hr>
		<a href="{{ url('/caraorder') }}" target="_blank"><img src="{{ url('/img/logitech.jpg') }}" alt="Keyboard Razer V2 Pink Edition" style="width:250px;height:150px;"></a><hr>
		<a href="{{ url('/caraorder') }}" target="_blank"><img src="{{ url('/img/steam.jpg') }}" alt="Keyboard Razer V2 Pink Edition" style="width:250px;height:130px;"></a><hr>
      </div>
         
	
</div>
	<br><footer>&copy 2019 - Used New Taste</footer>
    </body>
</html>