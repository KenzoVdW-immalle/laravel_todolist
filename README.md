# todolist applicatie

### instructies installatie

1. clone deze repository en run 'composer' install in de terminal
2. maak de sql gebruiker en en de schema aan door deze query uit te voeren:

CREATE USER 'laraveluser'@'localhost' IDENTIFIED BY 'laravel';
CREATE DATABASE laravelschema;
GRANT ALL ON larablog.* TO 'laraveluser'@'localhost';
FLUSH PRIVILEGES

3. Verander de naam van de .env.example naar .env en vul de authenticatiegegevens in
4. voer het commando 'php artisan key:generate' uit om een nieuwe key te genereren in de .env file
5. voer het commando 'php migrate:refresh --seed' uit om de schema's te creëren
6. voer het commando 'php artisan serve' uit en ga naar http://localhost:8000 om mijn taak te bekijken

> Voor dit project heb ik een todolijst gemaakt. De bedoeling is dat je al je taken kan bekijken en bijvoorbeeld kan zien wanneer je taak af moet zijn etc. Verder kan je ook taken toevoegen en taken verwijderen.

Om alle taken te bekijken: http://localhost:8000/todolist
Om de eerste taak te bekijken: http://localhost:8000/todolist/1
Om een taak toe te voegen: http://localhost:8000/taaktoevoegen

Nog te doen:
- Ervoor zorgen dat taaktoevoegen ervoor zorgt dat de gegevens doorgestuurd worden naar de database
- Een 'taakverwijderen' pagina maken
- Opmaak verzorgen
