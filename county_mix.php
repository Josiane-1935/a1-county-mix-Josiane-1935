

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


$county_data_array= explode (',' , $county_data);


$substring = substr($county_data,0,39);
$strreplace=str_replace("1.","1–",$substring);
$strreplace_0=str_replace(".", " ", $strreplace);
$mombasa=explode('–',$strreplace_0);
$mombasaSite='<a href="http://www.mombasa.go.ke">http://www.mombasa.go.ke</a>';
array_push($mombasa,$mombasaSite);

$substring1 = substr($county_data,40,40);
$strreplace1=str_replace("2.","2–",$substring1);
$strreplace1_0=str_replace("."," ",$strreplace1);
$kwale=explode('–',$strreplace1_0);
$kwaleSite='<a href="https://kwalecountygov.com/kwale">https://kwalecountygov.com/kwale</a>';
array_push($kwale,$kwaleSite);


$substring2 = substr($county_data,81,44);
$strreplace2=str_replace("3.","3–",$substring2);
$strreplace2_0=str_replace("."," ",$strreplace2);
$kilifi=explode('–',$strreplace2_0);
$kilifiSite='<a href="https://www.kilifi.go.ke">https://www.kilifi.go.ke</a>';
array_push($kilifi,$kilifiSite);


$substring3 = substr($county_data,126,43);
$strreplace3=str_replace("4.","4–",$substring3);
$strreplace3_0=str_replace("."," ",$strreplace3);
$TanaRiver=explode('–',$strreplace3_0);
$TanaRiverSite='<a href="https://www.tanariver.go.ke">https://www.tanariver.go.ke/</a>';
array_push($TanaRiver,$TanaRiverSite);


$substring4 = substr($county_data,172,44);
$substring4_0=str_replace(","," ",$substring4);
$strreplace4_1=str_replace("5.","5–",$substring4_0);
$strreplace4_2=str_replace("."," ",$strreplace4_1);
$Lamu=explode('–',$strreplace4_2);
$LamuSite='<a href="http://lamu.go.ke">http://lamu.go.ke</a>';
array_push($Lamu,$LamuSite);


$substring5 = substr($county_data,217,48);
$substring5_0=str_replace(","," ",$substring5);
$strreplace5_1=str_replace("6.","6–",$substring5_0);
$strreplace5_2=str_replace("."," ",$strreplace5_1);
$TaitaTaveta=explode('–',$strreplace5_2);
$TaitaTavetaSite='<a href="https://taitatavetaassembly.go.ke">https://taitatavetaassembly.go.ke</a>';
array_push($TaitaTaveta,$TaitaTavetaSite);


$substring6 = substr($county_data,266,45);
$substring6_0=str_replace(","," ",$substring6);
$strreplace6_1=str_replace("7.","7–",$substring6_0);
$strreplace6_2=str_replace("."," ",$strreplace6_1);
$Garissa=explode('–',$strreplace6_2);
$GarissaSite='<a href="https://garissa.go.ke">https://garissa.go.ke</a>';
array_push($Garissa,$GarissaSite);


$substring7 = substr($county_data,313,48);
$substring7_0=str_replace(","," ",$substring7);
$strreplace7_1=str_replace("8.","8–",$substring7_0);
$strreplace7_2=str_replace("."," ",$strreplace7_1);
$Wajir=explode('–',$strreplace7_2);
$WajirSite='<a href="https://wajir.go.ke">https://wajir.go.ke</a>';
array_push($Wajir,$WajirSite);


$substring8 = substr($county_data,362,44);
$substring8_0=str_replace(","," ",$substring8);
$strreplace8_1=str_replace("9.","9–",$substring8_0);
$strreplace8_2=str_replace("."," ",$strreplace8_1);
$strreplace8_3=str_replace("-", "–", $strreplace8_2);
$Mandera=explode('–',$strreplace8_3);
$ManderaSite='<a href="https://mandera.go.ke">https://mandera.go.ke</a>';
array_push($Mandera,$ManderaSite);


$substring9 = substr($county_data,407,50);
$substring9_0=str_replace(","," ",$substring9);
$strreplace9_1=str_replace("10.","10–",$substring9_0);
$Marsabit=explode('–',$strreplace9_1);
$MarsabitSite='<a href="https://marsabit.go.ke">https://marsabit.go.ke</a>';
array_push($Marsabit,$MarsabitSite);


