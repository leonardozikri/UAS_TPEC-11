<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Used New Taste</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- Styles -->
        <style>
		* {box-sizing: border-box;}
		
		.topnav {
		  overflow: hidden;
		  background-color: #e9e9e9;
		}

		.topnav a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #2196F3;
		  color: white;
		}

		.topnav .search-container {
		  float: right;
		}

		.topnav input[type=text] {
		  padding: 6px;
		  margin-top: 8px;
		  font-size: 17px;
		  border: none;
		}

		.topnav .search-container button {
		  float: right;
		  padding: 6px 10px;
		  margin-top: 8px;
		  margin-right: 16px;
		  background: #ddd;
		  font-size: 17px;
		  border: none;
		  cursor: pointer;
		}

		.topnav .search-container button:hover {
		  background: #ccc;
		}

		@media screen and (max-width: 600px) {
		  .topnav .search-container {
			float: none;
		  }
		  .topnav a, .topnav input[type=text], .topnav .search-container button {
			float: none;
			display: block;
			text-align: left;
			width: 100%;
			margin: 0;
			padding: 14px;
		  }
		  .topnav input[type=text] {
			border: 1px solid #ccc;  
		  }
		}
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
			
            .full-height {
                height: 80vh;
            }

            .flex-center {
				background-color: #fff;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 950px;
                top: 20px;
				background-color: #f0f0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
				fonr-color:  #636b6f
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .2rem;
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
	
	
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
						<a href="{{ url('/logout') }}"> logout </a>
						
                    @else
                        <a href="{{ route('login') }}">Login</a>
					
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
			<div class="links">
					<br><br>
					<div class="topnav">
					  <a class="active" href="#home">Home</a>
					  <a href="{{ url('produk') }}">Produk</a>
					  <a href="{{ url('tentangkami') }}">Tentang Kami</a>
					  <a href="{{ url('caraorder') }}">Cara Order</a>
					  <div class="search-container">
						<form action="/action_page.php">
						  <input type="text" placeholder="Search.." name="search">
						  <button type="submit"><i class="fa fa-search"></i></button>
						</form>
					  </div>
					</div>
                </div>
                <div class="title m-b-md">
                  <hr> <a href="#" style="text-decoration:none" color="gray"> Used New Taste</a></hr><hr>
                </div>
                
            </div>
        </div>
				<div class="article">
					Online Customer Service (+62)088811112222333<br>
					Instagram @UsedNewTaste<br>
				
				</div>
		<br><footer>&copy 2019 - Used New Taste</footer>
    </body>
</html>
