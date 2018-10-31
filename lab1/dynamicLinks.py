#!/usr/local/bin/python3.5

#I honor Parkland's core values by affirming that I have 
#followed all academic integrity guidelines for this work.
#Justin Blackford

print("Content-type: text/html\n")

linksList = ["<a href='https://www.reddit.com/r/popular/'>Reddit</a>", "<a href='https://www.reddit.com/r/MTGLegacy/'>MTG Legacy</a>", "<a href='https://www.mtgstocks.com/news'>MTG Price tracking</a>",
"<a href='cobra.parkland.edu'>Cobra</a>", "<a href='http://www.bbc.com'/>BBC</a>", "<a href='http://explosm.net/'>Cyanide and Happiness</a>",
"<a href='http://www.cracked.com/>'Cracked</a>", "<a href='https://worldofwarcraft.com/en-us/'>WoW</a>",
"<a href='https://www.youtube.com/channel/UCSRAuXfp7JdIlcVN7Eqctyg'>Youtube Drummer</a>",
"<a href='https://www.games-workshop.com/Home?_requestid=4798057'>Miniatures</a>"]

def printLinks(alist):
	for i in range(0, len(alist) - 1):
		print(alist[i])

print("<html><head></head>")

printLinks(linksList)

print("</body></html>")

# "<a href='https://www.reddit.com/r/popular/'>Reddit</a>", "<a href='https://www.reddit.com/r/MTGLegacy/'>MTG Legacy</a>", "<a href='https://www.mtgstocks.com/news'>MTG Price tracking</a>",
# "<a href='cobra.parkland.edu'>Cobra</a>", "<a href='http://www.bbc.com'/>BBC</a>", "<a href='http://explosm.net/'>Cyanide and Happiness</a>",
# "<a href='http://www.cracked.com/>'Cracked</a>", "<a href='https://worldofwarcraft.com/en-us/'>WoW</a>",
# "<a href='https://www.youtube.com/channel/UCSRAuXfp7JdIlcVN7Eqctyg'>Youtube Drummer</a>",
# "<a href='https://www.games-workshop.com/Home?_requestid=4798057'>Miniatures</a>"