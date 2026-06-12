# Test Unitaire Débutant — PHPUnit

Projet simple montrant l'installation et l'utilisation de PHPUnit.

## Contenu

- `src/Math.php` : classe `Math` avec `addition()`.
- `tests/MathTest.php` : test PHPUnit pour `addition()`.
- `phpunit.xml` : configuration PHPUnit.
- `images/` : captures d'écran (placeholders pour l'instant).

## Commandes utilisées

Installer les dépendances :

```bash
composer install
```

Lancer les tests :

```bash
vendor/bin/phpunit
```

## Étapes réalisées

1. Initialisation du projet et `composer.json`.
2. Installation de PHPUnit (dev).
3. Ajout de `src/Math.php` et `tests/MathTest.php`.
4. Exécution des tests : OK.

## Captures d'écran

Les captures d'écran doivent être placées dans le dossier `images/` et insérées comme ceci :

![Étape 1 - Installation](images/step1.png)

![Étape 2 - Ajout de la classe Math](images/step2.png)

![Étape 3 - Exécution des tests](images/step3.png)

> Remplacez les fichiers `images/step*.png` par vos captures réelles.

## Tests d'erreur (à faire)

1. Modifier temporairement `src/Math.php` pour introduire une erreur et exécuter `vendor/bin/phpunit` (vérifier l'échec).
2. Corriger le code, réexécuter les tests et committer les deux états (échec puis correction).

## Commits recommandés

- "Initialisation du projet PHPUnit"
- "Ajout de la classe Math"
- "Ajout des tests unitaires"
- "Ajout README et placeholders d'images"
- "Test échoué: bug volontaire"
- "Correction: fix addition()"

## Partage

Poussez sur GitHub et partagez le lien avec votre formateur.

---

Si tu veux, je peux générer des captures d'écran placeholder ou simuler l'échec/correction maintenant.
