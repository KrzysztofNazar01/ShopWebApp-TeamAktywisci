from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
import pandas as pd
import time


def getCategories(url):
    categories = url.split('/')
    mainCat = categories[3]
    subCat = categories[4]
    return mainCat, subCat


def loadThePage(url):
    urlProductsList = []
    driver = webdriver.Chrome(ChromeDriverManager().install())
    driver.get(url)

    scrollWholePageDown(driver)

    try:
        products = driver.find_elements(By.CLASS_NAME, 'product')
        print("LEN: ", len(products))

        category, subcategory = getCategories(url)

        for product in products:
            urlProductsList.append(readSingleProduct(product, category, subcategory))
    except:
        handleErrorReadingProducts()

    return urlProductsList


def handleErrorReadingProducts():
    print("Error while reading the products!")


def getRatingCount(product):
    ratingCountFull = product.find_element(By.XPATH,
                                           './a/span[2]/div[2]/div/span').get_attribute("innerHTML")
    # extract number between brackets for ex. '(18)' --> '18'
    ratingCount = ratingCountFull[ratingCountFull.find("(") + 1:ratingCountFull.find(")")]
    return ratingCount


def readSingleProduct(product, category, subcategory):
    img = product.find_element(By.XPATH,
                               './a/span[1]/img').get_attribute('src')
    name = product.find_element(By.XPATH,
                                './a/span[2]/span[1]').text
    price = product.find_element(By.XPATH,
                                 './a/span[2]/button/span/span[1]/span').text
    ratingScore = product.find_element(By.XPATH,
                                       './a/span[2]/div[2]/div/span/span').text
    pricePerAmount = product.find_element(By.XPATH,
                                          './a/span[2]/span[2]').get_attribute('data-csscontent')

    ratingCount = getRatingCount(product)

    productItem = {
        'cat': category,
        'subCat': subcategory,
        'img': img,
        'name': name,
        'price': price,
        'ratingScore': ratingScore,
        'ratingCount': ratingCount,
        'pricePerAmount': pricePerAmount
    }
    print(productItem)
    return productItem


def scrollWholePageDown(driver):
    finalHeight = driver.execute_script("return document.body.scrollHeight")
    singleScroll = 400
    currentScroll = 500
    footnoteHeight = 1000
    while currentScroll < finalHeight - footnoteHeight:
        driver.execute_script("window.scrollTo(0, " + str(currentScroll) + ")")
        currentScroll += singleScroll
        time.sleep(1)  # wait for the images to load --> links will be ready (SRCs of the images)


if __name__ == '__main__':

    # list of pages to visit and get products from
    # the webpage cannot contain adds between the products
    urlList = [
        'https://www.obi.pl/tynk-zaprawa-i-cement/stal-budowlana-i-kraty-budowlane/c/174'
        'https://www.obi.pl/materialy-budowlane/akcesoria-budowlane/c/176',
        'https://www.obi.pl/materialy-budowlane/akcesoria-budowlane/c/176?page=2',
        'https://www.obi.pl/materialy-budowlane/odprowadzenia-wody-i-drenaz/c/284',
        'https://www.obi.pl/tynk-zaprawa-i-cement/tynki/c/620',
        'https://www.obi.pl/tynk-zaprawa-i-cement/cement-i-wapno/c/828',
        'https://www.obi.pl/akcesoria-do-plytek/silikony-i-akryle/c/317',
        'https://www.obi.pl/akcesoria-do-plytek/silikony-i-akryle/c/317?page=2',
        'https://www.obi.pl/akcesoria-do-plytek/silikony-i-akryle/c/317?page=3',
        'https://www.obi.pl/akcesoria-do-plytek/silikony-i-akryle/c/317?page=4'
    ]

    productsList = []

    for url in urlList:
        newList = loadThePage(url)
        productsList += newList

    df = pd.DataFrame(productsList)

    df.to_csv('OBI_products_1.csv', index=False, encoding='utf-8')

    print(df)
