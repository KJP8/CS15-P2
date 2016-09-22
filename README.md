# P2: xkcd Style Password Generator

## Live URL
<http://p2.keeleypeck.me/>

## Description
This application allows a user to enter input to define the letter case, whether or not to include a number and/or a symbol, and the number of words to use when generating a password. With this information, the application then parses words from a website and randomly chooses which words to use for the password. The application then provides the user with the password based on the user input and the random words chosen.

## Demo
<http://screencast.com/t/ObuXneb9qRh7>

## Details for teaching team
Katy: after doing so much research into preg_match_all with you during section and never figuring out the answer, I did a little more research into the best approach and decided on using the DOMDocument.

## Outside code
* Bootstrap CSS: http://getbootstrap.com/
* Stackoverflow for parsing html: http://stackoverflow.com/questions/10366458/php-dom-parsing-a-html-list-into-an-array
* Stackoverflow for stripping all spaces from password: http://stackoverflow.com/questions/2109325/how-to-strip-all-spaces-out-of-a-string-in-php