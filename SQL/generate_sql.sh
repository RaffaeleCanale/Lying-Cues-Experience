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

VIDEOS_FILE="../Videos/VideoNamesMap.txt"
PHP_CONSTANTS_FILE="../Code/constants.php"
TABLE_USERS=$(getConstant "TABLE_USERS")
TABLE_SUBJECTS=$(getConstant "TABLE_SUBJECTS")
TABLE_TRAINING=$(getConstant "TABLE_TRAINING")
TABLE_ANSWERS=$(getConstant "TABLE_ANSWERS")
TABLES_FILE="sql_tables.txt"

output="database.sql"


cat "$TABLES_FILE" | 
sed "s/@@USERS@@/$TABLE_USERS/g" |
sed "s/@@VIDEOS@@/$TABLE_SUBJECTS/g" |
sed "s/@@TRAINING@@/$TABLE_TRAINING/g" |
sed "s/@@ANSWERS@@/$TABLE_ANSWERS/g" > "$output"


while read line; do
	videoName=$(echo $line | cut -d ':' -f1 | trim)
	videoType=$(echo $line | cut -d ':' -f2 | trim)

	case $videoType in
		"lying" )
			echo "INSERT INTO \`$TABLE_SUBJECTS\` (path, is_lying) VALUES ('$videoName', true);" >> $output
			;;
		"truth" )
			echo "INSERT INTO \`$TABLE_SUBJECTS\` (path, is_lying) VALUES ('$videoName', false);" >> $output
			;;
		"training" )
			echo "INSERT INTO \`$TABLE_TRAINING\` (path, is_lying) VALUES ('$videoName', false);" >> $output
			;;
	esac
done < "$VIDEOS_FILE"