$substring10 = substr($county_data,458,50);
$substring10_0=str_replace(","," ",$substring10);
$strreplace10_1=str_replace("11.","11–",$substring10_0);
$Isiolo=explode('–',$strreplace10_1);
$IsioloSite='<a href="https://isiolo.go.ke">https://isiolo.go.ke</a>';
array_push($Isiolo,$IsioloSite);


$substring11 = substr($county_data,509,42);
$substring11_0=str_replace(","," ",$substring11);
$strreplace11_1=str_replace("12.","12–",$substring11_0);
$Meru=explode('–',$strreplace11_1);
$MeruSite='<a href="http://meru.go.ke">http://meru.go.ke</a>';
array_push($Meru,$MeruSite);


$substring12 = substr($county_data,552,57);
$substring12_0=str_replace(","," ",$substring12);
$strreplace12_1=str_replace("13.","13–",$substring12_0);
$TharakaNithi=explode('–',$strreplace12_1);
$TharakaNithiSite='<a href="https://tharakanithi.go.ke">https://tharakanithi.go.ke</a>';
array_push($TharakaNithi,$TharakaNithiSite);


$substring13 = substr($county_data,610,47);
$substring13_0=str_replace(","," ",$substring13);
$strreplace13_1=str_replace("14.","14–",$substring13_0);
$Embu=explode('–',$strreplace13_1);
$EmbuSite='<a href="https://www.embu.go.ke">https://www.embu.go.ke</a>';
array_push($Embu,$EmbuSite);


$substring14 = substr($county_data,658,44);
$substring14_0=str_replace(","," ",$substring14);
$strreplace14_1=str_replace("15.","15–",$substring14_0);
$Kitui=explode('–',$strreplace14_1);
$KituiSite='<a href="https://www.kitui.go.ke">https://www.kitui.go.ke</a>';
array_push($Kitui,$KituiSite);


$substring15 = substr($county_data,703,39);
$substring15_0=str_replace(","," ",$substring15);
$strreplace15_1=str_replace("16.","16–",$substring15_0);
$Machakos=explode('–',$strreplace15_1);
$MachakosSite='<a href="https://www.machakosgovernment.com">https://www.machakosgovernment.com</a>';
array_push($Machakos,$MachakosSite);


$substring16 = substr($county_data,743,44);
$substring16_0=str_replace(","," ",$substring16);
$strreplace16_1=str_replace("17.","17–",$substring16_0);
$strreplace16_2=str_replace("."," ",$strreplace16_1);
$Makueni=explode('–',$strreplace16_2);
$MakueniSite='<a href="https://makueni.go.ke">https://makueni.go.ke</a>';
array_push($Makueni,$MakueniSite);

$substring17 = substr($county_data,788,47);
$substring17_0=str_replace(","," ",$substring17);
$strreplace17_1=str_replace("18.","18–",$substring17_0);
$Nyandarua=explode('–',$strreplace17_1);
$NyandaruaSite='<a href="http://www.nyandarua.go.ke">http://www.nyandarua.go.ke</a>';
array_push($Nyandarua,$NyandaruaSite);


$substring18 = substr($county_data,836,41);
$substring18_0=str_replace(","," ",$substring18);
$strreplace18_1=str_replace("19.","19–",$substring18_0);
$Nyeri=explode('–',$strreplace18_1);
$NyeriSite='<a href="http://www.nyeri.go.ke">http://www.nyeri.go.ke</a>';
array_push($Nyeri,$NyeriSite);


$substring19 = substr($county_data,878,44);
$substring19_0=str_replace(","," ",$substring19);
$strreplace19_1=str_replace("20.","20–",$substring19_0);
$strreplace19_2=str_replace("."," ",$strreplace19_1);
$Kirinyaga=explode('–',$strreplace19_2);
$KirinyagaSite='<a href="https://www.kirinyaga.go.ke">https://www.kirinyaga.go.ke</a>';
array_push($Kirinyaga,$KirinyagaSite);


$substring20 = substr($county_data,923,45);
$substring20_0=str_replace(","," ",$substring20);
$strreplace20_1=str_replace("21.","21–",$substring20_0);
$Murang’a=explode('–',$strreplace20_1);
$Murang’aSite='<a href="https://muranga.go.ke">https://muranga.go.ke</a>';
array_push($Murang’a,$Murang’aSite);



