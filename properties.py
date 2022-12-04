import random

categoriesURL = [
    "http://presta.example.com/5-materialy-budowlane",
    "http://presta.example.com/6-tynk-zaprawa-i-cement"
    
]


def getCartURL():
    return "http://presta.example.com/koszyk?action=show"


def getPrestashopURL():
    return "http://presta.example.com"


def getFirstCategoryURL():
    return "http://presta.example.com/a1/1-bayersystem-drabina-wielofunkcyjna-tg-dw-3-x-7-szczebli.html"


    """
    Returns random category URL !without page number!
    """
def getRandomCategoryURL():
    return random.choice(categoriesURL)


def getZamowienieURL():
    return "http://presta.example.com/zam%C3%B3wienie"


def getHistoryURL():
    return "http://presta.example.com/historia-zamowien"