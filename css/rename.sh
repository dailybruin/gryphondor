#!/bin/bash

for file in *.css
do
  mv "$file" "../sass/`basename $file .css`.scss"
done
