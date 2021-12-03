# STABS
- METHODE D'INSTALATION

composer i

npm i

npm run dev

symfony doctrine:database:create

symfony serv

- FRAMEWORK

Symfony

- BASE DE DONNEES

**DEMANDE_DEVIS** (<ins>id</ins>, nom, adresse, description, telephone, email, status, _id.1_)  
**CONTRACTUEL_HISTO** (<ins>id</ins>, nom, prenom, cv, lettre_motivation, telephone, email, appreciation, _id.1_)  
**MODIFIER STATUS** (<ins>_id_</ins>, <ins>_id.1_</ins>)  
**USER** (<ins>id</ins>, email, roles, password, is_verified)  
**OFFRE** (<ins>id</ins>, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree, contractuel_id, _id.1_)  
**IMAGE** (<ins>id</ins>, titre, chantier_id, image, _id.1_)  
**TYPE_CHANTIER** (<ins>id</ins>, type, image)  
**CHANTIER** (<ins>id</ins>, nom, description, adresse, _id.1_)  
**A COMME TYPE** (<ins>_id_</ins>, <ins>_id.1_</ins>)  
**REPONSE** (<ins>id</ins>, nom, prenom, cv, lettre_motivation, telephone, email, offre_id, _id.1_)
