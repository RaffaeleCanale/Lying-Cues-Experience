#!/bin/bash

#	1: Directory
#	2: video type ('lying', 'truth', 'training')
function processDirectory() {
	for file in "$1"/*; do
		local filename=$(basename "$file")
		local extension="${filename##*.}"
		if $transcode; then
			extension="mp4"
		fi

		local name="image$i.$extension"

		copy "$file" "$output/$name"
		echo "$name : $2 : $filename" >> "$namesMapFile"

		i=$((i+1))
	done
}

#  	1: Input file
#	2: Output file
function copy() {
	if $transcode; then
		avconv -i "$1" -codec:v libx264 -profile:v high -preset slow -b:v 500k -maxrate 500k -bufsize 1000k -vf scale=480:480 -threads 0 -an "$2"
	else
		cp "$1" "$2"
	fi
}

if [ ! -d "Lies" ] || [ ! -d "Truths" ] || [ ! -d "Training" ]; then
	echo "Place all your truths videos in a directory called 'Truth', the lies in 'Lies' and training videos in 'Training'"
	exit 1
fi

transcode=true
output="Upload"
namesMapFile="VideoNamesMap.txt"

if [ "$1" == "--ignore-transcode" ]; then
	transcode=false
fi

if [ ! -d "$output" ]; then
	mkdir "$output"
fi

if [ -f "$namesMapFile" ]; then
	rm "$namesMapFile"
fi

i=1;
processDirectory "Lies" "lying"
processDirectory "Truths" "truth"
processDirectory "Training" "training"