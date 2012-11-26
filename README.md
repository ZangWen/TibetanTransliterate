A PHP function for transliterating unicode Tibetan script. 
Currently only supports ACIP (http://asianclassics.org) transliteration. 
Intending to also support extended wylie transliteration (http://www.thlib.org/reference/transliteration/#!essay=/thl/ewts/)

to use, pass data to the transliterate() function.
the first variable is for the data, and the second is for the transliteration scheme you with to use.
the options for the second being "ACIP", and "extendedWylie"

see test.php for an example of how to use