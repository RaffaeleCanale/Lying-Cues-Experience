#!/bin/bash

#	1: Directory
#	2: Image type (survey/training)
function processDirectory() {
	for file in "$1"/*; do
		local filename=$(basename "$file")
		local extension="${filename##*.}"

		local name="image$i.$extension"

		cp "$file" "$output/$name"
		echo "$name : $2 : $filename" >> "$namesMapFile"

		i=$((i+1))
	done
}


if [ ! -d "Survey" ] || [ ! -d "Training" ]; then
	echo "Place all your survey images in a directory called 'Survey' and training images in 'Training'"
	exit 1
fi

output="Upload"
namesMapFile="ImageNamesMap.txt"

if [ ! -d "$output" ]; then
	mkdir "$output"
fi

if [ -f "$namesMapFile" ]; then
	rm "$namesMapFile"
fi

i=1;
processDirectory "Survey" "survey"
processDirectory "Training" "training"