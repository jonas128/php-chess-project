<img src="https://media.giphy.com/media/9POMmQiLkvhRzKFXyT/giphy.gif" />

# Project Title

A chess project built with PHP: enjoy at http://jonas128.se

# Installation

1. Clone the repository to your computer.
2. Start a local server in the command line.
3. Open the index.php file in your browser.

# Code Review

Code review written by [Lucas Källberg](https://github.com/Cellmon95).

1. functions.php:5-8 - Kind of an unnecessary function. Doesn’t really do anything.
2. board.php:1 - Should not use parameter border. Better to style with CSS in an CSS file.
3. board.php:9 - Should not use html in an echo. Try and split the PHP.
4. arrays.php:5-69 - You store your pieces in an indexed array. I would personally have used an associative array instead. It would make the code safer and easier to expand.
5. functions.php:5-19 - Set types on the variables for an easier to understand and safer code.
6. functions.php:11-19 - The name doesn’t really match with what the function does. The name suggests that you would get a point of some sort.
   but you get a string.
7. functions.php:13-18 - Completely unnecessary code. You only need the code on line 16 and it would do the same.
8. functions.php:11 - argument $getPoint is a bad name. The phrasing makes it seam like a function but it's an int.

# Testers

Tested by the following people:

1. Douglas Lindahl
2. Simon Lövbacka
