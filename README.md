Uruchomienie pliku docker compose:

'docker compose -f <file_name> up'


Jeśli aplikacja działa bardzo wolno, polecam zamienić volumes w Prestashop i Mysql na:

Mysql:
- prestashop_prestashop_db/_data:/var/www/html

Prestashop:
- prestashop_prestashop_app/_data:/var/www/html

Spowoduje to, że nasze pliki nie będą przetrzymywane lokalnie w folderze prestashop_prestashop_<>
(volume mounted), tylko zbindowane w \\wsl$\docker-desktop-data\data\docker\volumes