from properties import *
from selenium import webdriver
from selenium.webdriver.common.by import By
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.service import Service as ChromeService
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import string


def random_char(char_num):
    return ''.join(random.choice(string.ascii_letters) for _ in range(char_num))


def scrollWholePageDown(driver):
    finalHeight = driver.execute_script("return document.body.scrollHeight")
    singleScroll = 400
    currentScroll = 500
    #while currentScroll < finalHeight:
    driver.execute_script("window.scrollTo(0, " + str(currentScroll) + ")")
    currentScroll += singleScroll
    time.sleep(1)  # wait for the images to load --> links will be ready (SRCs of the images)


# Add random item into cart
def getRandomItem(driver):
    categoryURL = getRandomCategoryURL()
    num_of_pages = int(getNumberOfPages(driver, categoryURL))

    while True:
        page = random.randint(1, num_of_pages)
        categoryURL_temp = categoryURL + '?page=' + str(page)
        itemURL = getRandomItemURL(driver, categoryURL_temp)
        driver.get(itemURL)
        if isItemAvailable(driver):
            break
        else:
            driver.execute_script("window.history.go(-1)")

    scrollWholePageDown(driver)
    setRandomQuantity(driver)
    addItemToCart(driver)


def getNumberOfPages(driver, URL):
    driver.get(URL)
    ul = driver.find_elements(By.CLASS_NAME, 'page-list')[0]
    li = ul.find_elements(By.TAG_NAME, 'li')
    a = li[-2].find_element(By.TAG_NAME, 'a')
    return a.text


def getRandomItemURL(driver, URL):
    driver.get(URL)
    products = driver.find_elements(By.CLASS_NAME, 'product')
    product = random.choice(products)
    product_URL = product.find_element(By.TAG_NAME, 'a').get_attribute("href")
    return product_URL


def isItemAvailable(driver):
    div = driver.find_elements(By.CLASS_NAME, 'product-quantities')
    if len(div) != 0:
        return True
    else:
        return False


def setRandomQuantity(driver):
    quantity = driver.find_element(By.ID, "quantity_wanted")
    div = driver.find_element(By.CLASS_NAME, 'product-quantities')
    span = div.find_element(By.TAG_NAME, 'span')
    max_quantity = int(span.get_attribute('data-stock'))
    random_quantity = 1
    if max_quantity > 1:
        random_quantity = random.randint(1, max_quantity)
    driver.execute_script(f"arguments[0].value='{random_quantity}';", quantity)
    return


def addItemToCart(driver):
    driver.find_element(By.CLASS_NAME, 'add-to-cart').click()
    scrollWholePageDown(driver)
    return


def removeRandomItemFromCart(driver):
    driver.get(getCartURL())
    items = driver.find_elements(By.CLASS_NAME, 'cart-item')
    time.sleep(1)
    item = random.choice(items)
    a = item.find_element(By.CLASS_NAME, 'remove-from-cart')
    a.click()
    return


def buyCartItems(driver):
    driver.get(getZamowienieURL())
    scrollWholePageDown(driver)
    fillZamowienieForm(driver)


def fillZamowienieForm(driver):
    scrollWholePageDown(driver)

    # GENDER INPUT
    driver.find_element(By.ID, 'field-id_gender-1').click()

    # NAME INPUT
    driver.find_element(By.ID, 'field-firstname').send_keys('Jan')

    # SURNAME INPUT
    driver.find_element(By.ID, 'field-lastname').send_keys('Kowalski')

    # EMAIL INPUT
    driver.find_element(By.ID, 'field-email').send_keys(random_char(7) + '@wp.pl')

    # PASSWORD
    driver.find_element(By.ID, 'field-password').send_keys(random_char(10))

    # DATE
    driver.find_element(By.ID, 'field-birthday').send_keys('2000-02-02')

    # RULES ACCEPTATION
    driver.find_element(By.NAME, 'psgdpr').click()
    driver.find_element(By.NAME, 'customer_privacy').click()

    # BUTTON
    driver.find_element(By.NAME, 'continue').click()
    scrollWholePageDown(driver)

    # ADDRESS
    driver.find_element(By.ID, 'field-address1').send_keys("Jana Kowalskiego 3a/2")
    driver.find_element(By.ID, 'field-postcode').send_keys("80-800")
    driver.find_element(By.ID, 'field-city').send_keys("Gdańsk")

    # BUTTON
    driver.find_element(By.NAME, 'confirm-addresses').click()
    scrollWholePageDown(driver)

    # DELIVERY OPTION
    radio_btn = driver.find_element(By.ID, 'delivery_option_1')
    driver.execute_script("arguments[0].checked = true;", radio_btn)

    # BUTTON
    driver.find_element(By.NAME, 'confirmDeliveryOption').click()

    # PAYMENT OPTION
    driver.find_element(By.ID, 'payment-option-1').click()

    # RULES ACCEPTATION
    driver.find_element(By.ID, 'conditions_to_approve[terms-and-conditions]').click()

    # FINISH BUTTON
    div = driver.find_element(By.ID, 'payment-confirmation')
    div.find_element(By.TAG_NAME, 'button').click()

    logo = driver.find_element(By.ID, '_desktop_logo')
    logo.find_element(By.TAG_NAME, 'a').click()
    return


def getDeliveryStatus(driver):
    driver.get(getHistoryURL())
    scrollWholePageDown(driver)
    tbody = driver.find_element(By.TAG_NAME, 'tbody')
    span = tbody.find_element(By.TAG_NAME, 'span')
    return span.text


def wholeProjectProcess(driver):
    for _ in range(10):
        getRandomItem(driver)
    removeRandomItemFromCart(driver)
    buyCartItems(driver)
    print(getDeliveryStatus(driver))
    time.sleep(50)

service = ChromeService(executable_path=ChromeDriverManager().install())
driver = webdriver.Chrome(service = service)

wholeProjectProcess(driver)

driver.quit()