$substring21 = substr($county_data,971,55);
$substring21_0=str_replace(","," ",$substring21);
$strreplace21_1=str_replace("22.","22–",$substring21_0);
$strreplace21_2=str_replace("."," ",$strreplace21_1);
$Kiambu=explode('–',$strreplace21_2);
$KiambuSite='<a href="https://kiambu.go.ke">https://kiambu.go.ke</a>';
array_push($Kiambu,$KiambuSite);


$substring22 = substr($county_data,1027,40);
$substring22_0=str_replace(","," ",$substring22);
$strreplace22_1=str_replace("23.","23–",$substring22_0);
$strreplace22_2=str_replace("."," ",$strreplace22_1);
$Turkana=explode('–',$strreplace22_2);
$TurkanaSite='<a href="https://www.turkana.go.ke">https://www.turkana.go.ke</a>';
array_push($Turkana,$TurkanaSite);


$substring23 = substr($county_data,1068,56);
$substring23_0=str_replace(","," ",$substring23);
$strreplace23_1=str_replace("24.","24–",$substring23_0);
$strreplace23_2=str_replace("."," ",$strreplace23_1);
$WestPokot=explode('–',$strreplace23_2);
$WestPokotSite='<a href="http://www.westpokot.go.ke">http://www.westpokot.go.ke</a>';
array_push($WestPokot,$WestPokotSite);


$substring24 = substr($county_data,1125,56);
$substring24_0=str_replace(","," ",$substring24);
$strreplace24_1=str_replace("25.","25–",$substring24_0);
$strreplace24_2=str_replace("."," ",$strreplace24_1);
$Samburu=explode('–',$strreplace24_2);
$SamburuSite='<a href="http://www.samburu.go.ke">http://www.samburu.go.ke</a>';
array_push($Samburu,$SamburuSite);


$substring24 = substr($county_data,1125,56);
$substring24_0=str_replace(","," ",$substring24);
$strreplace24_1=str_replace("25.","25–",$substring24_0);
$strreplace24_2=str_replace("."," ",$strreplace24_1);
$Samburu=explode('–',$strreplace24_2);
$SamburuSite='<a href="http://www.samburu.go.ke">http://www.samburu.go.ke</a>';
array_push($Samburu,$SamburuSite);


$substring25 = substr($county_data,1182,53);
$substring25_0=str_replace(","," ",$substring25);
$strreplace25_1=str_replace("26.","26–",$substring25_0);
$strreplace25_2=str_replace("."," ",$strreplace25_1);
$TransNzoia=explode('–',$strreplace25_2);
$TransNzoiaSite='<a href="https://www.transnzoia.go.ke">https://www.transnzoia.go.ke</a>';
array_push($TransNzoia,$TransNzoiaSite);


$substring26 = substr($county_data,1236,50);
$substring26_0=str_replace(","," ",$substring26);
$strreplace26_1=str_replace("27.","27–",$substring26_0);
$strreplace26_2=str_replace("."," ",$strreplace26_1);
$Uasingishu=explode('–',$strreplace26_2);
$UasingishuSite='<a href="https://www.uasingishu.go.ke">https://www.uasingishu.go.ke</a>';
array_push($Uasingishu,$UasingishuSite);


$substring27 = substr($county_data,1287,56);
$substring27_0=str_replace(","," ",$substring27);
$strreplace27_1=str_replace("28.","28–",$substring27_0);
$strreplace27_2=str_replace("."," ",$strreplace27_1);
$ElgeyoMarakwet=explode('–',$strreplace27_2);
$ElgeyoMarakwetSite='<a href="https://elgeyomarakwet.go.ke">https://elgeyomarakwet.go.ke</a>';
array_push($ElgeyoMarakwet,$ElgeyoMarakwetSite);


$substring28 = substr($county_data,1344,41);
$substring28_0=str_replace(","," ",$substring28);
$strreplace28_1=str_replace("29.","29–",$substring28_0);
$strreplace28_2=str_replace("."," ",$strreplace28_1);
$Nandi=explode('–',$strreplace28_2);
$NandiSite='<a href="https://nandicounty.go.ke">https://nandicounty.go.ke</a>';
array_push($Nandi,$NandiSite);


$substring29 = substr($county_data,1386,47);
$substring29_0=str_replace(","," ",$substring29);
$strreplace29_1=str_replace("30.","30–",$substring29_0);
$Baringo=explode('–',$strreplace29_1);
$BaringoSite='<a href="http://www.baringo.go.ke">http://www.baringo.go.ke</a>';
array_push($Baringo,$BaringoSite);


