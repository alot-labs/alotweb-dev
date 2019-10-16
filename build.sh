#!/bin/bash

# Extension can be overriden by an argument. e.g.: ./build html
EXT=$1
if [ -z "$EXT" ] 
then
    EXT="php"
fi

# Build script for serving static content instead of php files
DEST="./docs"
html=".$EXT"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in *.php; 
do
    if [ $f != 'footer.php' ] && [ $f != 'header.php' ] && [ $f != 'menu.php' ]  && [ $f != 'config.php' ]
    then
        php $f | sed 's:\(<a.* href=".*\)\.php\(.*\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
        #php $f | sed 's:\(<a.* href=".*\)\.php\(.*".*</a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
        echo "Processing $f into ${f/.php/$html}..";
    fi
done

cp -Rf css $DEST
cp -Rf fonts $DEST
cp -Rf i $DEST
cp -Rf js $DEST
#cp CNAME $DEST


echo "Process complete." ;
