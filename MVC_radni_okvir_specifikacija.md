# MVC radni okvir specifikacija

## Uvod

Obrazac koji sadrži tri komponente:

- Model
- Pogledi
- Kontroleri

Model:

- dio odgovoran za podatkovnu logiku 
- povezivanje sa bazom podataka
- svi objekti / podaci kojima imamo pristup
- neovisan je o pogledu (drugom konceptu)
- prima podatke iz kontrolera i model ih sprema u bazu podataka
	
Pogledi:

- prihvaća podatke iz modela
- od prikaza podataka do načina na koji korisnik 
		pristupa tim podacima
	
Kontroler:

- aplikacijska logika nužna za rad aplikacije 
- povezujući link između pogleda i modela
- skuplja user input te ga prosljeduje u model
- odgovor iz modela šalje u pogled

## Ciljevi i zadaci


- postaviti radno okruženje (Apache, MySQL)
- napraviti poseban branch u Gitu
- kreirate potrebne foldere i fajlove za radni okvir
- kreirati `index.php` koji će služiti kao početna točka
- kreirati `src` folder u kojem će biti sve klase
- dodati autoloader kojeg ćemo implementirati koristeći Composer
- kreirati bazu
- dodati testove?
- definirati `.gitignore` datoteku u kojoj se navode sve datoteke i folder koji se ne smiju commitati
- kreirati `config` folder u kojem će se moći definirati aplikacijska konfiguracija
- kreirati `vendor` folder za pakete koji nije u gitu
- kreirati `var` folder za fajlove koji nece ici u git

## Struktura direktorija

```bash
App/
    src/
        Controllers/
        Models/
    views/
    config/
        database.php
    composer.json
    composer.lock
    tests/
    *var/
    *vendor/
    index.php
    .gitignore
```