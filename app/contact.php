<?php

 include("header.php");
 
 echo "<style>

label {
    font-weight: bold;
}

input[type=text], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical
}

input[type=submit] {
    text-decoration: none;
	color: black;
	background:#fff;
	border: 1px solid #008CBA;
	padding:3px 10px;
	font-size:14px;
    cursor: pointer;
}

input[type=reset] {
    text-decoration: none;
	color: black;
	background:#fff;
	border: 1px solid #008CBA;
	padding:3px 10px;
	font-size:14px;
    cursor: pointer;
}

input[type=submit]:hover {
	text-decoration: none;
	background:#008CBA;
	border:1px solid #008CBA;
	color:white;
	font-weight: bold;
}

input[type=reset]:hover {
	text-decoration: none;
	background:#008CBA;
	border:1px solid #008CBA;
	color:white;
	font-weight: bold;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
</style>";

 echo "
 <div class=\"container\">
  <form action=\"send.php\">

    <label for=\"name\">Name:</label>
    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Your name\">

    <label for=\"email\">Email Address:</label>
    <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Your email address\">


    <label for=\"subject\">Message:</label>
    <textarea id=\"subject\" name=\"subject\" placeholder=\"Write your message here.\" style=\"height:200px\"></textarea>

    <input type=\"reset\" value=\"Clear\">
    <input type=\"submit\" value=\"Submit\">

  </form>
</div>";
			

include("footer.php");

?>