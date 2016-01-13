1) SET UP SERVER	

	Upload all the following files to the server:
		- Upload all *.php and *.js files
		- Upload the directories 'en', 'fr', 'css', 'img'
		- Create a directory 'images' (leave empty for now)


2) UPLOAD THE IMAGES

	In the images directory, follow the 'images/README.txt' instructions to generate the list of images.
	Then, upload all the images the directory called 'images'

3) SET UP THE DATABASE

	Create the database according to the 'others/databaseTables.sql' file.
	If you completed step 2), a file should have been generated in 'images/insert.sql', use it to insert the images name in the database.

4) DATABASE LOGIN

	Edit the file 'db_connection.php' to set the database name and credentials

5) PARAMETERS

	A number of parameters can be edited (about dots, breaks, etc...).
	To change the parameters, edit the 'constants.php' file

6) RUN
	
	The site can be accessed at fr/index.php or en/index.php
