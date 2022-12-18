import locale

from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
import pandas as pd
import time
import random

driver = webdriver.Chrome(ChromeDriverManager().install())

def loadThePage(url):
    urlProductsList = []
    driver.get(url)

    scrollWholePageDown(driver)

    # try:
    products = driver.find_elements(By.CLASS_NAME, 'product-wrapper')
    URLs = []
    for p in products:
        URLs.append(p.get_attribute('href'))
    # products = driver.find_elements(By.CLASS_NAME, 'product')
    print("LEN: ", len(products))

    k = 0
    # read every single image:
    for url_ in URLs:
        cat = url.split('/')[3].replace('-',' ')
        product = readSingleProduct(url_)
        product['cat'] = cat
        urlProductsList.append(product)
        if k > 5:
            break
        k+=1
    # except:
    #     handleErrorReadingProducts()

    return urlProductsList


def handleErrorReadingProducts():
    print("Error while reading the products!")


def readSingleProduct(product):
    #         'https://www.obi.pl/materialy-budowlane/akcesoria-budowlane/c/176',
    driver.get(product)
    
    # FCKING COOKIES...
    cookies = driver.find_elements(By.XPATH, '/html/body/div[2]/div/div[1]/div[3]/button[3]')
    if len(cookies) > 0:
        cookies[0].click()

    scrollWholePageDown(driver)

    imgs = []
    # img_slider_divs = driver.find_element(By.CLASS_NAME, 'slick-track').find_elements(By.TAG_NAME, 'div')

    name = driver.find_element(By.CLASS_NAME, 'overview__heading').text
    price = driver.find_element(By.XPATH, '//*[@id="AB_radio_wrapper"]/div[1]/div[2]/div[1]/div[2]/div[1]/span/strong/strong').text.replace(',','.').replace(' ','')
    div = driver.find_elements(By.CLASS_NAME, 'span-mobile12')[1]
    vat_string = div.find_element(By.CLASS_NAME, 'underline').text

    height = driver.find_elements(By.XPATH, '//*/td[@data-label="Wysokość"]/span/span')
    width = driver.find_elements(By.XPATH, '//*/td[@data-label="Szerokość"]/span/span')
    weight = driver.find_elements(By.XPATH, '//*/td[@data-label="Waga"]/span/span')
    depth = driver.find_elements(By.XPATH, '//*/td[@data-label="Głębokość / Grubość"]/span/span')
    opis = driver.find_elements(By.CLASS_NAME, 'no-margin')
    opis = opis[0].text.replace('\n', ' ') if len(opis) > 0 else ''

    height = height[0].text.replace(',','.') if len(height) != 0 else ''
    width = width[0].text.replace(',','.') if len(width) != 0 else ''
    weight = weight[0].text.replace(',','.') if len(weight) != 0 else ''
    depth = depth[0].text.replace(',','.') if len(depth) != 0 else ''

    driver.find_element(By.CLASS_NAME, 'ads-slider__link').click()
    scrollWholePageDown(driver)
    img_divs = driver.find_elements(By.CLASS_NAME, 'ads-slider__image')
    for div in img_divs:
        imgs.append(div.get_attribute('src'))



    print(height, width, weight, depth)
    # combinations = driver.find_elements(By.XPATH, '//*[@id="Overview"]/div[2]/section[2]/form/div/div[1]/div/div[3]/div[1]')
    
    # has_combination = True
    
    # if len(combinations) == 0:
    #     has_combination = False
        
        
    # if has_combination:
    #     variant_list = []
    #     variants = driver.find_elements(By.XPATH, '//*[@id="Overview"]/div[2]/section[2]/form/div/div[1]/div/div[3]/div/div/ul/li')
    #     for variant in variants:
    #         variant_list.append(variant.find_element(By.TAG_NAME, 'a'))
    #     #print(variant_list)

    # print(driver.find_element(By.XPATH, '//*[@id="Overview"]/div[2]/section[2]/form/div/div[1]/div/div[3]/div/div/ul/li[1]/a').text)

    vat = 4
    
    if vat_string == "VAT 23%":
        vat = 1
    elif vat_string == "VAT 8%":
        vat = 2
    elif vat_string == "VAT 5%":
        vat = 3

    productItem = {
        'img': ','.join(imgs),
        'name': name,
        'price': float(price),
        'vat': vat,
        'ammount': random.randint(0, 100),
        'height': height,
        'width': width,
        'depth': depth,
        'weight': weight,
        'describe': opis
    }
    
    print(productItem)
    return productItem


def scrollWholePageDown(driver):
    finalHeight = driver.execute_script("return document.body.scrollHeight")
    singleScroll = 16000
    currentScroll = 500
    while currentScroll < finalHeight:
        driver.execute_script("window.scrollTo(0, " + str(currentScroll) + ")")
        currentScroll += singleScroll
        time.sleep(1)  # wait for the images to load --> links will be ready (SRCs of the images)


def getDataUsingWebScrapping():
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
        break

    df = pd.DataFrame(productsList)
    df.to_csv('OBI_products_1.csv', index=False, encoding='utf-8', sep='|')
    print(df)


