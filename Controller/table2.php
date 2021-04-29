<!doctype html>

<html>

<head>

<title> Table page </title>
<link rel="stylesheet" type="text/css" href="../View/style.css">
</head>

<body>
<h1>BOOK AND STUDENT INFORMATION </h1><br><br><br><br><br>

<div id ="login">
  <form action = "table2.php" method="post">
    Book : <input type ="text" name="book" >
    Title : <input type ="text" name="title" >
    ID:  <input type ="int" name="id" >
    Name <input type ="text" name="name" >
    Price : <input type ="int" name="price" >
    Author:  <input type ="text" name="author" >
    Available : <input type ="text" name="available" >
    Borrow : <input type ="date" name="borrow">
    Duedate : <input type ="date" name="duedate">
    Issue : <input type ="date" name="issue" >
    Return Date:<input type ="date" name="returndate" >    
    Fines:<input type ="int" name="fines" />
    <input type ="submit" name="submit">
  </form>
</div>

<?php
	include "../Model/DBconnect.php";
	if(isset($_POST['submit']))
	{
        $sql = " INSERT INTO information(Book,Title,Id,Name,Price,Author,Available,Borrow,DueDate,Issue,ReturnDate,Fines) 
		VALUES ('".$_POST['book']."','".$_POST['title']."','".$_POST['id']."','".$_POST['name']."','".$_POST['price']."','".$_POST['author']."','".$_POST['available']."','".$_POST['borrow']."','".$_POST['duedate']."','".$_POST['issue']."','".$_POST['returndate']."','".$_POST['fines']."')";
		if ($conn->query($sql)=== TRUE) {
			echo "THANK YOU";
		}
		else{
			echo "error".$conn->error;
		}

	}



	?>



</body>

</html>