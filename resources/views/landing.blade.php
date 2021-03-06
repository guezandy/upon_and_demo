<!DOCTYPE html>
<!--

   _.._
.' .-'`
/  /
|  |
\  '.___.;
 '._  _.'
 ``


 *      *          *
		*                               *
 		*                   *
					*               *
*          **       *
						**
*           ***          *
*           ***       *
						**            *
					 **
*  *      *         *    *
*        *           *

-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Check out popular venues in any city in the US. Travel like a local.">
	<title>Upon Arrival to:</title>

	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/plugins/font-awesome.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        color: #fff;
        display: table;
        font-weight: 100;
        font-family: 'Open Sans';
        background-image: url('assets/img/back.jpeg');
        background-position: center;
        background-size:cover;
    }

    select {
      -webkit-user-select: none;
      -moz-user-select: none;
      -webkit-padding-end: 20px;
      -moz-padding-end: 20px;
      -webkit-padding-start: 2px;
      -moz-padding-start: 2px;
			font-family: 'Open Sans';
      background-color: rgba(0, 0, 0, 0.0);
      background-repeat: no-repeat;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.0);
      color: rgb(255,255,255);
      font-size: 24px;
      margin: 0;
      overflow: hidden;
      padding-top: 2px;
      padding-bottom: 2px;
      text-overflow: ellipsis;
      text-align: center;
      white-space: nowrap;
      width:100%;
      border:0;
      border-bottom: 2px solid;
      border-color: rgb(255, 255, 255);
  }

    .input{
      width: 100%;
      text-align: center;
      font-size:24px;
      font-family: 'Open Sans';
      background-color: rgba(0, 0, 0, 0.0);
      border:0;
			color: rgb(255,255,255);
      border-bottom: 2px solid;
      border-color: rgb(255, 255, 255);
    }

    .center {
      vertical-align: middle;
      display: table-cell;
      text-align: center;

    }

    .title{
      font-family: 'Pacifico';
			color: rgb(0,0,0);
			text-align: center;
			position: relative;
			letter-spacing: 1px;
			margin-bottom: 45px;
			color: #fff;
			font-size-adjust: auto;
			margin-top: 0;
    }

		.blur {
			background-color: rgba(0,0,0,0.1);
		}

		.logo {
		  align: center;
			width: 100%;
			margin: 0 auto;
		  position:fixed;
		  z-index: 5000;
		  bottom: 5%;
		}

		.button {
			width: 100%;
      text-align: center;
      font-size:24px;
      font-family: 'Open Sans';
			text-transform: lowercase;
			font-weight: 600;
      background-color: rgba(0, 0, 0, 0.0);
			color: rgb(255,255,255);
      border: 2px solid;
      border-color: rgb(255, 255, 255);
    }
		input[placeholder], [placeholder], *[placeholder] {
    color: white !important;
}

</style>
<body>
  <div class="center">
		<div class="row">
			<div class="col-md-12">
				<div class="logo">
					<img src="assets/img/power3.png" style="max-width:200px">
				</div>
			</div>
		</div>
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<div class="blur">
  				<div class="panel-body">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h1 class="title">Upon arrival to:</h1>
            </div>
            <form class="form-horizontal" method="any" action="{{ url('/search')}}">
  						<div class="form-group">
								<div class="row">
  							<div class="col-md-5 col-sm-5 col-xs-7 col-md-offset-1">
                  <input class="input" type="text" name="city" id="city" placeholder="this awesome city" required>
  							</div>
								<div class="col-md-2 col-sm-1 col-xs-1">
									<h1 class="title">,</h1>
								</div>
                <div class="col-md-3 col-sm-6 col-xs-4">
                  <select class="select" name="state" id="state" required>
											<option value="">in state</option>
                      <option value="AL">AL</option>
                      <option value="AK">AK</option>
                      <option value="AZ">AZ</option>
                      <option value="AR">AR</option>
                      <option value="CA">CA</option>
                      <option value="CO">CO</option>
                      <option value="CT">CT</option>
                      <option value="DE">DE</option>
                      <option value="DC">DC</option>
                      <option value="FL">FL</option>
                      <option value="GA">GA</option>
                      <option value="HI">HI</option>
                      <option value="ID">ID</option>
                      <option value="IL">IL</option>
                      <option value="IN">IN</option>
                      <option value="IA">IA</option>
                      <option value="KS">KS</option>
                      <option value="KY">KY</option>
                      <option value="LA">LA</option>
                      <option value="ME">ME</option>
                      <option value="MD">MD</option>
                      <option value="MA">MA</option>
                      <option value="MI">MI</option>
                      <option value="MN">MN</option>
                      <option value="MS">MS</option>
                      <option value="MO">MO</option>
                      <option value="MT">MT</option>
                      <option value="NE">NE</option>
                      <option value="NV">NV</option>
                      <option value="NH">NH</option>
                      <option value="NJ">NJ</option>
                      <option value="NM">NM</option>
                      <option value="NY">NY</option>
                      <option value="NC">NC</option>
                      <option value="ND">ND</option>
                      <option value="OH">OH</option>
                      <option value="OK">OK</option>
                      <option value="OR">OR</option>
                      <option value="PA">PA</option>
                      <option value="RI">RI</option>
                      <option value="SC">SC</option>
                      <option value="SD">SD</option>
                      <option value="TN">TN</option>
                      <option value="TX">TX</option>
                      <option value="UT">UT</option>
                      <option value="VT">VT</option>
                      <option value="VA">VA</option>
                      <option value="WA">WA</option>
                      <option value="WV">WV</option>
                      <option value="WI">WI</option>
                      <option value="WY">WY</option>
                  </select>
                </div>
							</div><br>
								<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4" style="text-align:center;">
                  <button type="submit" class="button">You must...</i></button>
                </div>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</div>
</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
