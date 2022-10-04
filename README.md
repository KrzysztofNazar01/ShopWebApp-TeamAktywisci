# ShopWebApp-TeamAktywisci

## Authors
 - Hubert Nacmer
 - Łukasz Kawa
 - Szymon Brodziński
 - Krzysztof Nazar


## Goal of the project



## Description

### Collecting the data using web scrapping 
Data comes from web scrapping of the *OBI*, which is a home-improvement and construction store in Poland. Using **Silenium library**, we have collected a few urls of the shop's pages and python automaticaly gathers information from them. Before collecting the data, the program needs to gradually scroll down to the bottom of the page - this allows to load all necessary features and links. The data is saved as a list, then using Pandas library converted to a DataFrame, and finally saved as a CSV file. There are 527 products in the whole dataset. 

 
## Future improvemnets
