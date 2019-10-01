<?php

 include("header.php");

 echo "
 <h2>Bantu Historical Linguistic Database</h2>

    <p>Using the search below, you can enter a word in any of the seventy-one supported languages. If relevant, search results can be delimited on the basis of language and semantic tag. More specific information about both of these search types can be found <a href=\"\">here</a>. The dictionary currently contains 2162 headwords in English.</p>

    <form action=\"results.php\" method=\"GET\" name=\"dictionary\">
    
    <select name=\"language\">
      <option value=\"All_Langs\" selected>All Languages</option>
      <option value=\"English\">English</option>
      <option value=\"Portuguese\">Portuguese</option>
      <option value=\"French\">French</option>
      <option value=\"PBR\">Proto-Bantu</option>
      <option value=\"Swahili\">Swahili</option>
      <option value=\"Wungu\">Wungu</option>
      <option value=\"Ndali\">Ndali</option>
      <option value=\"Nyakyusa\">Nyakyusa</option>
      <option value=\"Malila\">Malila</option>
      <option value=\"Nyiha\">Nyiha</option>
      <option value=\"Lambya\">Lambya</option>
      <option value=\"Safwa\">Safwa</option>
      <option value=\"Mambwe\">Mambwe</option>
      <option value=\"Lungu\">Lungu</option>
      <option value=\"Fipa\">Fipa</option>
      <option value=\"Nyamwanga\">Nyamwanga</option>
      <option value=\"Pimbwe\">Pimbwe</option>
      <option value=\"Rungwa\">Rungwa</option>
      <option value=\"Nyika\">Nyika</option>
      <option value=\"Gogo\">Gogo</option>
      <option value=\"Nilamba\">Nilamba</option>
      <option value=\"Sagala\">Sagala</option>
      <option value=\"Vidunda\">Vidunda</option>
      <option value=\"Kagulu\">Kagulu</option>
      <option value=\"Zaramo\">Zaramo</option>
      <option value=\"Kutu\">Kutu</option>
      <option value=\"Kwere\">Kwere</option>
      <option value=\"Lugulu\">Lugulu</option>
      <option value=\"Doe\">Doe</option>
      <option value=\"Kami\">Kami</option>
      <option value=\"Bemba\">Bemba</option>
      <option value=\"Bisa\">Bisa</option>
      <option value=\"Marungu\">Marungu</option>
      <option value=\"Lamba\">Lamba</option>
      <option value=\"Lala\">Lala</option>
      <option value=\"Tabwa\">Tabwa</option>
      <option value=\"Ambo\">Ambo</option>
      <option value=\"Ushi\">Ushi</option>
      <option value=\"Nsenga\">Nsenga</option>
      <option value=\"Kunda\">Kunda</option>
      <option value=\"Ila\">Ila</option>
      <option value=\"Tonga\">Tonga</option>
      <option value=\"Soli\">Soli</option>
      <option value=\"Lenje\">Lenje</option>
      <option value=\"Kaonde\">Kaonde</option>
      <option value=\"Tsi-Luba\">Tsi-Luba</option>
      <option value=\"Luba-Katanga\">Luba-Katanga</option>
      <option value=\"Hemba\">Hemba</option>
      <option value=\"Zela\">Zela</option>
      <option value=\"Sanga\">Sanga</option>
      <option value=\"Kanyok\">Kanyok</option>
      <option value=\"Songye\">Songye</option>
      <option value=\"Sena\">Sena</option>
      <option value=\"Chewa\">Chewa</option>
      <option value=\"Tumbuka\">Tumbuka</option>
      <option value=\"Ngoni\">Ngoni</option>
      <option value=\"Nyanja\">Nyanja</option>
      <option value=\"Zimba\">Zimba</option>
      <option value=\"Senga\">Senga</option>
      <option value=\"Yao\">Yao</option>
      <option value=\"Sitongwe\">Sitongwe</option>
      <option value=\"Kihaya\">Kihaya</option>
      <option value=\"Cuabo\">Cuabo</option>
      <option value=\"Makua\">Makua</option>
      <option value=\"Nyamwezi\">Nyamwezi</option>
      <option value=\"Kimbu\">Kimbu</option>
      <option value=\"Sukuma\">Sukuma</option>
      <option value=\"Sumbwa\">Sumbwa</option>
      <option value=\"Kongo\">Kongo</option>
      <option value=\"Lega\">Lega</option>
      <option value=\"Lomongo\">Lomongo</option>
      <option value=\"Chokwe\">Chokwe</option>
     </select>
  
     <select>
      <option value=\"All_Tags\" selected>All Tags</option>
      <option value=\"Body_Adornment_Anatomy\">Body Adornment/Anatomy</option>
      <option value=\"Cuisine_Prepared_Food\">Cuisine/Prepared Food</option>
      <option value=\"Family_Intimate_Relations\">Family/Intimate Relations</option>
      <option value=\"Farming_Crops_Land\">Farming/Crops/Land</option>
      <option value=\"Gender_Growth\">Gender/Growth</option>
      <option value=\"Generation_Life_Stages\">Generation/Life Stages</option>
      <option value=\"Healing_Medicine\">Healing/Medicine</option>
      <option value=\"Status_Position\">Status/Position</option>
      <option value=\"Lifeways\">Lifeways</option>
      <option value=\"Worldview_Religion_Epistemology\">Worldview/Religion/Epistemology</option>
     </select>

     <input name=\"query\" class=\"textbox\" type=\"text\" style=\"width:185px\"/>
     <input name=\"search\" class=\"button\" value=\"Search\" type=\"submit\" />
    </form>";

include("footer.php");

?>