$substring30 = substr($county_data,1434,51);
$substring30_0=str_replace(","," ",$substring30);
$strreplace30_1=str_replace("31.","31–",$substring30_0);
$laikipia=explode('–',$strreplace30_1);
$laikipiaSite='<a href="https://laikipia.go.ke">https://laikipia.go.ke</a>';
array_push($laikipia,$laikipiaSite);


$substring31 = substr($county_data,1486,43);
$substring31_0=str_replace(","," ",$substring31);
$strreplace31_1=str_replace("32.","32–",$substring31_0);
$strreplace31_2=str_replace("."," ",$strreplace31_1);
$Nakuru=explode('–',$strreplace31_2);
$NakuruSite='<a href="https://nakuru.go.ke">https://nakuru.go.ke</a>';
array_push($Nakuru,$NakuruSite);


$substring32 = substr($county_data,1530,51);
$substring32_0=str_replace(","," ",$substring32);
$strreplace32_1=str_replace("33.","33–",$substring32_0);
$Narok=explode('–',$strreplace32_1);
$NarokSite='<a href="http://narok.go.ke">http://narok.go.ke</a>';
array_push($Narok,$NarokSite);


$substring33 = substr($county_data,1582,47);
$substring33_0=str_replace(","," ",$substring33);
$strreplace33_1=str_replace("34.","34–",$substring33_0);
$strreplace33_2=str_replace("."," ",$strreplace33_1);
$Kajiado=explode('–',$strreplace33_2);
$KajiadoSite='<a href="https://www.kajiado.go.ke">https://www.kajiado.go.ke</a>';
array_push($Kajiado,$KajiadoSite);


$substring34 = substr($county_data,1630,58);
$substring34_0=str_replace(","," ",$substring34);
$strreplace34_1=str_replace("35.","35–",$substring34_0);
$strreplace34_2=str_replace("."," ",$strreplace34_1);
$Kericho=explode('–',$strreplace34_2);
$KerichoSite='<a href="https://www.kericho.go.ke">https://www.kericho.go.ke</a>';
array_push($Kericho,$KerichoSite);


$substring35 = substr($county_data,1689,44);
$substring35_0=str_replace(","," ",$substring35);
$strreplace35_1=str_replace("36.","36–",$substring35_0);
$strreplace35_2=str_replace("."," ",$strreplace35_1);
$Bomet=explode('–',$strreplace35_2);
$BometSite='<a href="https://bomet.go.ke">https://bomet.go.ke</a>';
array_push($Bomet,$BometSite);

$substring36 = substr($county_data,1734,44);
$substring36_0=str_replace(","," ",$substring36);
$strreplace36_1=str_replace("37.","37–",$substring36_0);
$strreplace36_2=str_replace("."," ",$strreplace36_1);
$Kakamega=explode('–',$strreplace36_2);
$KakamegaSite='<a href="https://kakamega.go.ke">https://kakamega.go.ke</a>';
array_push($Kakamega,$KakamegaSite);


$substring37 = substr($county_data,1779,42);
$substring37_0=str_replace(","," ",$substring37);
$strreplace37_1=str_replace("38.","38–",$substring37_0);
$strreplace37_2=str_replace("."," ",$strreplace37_1);
$Vihiga=explode('–',$strreplace37_2);
$VihigaSite='<a href="https://www.vihiga.go.ke">https://www.vihiga.go.ke</a>';
array_push($Vihiga,$VihigaSite);


$substring38 = substr($county_data,1822,51);
$substring38_0=str_replace(","," ",$substring38);
$strreplace38_1=str_replace("39.","39–",$substring38_0);
$strreplace38_2=str_replace("."," ",$strreplace38_1);
$Bungoma=explode('–',$strreplace38_2);
$BungomaSite='<a href="https://bungoma.go.ke">https://bungoma.go.ke</a>';
array_push($Bungoma,$BungomaSite);


$substring39 = substr($county_data,1874,42);
$substring39_0=str_replace(","," ",$substring39);
$strreplace39_1=str_replace("40.","40–",$substring39_0);
$strreplace39_2=str_replace("."," ",$strreplace39_1);
$Busia=explode('–',$strreplace39_2);
$BusiaSite='<a href="https://busiacounty.go.ke">https://busiacounty.go.ke</a>';
array_push($Busia,$BusiaSite);


