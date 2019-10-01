<?php

header("Content-Type: text/html; charset=ISO-8859-1");

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
 <title>Comparative Bantu Dictionary</title>
 <meta name=\"description\" content=\"X\" />
 <meta name=\"keywords\" content=\"X\" />
 <meta http-equiv=\"Content-Language\" content=\"en-us\" />
 <meta http-equiv=\"Content-Type\" content=\"text/html\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"scripts/main.css\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"scripts/numbers.css\" />

 <link rel=\"icon\" href=\"images/logo.png\" />";

echo "</head>

<body>
 <div id=\"container\">
  <div id=\"header\">
   <img src=\"images/header.jpg\" alt=\"HEADER PHOTO\"/>
  </div>

  <div id=\"nav\">
   <div class=\"menu\">
	<ul>
	 <li><a href=\"index.php\">Home</a></li>
	 <li><a href=\"about.php\">Project Staff</a></li>
	 <li><a href=\"\">Big Ideas</a></li>
	 <li><a href=\"database.php\">Database</a></li>
	 <li><a href=\"resources.php\">Resources</a></li>
	</ul>
   </div>
  </div>

  <div id=\"content\">";
  
/* echo "<html><head><meta charset=\"UTF-8\"></head><body><link rel=\"stylesheet\" href=\"styles.css\">"; */

echo "<style>
table {
 width: 75%;
 border-collapse: collapse;
 border-style: solid;
 border-color: rgb(10, 75, 98);
}

th, td {
 text-align: left;
 padding: 8px;
}

tr:nth-child(even){
 background-color: #f2f2f2;
}

th:nth-child(even){
 background-color: #f2f2f2;
}

th {
 text-align: left;
 color: rgb(10, 75, 98);
 padding: 8px;
 width: 25%;
}

