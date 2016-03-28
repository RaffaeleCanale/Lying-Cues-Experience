#!/bin/bash

#	1: Constant name
function getConstant() {
	cat $PHP_CONSTANTS_FILE | sed -n "s/define(['\"]$1['\"], ['\"]\(.*\)['\"]);/\1/p"
}

#	IN: String to trim
function trim() {
	local tmp
	read tmp;

	tmp="${tmp##*( )}" 
	tmp="${tmp%%*( )}"

	echo "$tmp"
}

IMAGES_FILE="../Images/ImageNamesMap.txt"
PHP_CONSTANTS_FILE="../Code/constants.php"
TABLE_USERS=$(getConstant "TABLE_USERS")
TABLE_SUBJECTS=$(getConstant "TABLE_SUBJECTS")
TABLE_TRAINING=$(getConstant "TABLE_TRAINING")
TABLE_ANSWERS=$(getConstant "TABLE_ANSWERS")
TABLE_LOGS=$(getConstant "TABLE_LOGS")
TABLES_FILE="sql_tables.txt"

output="database.sql"


cat "$TABLES_FILE" | 
sed "s/@@USERS@@/$TABLE_USERS/g" |
sed "s/@@SUBJECTS@@/$TABLE_SUBJECTS/g" |
sed "s/@@TRAINING@@/$TABLE_TRAINING/g" |
sed "s/@@LOGS@@/$TABLE_LOGS/g" |
sed "s/@@ANSWERS@@/$TABLE_ANSWERS/g" > "$output"


while read line; do
	imageName=$(echo $line | cut -d ':' -f1 | trim)
	imageType=$(echo $line | cut -d ':' -f2 | trim)

	case $imageType in		
		"survey" )
			echo "INSERT INTO \`$TABLE_SUBJECTS\` (path) VALUES ('$imageName');" >> $output
			;;
		"training" )
			echo "INSERT INTO \`$TABLE_TRAINING\` (path) VALUES ('$imageName');" >> $output
			;;
	esac
done < "$IMAGES_FILE"


