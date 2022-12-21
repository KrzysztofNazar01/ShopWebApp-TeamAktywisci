import pandas as pd


def createDF(files):
    result = pd.DataFrame()
    result_atr = pd.DataFrame()
    total_id = 1

    for file, file_atr in files:
        df = pd.read_csv(file, index_col=False, encoding='utf-8', sep='|')
        df_atr = pd.read_csv(file_atr, index_col=False, encoding='utf-8', sep=';')

        for index, row in df.iterrows():
            df.at[index, 'id'] += result.shape[0]

        for index, row in df_atr.iterrows():
            df_atr.at[index, 'id'] += result.shape[0]

        frames = [result, df]
        result = pd.concat(frames)

        frames_atr = [result_atr, df_atr]
        result_atr = pd.concat(frames_atr)

    print(result.info())
    print(result)

    result.to_csv('OBI_products_v_20.csv', index=False, encoding='utf-8', sep='|')
    result_atr.to_csv('OBI_products_atr_v_20.csv', index=False, encoding='utf-8', sep=';')


def changeIdsOfProducts(df):
    id_total = 1
    for index, row in df.iterrows():
        print(row['c1'], row['c2'])


def changeIdIn9():
    # products
    df = pd.read_csv('OBI_products_v_9.csv', index_col=False, encoding='utf-8', sep='|')
    for index, row in df.iterrows():
        df.at[index,'id'] = df.at[index,'id'] - 15


    df.to_csv('OBI_products_v_9_corrected.csv', index=False, encoding='utf-8', sep='|')

    # attributes
    df_atr = pd.read_csv('OBI_products_atr_v_9.csv', index_col=False, encoding='utf-8', sep=';')
    for index, row in df_atr.iterrows():
        row['id'] = row['id'] - 16
        #print(row['id'])
    df_atr.to_csv('OBI_products_atr_v_9_corrected.csv', index=False, encoding='utf-8', sep=';')


def changeCatNamesToPolish():
    df = pd.read_csv('OBI_products_v_20.csv', index_col=False, encoding='utf-8', sep='|')
    print(df['cat'].unique())
    for index, row in df.iterrows():
        value = df.at[index, 'cat']
        if value == 'budowac':
            df.at[index, 'cat'] = 'budować'
        elif value == 'materialy budowlane':
            df.at[index, 'cat'] = 'materiały budowlane'
        elif value == 'elektronarzedzia':
            df.at[index, 'cat'] = 'elektronarzędzia'
        elif value == 'wiertarki i wkretarki':
            df.at[index, 'cat'] = 'wiertarki i wkrętarki'
        else:
            pass
    df.to_csv('OBI_products_v_20_polish_cat.csv', index=False, encoding='utf-8', sep='|')

def chnageDelimeterInURLs():
    df = pd.read_csv('OBI_products_v_20_polish_cat.csv', index_col=False, encoding='utf-8', sep='|')
    for index, row in df.iterrows():
        df.at[index, 'img'] = df.at[index, 'img'].replace(',',';')

    df.to_csv('OBI_products_v_21_polish_cat.csv', index=False, encoding='utf-8', sep='|')

if __name__ == "__main__":
    files = [
        ('OBI_products_v_7.csv', 'OBI_products_atr_v_7.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_8.csv', 'OBI_products_atr_v_8.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_9_corrected.csv', 'OBI_products_atr_v_9_corrected.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_10.csv', 'OBI_products_atr_v_10.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_11.csv', 'OBI_products_atr_v_11.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_12.csv', 'OBI_products_atr_v_12.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_13.csv', 'OBI_products_atr_v_13.csv'),  # id zaczynaja sie od 1
        ('OBI_products_v_14.csv', 'OBI_products_atr_v_14.csv'),  # id zaczynaja sie od 1
    ]

    #df = createDF(files)

    #changeCatNamesToPolish()

    chnageDelimeterInURLs()
