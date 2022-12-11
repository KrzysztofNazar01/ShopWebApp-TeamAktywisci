import pandas as pd
import random


def generateAtrr(numOfProducts):
    list_of_dicts = []

    #TODO: ilosc dla danego przedmitu

    for i in range(numOfProducts):
        idProduktu = i

        # add rows with colors
        list_of_colors = ['Niebieski', 'Czerwony', 'Zielony', 'Pomarańczowy', 'Burgundowy', 'Lazurowy', 'Błękitny']
        num_of_colors = random.randint(1, 3)
        colors = random.sample(list_of_colors, num_of_colors)
        iter_color = 0
        for color in colors:
            nazwa0 = "Kolor"
            typ0 = "select"
            pozycja0 = iter_color

            NazwaTypPozycja = nazwa0 + ":" + typ0 + ":" + str(pozycja0)
            WartoscPozycja = str(color) + ":" + str(pozycja0)
            values = {'idProduktu': idProduktu,
                      'NazwaTypPozycja': NazwaTypPozycja,
                      'WartoscPozycja': WartoscPozycja,
                      'Ilosc': random.randint(1,10)
                      }
            list_of_dicts.append(values)

            iter_color += 1

        # add rows with sizes
        list_of_sizes = ['Bardzo mały', 'Mały', 'Średni', 'Duży', 'Bardzo duży']
        num_of_sizes = random.randint(1, 2)
        sizes = random.sample(list_of_sizes, num_of_sizes)
        iter_size = 0

        for size in sizes:
            nazwa0 = "Wielkość"
            typ0 = "select"
            pozycja0 = iter_size

            NazwaTypPozycja = nazwa0 + ":" + typ0 + ":" + str(pozycja0)
            WartoscPozycja = str(size) + ":" + str(pozycja0)

            values = {'idProduktu': idProduktu,
                      'NazwaTypPozycja': NazwaTypPozycja,
                      'WartoscPozycja': WartoscPozycja,
                      'Ilosc': random.randint(1,10)
                      }
            list_of_dicts.append(values)

            iter_size += 1
    df = pd.DataFrame.from_records(list_of_dicts)


    print("Example:")
    print(df.head(5))

    directory_name = 'generated_attributes/'
    version = 4
    df.to_csv(directory_name + 'OBI_products_atr_v' + str(version) + '_utf8.csv', index=False, encoding="utf-8")
    #df.to_csv(directory_name + 'OBI_products_atr_v' + str(version) + '_utf16.csv', index=False, encoding="utf-16")

    import numpy as np
    my_numpy = df.to_numpy()
    np.savetxt(directory_name + 'OBI_products_atr_v' + str(version) + '_numpy.csv', my_numpy, fmt='%s', delimiter='|')


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
