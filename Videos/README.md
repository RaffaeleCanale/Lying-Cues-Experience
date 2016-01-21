1) SELECT VIDEOS

	Prepare theses 3 directories:
		- 'lies'
		- 'truths'
		- 'training'
	And fill them with the corresponding videos.
	Note that each videos in 'training' will be shown once whereas each videos in 'lies' or 'truths' will be shown 4 times.

2) RUN SCRIPT 'prepare'

	Run the bash script 'prepare' (with no arguments). 
	This script will create:

	- A directory 'All' containing all the renamed images to put on the server
	- A file 'insert.sql' containing the SQL code to insert in the DB
	- A 'NameMap.txt' file that keeps track of the file names (not necessary, but just in case)

3) COMPRESS THE VIDEOS

	If you have 'avconv' installed, just run the 'transcode' script (no arguments) that will transcode all the videos in 'All' into a light, web-friendly format (might take a few minutes).
	All the transcoded videos will be in the 'all_transcoded' directory. Use theses for the upload.