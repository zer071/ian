<?php
$conn = mysqli_connect("localhost","root","","resume") or die();
    if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$sname = $_POST['sname'];
		$cname = $_POST['cname'];
		$cname1 = $_POST['cname1'];
		$cname2 = $_POST['cname2'];
		$crname1 = $_POST['crname1'];
		$crname2 = $_POST['crname2'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];

		$pos = $_POST['pos'];
		$pos1 = $_POST['pos1'];
		$pos2 = $_POST['pos2'];
		$pos3 = $_POST['pos3'];
		$pos4 = $_POST['pos4'];
		$occ = $_POST['occ'];
		$occ1 = $_POST['occ1'];
		$occ2 = $_POST['occ2'];

		$date = $_POST['date'];
		$date1 = $_POST['date1'];
		$date2 = $_POST['date2'];
		$date3 = $_POST['date3'];
		$date4 = $_POST['date4'];
		$date5 = $_POST['date5'];
		$date6 = $_POST['date6'];
		$date7 = $_POST['date7'];
		$date8 = $_POST['date8'];
		$date9 = $_POST['date9'];
		$date10 = $_POST['date10'];
		$date11 = $_POST['date11'];
		$date12 = $_POST['date12'];
		$con1 = $_POST['con1'];
		$con2 = $_POST['con2'];

		$adres = $_POST['adrs'];
		$email = $_POST['email'];
		$bplace = $_POST['bplace'];
		$stat = $_POST['stat'];
		$citi = $_POST['citi'];
		$hgt = $_POST['hgt'];
		$wgt = $_POST['wgt'];
		$rel = $_POST['rel'];
		$sex = $_POST['sex'];
		$num = $_POST['number'];
		$skill = $_POST['skill'];
		$school = $_POST['school'];
		$school1 = $_POST['school1'];
		$school2 = $_POST['school2'];
		$school3 = $_POST['school3'];
		$comp1 = $_POST['comp1'];
		$comp2 = $_POST['comp2'];
		$deg = $_POST['deg'];

        $sql = "INSERT INTO info(ID, Name, Spouse, cname, cname1, cname2, crname1, crname2, fname, mname, pos, pos1, pos2, pos3, pos4, occ, occ1, occ2,
		date, date1, date2, date3, date4, date5, date6, date7, date8, date9, date10, date11, date12, con1, con2, adres, email, email, bplace, stat, 
		citi, hgt, wgt, rel, sex, num, skill, school, school1, school2, school3, comp1, comp2, deg)
            VALUES(null, '$name','$sname','$cname','$cname1','$cname2','$crname1','$crname2','$fname','$mname','$pos','$pos1','$pos2','$pos3','$pos4','$occ','$occ1','$occ2',
			'$date','$date1','$date2','$date3','$date4','$date5','$date6','$date7','$date8','$date9','$date10','$date11','$date12','$con1','$con2','$adres','$email',
			'$email','$bplace','$stat','$citi','$hgt','$wgt','$rel','$sex','$num','$skill','$school','$school1','$school2','$school3','$comp1','$comp2','$deg')";
        $query_sql = mysqli_query($conn, $sql);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resume</title>
	
    <style type="text/css">
    
        *{
            margin: auto;
            font-family: arial;
        }
        title{
            font-size: 100%;
        }
        h1{
        	font-variant-caps: all-small-caps;
            font-size: 30px;
            text-align: center;
        }
        table{
            margin-bottom: 0px;
            margin-top: 0px;
            width: 90%;
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
        }
        th{
            font-variant-caps: all-small-caps;
            font-size: 14px;
            text-align: left;
            color: black;
        }
        td{
            font-size: 12px;
            padding: 1px;
        }
        input{
            width: 5%;
            padding: 5px;
            background-color: #44a0d5;
        }
        button{
            padding: 10px;
            width: 10%;
            background-color: #ff8100;
        }
        body{
            background: darkgray;
        }
    </style>
    
</head>

