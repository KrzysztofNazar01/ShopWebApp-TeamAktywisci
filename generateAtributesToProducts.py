import pandas as pd
import random


def generateAtrr(numOfProducts):
    list_of_dicts = []
    for i in range(numOfProducts):
        idProduktu = i

        # add rows with colors
        list_of_colors = ['Niebieski', 'Czerwony', 'Zielony', 'Pomarańczowy', 'Burgundowy', 'Lazurowy', 'Błękitny']
        num_of_colors = random.randint(1, 3)
        colors = random.sample(list_of_colors, num_of_colors)
        for color in colors:
            nazwa0 = "Kolor"
            typ0 = "kolor"
            pozycja0 = 0

            addRowWithValues(color, idProduktu, list_of_dicts, nazwa0, pozycja0, typ0)

        # add rows with sizes
        list_of_sizes = ['Bardzo mały', 'Mały', 'Średni', 'Duży', 'Bardzo duży']
        num_of_sizes = random.randint(1, 2)
        sizes = random.sample(list_of_sizes, num_of_sizes)
        for size in sizes:
            nazwa0 = "Wielkość"
            typ0 = "wielkość"
            pozycja0 = 0

            addRowWithValues(size, idProduktu, list_of_dicts, nazwa0, pozycja0, typ0)

    df = pd.DataFrame.from_records(list_of_dicts)

    print("Example:")
    print(df.head(5))

    df.to_csv('OBI_products_atr_v1_utf8.csv', index=False, encoding="utf-8")
    df.to_csv('OBI_products_atr_v1_utf16.csv', index=False, encoding="utf-16")


def addRowWithValues(color, idProduktu, list_of_dicts, nazwa0, pozycja0, typ0):
    NazwaTypPozycja = nazwa0 + ":" + typ0 + ":" + str(pozycja0)
    WartoscPozycja = str(color) + ":" + str(pozycja0)
    values = {'idProduktu': idProduktu,
              'NazwaTypPozycja': NazwaTypPozycja,
              'WartoscPozycja': WartoscPozycja
              }
    list_of_dicts.append(values)

if __name__ == '__main__':
    numOfProducts = 552  # do not change it
    generateAtrr(numOfProducts)
