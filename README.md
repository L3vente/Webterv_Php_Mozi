# Webterv_Php_Mozi

Ez a projekt 2022-ben készült csoporttársammal a Webtervetés gyakorlat projektmunkájára, a cél egy mozi weboldal készítése volt HTML/CSS-be, majd PHP-ban "felokosítása". 

## Funkciók

A projekt PHP-ban a következő funkciók valósultak meg:

- **Regisztráció**: Működő regisztráció, a helyes regisztráció hatására az új felhasználó adatai eltárolódnak.
- **Űrlapellenőrzés**: Minden kötelezően kitöltendő űrlapmező kitöltése szerveroldalon is ellenőrizve van.
- **Felhasználónév és e-mail cím ellenőrzés**: Ha foglalt a felhasználónév (vagy e-mail cím), akkor nem regisztrálja be az új felhasználót.
- **Jelszó megerősítés**: A jelszót két alkalommal kell beírni, ezek azonossága vizsgálva van.
- **Hibajelzések**: Ha valamelyik mezőt rosszul (vagy nem) tölti ki a felhasználó, akkor a weboldal figyelmezteti, pontos hibajelzéssel, az összes hibát jelezve.
- **Biztonságos jelszó tárolás**: A felhasználók jelszavai biztonságosan vannak tárolva (nem plain text).
- **Bejelentkezés**: Van lehetőség az oldalra való bejelentkezésre.
- **Hibaüzenetek bejelentkezéskor**: Ha bejelentkezéskor rossz adatokat adunk meg, akkor megfelelő hibaüzenetet kapunk.
- **Oldalak hozzáférése**: A bejelentkezett felhasználó olyan (értelmes) oldal(ak)a is elér, amely(ek)et a nem bejelentkezett felhasználó nem.
- **Kijelentkezés**: Működő kijelentkezés.
- **Adatmódosítás**: A felhasználónak van lehetősége néhány adatának módosítására (pl. jelszó, születési dátum, bemutatkozás stb.).
- **Profilkép feltöltése**: A felhasználó tud profilképet feltölteni magának, ezt le is tudja cserélni, illetve az oldalon meg is jelenik.
- **Fiók törlés**: A felhasználó tudja törölni a felhasználói fiókját, ilyenkor az összes adata törlődik.
- **Jogosultsági szintek**: Meg vannak valósítva különböző jogosultsági szintek. Az egyes jogosultsági szinttel rendelkező felhasználók több funkciót elérnek.
![Cinema_website][./images/website.png]
