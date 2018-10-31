#!/usr/local/bin/python3.5 
#I honor Parkland's core values by affirming that I have 
#followed all academic integrity guidelines for this work.
#
#Justin Blackford

import cgi

def imageTag(string):
    if string == str(tttForm.getvalue('player1')):
        return "<img src='images/x.png' />"
    else:
        return "<img src='images/o.png' />"


def threeInARow(tttBoard, p1, p2, p3):
# 0 1 2
# 3 4 5
# 6 7 8
  if tttBoard[p1] == tttBoard[p2] and \
     tttBoard[p2] == tttBoard[p3] and \
     tttBoard[p1] != ' ': 
     return tttBoard[p1]
  return None

def findWinner(tttBoard):
    if threeInARow(tttBoard, 0, 1, 2) is not None:
        return threeInARow(tttBoard, 0, 1, 2)
    elif threeInARow(tttBoard, 3, 4, 5) is not None:
        return threeInARow(tttBoard, 3, 4, 5)
    elif threeInARow(tttBoard, 6, 7, 8) is not None:
        return threeInARow(tttBoard, 6, 7, 8)
    elif threeInARow(tttBoard, 0, 3, 6) is not None:
        return threeInARow(tttBoard, 0, 3, 6)
    elif threeInARow(tttBoard, 1, 4, 7) is not None:
        return threeInARow(tttBoard, 1, 4, 7)
    elif threeInARow(tttBoard, 2, 5, 8) is not None:
        return threeInARow(tttBoard, 2, 5, 8)
    elif threeInARow(tttBoard, 0, 4, 8) is not None:
        return threeInARow(tttBoard, 0, 4, 8)
    elif threeInARow(tttBoard, 2, 4, 6) is not None:
        return threeInARow(tttBoard, 2, 4, 6) 
    return None

def printWhoGoes(whogoes):
    print ("<center><h2>")
    print ("Player " + whogoes + " goes")
    print ("</h2></center>")

def printRestart():
    print ("<form method='POST'>")
    print ("<input type='submit' value='Restart Game'>")
    print ("</form>")

def printCell(cellEntry, cellNumber):
    if cellEntry == ' ':
        print ("<input type='submit' name='cell' value='" + str(cellNumber) + "'>")
    else:
        print ( imageTag(cellEntry) )

def printForm(boardList, whogoes, player1, player2):
    print ("<table border='1' align='center'>")
    print ("<form method='POST'>")
    boardString = ':'
    boardString = boardString.join(boardList)
    print ("<input type='hidden' name='tttString' value='" + str(boardString) + "'>")
    print ("<input type='hidden' name='whogoes' value='" + str(whogoes) + "'>")
    print ("<input type='hidden' name='player1' value='" + str(player1) + "'>")
    print ("<input type='hidden' name='player2' value='" + str(player2) + "'>")

# /t == tab to make the output html look better
    for row in range(0,3):
        print ("\t<tr>")
        print ("\t\t<td align='center' width='200' height='200'>")
        printCell(boardList[0 + row*3], 0 + row*3)
        print ("\t\t</td>")
        print ("\t\t<td align='center' width='200' height='200'>")
        printCell(boardList[1 + row*3], 1 + row*3)
        print ("\t\t</td>")
        print ("\t\t<td align='center' width='200' height='200'>")
        printCell(boardList[2 + row*3], 2 + row*3)
        print ("\t</tr>")


    print ("</form>")
    print ("</table>")


print ("Content-type: text/html\n\n")

tttForm = cgi.FieldStorage()

player1 = str(tttForm.getvalue('player1'))
player2 = str(tttForm.getvalue('player2'))

cell = tttForm.getvalue('cell')

if cell is None:   # (re)start the game
    tttBoard =  [' ',' ', ' ', \
                 ' ',' ', ' ', \
                 ' ',' ', ' ' ] 
    whogoes = player1
else:
    tttString = tttForm.getvalue('tttString')
    whogoes = tttForm.getvalue('whogoes')
    tttBoard = tttString.split(':')
    tttBoard[ int(cell) ] = whogoes
    
    if whogoes == player1:
        whogoes = player2
    else:
        whogoes = player1

# this would be a good place to figure out who won
winner = findWinner(tttBoard)
if winner is None:
    printWhoGoes(whogoes)
    printForm(tttBoard, whogoes, player1, player2)
else:
    print (winner)
    print ("is the winner")





printRestart()
