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
<SCRIPT LANGUAGE="javascript">

function KeepCount() {

var NewCount = 0

if (document.pasta.toppings.checked)
{NewCount = NewCount + 1}


if (NewCount >= 4)
{
alert('Only up to 4 please')
document.pasta; return false;
}
} 
</SCRIPT>
</head>
""")

def htmlFooter():
    print ("""
</body>
</html>""")

def htmlForm():
    print ("""
<h1 align='center'>Create Your Own Pasta</h1>

    <table align='center'  bgcolor = 'antiquewhite'>

  <form name='pasta' method="POST">
    <!-- option one -->
    <tr>
        <td align='center' colspan='4'>Choose a Noodle: </td>
    </tr>
    <tr>
        <td><input type="radio" name="noodle" value="Fettuccini">Fettuccini</td>
        <td><input type="radio" name="noodle" value="Cavatappi">Cavatappi</td>
        <td><input type="radio" name="noodle" value="Spaghetti">Spaghetti</td>
        <td><input type="radio" name="noodle" value="Cheese Tortillini">Cheese Tortillini (+$1.00)</td>
    </tr>
    <!-- option two -->
    <tr>
        <td align='center' colspan='4'>Choose a Sauce: </td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Marinara">Marinara</td>
        <td><input type="radio" name="sauce" value="Creamy Pesto">Creamy Pesto</td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Alfredo">Alfredo</td>
        <td><input type="radio" name="sauce" value="Diavolo">Diavolo</td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Pesto">Pesto</td>
        <td><input type="radio" name="sauce" value="Three Cheese">Three Cheese</td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Creamy Marinara">Creamy Marinara</td>
        <td><input type="radio" name="sauce" value="Extra Virgin Olive Oil">Extra Virgin Olive Oil</td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Cajun Alfredo">Cajun Alfredo</td>
        <td><input type="radio" name="sauce" value="Cajun Pesto">Cajun Pesto</td>
    </tr>
    <tr>
        <td><input type="radio" name="sauce" value="Butter">Butter</td>
        <td><input type="radio" name="sauce" value="Lemon Butter">Lemon Butter</td>
    </tr>
    <!-- option three -->
        <tr>
        <td align='center' colspan='4'>Premium Toppings (add $1.50 each): </td>
    </tr>
    <tr>
        <td><input type="checkbox" name="premium" value="Meatballs">Meatballs</td>
        <td><input type="checkbox" name="premium" value="Shrimp">Shrimp</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="premium" value="Grilled Chicken">Grilled Chicken</td>
        <td><input type="checkbox" name="premium" value="Bacon">Bacon</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="premium" value="Italian Sausage">Italian Sausage</td>
        <td><input type="checkbox" name="premium" value="Pepperoni">Pepperoni</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="premium" value="Spicy Chicken">Spicy Chicken</td>
        <td><input type="checkbox" name="premium" value="Hard Boiled Egg">Hard Boiled Egg</td>
    </tr>
    <!-- option four -->
    <tr>
        <td align='center' colspan='4'>Choose up to Four Toppings: </td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Fresh Garlic">Fresh Garlic</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Fresh Basil">Fresh Basil</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Black Olives">Black Olives</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Fresh spinach">Fresh spinach</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Brocilli">Brocilli</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Mushrooms">Mushrooms</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Artichokes">Artichokes</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Red Onions">Red Onions</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Pineapple">Pineapple</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Green Pappers">Green Pappers</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Green Apple">Green Apple</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Roasted Red Peppers">Roasted Red Peppers</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Banana Peppers">Banana Peppers</td>
        <td><input type="checkbox" name="toppings" onClick="return KeepCount()" value="Tomatoes">Tomatoes</td>
    </tr>
    <!-- option five -->
    <tr>
        <td align='center' colspan='4'>Extras $1 Each: </td>
    </tr>
    <tr>
        <td><input type="checkbox" name="extra" value="Extra Sauce">Extra Sauce</td>
        <td><input type="checkbox" name="extra" value="Garlic Bread">Garlic Bread</td>
    </tr>
    <!-- Submit button -->
    <tr>
        <td align='center' colspan='4'>
            <input type='submit' name='selection' value='Submit'/>
        </td>
    </tr>
  </form>

</table>

""")

def orderTotal(order):    
    premium = formInfo.getlist('premium')
    extras = formInfo.getlist('extra')
    toppings = formInfo.getlist('toppings')

    pastaOrder = ": "
    pastaOrder += (formInfo.getvalue('noodle') + ", ")
    pastaOrder += (formInfo.getvalue('sauce') + ", ")

    total = 6
    for i in premium:
           total += 1.5
           pastaOrder += (i + ", ")
    for j in toppings:
           pastaOrder += (j + ", ")
    for k in extras:
           total += 1
           pastaOrder += (k + ", ")

    print("Your total is: " + str(total))
    print(pastaOrder)

#Main
httpHeader()
htmlHeader()

htmlForm()

formInfo = cgi.FieldStorage()

order = formInfo.getvalue('Submit')

orderTotal(order)

# some_var = request.POST.getlist('checks')
# https://stackoverflow.com/questions/2417127/how-do-i-get-the-values-of-all-selected-checkboxes-in-a-django-request-post

htmlFooter()