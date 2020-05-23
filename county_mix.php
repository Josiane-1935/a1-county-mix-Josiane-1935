

<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here
echo "<pre>".$county_data."</pre>";
echo strpos($county_data, '6');
echo "<pre>";
$county_data_array= explode (',' , $county_data);

$array_values = array_values($county_data_array);

//$county_data_values = implode($array_values);
var_dump($array_values);

//var_dump($county_data_array[0][1]);
//die();
echo "</pre>";
//for the first county https://nairobi.go.ke
$substring = substr($county_data,0,39);
$strreplace=str_replace("1.","1–",$substring);
$mombasa=explode('–',$strreplace);
$mombasaSite='<a href="http://www.mombasa.go.ke">http://www.mombasa.go.ke</a>';
array_push($mombasa,$mombasaSite);
echo $strreplace;
echo "<br>";
print_r ($mombasa);
echo "<br>";
$substring1 = substr($county_data,40,40);
$strreplace1=str_replace("2.","2–",$substring1);
$kwale=explode('–',$strreplace1);
$kwaleSite='<a href="https://kwalecountygov.com/kwale">https://kwalecountygov.com/kwale</a>';
array_push($kwale,$kwaleSite);
echo $strreplace1;
echo "<br>";
print_r ($kwale);
print_r($kwale[3]);
echo "<br>";
$substring2 = substr($county_data,81,44);
$strreplace2=str_replace("3.","3–",$substring2);
$kilifi=explode('–',$strreplace2);
$kilifiSite='<a href="https://www.kilifi.go.ke">https://www.kilifi.go.ke</a>';
array_push($kilifi,$kilifiSite);
echo $strreplace2;
echo "<br>";
print_r ($kilifi);
print_r($kilifi[3]);
echo "<br>";
$substring3 = substr($county_data,126,43);
$strreplace3=str_replace("4.","4–",$substring3);
$TanaRiver=explode('–',$strreplace3);
$TanaRiverSite='<a href="https://www.tanariver.go.ke">https://www.tanariver.go.ke/</a>';
array_push($TanaRiver,$TanaRiverSite);
echo $strreplace3;
echo "<br>";
print_r ($TanaRiver);
print_r($TanaRiver[3]);
echo "<br>";

$substring4 = substr($county_data,172,44);
$substring4_0=str_replace(","," ",$substring4);
$strreplace4_1=str_replace("5.","5–",$substring4_0);
$Lamu=explode('–',$strreplace4_1);
$LamuSite='<a href="http://lamu.go.ke">http://lamu.go.ke</a>';
array_push($Lamu,$LamuSite);
echo $strreplace4_1;
echo "<br>";
print_r ($Lamu);
print_r($Lamu[3]);
echo "<br>";

$substring5 = substr($county_data,217,48);
$substring5_0=str_replace(","," ",$substring5);
$strreplace5_1=str_replace("6.","6–",$substring5_0);
$TaitaTaveta=explode('–',$strreplace5_1);
$TaitaTavetaSite='<a href="https://taitatavetaassembly.go.ke">https://taitatavetaassembly.go.ke</a>';
array_push($TaitaTaveta,$TaitaTavetaSite);
echo $strreplace5_1;
echo "<br>";
print_r ($TaitaTaveta);
print_r($Lamu[3]);
echo "<br>";
echo "<pre>";
$county_data_array1=[$mombasa,$kwale,$kilifi,$TanaRiver,$Lamu,$TaitaTaveta];
print_r($county_data_array1);

echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
<title>a1-county-mix-Josiane-1935</title>
<style>
   #county_data
   {
     font-family: sans-serif, Arial;
     border-collapse: collapse;
     width: 100%;
    }
    #county_data td, #county_data th
    {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #county_data tr:nth-child(even)
    {
      background-color: #f2f2f2;
    }
    #county_data th
    {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }

</style>
</head>
<body>

  <table id="county_data">
    <thead>
      <th >Number</th>
      <th >Name</th>
      <th >Governor</th>
      <th >Website</th>
    </thead>
    <tbody>
      <?php
      $county_data1=$county_data_array1;

      foreach ($county_data1 as $row):
       ?>
       <tr>
         <td ><?=$row[0];  ?></td>
         <td ><?php echo $row[1];
         ?></td>
         <td ><?php echo $row[2]; echo $row[3];
         if($row[0] == 1 || $row[0] == 3 || $row[0] == 4)
         {
           echo '<img src="images/odm.png" alt="ODM" style="width:5%">';
         }
         elseif ($row[0] == 2 || $row[0] == 5) {
           echo '<img src="images/Jubilee.png" alt="ODM" style="width:5%">';
         }
         elseif ($row[0] == 6 || $row[0] == 7) {
           echo '<img src="images/wdm-k.jpg" alt="ODM" style="width:5%">';
         }
         else {
           echo 'none';
         } ?></td>
         <td><?=$row[4]; ?></td>
       </tr>
       <?php $count = $row[3];
          echo $count;
          //print_r($res);
       ?>
     <?php endforeach; ?>

    </tbody>


  </table>

</html>