def extractPriceTag(row):
    if 'zł / szt.' in row['price_brutto_zl']:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł / szt.'))
        return 'zł / szt.'
    elif 'zł/mb' in row['price_brutto_zl']:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł/mb'))
        return 'zł/mb'
    elif 'zł / mb' in row['price_brutto_zl']:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł/mb'))
        return 'zł / mb'
    elif 'zł/' in row['price_brutto_zl']:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł/'))
        return 'zł/'
    elif 'zł /' in row['price_brutto_zl']:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł /'))
        return 'zł /'
    else:
        # row['price_brutto_zl'] = row['price_brutto_zl'].map(lambda x: x.rstrip('zł /'))
        return 'zł'


def addSize(row):
    availableWeights = [i for i in range(1, 10)]
    minOptions = 2
    maxOptions = 3
    numberOfOptions = random.randint(minOptions, maxOptions)
    options = random.sample(availableWeights, numberOfOptions)
    options.sort()
    options = [str(x) for x in options]

    sizes = "^".join(options)

    return sizes


def addSizeColumn(df):
    df['size'] = df.apply(lambda row: addSize(row), axis=1)

    return df


def adjustCSVfile(filename):
    df = pd.read_csv(filename, index_col=False)

    # rename brutto price column
    df = df.rename(columns={'price': 'price_brutto_zl'})
    print(df.head())
    print(df.info())

    # get priceTag
    df['price_tag'] = df.apply(lambda row: extractPriceTag(row), axis=1)

    # remove priceTag from each column
    df['price_brutto_float'] = df['price_brutto_zl'].map(lambda x: x.rstrip('zł'))
    df['price_brutto_float'] = df['price_brutto_float'].map(lambda x: x.rstrip('zł / szt.'))
    df['price_brutto_float'] = df['price_brutto_float'].map(lambda x: x.rstrip('zł/mb'))
    df['price_brutto_float'] = df['price_brutto_float'].map(lambda x: x.rstrip('zł/'))
    df['price_brutto_float'] = df['price_brutto_float'].map(lambda x: x.rstrip('zł /'))

    df['price_brutto_float'] = df['price_brutto_float'].str.replace(' ', '').str.replace(',', '.')

    # change format: from string into float
    df['price_brutto_float'] = df['price_brutto_float'].astype(float)
    print(df.head())
    print(df.info())

    # add netto price column
    df['price_netto_float'] = df.apply(lambda row: round(row.price_brutto_float, 2), axis=1)
    print(df.head())

    # add columns with string values and priceTags
    df['price_brutto_string'] = df['price_brutto_float'].astype(str)
    df['price_brutto_string'] = df.apply(lambda row: row.price_brutto_string + ' ' + row.price_tag, axis=1)
    df['price_brutto_string'] = df['price_brutto_string'].str.replace('.', ',')

    df['price_netto_string'] = df['price_netto_float'].astype(str)
    df['price_netto_string'] = df.apply(lambda row: row.price_netto_string + ' ' + row.price_tag, axis=1)
    df['price_netto_string'] = df['price_netto_string'].str.replace('.', ',')

    df = df.drop('price_brutto_zl', axis=1)
    df = df.drop('price_tag', axis=1)
    df = df.drop('price_netto_string', axis=1)
    df = df.drop('price_brutto_string', axis=1)


    df = addSizeColumn(df)
    return df


def saveDataframe(df, filenumber):
    df.to_csv('OBI_products_UTF8' + str(filenumber) + '.csv', index=False, encoding='utf-8')
    df.to_csv('OBI_products_UTF16' + str(filenumber) + '.csv', index=False, encoding='utf-16')

    import numpy as np
    my_numpy = df.to_numpy()
    np.savetxt('OBI_products_' + str(filenumber) + '_delimiter.csv', my_numpy, fmt='%s', delimiter='|', encoding='utf-8')


if __name__ == '__main__':    
   
    getDataUsingWebScrapping()
    # df = adjustCSVfile('OBI_products_1.csv')
    # # saveDataframe(df,2)
    # with open('dataWithCategories_2.csv') as f:
    #     print(f)
    # df_cat = pd.read_csv('dataWithCategories_2.csv', index_col=False, encoding='utf-8', delimiter=", ")
    # print(df_cat)
    # df_final = pd.merge(df, df_cat, left_on='img', right_on='img', how='left')
    # df_final = df_final.drop('name_y', axis=1)
    # df_final = df_final.drop('price', axis=1)
    # df_final = df_final[df_final['ratingCount'].notna()]
    # df_final = df_final[df_final['ratingScore'].notna()]
    # df_final['idProduktu'] = range(0, len(df_final))

    # df_final['cat'] = df_final['cat'].str.replace('-', ' ')
    # df_final['subCat'] = df_final['subCat'].str.replace('-', ' ')

    # print(df.info())
    # df['name'] = df['name'].str.replace('"', ' ')

    # print(df_final)
    # saveDataframe(df_final, 4)


