###1. SELECT VIDEOS

Firstly, create theses 3 directories:
	- Lies
	- Truths
	- Training
Then, place all your videos within these 3 directories according to their type. They do not need to be renamed.
Note that the experiment will use all the videos placed here.

###2. RUN SCRIPT 'generate_list.sh'

Usage:
`./generate_list.sh` or `./generate_list.sh --no-transcode`

This script will create the directory `Upload` that will contain all the videos as they should be uploaded to the server.
The script will also create the file `VideoNameMap.txt`. Do *not* erase that file as it will be needed later.

###Note on transcoding

The script will also transcode every video into a light, web-friendly format using `avconv`.
If you don't have `avconv` installed, you can skip transcoding by using the `--no-transcode` option.