$substring40 = substr($county_data,1917,40);
$substring40_0=str_replace(","," ",$substring40);
$strreplace40_1=str_replace("41.","41–",$substring40_0);
$strreplace40_2=str_replace("."," ",$strreplace40_1);
$Siaya=explode('–',$strreplace40_2);
$SiayaSite='<a href="http://siaya.go.ke">http://siaya.go.ke</a>';
array_push($Siaya,$SiayaSite);


$substring41 = substr($county_data,1958,49);
$substring41_0=str_replace(","," ",$substring41);
$strreplace41_1=str_replace("42.","42–",$substring41_0);
$strreplace41_2=str_replace("."," ",$strreplace41_1);
$Kisumu=explode('–',$strreplace41_2);
$KisumuSite='<a href="https://www.kisumu.go.ke">https://www.kisumu.go.ke</a>';
array_push($Kisumu,$KisumuSite);


$substring42 = substr($county_data,2008,40);
$substring42_0=str_replace(","," ",$substring42);
$strreplace42_1=str_replace("43.","43–",$substring42_0);
$strreplace42_2=str_replace("."," ",$strreplace42_1);
$HomaBay=explode('–',$strreplace42_2);
$HomaBaySite='<a href="https://www.homabay.go.ke">https://www.homabay.go.ke</a>';
array_push($HomaBay,$HomaBaySite);


$substring43 = substr($county_data,2049,45);
$substring43_0=str_replace(","," ",$substring43);
$strreplace43_1=str_replace("44.","44–",$substring43_0);
$strreplace43_2=str_replace("."," ",$strreplace43_1);
$Migori=explode('–',$strreplace43_2);
$MigoriSite='<a href="http://migori.go.ke" target="_blank">http://migori.go.ke/</a>';
array_push($Migori,$MigoriSite);


$substring44 = substr($county_data,2095,38);
$substring44_0=str_replace(","," ",$substring44);
$strreplace44_1=str_replace("45.","45–",$substring44_0);
$strreplace44_2=str_replace("."," ",$strreplace44_1);
$Kisii=explode('–',$strreplace44_2);
$KisiiSite='<a href="https://www.kisii.go.ke" target="_blank">https://www.kisii.go.ke</a>';
array_push($Kisii,$KisiiSite);


$substring45 = substr($county_data,2134,47);
$substring45_0=str_replace(","," ",$substring45);
$substring45_1=str_replace("-","–",$substring45_0);
$strreplace45_2=str_replace("46.","46–",$substring45_1);
$strreplace45_3=str_replace("."," ",$strreplace45_2);
$Nyamira=explode('–',$strreplace45_3);
$NyamiraSite='<a href="http://www.nyamira.go.ke" target="_blank">http://www.nyamira.go.ke</a>';
array_push($Nyamira,$NyamiraSite);


$substring46 = substr($county_data,2182,53);
$substring46_0=str_replace(","," ",$substring46);
$strreplace46_1=str_replace("47.","47–",$substring46_0);
$strreplace46_2=str_replace("."," ",$strreplace46_1);
$Nairobi=explode('–',$strreplace46_2);
$NairobiSite='<a href="https://nairobi.go.ke" target="_blank">https://nairobi.go.ke</a>';
array_push($Nairobi,$NairobiSite);



$county_data_array1=[$mombasa,$kwale,$kilifi,$TanaRiver,$Lamu,$TaitaTaveta,$Garissa,$Wajir,$Mandera,$Marsabit,$Isiolo,$Meru,$TharakaNithi,$Embu,$Kitui,$Machakos,$Makueni,$Nyandarua,$Nyeri,$Kirinyaga,$Murang’a,
$Kiambu,$Turkana,$WestPokot,$Samburu,$Uasingishu,$ElgeyoMarakwet,$Nandi,$Baringo,$laikipia,$Nakuru,$Narok,$Kajiado,$Kericho,$Bomet,$Kakamega,$Vihiga,$Bungoma,$Busia,$Siaya,$Kisumu,$HomaBay,$Migori,$Kisii,$Nyamira, $Nairobi];

