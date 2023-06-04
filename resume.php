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

        $sql = "INSERT INTO info(ID, Name, Spouse, cname, cname1, cname2, crname1, crname2, fname, mname, tname, pos, pos1, pos2, pos3, pos4, occ, occ1, occ2,
		lang, date, date1, date2, date3, date4, date5, date6, date7, date8, date9, date10, date11, date12, con1, con2, tcon, adres, email, email, bplace, stat, 
		citi, hgt, wgt, rel, sex, num, skill, school, school1, school2, school3, comp1, comp2, deg)
            VALUES(null, '$name','$sname','$cname','$cname1','$cname2','$crname1','$crname2','$fname','$mname','$tname','$pos','$pos1','$pos2','$pos3','$pos4','$occ','$occ1','$occ2',
			'$lang','$date','$date1','$date2','$date3','$date4','$date5','$date6','$date7','$date8','$date9','$date10','$date11','$date12','$con1','$con2','$tcon','$adres','$email',
			'$email','$bplace','$stat','$citi','$hgt','$wgt','$rel','$sex','$num','$skill','$school','$school1','$school2','$school3','$comp1','$comp2','$deg')";
        $query_sql = mysqli_query($conn, $sql);
  if($query_sql){
    echo "RECORDS SUBMITTED";
    }
  else{
    echo "ERROR IN SUBMITTING";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESUME</title>
    <link rel="icon" type="image/svg" href="images/icon.png">
    
    <style type="text/css">
    
        *{
            margin: auto;
        }
        a{
            position: center;
            border-radius: 50%;
            background: #fad016;
            padding: 6px;
            font-size: 14px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            background: #ffa600;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fad016, #ffa600);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fad016, #ffa600); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;}
        title{
            font-size: 100%;
        }
        table{
            margin-bottom: 0px;
            margin-top: 0px;
            width: 50%;
            background-color: white;
        }
        th{
            font-variant-caps: all-small-caps;
            font-size: 50px;
        }
        td{
            padding: 5px;
        }
        input{
            width: 50%;
            padding: 5px;
            background-color: CFAE8C;
        }

        button {
            font-weight: 500;
            width: 100%;
            height: 45px;
            background: #44a0d5;
            color: aliceblue;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            transition: transform 0.3s, background-color 0.3s, color 0.3s;
        }

        button:hover {
            transform: scale(1.01);
            background-color: aliceblue;
            color: black;
        }
        body{
            background: darkgray;
        }
    </style>

 </head>

 <body>
    <form action="print.php" method="POST">

        <table>
            <tr>
                <th colspan="3">RESUME</th>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr>
            	<td><b>PERSONAL DATA</b></td><br>
            </tr>
            <tr>
                <td>Position Desired &nbsp;: <input type="text" name="pos" placeholder="Position Applying For" required></td>
                <td>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;;<input type="date" name="date" placeholder="date" required></td>
            </tr>
            <tr>
                <td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="name" placeholder="Complete Name" required></td>
                <td>Sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="sex" placeholder="Sex" required></td>
            </tr>
            </table>
            <table>
            <tr>
                <td>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="adrs" placeholder="Present Address" required></td>
            </tr>
            </table>
            <table>
            <tr>
                <td>Email Address &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="email" placeholder="sample: juancruz@gmail.com" required></td>
                <td>Phone Num &nbsp;&nbsp;: &nbsp;<input type="text" name="number" placeholder="09*********" require></td>
            </tr>
            <tr>
                <td>Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="date" name="date1" placeholder="Birthday" required></td>
                <td>Birth of Place: &nbsp;<input type="text" name="bplace" placeholder="Birthplace"></td>
            </tr>
            <tr>
                <td>Civil Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;
                <select name="stat" id="stat" require>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separeted</option>
                    <option>Divorced</option>
                </select>
                </td>
                <td>Citizenship &nbsp;&nbsp;&nbsp;: &nbsp;
                <select name="citi" id="citi" require>
                    <option>Filipino</option>
                    <option>American</option>
                    <option>Korean</option>
                    <option>Japanese</option>
                    <option>Others</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Height &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="hgt" placeholder="Inch / cm" required></td>
                <td>Weight &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="wgt" placeholder="Kg / lbs" require></td>
            </tr>
            </table>
            <table>
            <tr>
                <td>Religion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;
                <select name="rel" id="rel" require>
                    <option>Born Again Christian</option>
                    <option>Catholic</option>
                    <option>Iglesia ni Cristo</option>
                    <option>Dating Daan</option>
                    <option>Jehova's Witness</option>
                    <option>Muslim</option>
                </select>
            </td>

            </tr>
            </table>
            <table>
            <tr>
                <td>Spouse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="sname" placeholder="If married"></td>
                <td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="occ" placeholder="Work background"></td>
            </tr>
            <tr>
                <td>Children's Name : &nbsp;<input type="text" name="cname" placeholder="If you have children" ></td>
                <td>Date of Birth : &nbsp;<input type="date" name="date2" placeholder="Birthday" ></td>
            </tr>
            <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="cname1" placeholder="If you have children" ></td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="date" name="date3" placeholder="Birthday"></td>
            </tr>
            <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="cname2" placeholder="If you have children" ></td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="date" name="date4" placeholder="Birthday"></td>
            </tr>
            <tr>
                <td>Father's Name &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="fname" placeholder="Complete Name" required></td>
                <td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="occ1" placeholder="Work background"></td>
            </tr>
            <tr>
                <td>Mother's Name &nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="mname" placeholder="Complete Name" required></td>
                <td>Occupation &nbsp;&nbsp;&nbsp;: &nbsp;<input type="text" name="occ2" placeholder="Work background"></td>
            </tr>
        </table>
        
        <table>
                <td> </td>
            </tr>
        </table>

        <table>
            <tr>
                <td><b>EDUCATIONAL BACKGROUND</td>
            </tr>
            <tr>
                <td>Elementary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="school" placeholder="Elementary School" ></td>
                <td>Year Graduated : <input type="number" name="date5" placeholder="School Year"></td>
            </tr>
            <tr>
                <td>Junior High School: <input type="text" name="school1" placeholder="Junior High School" ></td>
                <td>Year Graduated : <input type="number" name="date6" placeholder="School Year"></td>
            </tr>
            <tr>
                <td>Senior High School: <input type="text" name="school2" placeholder="Senior High School" ></td>
                <td>Year Graduated : <input type="number" name="date7" placeholder="School Year"></td>
            </tr>
            <tr>
                <td>College &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="school3" placeholder="College" ></td>
                <td>Year Graduated : <input type="number" name="date8" placeholder="School Year"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Degree Received &nbsp;&nbsp;&nbsp;: <input type="text" name="deg" placeholder="Bachelor's Degree"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Special Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="skill" placeholder="Skills" ></td>
            </tr>
        </table>
        <table>
            <tr>
                <td> </td>
            </tr>
        </table>

        <table>
            <tr>
                <td><b>EMPLOYMENT RECORD</td>
            </tr>
            <tr>
                <td>Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="comp1" placeholder="Company"></td>   
            </tr>   
        <table>
            <tr>
                <td>Position &nbsp;: <input type="text" name="pos1" placeholder="Position"></td>   
                <td>From &nbsp;: <input type="number" name="date9" placeholder="Year"></td>
                <td>To &nbsp;: <input type="number" name="date10" placeholder="Year"></td>   
            </tr>   
            <tr>
                <td> </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="comp2" placeholder="Company"></td>   
            </tr> 
        <table>
            <tr>
                <td>Position &nbsp;: <input type="text" name="pos2" placeholder="Position"></td>   
                <td>From &nbsp;: <input type="number" name="date11" placeholder="Year"></td>
                <td>To &nbsp;: <input type="number" name="date12" placeholder="Year"></td>   
            </tr>   
            <tr>
                <td> </td>
            </tr>
        </table>

        <table>
            <tr>
                <td><b>CHARACTER REFERENCE</td>
            </tr>
            <tr>
                <td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="crname1" placeholder="Reference Name" req></td>   
            </tr>   
        <table>
            <tr>
                <td>Position &nbsp;: <input type="text" name="pos3" placeholder="Position / Occupation" require></td>   
                <td>Contact Number &nbsp;: <input type="text" name="con1" placeholder="09*********" require></td> 
            </tr>   
            <tr>
                <td> </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="crname2" placeholder="Reference Name" require></td>   
            </tr> 
        <table>
            <tr>
                <td>Position &nbsp;: <input type="text" name="pos4" placeholder="Position / Occupation" require></td>   
                <td>Contact Number &nbsp;: <input type="text" name="con2" placeholder="09*********" require></td> 
            </tr>   
            <tr>
                <td> </td>
            </tr>
        </table>

        <table>
                <td><button type="submit" name = "submit">Submit</button></td>
        </table>
</form>
</body>
