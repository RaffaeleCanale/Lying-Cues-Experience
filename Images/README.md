###1. SELECT VIDEOS

Firstly, create theses 2 directories:

- Survey
- Training

Then, place all your images within these 2 directories according to which should be used during the training or during the survey. They do not need to be renamed.
Note that the experiment will use all the images placed here.

###2. RUN SCRIPT `generate_list.sh`

Usage:
`./generate_list.sh`

This script will create the directory `Upload` that will contain all the images as they should be uploaded to the server.
The script will also create the file `ImageNameMap.txt`. Do *not* erase that file as it will be needed later.