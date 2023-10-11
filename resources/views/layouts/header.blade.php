
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Document</title>
</head>
<body>

    <!-- maincontainer1 Start Here --> 
		<div class="maincontainer1"> 
		
			<!-- admin Logo -->
			<img src="{{asset('assets/images/logo.jpg')}}" />
			<!-- admin logo end -->
			
			<!-- logbtn -->
			<!-- <input type="button" value="Logout" /> -->
			<button class="logout-btn"><a href="index.php?log=1">Logout</a> </button>
			<!-- end logbtn -->
			
		</div>
<!-- mainontainer1 End Here --> 

<!-- miancontainer2 start here  -->
		<div class="maincontainer2">
		
			<!-- insideconatiner  -->
			<div class="insidecontainer"> 
				<h5><?php echo date('d-m-y') ?></h5>
			</div>
			<!-- insidecontainer end  -->
			
		</div>
<!-- maincontainer2 end  here  -->
