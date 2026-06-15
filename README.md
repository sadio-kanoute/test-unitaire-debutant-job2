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

## Captures d'écran (à ajouter)

Prends des captures d'écran de chaque commande/étape listée dans ce README puis place-les dans le dossier `images/`.

Remarque : j'ai oublié de prendre les captures d'écran pour les premières étapes du projet (installation et ajout des fichiers). Je les ajouterai plus tard une fois que tu les auras prises.

Suggestions de noms de fichiers :

- `images/step1-installation.png` — sortie de `composer install`
- `images/step2-ajout-class.png` — ajout de `src/Math.php` et `tests/MathTest.php`
- `images/step3-tests-ok.png` — sortie de `vendor/bin/phpunit` (tests réussis)

Quand tu auras pris les captures, place-les dans `images/` et dis‑moi si tu veux que j'insère les images directement dans le `README.md`.

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