?>
<!DOCTYPE html>
<html>
<head>
<title>a1-county-mix-Josiane-1935</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

   #county_data
   {
     font-family: serif;
     border-collapse: collapse;
     border: 1px solid #ddd;
     font-size: 20px;
     width: 85%;
     margin: 0 auto;
     text-align: justify;
    }
    * {
      box-sizing: border-box;
    }
    tfoot {
      font-family: serif;
      font-size: 18px;
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
    #county_data tr.header, #county_data tr:hover {
      background-color: #f1f1f1;
    }
    #county_data th
    {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #006400;
      color: white;
    }
    h2 {
      text-align: center;
    }
    span {
      color: #B22222;
    }
    #img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      border-radius: 50%;
      width: 20%;
}

</style>
</head>
<body>

  <img src="images/kenya.png" alt="kenyaFlag" id="img" >
  <h2 >KENYA'S COUNTIES</h2>


  <table id="county_data">
    <!-- <thead> -->
    <tr class="header">
      <th >Number</th>
      <th >Name</th>
      <th >Governor</th>
      <th >Website</th>
    </tr>
    <!-- </thead> -->
    <tbody>
      <?php
      $county_data1=$county_data_array1;

      foreach ($county_data1 as $row):
       ?>
       <tr>
         <td width="5%"><?=$row[0];  ?></td>
         <td width="10%"><?php echo $row[1];
         ?></td>
         <td width="20%"><?php echo $row[2];
         if($row[0] == 1 || $row[0] == 3 || $row[0] == 4 || $row[0] == 23 || $row[0] ==37 || $row[0] == 38 || $row[0] == 39 || $row[0] == 40 )
         {
           echo '<img src="images/odm.png" alt="ODM" style="width:10%">';
         }
         elseif ($row[0] == 41 || $row[0] == 42 || $row[0] == 43 || $row[0] == 44 || $row[0] == 45 || $row[0] == 46) {
           echo '<img src="images/odm.png" alt="ODM" style="width:10%">';
         }
         elseif ($row[0] == 6 || $row[0] == 17 ) {
           echo '<img src="images/wdm-k.jpg" alt="WDM-K" style="width:10%">';
         }
         elseif ($row[0] == 26) {
           echo '<img src="images/ford.png" alt="FORD" style="width:10%">';
         }
         elseif ($row[0] == 24) {
           echo '<img src="images/kanu.jpg" alt="KANU" style="width:10%">';
         }
         elseif ($row[0] == 16) {
           echo '<img src="images/ccm.jpg" alt="CCM" style="width:10%">';
         }
         elseif ($row[0] == 15) {
           echo '<img src="images/narc_kenya.jpg" alt="NARC-KENYA" style="width:10%">';
         }
         elseif ($row[0] == 11 || $row[0] == 31 ) {
           echo '<img src="images/independent.png" alt="Independent" style="width:10%">';
         }
         else {
           echo '<img src="images/Jubilee.png" alt="Jubilee" style="width:10%">';
         } ?></td>
         <td width="20%"><?=$row[4]; ?></td>
       </tr>

     <?php endforeach; ?>

    </tbody>
    <tfoot>
      <th colspan="2">Distribution of the political parties</th>
      <td >
      <?php
      $string_count_jubilee=substr_count($county_data,"Jubilee");
      $string_count_odm=substr_count($county_data,"ODM");
      $string_count_ford=substr_count($county_data,"FORD");
      $string_count_kanu=substr_count($county_data,"KANU");
      $string_count_ccm=substr_count($county_data,"CCM");
      $string_count_nark=substr_count($county_data,"Narc");
      $string_count_wdm=substr_count($county_data,"WDM");
      $string_count_independent=substr_count($county_data,"Independent");
      echo "<span>".$string_count_jubilee."</span> Governors are from <span>Jubilee</span>.<br> ";
      echo "<span>".$string_count_odm."</span> Governors are from <span>ODM</span>.<br> ";
      echo "<span>".$string_count_wdm."</span> Governors are from <span>WDM K</span>.<br> ";
      echo "<span>".$string_count_independent."</span>  Governors are from <span>Independent</span>.<br> ";
      echo "<span>".$string_count_ford."</span>  Governor is from <span>FORD Kenya</span>.<br> ";
      echo "<span>".$string_count_kanu."</span>  Governor is from <span>KANU</span>.<br> ";
      echo "<span>".$string_count_ccm."</span>  Governor is from <span>CCM</span>.<br> ";
      echo "<span>".$string_count_nark."</span>  Governor is from <span>NARC Kenya</span>.<br> ";

       ?>
     </td>
     <td ></td>

    </tfoot>
  </table>
</html>