<body>
		<tr>
            <td>
				<p>
                    &nbsp;
                </p>
                <p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    2x2<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Picture Here
                </p>
			</td>
		</tr>
	<table>
	<h1>RESUME</h1>
		<br>
	<table>
		<tr>
			<th colspan="3">PERSONAL DATA</th>
		</tr>
	</table>
	<table>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td>Position Desired &nbsp;: &nbsp;<u><?php echo $pos; ?> </td>
			<td>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $date; ?> </td>
		</tr>
		<tr>
			<td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $name; ?> </td>
			<td>Sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $sex; ?> </td>
		</tr>
		<tr>
			<td>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $adres; ?> </td>
		</tr>
		<tr>
			<td>Email Address &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $email; ?> </td>
			<td>Phone Num &nbsp;&nbsp;: &nbsp;<u><?php echo $num; ?> </td>
		</tr>
		<tr>
			<td>Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $date1; ?> </td>
			<td>Birth of Place : &nbsp;<u><?php echo $bplace; ?> </td>
		</tr>
		<tr>
			<td>Civil Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $stat; ?> </td>
			<td>Citizenship &nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $citi; ?> </td>
		</tr>
		<tr>
			<td>Height &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $hgt; ?> </td>
			<td>Weight &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $wgt; ?> </td>
		</tr>
		<tr>
			<td>Religion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $rel; ?> </td>
		</tr>
		<tr>
			<td>Spouse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $sname; ?> </td>
			<td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $occ; ?> </td>
		</tr>
		<tr>
			<td>Children's Name : &nbsp;<u><?php echo $cname; ?> </td>
			<td>Date of Birth &nbsp;: &nbsp;<u><?php echo $date2; ?> </td>
		</tr>
		<tr>
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <u><?php echo $cname1; ?> </td>
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $date3; ?> </td>
		</tr>
		<tr>
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <u><?php echo $cname2; ?> </td>
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $date4; ?> </td>
		</tr>
		<tr>
			<td>Father's Name &nbsp;&nbsp; : &nbsp;<u><?php echo $fname; ?> </td>
			<td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $occ1; ?> </td>
		</tr>
		<tr>
			<td>Mother's Name &nbsp;&nbsp;: &nbsp;<u><?php echo $mname; ?> </td>
			<td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $occ2; ?> </td>
		</tr>

	</table>

		<br>

	<table>
		<tr>
			<th colspan="3">EDUCATIONAL BACKGROUND</th>
		</tr>
	</table>
	<table>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>Elementary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $school; ?> </td>
			<td>Year Graduated : &nbsp;<u><?php echo $date5; ?> </td>
		</tr>
		<tr>
			<td>Junior High School : &nbsp;<u><?php echo $school1; ?> </td>
			<td>Year Graduated : &nbsp;<u><?php echo $date6; ?> </td>
		</tr>
		<tr>
			<td>Senior High School : &nbsp;<u><?php echo $school2; ?> </td>
			<td>Year Graduated : &nbsp;<u><?php echo $date7; ?> </td>
		</tr>
		<tr>
			<td>College &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <u><?php echo $school3; ?> </td>
			<td>Year Graduated : &nbsp;<u><?php echo $date8; ?> </td>
		</tr>
		<tr>
			<td>Degree Received &nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $deg; ?> </td>
		</tr>
		<tr>
			<td>Special Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $skill; ?> </td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
<br>
	<table>
		<tr>
			<th colspan="3">EMPLOYMENT RECORD</th>
		</tr>
	</table>
	<table>
		<tr>
			<td>Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $comp1; ?> </td>
		</tr>
		<tr>
			<td>Position &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  &nbsp;<u><?php echo $pos1; ?> </td>
			<td>From &nbsp;: &nbsp;<u><?php echo $date9; ?> </td>
			<td>To &nbsp;: &nbsp;<u><?php echo $date10; ?> </td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $comp2; ?> </td>
		</tr>
		<tr>
			<td>Position &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<u><?php echo $pos2; ?> </td>
			<td>From &nbsp;: &nbsp;<u><?php echo $date11; ?> </td>
			<td>To &nbsp;: &nbsp;<u><?php echo $date12; ?> </td>
		</tr>
	</table>
<br>
	<table>
		<tr>
			<th colspan="3">CHARACTER REFERENCE</th>
		</tr>
	</table>
	<table>
		<tr>
			<td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $crname1; ?> </td>
		</tr>
		<tr>
			<td>Position &nbsp;:  &nbsp;<u><?php echo $pos3; ?> </td>
			<td>Contact Number &nbsp;: &nbsp;<u><?php echo $con1; ?> </td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<u><?php echo $crname2; ?> </td>
		</tr>
		<tr>
			<td>Position &nbsp;:  &nbsp;<u><?php echo $pos4; ?> </td>
			<td>Contact Number &nbsp;: &nbsp;<u><?php echo $con2; ?> </td>
		</tr>

		<tr>
            <td>
				<p>
                    &nbsp;
                </p>
                <p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    I hereby certify that the above information is true and correct
                    to the best of my<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					knowledge and belief. I also understand
                    that any misinterpretation will be<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					considered reason for witdrawal of an offer or subsequent dismissal if employed.
                </p>
                <br>
                <br>
                <p>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <u>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
			</td>
		</tr>
		<tr>
			<td>
                <p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applicant's Signature
                </p>
            </td>
        </tr>
		<td><input type="button" value="Print" onclick="this.style.display='none';window.print();"></td>
	</table>
</body>
</html>
