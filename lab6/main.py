#!/usr/local/bin/python2.7 
# I honor Parkland's core values by affirming that I have 
# followed all academic integrity guidelines for this work.
#
# Justin blackford

import cgi, cgitb
import MySQLdb
cgitb.enable()

def printDatabase(cur):
    sql="SELECT * FROM employees;"
    cur.execute(sql)

    for row in cur.fetchall():
        print ( str(row[1]) + " " + str(row[2]) + " " + str(row[3]) + "<br>")
    


def printForm():
    print ("<table bgcolor='antiquewhite' align='center' cellpadding='2' cellspacing='2'>")
    print ("<form method='POST'> <tr>")
    print ("<td align='right'>First Name:</td>")
    print ("<td><input type='text' name='firstName'/></td>")
    print ("</tr>")

    print ("<tr>")
    print ("<td align='right'>Last Name:</td>")
    print ("<td><input type='text' name='lastName'/></td>")
    print ("</tr>")

    print ("<tr>")
    print ("<td align='right'>Gender:</td>")
    print ("<td><input type='text' name='gender'/></td>")
    print ("</tr>")

    print ("<tr>")
    print ("<td align='center' colspan='2'>")
    print ("<input type='submit' name='choice' value='Insert Record'/></td>")
    print ("<input type='submit' name='choice' value='Reset Form'/></td>")
    print ("</tr>")
    print ("</form>")
    print ("</table>")

#complete the HTTP header
print ("Content-type: text/html\n\n")

# db is an object that maintains the connection to the database
db =  MySQLdb.connect(host='localhost', 
                      user='jblackford3',
                      passwd='jblackford3',
                      db='jblackford3')
cur = db.cursor()

# form stuff
insertForm = cgi.FieldStorage()
firstName = insertForm.getvalue('firstName')
lastName = insertForm.getvalue('lastName')
gender = insertForm.getvalue('gender')
choice = insertForm.getvalue('choice')

if choice == "Insert Record":
    # TODO should check for None
    sql = "INSERT INTO employees SET "
    sql +=    "first_name='" + firstName + "',"
    sql += "last_name='" + lastName + "',"
    sql += "gender='" + gender + "';"    
    # print ("<code>" + sql + "</code>")
    cur.execute(sql)
    
# debugging output only above here

print ("<hr>")

print ("<table width='80%'>")
print ("<tr>")
print ("<td>")
printForm()
print ("</td>")

print ("<td>")
printDatabase(cur)
print ("</td>")

print ("</tr>")
print ("</table>")




# print all the first cell of all the rows

db.close()