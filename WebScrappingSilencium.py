from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
import pandas as pd
import time


def loadThePage(url):
    urlProductsList = []
    driver = webdriver.Chrome(ChromeDriverManager().install())
    driver.get(url)

    scrollWholePageDown(driver)

    try:
        products = driver.find_elements(By.CLASS_NAME, 'product')
        print("LEN: ", len(products))

        # read every single image:
        for product in products:
            urlProductsList.append(readSingleProduct(product))
    except:
        handleErrorReadingProducts()

    return urlProductsList


def handleErrorReadingProducts():
    print("Error while reading the products!")


def readSingleProduct(product):
    img = product.find_element(By.XPATH,
                               './a/span[1]/img').get_attribute('src')
    name = product.find_element(By.XPATH,
                                './a/span[2]/span[1]').text
    price = product.find_element(By.XPATH,
                                 './a/span[2]/button/span/span[1]/span').text
    productItem = {
        'img': img,
        'name': name,
        'price': price
    }
    print(productItem)
    return productItem


def scrollWholePageDown(driver):
    finalHeight = driver.execute_script("return document.body.scrollHeight")
    singleScroll = 400
    currentScroll = 500
    while currentScroll < finalHeight:
        driver.execute_script("window.scrollTo(0, " + str(currentScroll) + ")")
        currentScroll += singleScroll
        time.sleep(1)  # wait for the images to load --> links will be ready (SRCs of the images)


if __name__ == '__main__':
    urlList = [
        'https://www.obi.pl/materialy-budowlane/akcesoria-budowlane/c/176',
        'https://www.obi.pl/materialy-budowlane/akcesoria-budowlane/c/176?page=2',
        'https://www.obi.pl/materialy-budowlane/odprowadzenia-wody-i-drenaz/c/284',
        'https://www.obi.pl/tynk-zaprawa-i-cement/tynki/c/620',
        'https://www.obi.pl/tynk-zaprawa-i-cement/cement-i-wapno/c/828',
        'https://www.obi.pl/tynk-zaprawa-i-cement/stal-budowlana-i-kraty-budowlane/c/174',
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



