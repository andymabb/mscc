# Manordeilo & Salem Community Website
Development files, build process and output files for MSCC website.
## Requirements
* Node and NPM
* GULP (npm install -g gulp-cli)
* Local server for PHP - XAMPP recommended
## Setup
1. Clone this repo
2. Rename package.json.txt package.json
2. Install dependencies specified in package.json (npm init)
3. Edit gulpfile.js around ln. 100 to point to server
4. Run "Gulp" - this will:
* Combine and compress css, js & html and output to the 'dist' folder
* Display pages in default browser
## Changes
Only make changes in the scr folder (except images which are optimised and added directly into the dist/images folder