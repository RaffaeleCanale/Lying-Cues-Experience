#!/bin/bash

#  	1: Input file
#	2: Output file
#	3: Enable transcode
function copy() {
	if $3; then
		avconv -i "$1" -codec:v libx264 -profile:v high -preset slow -b:v 500k -maxrate 500k -bufsize 1000k -vf scale=480:480 -threads 0 -an "$2"
	else
		cp "$1" "$2"
	fi
}

#	1: Video name
#	2: Video type ('lying', 'truth', 'training')
#	3: Original file name
function echoFileInfo() {
	echo "$1 : $2 : $3"
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
for file in Lies/*; do
	name="video$i.mp4"

	copy "$file" "$output/$name" $transcode
	echoFileInfo "$name" "lying" "$file" >> "$namesMapFile"
	i=$((i+1))
done

for file in Truths/*; do
	name="video$i.mp4"

	copy "$file" "$output/$name" $transcode
	echoFileInfo "$name" "truth" "$file" >> "$namesMapFile"
	i=$((i+1))
done

for file in Training/*; do
	name="video$i.mp4"

	copy "$file" "$output/$name" $transcode
	echoFileInfo "$name" "training" "$file" >> "$namesMapFile"
	i=$((i+1))
done