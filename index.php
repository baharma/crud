<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">

	 <script type="text/javascript">
	  		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
	  		var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var tgl =  date.getDay();
                tgl = days[tgl];
            var month = date.getMonth();


            function showTime() {
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
            
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('time').innerHTML=tgl + "," + day + " " + months[month]+"<br>"+curr_hour + ":" + curr_minute + ":" + curr_second;
            }
             
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);         
        </script>

</head>
<body>

<div class="left">

<div class="table">
	<table>
		<h1 style="text-align: center; font-family:monospace; font-size: 40px;">Login</h1>
		<img src="foto/tix2-FAHjxk2nVkmvUDqP0LaDpryAql7dZva.png">
		<form action="proseslogin.php" method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="Password"  name="password" placeholder="Password">
			<input type="submit" name="submit" value="Login">
			<br>
			<a href="#" class="aaa">Register</a>
		</form>
	</table>
</div>

</div>

<div class="rigth">
	<div class="box-time">
	<h1 id="time" 
	style="text-align: center; color:#ffffff; font-family: sans-serif; "></h1>
	</div>
</div>

</body>
</html>