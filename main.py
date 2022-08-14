import requests

url = 'https://pvv.nl/nieuwsbrief.html'

data = "user%5Bvoornaam%5D=Ron&user%5Btussenvoegsel%5D=&user%5Bname%5D=devries&user%5Bemail%5D=rovernulled%40gmail.com&user%5Bgeslacht%5D=man&ajax=0&acy_source=module_201&ctrl=sub&task=optin&redirect=https%253A%252F%252Fpvv.nl%252Fnieuwsbrief.html&redirectunsub=https%253A%252F%252Fpvv.nl%252Fnieuwsbrief.html&option=com_acymailing&hiddenlists=1&acyformname=formAcymailing56701"

r = requests.post(url, data=data)
print(r.text)