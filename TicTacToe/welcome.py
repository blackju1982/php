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

def htmlForm():
    print ("""
<h1 align='center'>Enter Player Names</h1>

<table align='center'  bgcolor = 'antiquewhite'>

  <form name='players' method="POST" action='TicTacToe.py'>
    <tr>
        <td><input type='text' name='player1' value=''/></td>
    </tr>
    <tr>
        <td><input type='text' name='player2' value=''/></td>
    </tr>
    <tr>
        <td><input type='submit' name='selection' value='Submit'/></td>
    </tr>
  </form>

</table>

""")

#Main
httpHeader()
htmlHeader()

htmlForm()

# some_var = request.POST.getlist('checks')
# https://stackoverflow.com/questions/2417127/how-do-i-get-the-values-of-all-selected-checkboxes-in-a-django-request-post

htmlFooter()