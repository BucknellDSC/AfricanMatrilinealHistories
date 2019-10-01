<?php

echo "<html><body><link rel=\"stylesheet\" href=\"styles.css\"><link rel=\"stylesheet\" type=\"text/css\" href=\"scripts/numbers.css\" />";
	
echo "<style>
table {
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
}

th.border {
 border-right:solid rgb(10, 75, 98);
}
</style>";

 include_once("pdo_mysql.php");

 pdo_connect("localhost", "troyspie_bantu_d", "Abasani1!") or die("Error connecting to database: ".pdo_error());
 pdo_select_db("troyspie_bantu_online_dictionary") or die(pdo_error());

 $query = $_GET['query'];
 $min_length = 3;

 $language = $_GET['language'];

 echo "<p class=\"b\">Results for '$query': \n</p>";


 if(strlen($query) >= $min_length) {
	$query = htmlspecialchars($query);
	$query = pdo_real_escape_string($query);

	/* $raw_results = pdo_query("SELECT * FROM sandbox_data2 WHERE English LIKE '%{$query}%'") or die(pdo_error()); */

    $raw_results = pdo_query("SELECT * FROM sandbox_data2 WHERE `$language` LIKE '{$query}'") or die(pdo_error());
	

	if(pdo_num_rows($raw_results) > 0) {
		
		$result_number = 1;
		
		while($results = pdo_fetch_array($raw_results)) {
            
			echo $result_number.".<table>";
			
			if($results['English'] != '') {
			    echo "<tr><th class=\"border\">English</th><td>".$results['English']."</td></tr>";
			} else {
			}
			if($results['Portuguese'] != '') {
			    echo "<tr><th class=\"border\">Portuguese</th><td>".$results['Portuguese']."</td></tr>";
			} else {
			}
			if($results['French'] != '') {
			    echo "<tr><th class=\"border\">French</th><td>".$results['French']."</td></tr>";
			} else {
			}
			if($results['Proto-Bantu'] != '') {
			    echo "<tr><th class=\"border\">Reconstructed Proto-Bantu Root(s)</th><td><div class=\"tooltip\"><i>".$results['Proto-Bantu']."</i></div></td></tr>";
			} else {
			}
			if($results['Swahili'] != '') {
			    echo "<tr><th class=\"border\">Swahili</th><td>".$results['Swahili']."</td></tr>";
			} else {
			}
			if($results['Wungu'] != '') {
			    echo "<tr><th class=\"border\">Wungu</th><td>".$results['Wungu']."</td></tr>";
			} else {
			}
			if($results['Ndali'] != '') {
			    echo "<tr><th class=\"border\">Ndali</th><td>".$results['Ndali']."</td></tr>";
			} else {
			}
			if($results['Nyakyusa'] != '') {
			    echo "<tr><th class=\"border\">Nyakyusa</th><td>".$results['Nyakyusa']."</td></tr>";
			} else {
			}
			if($results['Malila'] != '') {
			    echo "<tr><th class=\"border\">Malila</th><td>".$results['Malila']."</td></tr>";
			} else {
			}
			if($results['Nyiha'] != '') {
			    echo "<tr><th class=\"border\">Nyiha</th><td>".$results['Nyiha']."</td></tr>";
			} else {
			}
			if($results['Lambya'] != '') {
			    echo "<tr><th class=\"border\">Lambya</th><td>".$results['Lambya']."</td></tr>";
			} else {
			}
			if($results['Safwa'] != '') {
			    echo "<tr><th class=\"border\">Safwa</th><td>".$results['Safwa']."</td></tr>";
			} else {
			}
			if($results['Mambwe'] != '') {
			    echo "<tr><th class=\"border\">Mambwe</th><td>".$results['Mambwe']."</td></tr>";
			} else {
			}
			if($results['Lungu'] != '') {
			    echo "<tr><th class=\"border\">Lungu</th><td>".$results['Lungu']."</td></tr>";
			} else {
			}
			if($results['Fipa'] != '') {
			    echo "<tr><th class=\"border\">Fipa</th><td>".$results['Fipa']."</td></tr>";
			} else {
			}
			if($results['Nyamwanga'] != '') {
			    echo "<tr><th class=\"border\">Nyamwanga</th><td>".$results['Nyamwanga']."</td></tr>";
			} else {
			}
			if($results['Pimbwe'] != '') {
			    echo "<tr><th class=\"border\">Pimbwe</th><td>".$results['Pimbwe']."</td></tr>";
			} else {
			}
			if($results['Rungwa'] != '') {
			    echo "<tr><th class=\"border\">Rungwa</th><td>".$results['Rungwa']."</td></tr>";
			} else {
			}
			if($results['Nyika'] != '') {
			    echo "<tr><th class=\"border\">Nyika</th><td>".$results['Nyika']."</td></tr>";
			} else {
			}
			if($results['Gogo'] != '') {
			    echo "<tr><th class=\"border\">Gogo</th><td>".$results['Gogo']."</td></tr>";
			} else {
			}
			if($results['Nilamba'] != '') {
			    echo "<tr><th class=\"border\">Nilamba</th><td>".$results['Nilamba']."</td></tr>";
			} else {
			}
			if($results['Sagala'] != '') {
			    echo "<tr><th class=\"border\">Sagala</th><td>".$results['Sagala']."</td></tr>";
			} else {
			}
			if($results['Vidunda'] != '') {
			    echo "<tr><th class=\"border\">Vidunda</th><td>".$results['Vidunda']."</td></tr>";
			} else {
			}
			if($results['Kagulu'] != '') {
			    echo "<tr><th class=\"border\">Kagulu</th><td>".$results['Kagulu']."</td></tr>";
			} else {
			}
			if($results['Zaramo'] != '') {
			    echo "<tr><th class=\"border\">Zaramo</th><td>".$results['Zaramo']."</td></tr>";
			} else {
			}
			if($results['Kutu'] != '') {
			    echo "<tr><th class=\"border\">Kutu</th><td>".$results['Kutu']."</td></tr>";
			} else {
			}
			if($results['Kwere'] != '') {
			    echo "<tr><th class=\"border\">Kwere</th><td>".$results['Kwere']."</td></tr>";
			} else {
			}
			if($results['Lugulu'] != '') {
			    echo "<tr><th class=\"border\">Lugulu</th><td>".$results['Lugulu']."</td></tr>";
			} else {
			}
			if($results['Doe'] != '') {
			    echo "<tr><th class=\"border\">Doe</th><td>".$results['Doe']."</td></tr>";
			} else {
			}
			if($results['Kami'] != '') {
			    echo "<tr><th class=\"border\">Kami</th><td>".$results['Kami']."</td></tr>";
			} else {
			}
			if($results['Bemba'] != '') {
			    echo "<tr><th class=\"border\">Bemba</th><td>".$results['Bemba']."</td></tr>";
			} else {
			}
			if($results['Bisa'] != '') {
			    echo "<tr><th class=\"border\">Bisa</th><td>".$results['Bisa']."</td></tr>";
			} else {
			}
			if($results['Marungu'] != '') {
			    echo "<tr><th class=\"border\">Marungu</th><td>".$results['Marungu']."</td></tr>";
			} else {
			}
			if($results['Lamba'] != '') {
			    echo "<tr><th class=\"border\">Lamba</th><td>".$results['Lamba']."</td></tr>";
			} else {
			}
			if($results['Lala'] != '') {
			    echo "<tr><th class=\"border\">Lala</th><td>".$results['Lala']."</td></tr>";
			} else {
			}
			if($results['Tabwa'] != '') {
			    echo "<tr><th class=\"border\">Tabwa</th><td>".$results['Tabwa']."</td></tr>";
			} else {
			}
			if($results['Ambo'] != '') {
			    echo "<tr><th class=\"border\">Ambo</th><td>".$results['Ambo']."</td></tr>";
			} else {
			}
			if($results['Ushi'] != '') {
			    echo "<tr><th class=\"border\">Ushi</th><td>".$results['Ushi']."</td></tr>";
			} else {
			}
			if($results['Nsenga'] != '') {
			    echo "<tr><th class=\"border\">Nsenga</th><td>".$results['Nsenga']."</td></tr>";
			} else {
			}
			if($results['Kunda'] != '') {
			    echo "<tr><th class=\"border\">Kunda</th><td>".$results['Kunda']."</td></tr>";
			} else {
			}
			if($results['Ila'] != '') {
			    echo "<tr><th class=\"border\">Ila</th><td>".$results['Ila']."</td></tr>";
			} else {
			}
			if($results['Tonga'] != '') {
			    echo "<tr><th class=\"border\">Tonga</th><td>".$results['Tonga']."</td></tr>";
			} else {
			}
			if($results['Soli'] != '') {
			    echo "<tr><th class=\"border\">Soli</th><td>".$results['Soli']."</td></tr>";
			} else {
			}
			if($results['Lenje'] != '') {
			    echo "<tr><th class=\"border\">Lenje</th><td>".$results['Lenje']."</td></tr>";
			} else {
			}
			if($results['Kaonde'] != '') {
			    echo "<tr><th class=\"border\">Kaonde</th><td>".$results['Kaonde']."</td></tr>";
			} else {
			}
			if($results['Tsi-Luba'] != '') {
			    echo "<tr><th class=\"border\">Tsi-Luba</th><td>".$results['Tsi-Luba']."</td></tr>";
			} else {
			}
			if($results['Luba-Katanga'] != '') {
			    echo "<tr><th class=\"border\">Luba-Katanga</th><td>".$results['Luba-Katanga']."</td></tr>";
			} else {
			}
			if($results['Hemba'] != '') {
			    echo "<tr><th class=\"border\">Hemba</th><td>".$results['Hemba']."</td></tr>";
			} else {
			}
			if($results['Zela'] != '') {
			    echo "<tr><th class=\"border\">Zela</th><td>".$results['Zela']."</td></tr>";
			} else {
			}
			if($results['Sanga'] != '') {
			    echo "<tr><th class=\"border\">Sanga</th><td>".$results['Sanga']."</td></tr>";
			} else {
			}
			if($results['Kanyok'] != '') {
			    echo "<tr><th class=\"border\">Kanyok</th><td>".$results['Kanyok']."</td></tr>";
			} else {
			}
			if($results['Songye'] != '') {
			    echo "<tr><th class=\"border\">Songye</th><td>".$results['Songye']."</td></tr>";
			} else {
			}
			if($results['Sena'] != '') {
			    echo "<tr><th class=\"border\">Sena</th><td>".$results['Sena']."</td></tr>";
			} else {
			}
			if($results['Chewa'] != '') {
			    echo "<tr><th class=\"border\">Chewa</th><td>".$results['Chewa']."</td></tr>";
			} else {
			}
			if($results['Tumbuka'] != '') {
			    echo "<tr><th class=\"border\">Tumbuka</th><td>".$results['Tumbuka']."</td></tr>";
			} else {
			}
			if($results['Ngoni'] != '') {
			    echo "<tr><th class=\"border\">Ngoni</th><td>".$results['Ngoni']."</td></tr>";
			} else {
			}
			if($results['Nyanja'] != '') {
			    echo "<tr><th class=\"border\">Nyanja</th><td>".$results['Nyanja']."</td></tr>";
			} else {
			}
			if($results['Zimba'] != '') {
			    echo "<tr><th class=\"border\">Zimba</th><td>".$results['Zimba']."</td></tr>";
			} else {
			}
			if($results['Senga'] != '') {
			    echo "<tr><th class=\"border\">Senga</th><td>".$results['Senga']."</td></tr>";
			} else {
			}
			if($results['Yao'] != '') {
			    echo "<tr><th class=\"border\">Yao</th><td>".$results['Yao']."</td></tr>";
			} else {
			}
			if($results['Sitongwe'] != '') {
			    echo "<tr><th class=\"border\">Sitongwe</th><td>".$results['Sitongwe']."</td></tr>";
			} else {
			}
			if($results['Kihaya'] != '') {
			    echo "<tr><th class=\"border\">Kihaya</th><td>".$results['Kihaya']."</td></tr>";
			} else {
			}
			if($results['Cuabo'] != '') {
			    echo "<tr><th class=\"border\">Cuabo</th><td>".$results['Cuabo']."</td></tr>";
			} else {
			}
			if($results['Makua'] != '') {
			    echo "<tr><th class=\"border\">Makua</th><td>".$results['Makua']."</td></tr>";
			} else {
			}
			if($results['Nyamwezi'] != '') {
			    echo "<tr><th class=\"border\">Nyamwezi</th><td>".$results['Nyamwezi']."</td></tr>";
			} else {
			}
			if($results['Kimbu'] != '') {
			    echo "<tr><th class=\"border\">Kimbu</th><td>".$results['Kimbu']."</td></tr>";
			} else {
			}
			if($results['Sukuma'] != '') {
			    echo "<tr><th class=\"border\">Sukuma</th><td>".$results['Sukuma']."</td></tr>";
			} else {
			}
			if($results['Sumbwa'] != '') {
			    echo "<tr><th class=\"border\">Sumbwa</th><td>".$results['Sumbwa']."</td></tr>";
			} else {
			}
			if($results['Kongo'] != '') {
			    echo "<tr><th class=\"border\">Kongo</th><td>".$results['Kongo']."</td></tr>";
			} else {
			}
			if($results['Lega'] != '') {
			    echo "<tr><th class=\"border\">Lega</th><td>".$results['Lega']."</td></tr>";
			} else {
			}
			if($results['Lomongo'] != '') {
			    echo "<tr><th class=\"border\">Lomongo</th><td>".$results['Lomongo']."</td></tr>";
			} else {
			}
			if($results['Chokwe'] != '') {
			    echo "<tr><th class=\"border\">Chokwe</th><td>".$results['Chokwe']."</td></tr>";
			} else {
			}
	 	 
			echo "</table>";
	/* echo
	"<tr><th class=\"border\">Nyakyusa</th><td>".utf8_encode($results['Nyakyusa'])."</td></tr>
	 <tr><th class=\"border\">Malila</th><td>".utf8_encode($results['Malila'])."</td></tr>
	 <tr><th class=\"border\">Nyiha</th><td>".utf8_encode($results['Nyiha'])."</td></tr>
	 <tr><th class=\"border\">Lambya</th><td>".utf8_encode($results['Lambya'])."</td></tr>
	 <tr><th class=\"border\">Safwa</th><td>".utf8_encode($results['Safwa'])."</td></tr>
	 <tr><th class=\"border\">Mambwe</th><td>".utf8_encode($results['Mambwe'])."</td></tr>
	 <tr><th class=\"border\">Lungu</th><td>".utf8_encode($results['Lungu'])."</td></tr>
	 <tr><th class=\"border\">Fipa</th><td>".utf8_encode($results['Fipa'])."</td></tr>
	 <tr><th class=\"border\">Nyamwanga</th><td>".utf8_encode($results['Nyamwanga'])."</td></tr>
	 <tr><th class=\"border\">Pimbwe</th><td>".utf8_encode($results['Pimbwe'])."</td></tr>
	 <tr><th class=\"border\">Rungwa</th><td>".utf8_encode($results['Rungwa'])."</td></tr>
	 <tr><th class=\"border\">Nyika</th><td>".utf8_encode($results['Nyika'])."</td></tr>
	 <tr><th class=\"border\">Gogo</th><td>".utf8_encode($results['Gogo'])."</td></tr>
	 <tr><th class=\"border\">Nilamba</th><td>".utf8_encode($results['Nilamba'])."</td></tr>
	 <tr><th class=\"border\">Sagala</th><td>".utf8_encode($results['Sagala'])."</td></tr>
	 <tr><th class=\"border\">Vidunda</th><td>".utf8_encode($results['Vidunda'])."</td></tr>
	 <tr><th class=\"border\">Kagulu</th><td>".utf8_encode($results['Kagulu'])."</td></tr>
	 <tr><th class=\"border\">Zaramo</th><td>".utf8_encode($results['Zaramo'])."</td></tr>
	 <tr><th class=\"border\">Kutu</th><td>".utf8_encode($results['Kutu'])."</td></tr>
	 <tr><th class=\"border\">Kwere</th><td>".utf8_encode($results['Kwere'])."</td></tr>
	 <tr><th class=\"border\">Lugulu</th><td>".utf8_encode($results['Lugulu'])."</td></tr>
	 <tr><th class=\"border\">Doe</th><td>".utf8_encode($results['Doe'])."</td></tr>
	 <tr><th class=\"border\">Kami</th><td>".utf8_encode($results['Kami'])."</td></tr>
	 <tr><th class=\"border\">Bemba</th><td>".utf8_encode($results['Bemba'])."</td></tr>
	 <tr><th class=\"border\">Bisa</th><td>".utf8_encode($results['Bisa'])."</td></tr>
	 <tr><th class=\"border\">Marungu</th><td>".utf8_encode($results['Marungu'])."</td></tr>
	 <tr><th class=\"border\">Lamba</th><td>".utf8_encode($results['Lamba'])."</td></tr>
	 <tr><th class=\"border\">Lala</th><td>".utf8_encode($results['Lala'])."</td></tr>
	 <tr><th class=\"border\">Tabwa</th><td>".utf8_encode($results['Tabwa'])."</td></tr>
	 <tr><th class=\"border\">Ambo</th><td>".utf8_encode($results['Ambo'])."</td></tr>
	 <tr><th class=\"border\">Ushi</th><td>".utf8_encode($results['Ushi'])."</td></tr>
	 <tr><th class=\"border\">Nsenga</th><td>".utf8_encode($results['Nsenga'])."</td></tr>
	 <tr><th class=\"border\">Kunda</th><td>".utf8_encode($results['Kunda'])."</td></tr>
	 <tr><th class=\"border\">Ila</th><td>".utf8_encode($results['Ila'])."</td></tr>
	 <tr><th class=\"border\">Tonga</th><td>".utf8_encode($results['Tonga'])."</td></tr>
	 <tr><th class=\"border\">Soli</th><td>".utf8_encode($results['Soli'])."</td></tr>
	 <tr><th class=\"border\">Lenje</th><td>".utf8_encode($results['Lenje'])."</td></tr>
	 <tr><th class=\"border\">Kaonde</th><td>".utf8_encode($results['Kaonde'])."</td></tr>
	 <tr><th class=\"border\">Tsi-Luba</th><td>".utf8_encode($results['Tsi_Luba'])."</td></tr>
	 <tr><th class=\"border\">Luba-Katanga</th><td>".utf8_encode($results['Luba_Katanga'])."</td></tr>
	 <tr><th class=\"border\">Hemba</th><td>".utf8_encode($results['Hemba'])."</td></tr>
	 <tr><th class=\"border\">Zela</th><td>".utf8_encode($results['Zela'])."</td></tr>
	 <tr><th class=\"border\">Sanga</th><td>".utf8_encode($results['Sanga'])."</td></tr>
	 <tr><th class=\"border\">Kanyok</th><td>".utf8_encode($results['Kanyok'])."</td></tr>
	 <tr><th class=\"border\">Songye</th><td>".utf8_encode($results['Songye'])."</td></tr>
	 <tr><th class=\"border\">Sena</th><td>".utf8_encode($results['Sena'])."</td></tr>
	 <tr><th class=\"border\">Chewa</th><td>".utf8_encode($results['Chewa'])."</td></tr>
	 <tr><th class=\"border\">Tumbuka</th><td>".utf8_encode($results['Tumbuka'])."</td></tr>
	 <tr><th class=\"border\">Nyanja</th><td>".utf8_encode($results['Nyanja'])."</td></tr>
	 <tr><th class=\"border\">Zimba</th><td>".utf8_encode($results['Zimba'])."</td></tr>
	 <tr><th class=\"border\">Senga</th><td>".utf8_encode($results['Senga'])."</td></tr>
	 <tr><th class=\"border\">Yao</th><td>".utf8_encode($results['Yao'])."</td></tr>
	 <tr><th class=\"border\">Sitongwe</th><td>".utf8_encode($results['Sitongwe'])."</td></tr>
	 <tr><th class=\"border\">Kihaya</th><td>".utf8_encode($results['Kihaya'])."</td></tr>
	 <tr><th class=\"border\">Ecuwabo</th><td>".utf8_encode($results['Ecuwabo'])."</td></tr>
	 <tr><th class=\"border\">Makua</th><td>".utf8_encode($results['Makua'])."</td></tr>
	 <tr><th class=\"border\">Nyamwezi</th><td>".utf8_encode($results['Nyamwezi'])."</td></tr>
	 <tr><th class=\"border\">Kimbu</th><td>".utf8_encode($results['Kimbu'])."</td></tr>
	 <tr><th class=\"border\">Sukuma</th><td>".utf8_encode($results['Sukuma'])."</td></tr>
	 <tr><th class=\"border\">Sumbwa</th><td>".utf8_encode($results['Sumbwa'])."</td></tr>
	 <tr><th class=\"border\">Kongo</th><td>".utf8_encode($results['Kongo'])."</td></tr>
	 <tr><th class=\"border\">Lega</th><td>".utf8_encode($results['Lega'])."</td></tr></table>"; */
		}
	} else {
			echo "No results found.";
	}
	} else {
		echo "Minimum length is ".$min_length;
	}


echo "</table>";
echo "<a href=\"index.php\">Go back</a>";
echo "</body></html>";

?>