th.border {
 border-right:solid rgb(10, 75, 98);
}
</style>";


 include_once("scripts/pdo_mysql.php");

 pdo_connect("localhost", "troyspie_bantu_d", "Abasani1!") or die("Error connecting to database: ".pdo_error());
 pdo_select_db("troyspie_bantu_online_dictionary") or die(pdo_error());
 
 $query = $_GET['query'];
 $min_length = 3;
 
 $language = $_GET['language'];

  if(strlen($query) >= $min_length) {
	$query = htmlspecialchars($query);
	$query = pdo_real_escape_string($query);

  	/* $raw_results = pdo_query("SELECT * FROM sandbox_data2 WHERE English LIKE '%{$query}%'") or die(pdo_error()); */
  	
  	$raw_results = pdo_query("SELECT * FROM sandbox_data2 WHERE `$language` LIKE '%{$query}%'") or die(pdo_error());
    
    echo "<p class=\"b\">Results for '$query': \n</p>";	

	if(pdo_num_rows($raw_results) > 0) {
		
		$result_number = 1;
		
		while($results = pdo_fetch_array($raw_results)) {
            
            echo $result_number.".<table>";
            
            /* echo "<tr><th class=\"border\">ID</th><td><div class=\"tooltip\">".$results['newid']."</div></td></tr>"; */
            
			if($results['English'] != '') {
			    echo "<tr><th class=\"border\">English</th><td>".$results['English']."</td></tr>";
			} else {
			}
			if($results['Portuguese'] != '') {
			    echo "<tr><th class=\"border\">Portuguese</th><td><div class=\"tooltip\">".$results['Portuguese']."</div></td></tr>";
			} else {
			}
			if($results['French'] != '') {
			    echo "<tr><th class=\"border\">French</th><td><div class=\"tooltip\">".$results['French']."</div></td></tr>";
			} else {
			}
			if($results['Proto-Bantu'] != '') {
			    echo "<tr><th class=\"border\">Reconstructed Proto-Bantu Root(s)</th><td><div class=\"tooltip\"><i>".$results['Proto-Bantu']."</i></div></td></tr>";
			} else {
			}
			if($results['Swahili'] != '') {
			    echo "<tr><th class=\"border\">Swahili</th><td><div class=\"tooltip\">".$results['Swahili']."</div></td></tr>";
			} else {
			}
			if($results['Wungu'] != '') {
			    echo "<tr><th class=\"border\">Wungu</th><td><div class=\"tooltip\">".$results['Wungu']."</div></td></tr>";
			} else {
			}
			if($results['Ndali'] != '') {
			    echo "<tr><th class=\"border\">Ndali</th><td><div class=\"tooltip\">".$results['Ndali']."</div></td></tr>";
			} else {
			}
			if($results['Nyakyusa'] != '') {
			    echo "<tr><th class=\"border\">Nyakyusa</th><td><div class=\"tooltip\">".$results['Nyakyusa']."</div></td></tr>";
			} else {
			}
			if($results['Malila'] != '') {
			    echo "<tr><th class=\"border\">Malila</th><td><div class=\"tooltip\">".$results['Malila']."</div></td></tr>";
			} else {
			}
			if($results['Nyiha'] != '') {
			    echo "<tr><th class=\"border\">Nyiha</th><td><div class=\"tooltip\">".$results['Nyiha']."</div></td></tr>";
			} else {
			}
			if($results['Lambya'] != '') {
			    echo "<tr><th class=\"border\">Lambya</th><td><div class=\"tooltip\">".$results['Lambya']."</div></td></tr>";
			} else {
			}
			if($results['Safwa'] != '') {
			    echo "<tr><th class=\"border\">Safwa</th><td><div class=\"tooltip\">".$results['Safwa']."</div></td></tr>";
			} else {
			}
			if($results['Mambwe'] != '') {
			    echo "<tr><th class=\"border\">Mambwe</th><td><div class=\"tooltip\">".$results['Mambwe']."</div></td></tr>";
			} else {
			}
			if($results['Lungu'] != '') {
			    echo "<tr><th class=\"border\">Lungu</th><td><div class=\"tooltip\">".$results['Lungu']."</div></td></tr>";
			} else {
			}
			if($results['Fipa'] != '') {
			    echo "<tr><th class=\"border\">Fipa</th><td><div class=\"tooltip\">".$results['Fipa']."</div></td></tr>";
			} else {
			}
			if($results['Nyamwanga'] != '') {
			    echo "<tr><th class=\"border\">Nyamwanga</th><td><div class=\"tooltip\">".$results['Nyamwanga']."</div></td></tr>";
			} else {
			}
			if($results['Pimbwe'] != '') {
			    echo "<tr><th class=\"border\">Pimbwe</th><td><div class=\"tooltip\">".$results['Pimbwe']."</div></td></tr>";
			} else {
			}
			if($results['Rungwa'] != '') {
			    echo "<tr><th class=\"border\">Rungwa</th><td><div class=\"tooltip\">".$results['Rungwa']."</div></td></tr>";
			} else {
			}
			if($results['Nyika'] != '') {
			    echo "<tr><th class=\"border\">Nyika</th><td><div class=\"tooltip\">".$results['Nyika']."</div></td></tr>";
			} else {
			}
			if($results['Gogo'] != '') {
			    echo "<tr><th class=\"border\">Gogo</th><td><div class=\"tooltip\">".$results['Gogo']."</div></td></tr>";
			} else {
			}
			if($results['Nilamba'] != '') {
			    echo "<tr><th class=\"border\">Nilamba</th><td><div class=\"tooltip\">".$results['Nilamba']."</div></td></tr>";
			} else {
			}
			if($results['Sagala'] != '') {
			    echo "<tr><th class=\"border\">Sagala</th><td><div class=\"tooltip\">".$results['Sagala']."</div></td></tr>";
			} else {
			}
			if($results['Vidunda'] != '') {
			    echo "<tr><th class=\"border\">Vidunda</th><td><div class=\"tooltip\">".$results['Vidunda']."</div></td></tr>";
			} else {
			}
			if($results['Kagulu'] != '') {
			    echo "<tr><th class=\"border\">Kagulu</th><td><div class=\"tooltip\">".$results['Kagulu']."</div></td></tr>";
			} else {
			}
			if($results['Zaramo'] != '') {
			    echo "<tr><th class=\"border\">Zaramo</th><td><div class=\"tooltip\">".$results['Zaramo']."</div></td></tr>";
			} else {
			}
			if($results['Kutu'] != '') {
			    echo "<tr><th class=\"border\">Kutu</th><td><div class=\"tooltip\">".$results['Kutu']."</div></td></tr>";
			} else {
			}
			if($results['Kwere'] != '') {
			    echo "<tr><th class=\"border\">Kwere</th><td><div class=\"tooltip\">".$results['Kwere']."</div></td></tr>";
			} else {
			}
			if($results['Lugulu'] != '') {
			    echo "<tr><th class=\"border\">Lugulu</th><td><div class=\"tooltip\">".$results['Lugulu']."</div></td></tr>";
			} else {
			}
			if($results['Doe'] != '') {
			    echo "<tr><th class=\"border\">Doe</th><td><div class=\"tooltip\">".$results['Doe']."</div></td></tr>";
			} else {
			}
			if($results['Kami'] != '') {
			    echo "<tr><th class=\"border\">Kami</th><td><div class=\"tooltip\">".$results['Kami']."</div></td></tr>";
			} else {
			}
			if($results['Bemba'] != '') {
			    echo "<tr><th class=\"border\">Bemba</th><td><div class=\"tooltip\">".$results['Bemba']."</div></td></tr>";
			} else {
			}
			if($results['Bisa'] != '') {
			    echo "<tr><th class=\"border\">Bisa</th><td><div class=\"tooltip\">".$results['Bisa']."</div></td></tr>";
			} else {
			}
			if($results['Marungu'] != '') {
			    echo "<tr><th class=\"border\">Marungu</th><td><div class=\"tooltip\">".$results['Marungu']."</div></td></tr>";
			} else {
			}
			if($results['Lamba'] != '') {
			    echo "<tr><th class=\"border\">Lamba</th><td><div class=\"tooltip\">".$results['Lamba']."</div></td></tr>";
			} else {
			}
			if($results['Lala'] != '') {
			    echo "<tr><th class=\"border\">Lala</th><td><div class=\"tooltip\">".$results['Lala']."</div></td></tr>";
			} else {
			}
			if($results['Tabwa'] != '') {
			    echo "<tr><th class=\"border\">Tabwa</th><td><div class=\"tooltip\">".$results['Tabwa']."</div></td></tr>";
			} else {
			}
			if($results['Ambo'] != '') {
			    echo "<tr><th class=\"border\">Ambo</th><td><div class=\"tooltip\">".$results['Ambo']."</div></td></tr>";
			} else {
			}
			if($results['Ushi'] != '') {
			    echo "<tr><th class=\"border\">Ushi</th><td><div class=\"tooltip\">".$results['Ushi']."</div></td></tr>";
			} else {
			}
			if($results['Nsenga'] != '') {
			    echo "<tr><th class=\"border\">Nsenga</th><td><div class=\"tooltip\">".$results['Nsenga']."</div></td></tr>";
			} else {
			}
			if($results['Kunda'] != '') {
			    echo "<tr><th class=\"border\">Kunda</th><td><div class=\"tooltip\">".$results['Kunda']."</div></td></tr>";
			} else {
			}
			if($results['Ila'] != '') {
			    echo "<tr><th class=\"border\">Ila</th><td><div class=\"tooltip\">".$results['Ila']."</div></td></tr>";
			} else {
			}
			if($results['Tonga'] != '') {
			    echo "<tr><th class=\"border\">Tonga</th><td><div class=\"tooltip\">".$results['Tonga']."</div></td></tr>";
			} else {
			}
			if($results['Soli'] != '') {
			    echo "<tr><th class=\"border\">Soli</th><td><div class=\"tooltip\">".$results['Soli']."</div></td></tr>";
			} else {
			}
			if($results['Lenje'] != '') {
			    echo "<tr><th class=\"border\">Lenje</th><td><div class=\"tooltip\">".$results['Lenje']."</div></td></tr>";
			} else {
			}
			if($results['Kaonde'] != '') {
			    echo "<tr><th class=\"border\">Kaonde</th><td><div class=\"tooltip\">".$results['Kaonde']."</div></td></tr>";
			} else {
			}
			if($results['Tsi-Luba'] != '') {
			    echo "<tr><th class=\"border\">Tsi-Luba</th><td><div class=\"tooltip\">".$results['Tsi_Luba']."</div></td></tr>";
			} else {
			}
			if($results['Luba-Katanga'] != '') {
			    echo "<tr><th class=\"border\">Luba-Katanga</th><td><div class=\"tooltip\">".$results['Luba_Katanga']."</div></td></tr>";
			} else {
			}
			if($results['Hemba'] != '') {
			    echo "<tr><th class=\"border\">Hemba</th><td><div class=\"tooltip\">".$results['Hemba']."</div></td></tr>";
			} else {
			}
			if($results['Zela'] != '') {
			    echo "<tr><th class=\"border\">Zela</th><td><div class=\"tooltip\">".$results['Zela']."</div></td></tr>";
			} else {
			}
			if($results['Sanga'] != '') {
			    echo "<tr><th class=\"border\">Sanga</th><td><div class=\"tooltip\">".$results['Sanga']."</div></td></tr>";
			} else {
			}
			if($results['Kanyok'] != '') {
			    echo "<tr><th class=\"border\">Kanyok</th><td><div class=\"tooltip\">".$results['Kanyok']."</div></td></tr>";
			} else {
			}
			if($results['Songye'] != '') {
			    echo "<tr><th class=\"border\">Songye</th><td><div class=\"tooltip\">".$results['Songye']."</div></td></tr>";
			} else {
			}
			if($results['Sena'] != '') {
			    echo "<tr><th class=\"border\">Sena</th><td><div class=\"tooltip\">".$results['Sena']."</div></td></tr>";
			} else {
			}
			if($results['Chewa'] != '') {
			    echo "<tr><th class=\"border\">Chewa</th><td><div class=\"tooltip\">".$results['Chewa']."</div></td></tr>";
			} else {
			}
			if($results['Tumbuka'] != '') {
			    echo "<tr><th class=\"border\">Tumbuka</th><td><div class=\"tooltip\">".$results['Tumbuka']."</div></td></tr>";
			} else {
			}
			if($results['Ngoni'] != '') {
			    echo "<tr><th class=\"border\">Ngoni</th><td><div class=\"tooltip\">".$results['Ngoni']."</div></td></tr>";
			} else {
			}
			if($results['Nyanja'] != '') {
			    echo "<tr><th class=\"border\">Nyanja</th><td><div class=\"tooltip\">".$results['Nyanja']."</div></td></tr>";
			} else {
			}
			if($results['Zimba'] != '') {
			    echo "<tr><th class=\"border\">Zimba</th><td><div class=\"tooltip\">".$results['Zimba']."</div></td></tr>";
			} else {
			}
			if($results['Senga'] != '') {
			    echo "<tr><th class=\"border\">Senga</th><td><div class=\"tooltip\">".$results['Senga']."</div></td></tr>";
			} else {
			}
			if($results['Yao'] != '') {
			    echo "<tr><th class=\"border\">Yao</th><td><div class=\"tooltip\">".$results['Yao']."</div></td></tr>";
			} else {
			}
			if($results['Sitongwe'] != '') {
			    echo "<tr><th class=\"border\">Sitongwe</th><td><div class=\"tooltip\">".$results['Sitongwe']."</div></td></tr>";
			} else {
			}
			if($results['Kihaya'] != '') {
			    echo "<tr><th class=\"border\">Kihaya</th><td><div class=\"tooltip\">".$results['Kihaya']."</div></td></tr>";
			} else {
			}
			if($results['Cuabo'] != '') {
			    echo "<tr><th class=\"border\">Cuabo</th><td><div class=\"tooltip\">".$results['Cuabo']."</div></td></tr>";
			} else {
			}
			if($results['Makua'] != '') {
			    echo "<tr><th class=\"border\">Makua</th><td><div class=\"tooltip\">".$results['Makua']."</div></td></tr>";
			} else {
			}
			if($results['Nyamwezi'] != '') {
			    echo "<tr><th class=\"border\">Nyamwezi</th><td><div class=\"tooltip\">".$results['Nyamwezi']."</div></td></tr>";
			} else {
			}
			if($results['Kimbu'] != '') {
			    echo "<tr><th class=\"border\">Kimbu</th><td><div class=\"tooltip\">".$results['Kimbu']."</div></td></tr>";
			} else {
			}
			if($results['Sukuma'] != '') {
			    echo "<tr><th class=\"border\">Sukuma</th><td><div class=\"tooltip\">".$results['Sukuma']."</div></td></tr>";
			} else {
			}
			if($results['Sumbwa'] != '') {
			    echo "<tr><th class=\"border\">Sumbwa</th><td><div class=\"tooltip\">".$results['Sumbwa']."</div></td></tr>";
			} else {
			}
			if($results['Kongo'] != '') {
			    echo "<tr><th class=\"border\">Kongo</th><td><div class=\"tooltip\">".$results['Kongo']."</div></td></tr>";
			} else {
			}
			if($results['Lega'] != '') {
			    echo "<tr><th class=\"border\">Lega</th><td><div class=\"tooltip\">".$results['Lega']."</div></td></tr>";
			} else {
			}
			if($results['Lomongo'] != '') {
			    echo "<tr><th class=\"border\">Lomongo</th><td><div class=\"tooltip\">".$results['Lomongo']."</div></td></tr>";
			} else {
			}
			if($results['Chokwe'] != '') {
			    echo "<tr><th class=\"border\">Chokwe</th><td><div class=\"tooltip\">".$results['Chokwe']."</div></td></tr>";
			} else {
			}
            
            $result_number = $result_number + 1;
                        
			echo "</table><br />";
	}
	} else {
			echo "No results found.";
	}
	} else {
		echo "Minimum length is ".$min_length;
	}


echo "</table><br/>";
echo "<a href=\"database.php\">Return</a> to search page.";
include("footer.php")

?>