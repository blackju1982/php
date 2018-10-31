#!/usr/local/bin/python3.5

#I honor Parkland's core values by affirming that I have 
#followed all academic integrity guidelines for this work.

#Justin Blackford

import cgi

def httpHeader():
    print ("""Content-type: text/html

""")

def htmlHeader():
    print ("""<html>
<head>

</head>
""")

def htmlFooter():
    print ("""
</body>
</html>""")

def printForm(alist):
    print ("<form method='POST'>")
    print ("<input type='hidden' name='wordList' value='" + str(alist) + "' />")
    print ("<input type='text' name='word' />")
    print("<input type='submit' value='addWord'/>")
    print ("</form>")

#Main

httpHeader()
htmlHeader()

webTale = cgi.FieldStorage()

submit = webTale.getvalue('submit')
wordList = webTale.getlist('wordList')


wordTypes = ['place', 'adjective', 'verb ending with -ing', 'famous person', 'friend', 'present tense verb', 'room', 'musical instrument']

if submit == "addWord":
	wordList.append(webTale.getvalue("word"))

printForm(wordList)

if len(wordList) == len(wordTypes):
	print("I've been workin' in " + wordList[0] + ", ")
	print("All the " + wordList[1] + " day.")
	print("Don't you hear the whistle " + wordList[2] + "?")
	print("Don't you hear" + wordList[3] + " shouting")
	print(wordList[4] + ", " + wordList[5] + "your horn?")
	print(wordList[4] + ", won't you " + wordList[5] + "your horn?") 
	print("Someone's in the " + wordList[6] + "with " + wordList[4] + ".")
	print("Strumming on the old " + wordlist[7] + ".")



print(len(wordList))

htmlFooter()