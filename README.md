# PHP & MySQL RESTful API

PHP RESTful CRUD application to use MySQL. You can use this application with http requests. 
This can be use to implement basic CRUD operations.

## How to use
1)Fork this repo<br>
2)Pull changes to your computer

or <br>
Simply Skip step 1 and 2 and ,<br>
3)Download as a zip and extract
<br>
4)Copy to your localhost 'htdocs' folder or the apache server
5)If you are using localhost, run apache server on your pc using LAMPP,MAMPP,XAMPP,WAMPP or equilant software.<br>

6)Open Postman application<br>

Create function

7)Provide the relavent path to postman application <br>
`localhost/<Your folder name>/create.php` <br>
8)Enter data in JSON format and hit on send button
```
{ 
	"username":"johndoe",
	"fname":"john",
	"lname":"doe"
}
```

Read function

9)Provide the relavent path to postman application and hit on send button <br>
`ex: localhost/<Your folder name>/read.php` <br>

Update function

10)Provide the relavent path to postman application <br>
`localhost/<Your folder name>/update.php` <br>
11)Enter updated data in JSON format and hit on send button
```
{ 
	"id":"2",
	"username":"johndope",
	"fname":"dope",
	"lname":"dope"
}
```
Delete function

7)Provide the relavent path to postman application <br>
`ex: localhost/<Your folder name>/create.php` <br>
8)Enter the id of the field that you want to delete in JSON format and send
```
{ 
	"id":"2",
}
```
