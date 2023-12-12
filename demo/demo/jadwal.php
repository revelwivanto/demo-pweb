<?php include 'dbConnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets_calender/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color: #007bff;
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #343a40;
            overflow: hidden;
            text-align: center; /* Center the menu */
        }

        nav li {
            display: inline-block; /* Display the list items horizontally */
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="tutor.php">Tutor</a></li>
            <li><a href="materi.php">Materi</a></li>
            <li><a href="jadwal.php">Kurikulum</a></li>
            <li><a href="mainpage_admin.php">Siswa</a></li>
            <li><a href="dashboard.php">Report</a></li>
        </ul>
    </nav>

    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Calendar #04</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Add Kelas</button>
				      </div>
				    </div>
				    <div class="Kelass-container">
				    </div>
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Add New Kelas </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">Kelas name</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Number of Students Enrolling</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets_calender/js/jquery.min.js"></script>
  <script src="assets_calender/js/popper.js"></script>
  <script src="assets_calender/js/bootstrap.min.js"></script>
  <script src="assets_calender/js/main.js"></script>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
