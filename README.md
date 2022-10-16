# ShopWebApp-TeamAktywisci

## Authors
 - Hubert Nacmer
 - Łukasz Kawa
 - Szymon Brodziński
 - Krzysztof Nazar


## Goal of the project
🇵🇱


🇬🇧



## Description
🇵🇱


🇬🇧


### Collecting the data using web scrapping 
🇵🇱


🇬🇧
Data comes from web scrapping of the *OBI*, which is a home-improvement and construction store in Poland. Using **Silenium library**, we have collected a few urls of the shop's pages and python automaticaly gathers information from them. Before collecting the data, the program needs to gradually scroll down to the bottom of the page - this allows to load all necessary features and links. The data is saved as a list, then using Pandas library converted to a DataFrame, and finally saved as a CSV file. There are 527 products in the whole dataset. 


### Avaliable functionalities
🇵🇱
 1. *Każdy zespół zakłada repozytorium kodu na GitHub (tylko kodu źródłowego, bez cache, uploadów, itd. – dopuszczalne jest umieszczenie zdjęć zarejestrowanych produktów)
 2. *Utworzenie sklepu w oparciu o technologię Prestashop/Shopware/Shopify,
 3. *Dostosowanie wyglądu i informacji w sklepie do oferowanego asortymentu (m.in. usunięcie domyślnych wartości zdefiniowanych przez kreator),
 4. *Cały interfejs (frontend) dla klienta ma być w języku polskim (wraz z komunikatami itp.),
 5. *Przygotowanie skryptu to scrapowania wybranego sklepu internetowego -> osadzenie efektów scrapowania w folderze w repozytorium (zachować kodowanie UTF-8),
 6. Utworzenie skryptu inicjującego stan produktów w sklepie na podstawie utworzonego efektu scrapowania (struktura produktów – kategorie, podkategorie, produkty – nazwa, opis, zdjęcie, atrybuty),
 7. *Wszystkie produkty (nazwy, opisy, atrybuty, zdjęcia) powinny odzwierciedlać realne dane w sklepie bazowym – tytuły i opisy powinny mieć polskie znaki, a ceny przy produktach odpowiadać cenom i podatkom wskazanym w sklepie bazowym,
 8. *Sklep ma udostępniać co najmniej 500 produktów/usług (chyba że sklep bazowy nie posiada takiej ilości),
 9. *Sklep musi umożliwić przeprowadzenie procesu zakupowego dla nowego użytkownika wraz z założeniem przez niego konta,
 10. Należy dodać co najmniej jeden działający baner w tematyce sklepu,
 11. *Należy dodać co najmniej dwa warianty produktowe (dot. wybranych produktów; np. obuwie w rozmiarze 40, 41; bluzka w rozmiarze S, M, L; kurs e-learningowy o długości 1h, 2h, 4h);
 12. Należy dodać również dwie promocje cenowe na wybrane produkty (tzn. stara cena X zł -> promocja 10% -> nowa cena Y zł); 13. Należy zdefiniować dwóch przewoźników (metody dostarczania zamówień w sklepach, których tematyka wymaga dostarczania produktów do klienta) -> uzależnić cenę usługi od wartości koszyka. 14. *Dostosować metody płatności do polskich realiów,
 15. Sklep powinien mieć włączony cache podczas prezentacji;
 16. *Sklep powinien wysyłać e-maile na adres wskazany przez użytkownika,
 17. Podłączyć Google Analytics do sklepu (nowa witryna do monitorowania -> numer UAXYZAA -> w panelu sterowania sklepu),
 18. *Należy wygenerować (samopodpisany) certyfikat SSL, który będzie stosowany przez utworzony sklep (dodanie https i wymuszenie używania go).
 19. Wykonać eksport ustawień sklepu i zapisać jego rezultat w repozytorium Git projektu, aby możliwe było przywrócenie ustawień sklepu w przypadku awarii.
 20. *Utworzyć skrypt do testowania sklepu (w technologii Sellenium https:// www.selenium.dev/documentation/en/), który przeprowadzi proces testowania procesu zakupowego:
  - Doda do koszyka 10 produktów (w różnych ilościach) z dwóch różnych kategorii,
  - Usunie z koszyka 1 produkt, 2 Biznes elektroniczny 2022/2023 – założenia projektowe Dr inż. Andrzej Sobecki 
  - Przejdzie przez proces rejestracji nowego konta, 
  - Wybierze płatność przy odbiorze,
  - Wybierze jednego z dwóch przewoźników, 
  - Zatwierdzi zamówienie, 
  - Sprawdzi status zamówienia.
 21. * Oferowana w sklepie funkcjonalność działa prawidłowo - bez błędów (białe strony, 500, 404, 403 -> php / JS / img)
 
 * - założenia wymagane do spełnienia, aby uzyskać zaliczenie projektu na ocenę 3,0
 
 🇬🇧
 
 
 
## Future improvemnets
🇵🇱


🇬🇧


