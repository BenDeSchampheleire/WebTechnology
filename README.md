# Projet Technologie Web

---
---

## 10 Mai 2022

---

### Tâches effectuées

1. Installation du logiciel *WebStorm*

Dans un premier temps, nous avons installé le logiciel *WebStorm* de JetBrains.
Ceci va nous permettre de créer et de modifier des fichiers de type `.html` et `.css` dans un environnement connu puisque nous utilisons également les logiciels *PyCharm* et *IntelliJ* de JetBrains.

2. Création d'un dépôt GitHub

Ensuite, nous avons créé un dépôt privé sur GitHub afin de faciliter la coopération en binôme.
Le dépôt sera également partagé avec les encadrants dans le but d'être transparent au fur et à mesure que le projet avance.

3. Familiarisation avec le langage HTML/CSS

N'ayant jamais travaillé dans le domaine de Technologie Web, nous ne disposons d'aucune connaissance des languages HTML et CSS.
Par conséquent, nous avons consacré une bonne partie du créneau prévu pour se familiariser avec ces languages en regardant des vidéos sur Youtube et en suivant des tutorats sur Internet.

4. Établissement d'un planning apprenant

Afin de bien structurer notre travail et de se fixer des objectifs réalistes, nous avons conçu un planning apprenant:

|        Date | Description                                                                |
|------------:|----------------------------------------------------------------------------|
| 17 Mai 2022 | Création de la page d'authentification<br/>Création de la page de contrôle |
| 24 Mai 2022 | Programmation back-end des pages HTML (à spécifier)                        |
| 31 Mai 2022 | Finalisation du projet<br/>Préparation de la démonstration                 |

### Tâches à faire

1. Partage du dépôt GitHub

Comme évoqué dans le paragraphe précédent, nous avons créé un dépôt GitHub pour améliorer la collaboration.
Il nous reste à inviter les encadrants comme collaborateurs après avoir reçu leurs pseudonymes.

2. Rencontre avec les encadrants

Afin de mieux cerner les attendus et exigences du projet, nous allons organiser une rencontre avec les encadrants dès que possible.

## 12 Mai 2022

---

### Tâches effectuées

1. Rencontre avec M. Mazo

Comme prévu, nous avons rencontré M. Mazo afin d'en savoir plus sur les attendus du projet. Nous avons découvert ensemble les principes du pattern Modèle-Vue-Contrôleur qu'il nous faudra appliquer 
afin de mettre au point un code non seulement fonctionnel mais aussi facilement compréhensible, réutilisable et affranchi du maximum de dépendances à des syntaxes propres à des technologies bien spécifiques. 

Cette architecture est facilitée par l'utilisation de frameworks tels que React et Laravel qui permettent une application naturelle de ces principes par opposition à un code purement écrit en HTML/CSS/JavaScript.

Nous avons donc dû reconsidérer le planning que nous nous étions fixé au 10 Mai: l'objectif est désormais d'apprendre rapidement à utiliser le framework PHP Laravel.

2. Installation du logiciel *PhpStorm*

Le logiciel WebStorm que nous avions initialement installé permet de faire du développement web sous HTML/CSS/JavaScript mais n'est pas compatible avec le langage PHP. 
Nous avons dû installer un autre logiciel signé JetBrains, PhpStorm, qui n'est ni plus ni moins qu'une version de WebStorm compatible avec PHP.

Il nous a fallu créer un nouveau dépôt git afin de repartir sur un projet PHP.

3. Installation de Laravel

