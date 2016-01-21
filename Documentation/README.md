0. EXPERIMENT PARAMETERS (optional)

A number of parameters about the experiment as well as the database tables name can be edited.
To change these parameters, edit the 'Code/constants.php' file. For more detailed information, see the corresponding [documentation](/Documentation/Constants Definitions.txt).

1. DATABASE LOGIN

Edit the file 'Code/db_connection.php' to set the database name and credentials.

2. SET UP SERVER

Upload all the code to the server. You can do so by uploading all the content of the 'Code' directory to the server root directory.

3. UPLOAD THE VIDEOS

First, you need to prepare the videos to use for the experiment. To do so, go the 'Videos' directory and follow the [instructions](/Videos/README.md).

Once ready, upload all the videos on the server to the directory '/Videos'.

4. SET UP THE DATABASE

To create the database and populate it, go to the directory 'SQL' and follow the [instructions](/SQL/README.md) to generate the SQL code.

Then, run the SQL code on the database, this will create and populate it.

5. RUN

The site can be accessed at fr/index.php or en/index.php