L'installation de PhpStorm à elle seule s'est avérée loin d'être suffisante. Afin de compiler du code PHP et Laravel, nous avons dû installer dans un premier temps XAMPP (une solution Apache permettant d'interpréter
du code PHP), puis le logiciel Composer (un logiciel de gestion de dépendances PHP permettant l'installation de librairies) et enfin Laravel via la commande *composer global require laravel/installer*. 
Le lancement d'un serveur web local se fait par la commande *php artisan serve*. 

4. Début du Workshop 1 proposé par M. Mazo

M. Mazo nous a fourni les slides de cours et les sujets des Workshops qu'il propose dans le cadre du cours de développement web dans la filière SNS. Nous avons commencé le tout premier Workshop. 

5. Planning revisité

Les difficultés que nous avons rencontrées lors de l'installation de Laravel et le temps nécessaire à l'apprentissage de sa syntaxe nous amènent à définir le planning suivant:

|        Date | Description                                                                                                  |
|------------:|--------------------------------------------------------------------------------------------------------------|
| 24 Mai 2022 | Apprentissage de Laravel via la réalisation des Workshops<br/> Création d'une page d'authentification        |
| 31 Mai 2022 | Intégration éventuelle d'une base de données<br/> Finalisation du projet<br/>Préparation de la démonstration |

### Tâches à faire

1. Apprentissage de Laravel

La réalisation des Workshops devrait nous permettre de maîtriser sa syntaxe et d'appliquer le pattern Modèle-Vue-Contrôleur.

2. Création d'une page d'authentification

On commence par se fixer un objectif modeste avant de se lancer dans des développements trop ambitieux.

## 19 Mai 2022

---

### Tâches effectuées

1. Workshop 1

Après avoir commencé le premier Workshop, il nous a fallu beaucoup de temps avant de tout comprendre et d'arriver à la fin.
La compréhension de l'énoncé ainsi que les recherches de solutions demandent un effort non négligeable. En particulier, il 
nous a fallu comprendre l'organisation des fichiers en Modèle-Vue-Contrôleur, et différentes syntaxes telles que celle des 
templates Blade (notamment conditions @if @endif) ou encore des raccourcis d'écriture PHP (comme `{{$var}}` qui correspond à `<?php echo e($var); ?>`).
Nous sommes arrivés à la fin du premier Workshop, mais nous n'étions pas à même d'effectuer certaines activités.

2. Planning revisité

Nous avons dû constater encore que notre planning n'a pas été atteint à cause de nombreuses difficultés que nous avons croisées.
Il semble que les Workshops demandent bien plus de temps que nous l'avions prévu. Voilà pourquoi nous avons revisité le planning
de la manière suivante:

|        Date | Description                                                       |
|------------:|-------------------------------------------------------------------|
| 24 Mai 2022 | Terminer le deuxième Workshop                                     |
| 31 Mai 2022 | Terminer les Workshops 3 et 4<br/>Préparation de la démonstration |

### Tâches à faire

1. Finir le premier Workshop

L'objectif est de finir les activités qui n'ont pas encore été réalisées afin de conclure ce premier Workshop.

2. Entamer le deuxième Workshop

Afin de pouvoir suivre le planning, nous devrons entamer le deuxième Workshop.

## 23 Mai 2022

---

### Tâches effectuées

1. Achèvement du premier Workshop

Nous avons réussi à finir toutes les activités du premier Workshop et ainsi à conclure celui-ci.

2. Début du Workshop 2

Après avoir terminé le premier Workshop, nous nous sommes lancés dans le deuxième Workshop.
Nous avons installé MySQL en suivant les étapes du l'outil d'installation MySQL Installer pour Windows.
Tout se passe comme prévu jusqu'à la ligne `php artisan db:seed` qui révèle deux erreurs dans le code
de l'énoncé du Workshop, sûrement due aux différences entre versions Laravel, que nous ne parvenons pas 
à corriger pour le moment.

Dans la classe ProductsTableSeeder, la fonction factory appelée depuis le fichier ProductFactory 
n'est pas reconnue. Dans le fichier ProductFactory, la ligne `factory -> define(...)` renvoie l'erreur:
`Method 'define' not found in Illuminate\Database\Eloquent\Factories\Factory`.

### Tâches à faire

1. Corriger les erreurs et avancer dans le Workshop 2

La suite du Workshop dépend de la génération des lignes de la BDD via la commande `php artisan db:seed`
donc il est nécessaire de débloquer le problème afin de pouvoir avancer.


## 25 Mai 2022

---

### Tâches effectuées

1. Rencontre avec M. Mazo 

Sur demande de notre part, nous avons rencontré M. Mazo ce mercredi 25 mai afin de discuter avec lui des 
difficultés que nous avions rencontrées d'abord au cours du premier workshop (lors de l'installation fastidieuse
des technologies dont nous avions besoin et lors de la découverte du pattern Modèle-Vue-Contrôleur et des 
syntaxes propres à php, Laravel et aux templates blade) mais surtout au cours de la réalisation du second workshop
pour lequel le code de l'énoncé ne fonctionnait plus sous Laravel 8.

Conscient des difficultés inhérentes aux changements de version des langages et frameworks, M. Mazo nous a donné 
la possibilité de nous focaliser sur la réalisation des workshops plutôt que de coder un site web plus complexe, 
et d'en présenter les différences de syntaxe ou de logique avec le même code écrit sous Laravel 7.

Les workshops 3 et 4 ne devraient pas autant souffrir du passage à Laravel 8 que le workshop 2.

2. Déblocage workshop 2

L'utilisation conjointe de StackOverflow (https://stackoverflow.com/questions/63824410/unable-to-use-laravel-factory-in-tinker)
et des notes officielles de mise à jour Laravel de la version 7 à la version 8
(https://laravel.com/docs/8.x/releases) nous a enfin permis de trouver une syntaxe fonctionnelle sous Laravel 8. 

Il s'avère que les model factories Eloquent ont été complètement repensées pour être écrites sous forme de classes et non plus 
sous forme de fonctions. Ainsi, la syntaxe:

    $factory->define(Product::class, function (Faker $faker) {
        return [
            'name' => $faker->company,
            'price' => $faker->numberBetween($min = 200, $max = 9000),
        ];  
    });

est à remplacer par:

    class ProductFactory extends Factory
    {
        use HasFactory;

        public function definition()
        {
            return [
                'name' => $this->faker->company(),
                'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            ]
        }
    }

Et l'appel:

    factory(Product::class,8)->create();

Est à remplacer par:

    ProductFactory::new()->count(8)->create();


3. Réalisation workshops 3 et 4

Comme annoncé par M. Mazo, les workshops 3 et 4 n'ont pas subi de refonte sous Laravel 8 et nous avons pu les finaliser très rapidement.


### Tâches à faire

1. Bien comprendre comment ces workshops tirent profit du pattern MVC

Le workshop 3 en particulier demande de comprendre les différences entre deux approches proposées.

2. Proposer une version "corrigée" des énoncés des workshops pour Laravel 8

Notre travail permettra ainsi aux prochains élèves qui réaliseront ces workshops de profiter d'un code directement fonctionnel 
ou du moins de gagner du temps si une nouvelle mise à jour de Laravel devait conduire à de nouveaux changements syntaxiques.
