<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Image;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Mise en page & impression',
                'author' => 'Yves Perrousseaux',
                'isbn' => '978-2911220012',
                'excerpt' => 'Premier en son genre pour son adaptation à la PAO ? cet ouvrage s’adresse aux personnes qui réalisent des mises en page, sur Macintosh ou sur PC, dans un contexte professionnel ou non : secrétariats, entreprises, collectivités, associations, jeunes " qui se lancent dans le métier ", étudiants, particuliers, etc. Il est le complément du Manuel de typographie française élémentaire qui, lui, traite des règles les plus usuelles de la composition typographique et sur lesquelles chacun bute quotidiennement.Bien des personnes sont parfaitement capables de réaliser de bonnes mises en page, encore faut-il qu’elles puissent acquérir un minimum de connaissances en ce domaine. Cet ouvrage n’a d’autre objectif que de sensibiliser le lecteur concerné aux principes que régissent les connaissances qu’il lui faut posséder et nécessaires à la réalisation de petits journaux, brochures, plaquettes, dépliants, posters, livres, etc., principes qu’il développera en fonction de sa propre sensibilité s’il en a la prédisposition technico-artistique. ',
                'bac' => '1',
                'category' => '',
                'price' => 29,
                'price_amazon' => 30.11,
            ],
            [
                'title' => 'Lexique des règles typographique',
                'author' => 'Imprimerie Nationale',
                'isbn' => '978-2743304829',
                'excerpt' => 'Où mettre les capitales dans un nom d’organisme ? Les sigles ont-ils besoin de points ? Madame, mademoiselle, monsieur : quand peut-on les abréger ? Chiffres arabes, chiffres romains, nombres en toutes lettres : dans quel contexte ? Quelle est la différence entre deuxième et second ? A quoi servent les petites capitales ? Comment présenter une bibliographie ? Vous qui devez rédiger ou corriger, saisir ou "préparer" un texte, vous vous posez souvent ces questions... et bien d’autres aussi délicates. Grâce à une formule d’utilisation simple, par entrées alphabétiques avec un index à plusieurs niveaux, ce lexique vous aidera à y répondre.',
                'bac' => '1',
                'category' => '',
                'price' => 15.20,
                'price_amazon' => 16,
            ],
            [
                'title' => 'Culture graphique&nbsp;: perspective',
                'author' => 'Stephane Darricau',
                'isbn' => '978-2350173177',
                'excerpt' => 'Cet ouvrage réalise le pari ambitieux de livrer l’essentiel de la culture graphique occidentale sur plus de cinq siècles. De la découverte du procédé d impression par Gutenberg au XVe siècle jusqu aux travaux réalisés en PAO par les plus grands créateurs contemporains, de l’art de l’estampe à l’évolution de la presse, des affiches de Toulouse-Lautrec à celles des psychédéliques : l’auteur dresse un panorama, qui ne se prétend pas exhaustif mais qui est infiniment représentatif, de l’histoire de l’imprimé et du design graphique. Traité avec pédagogie et clarté, le sujet se décline chronologiquement, mais aussi en suivant des thématiques. Plus de 250 reproductions des uvres majeures de la discipline accompagnent le lecteur dans sa découverte de l’univers foisonnant du graphisme. l’ensemble est complété par des ressources pratiques (glossaire illustré, bibliographie commentée, carte des lieux majeurs).',
                'bac' => '1',
                'category' => '',
                'price' => 38,
                'price_amazon' => 0,
            ],
            [
                'title' => 'Choix typographiques',
                'author' => 'Xavier Spirlet',
                'isbn' => '978-2960234510',
                'excerpt' => 'Une série de fiches pratiques à imprimer et découper. Vous pouvez les conserver reliées, sous forme d’un « nuancier de polices » ou bien les afficher partout pour apprendre à reconnaître les polices du premier coup d’œil. Cette seconde approche est bien entendu recommandée pour tous les étudiants qui doivent acquérir cette compétence de reconnaissance dans le cadre de leurs cours. Attention, nous vous recommandons fortement d’imprimer ce PDF sur une imprimante de haute qualité, de préférence laser et PostScript™. En effet, les imprimantes non-PostScript™ ont tendance à déformer les caractères et les imprimantes à jet d’encre ont tendance à faire empâter les tracés à cause de la pénétration de l’encre dans le papier.',
                'bac' => '1',
                'category' => '',
                'price' => 34,
                'price_amazon' => 0,
            ],
            [
                'title' => 'Communication et imgaes',
                'author' => 'Xavier Spirlet',
                'isbn' => '978-2960234503',
                'excerpt' => 'La communication est un sujet très vaste et qui recouvre bien des champs scientifiques et sémantiques. Destiné à ceux qui exerceront, de près ou de loin, un métier lié à la communication visuelle, cet ouvrage leur apportera des références claires et concises sur ce domaine, ainsi que des outils qui leur permettront d’améliorer leur pratique. Au travers de sept chapitres, il aborde les fondements physiques et physiologiques de la vision, les théories de l’information et de la communication, la communication de masse et le marketing, l’histoire de l’art, la sémiologie et bien d’autres domaines scientifiques dans le but de donner un cadre théorique à l’étude de cet objet multiforme : l’image.',
                'bac' => '1',
                'category' => '',
                'price' => 29,
                'price_amazon' => 0,
            ],
            [
                'title' => 'Ergonomie web',
                'author' => 'Amélie Boucher',
                'isbn' => '978-2212132151',
                'excerpt' => 'Quelles règles pour séduire et fidéliser votre internaute ? Tout site Internet doit réussir le pari difficile de satisfaire ses visiteurs. Mais comment connaître ces derniers ? Comment se mettre à leur place ? Comment concevoir un site si agréable et efficace qu’il donne envie d’y rester et d’y revenir ? Grâce aux conseils pratiques et méthodologiques de cette nouvelle édition, dont l’intégralité des exemples a été renouvelée pour tenir compte de l’évolution du Web, comprenez et appliquez l’ergonomie web sur le terrain !',
                'bac' => '1',
                'category' => '',
                'price' => 32.80,
                'price_amazon' => 34.4,
            ],
            [
                'title' => 'HTML 5 référence',
                'author' => 'Rodolphe Rimelé',
                'isbn' => '978-2212143652',
                'excerpt' => 'HTML 5 intègre dans sa conception l’architecture à trois piliers qu’est HTML pour la structure, CSS 3 pour l’apparence et JavaScript pour l’interactivité, avec de nombreuses nouvelles API pour concevoir des applications web. L’intégrateur ou le développeur web pourra ainsi découvrir et exploiter les standards du Web, pour proposer au sein de sites performants et accessibles des contenus multimédias (animations, audio et vidéo), mais également interactifs (nouveaux formulaires, glisser-déposer, etc.). Ce livre fait la lumière sur les spécifications ardues d’HTML 5, dont il explore l’ensemble des nouveautés et des balises, y compris celles ayant existé et évolué depuis les précédentes versions. Après avoir rappelé l’histoire mouvementée de sa conception au W3C et au WhatWG, l’auteur explique au fil des chapitres comment concevoir des sites et applications web performants et accessibles, en y incorporant des éléments médias (audio, vidéo), en créant des zones de dessin interactives et des animations avec Canvas et en exploitant les microformats pour un balisage sémantique qui améliorera l’échange de données et le référencement. Il détaille pas à pas les interfaces de programmation pour la gestion des fichiers (File API), la géolocalisation, la prise en charge du glisser-déposer (Drag & Drop), et explique comment stocker des données locales dans le navigateur (Web Storage), communiquer en temps réel ou procéder à des échanges interdocuments (Web Sockets, Server-Sent Events et Web Messaging). Il aborde enfin les techniques permettant d’exécuter du JavaScript en multithread (Web Workers) et la réalisation d’applications hors ligne, les bases de données côté navigateur (Indexed Database et Web SQL Database), ainsi que la manipulation avancée de l’historique (HistoryAPI). Très illustrée, riche en conseils et bonnes pratiques, la troisième édition de cet ouvrage intègre toutes les dernières évolutions d’HTML 5 - depuis que sa première version a vu le jour - et les nouveautés concrètement implémentées par les navigateurs web. L’approche pragmatique permet de l’utiliser comme référence pour élaborer et modifier des pages web, mais aussi comme guide pour concevoir une application web.',
                'bac' => '1',
                'category' => '',
                'price' => 37.10,
                'price_amazon' => 39,
            ],
            [
                'title' => 'CSS Pocket Reference',
                'author' => 'Eric A. Meyer',
                'isbn' => '978-1492033394',
                'excerpt' => 'When you’re working with CSS and need an answer now, this concise yet comprehensive quick reference provides the essential information you need. Revised and updated for CSS3, this fifth edition is ideal for intermediate to advanced web designers and developers. You’ll find a short introduction to the key concepts of CSS and alphabetical summaries of CSS selectors and properties. You’ll also discover information on new properties, including grid, flexbox, clipping, masking, and compositing.',
                'bac' => '1',
                'category' => '',
                'price' => 14.60,
                'price_amazon' => 13.7,
            ],
            [
                'title' => 'HTML 5 Pocket Reference',
                'author' => 'Jennifer Niederst Robbins',
                'isbn' => '978-1449363352',
                'excerpt' => 'Need help finding the right HTML5 element or attribute for your web page or application? HTML5 Pocket Reference is the classic reference that web designers and developers have been keeping close at hand for more than thirteen years.This fifth edition has been updated to reflect the current state of HTML5, including the HTML5 Candidate Recommendation, the emerging HTML5.1 Working Draft, and the living WHATWG standard. Features include: An alphabetical listing of every element and attribute in HTML5, HTML5.1, and the WHATWG living standard, Descriptions, markup examples, content categories, content models, and start- and end-tag requirements for every element, At-a-glance notes indicating the differences between the HTML5 specifications and HTML 4.01, Useful charts of special characters, An overview of HTML5 APIs. If you’re an experienced web designer or developer who needs a quick resource for working with established web standards, this handy book is indispensable.',
                'bac' => '1',
                'category' => '',
                'price' => 17,
                'price_amazon' => 12,
            ],
            [
                'title' => 'CSS 3 Flexbox',
                'author' => 'Raphaël Goetter',
                'isbn' => '978-2212143638',
                'excerpt' => 'Un ouvrage de référence pour les webdesigners et intégrateurs. "Flexible Box Layout Module", mieux connue sous le nom de "Flexbox", est une spécification CSS 3 du W3C qui définit un nouveau modèle de boîte et de positionnement jusqu’alors inédit. Il intègre une gestion naturelle de la fluidité des éléments et du Responsive, et rend caduc l’usage de grilles d’affichage complexes, voire de frameworks - véritables usines à gaz où l’on n’exploite qu’à peine 10 % de l’outil. Oubliez donc tout ce que vous aviez appris sur CSS et, comme moi, tombez amoureux de Flexbox ! Outre la simplification des schémas de positionnement, Flexbox apporte des solutions parfaites à une problématique bien ancrée dans notre époque : le Responsive Webdesign. Le design d’éléments flexibles, la réorganisation des blocs ainsi que la faculté à basculer très aisément d’un mode d’affichage horizontal vers un mode vertical en font un allié formidable dans nos projets d’adaptation aux tablettes et smartphones. Une spécification CSS 3 novatrice. Flexbox a été pensé et optimisé pour faire table rase de toutes les techniques bancales historiques de positionnement et des contournements de propriétés qui pullulent dans nos projets web. Les "anciennes" méthodes encore (mal) utilisées de nos jours pour aligner ou placer des éléments ne sont souvent rien d’autre que du bricolage empirique : "tiens, à quoi peut bien servir ce position : relative ?", "pas grave, je mets une classe .clearfix partout !", "oh ! mais pourquoi ça ne veut pas rentrer ?", etc. Flexbox est conçu pour mettre de l’ordre dans tout ce maelström de bidouilles et revenir enfin aux bases d’un positionnement propre et adapté aux besoins actuels. Cet ouvrage vous permettra de découvrir et de tirer parti de toutes les nouveautés apportées par cette spécification CSS 3, notamment à travers six travaux pratiques...',
                'bac' => '2',
                'category' => 'web-multimédia',
                'price' => 19,
                'price_amazon' => 19.39,
            ],
            [
                'title' => 'CSS 3 Grid Layout',
                'author' => 'Raphaël Goetter',
                'isbn' => '978-2212676839',
                'excerpt' => 'Un ouvrage de référence pour les wehdesigners et intégrateurs. Complémentaire de Flexbox, le module de positionnement Grid Layout est une spécification du W3C à l’état de Candidate Recommandation dont les premiers jets datent de 2004. Désormais exploitable en production sur l’ensemble des navigateurs, le concept général de Grid Layout (ou "positionnement en grille") est de structurer l’espace en zones majeures, au sein d’une page web ou d’une application. Une grille virtuelle, indépendante des éléments HTML qui peuvent s’y placer, présente l’avantage flagrant d’être très souple lorsqu’on souhaite la modifier en fonction du contexte. Parfaitement adapté au responsive wehdesign, Grid Layout permet à votre page de s’adapter immédiatement aux différentes tailles d’écran. Associé aux CSS 3 Media Queries, le modèle de positionnement en grille donne toute sa puissance, plus particulièrement si vous avez opté pour une trame sous forme de variante "template". Seul le patron de départ nécessite d’être modifié : inutile d’intervenir sur la structure HTML, ni même sur le positionnement de chaque élément de page. Agrémenté de nombreuses illustrations en couleurs et d’exercices pratiques, cet ouvrage vous accompagne de façon progressive dans la découverte des concepts et propriétés associés à ce nouveau module et vous permet d’élaborer efficacement l’architecture de vos pages sous forme de grilles.',
                'bac' => '2',
                'category' => 'web-multimédia',
                'price' => 19,
                'price_amazon' => 19.23,
            ],
            [
                'title' => 'Responsive web design',
                'author' => 'Ethan Marcotte',
                'isbn' => '978-2212673616',
                'excerpt' => 'Découvrez le responsive web design et apprenez à concevoir des sites qui anticipent et répondent aux besoins de vos utilisateurs. Dans cette seconde édition de son ouvrage phare, Ethan Marcotte décrit les principes qui sous-tendent le responsive design - grilles fluides, images flexibles et media queries - et démontre comment proposer une expérience de qualité, quelle que soit la taille de l’écran. Dans cette nouvelle édition : de nouveaux trucs et astuces pour la prise en charge des navigateurs, des solutions pour servir des images, rôle de l’amélioration progressive dans le design web, meilleures méthodes pour gérer la bande passante, etc. De nouveaux exemples et des listings de code méticuleusement révisés. Depuis sa parution qui a révolutionné le monde du web design en 2011, Responsive web design est resté une ressource fondamentale pour quiconque travaille sur le Web.',
                'bac' => '2',
                'category' => 'web-multimédia',
                'price' => 11.4,
                'price_amazon' => 12,
            ],
            [
                'title' => 'Sass pour les web designers',
                'author' => 'Dan Cederholm',
                'isbn' => '978-2212141474',
                'excerpt' => 'Soyons réalistes : les CSS, c’est dur. Nos feuilles de styles sont plus complexes que jamais et nous avons exploité la spécification actuelle jusqu’aux limites de ses capacités. Heureusement, nous pouvons désormais compter sur Sass pour nous venir en aide et optimiser nos CSS. Alors qu’il était réticent au départ, Dan Cederholm nous raconte ici pourquoi et comment il a fini par adopter ce préprocesseur CSS populaire puis nous montre la voie à suivre pour mieux maîtriser notre code, tout en conservant nos habitudes de travail. Des notions les plus élémentaires aux techniques plus avancées, Dan Cederholm vous aide à faire évoluer vos feuilles de styles et à commencer à tirer parti de la puissance de Sass dès la fin de votre lecture.',
                'bac' => '2',
                'category' => 'web-multimédia',
                'price' => 16,
                'price_amazon' => 12,
            ],
            [
                'title' => 'Guide pratique de choix typographiques',
                'author' => 'David Rault',
                'isbn' => '978-2911220937',
                'excerpt' => 'Nouvelle édition - Chaque caractère d’imprimerie, au-delà de sa forme, possède son propre passé, véhicule un bagage culturel, historique et social, crée par sa seule présence sur une page, au-delà du sens des mots écrits, une véritable ambiance. De ce fait, il influe directement sur l’interprétation du texte et implique de la part du maquettiste ou du graphiste une bonne connaissance des caractères d’imprimerie et de ce que leur choix implique. Ce livre a pour but de vous donner toutes les clés qui vous permettront d’effectuer le bon choix typographique en fonction d’un travail donné, et d’effectuer une mise en pages pertinente et esthétique. C’est au total une soixantaine de typographies qui sont présentées au fil de ces pages ; chaque police de caractères est disséquée, son créateur est présenté, le contexte social est évoqué, et toutes les connotations impliquées par son utilisation sont mises en avant. On trouvera également un tableau synthétique en fin d’ouvrage, à base de mots-clés, qui permettra de trouver simplement et rapidement une ou plusieurs typographies possibles. Enfin, une dizaine de personnalités du monde de la typographie ou de l’édition, parmi lesquelles Erik Spiekermann, Xavier Dupré, Alejandro Paul, Alain Beaulet ou Bas Jacobs ont participe à cet ouvrage en répondant à une question difficile : « Quel est votre caractère préféré ? » Cette nouvelle édition, qui fait suite au succès du premier tirage, a été entièrement revue et augmentée d’une cinquantaine de pages, avec de nouveaux caractères et les contributions exclusives de Jim Parkinson, Nick Shinn, Étienne Robial, Jean-Christophe Menu et Bruno Leandri.',
                'bac' => '2',
                'category' => 'design graphique',
                'price' => 28.10,
                'price_amazon' => 29.32,
            ],
            [
                'title' => 'Règles de l’écriture typographique du français',
                'author' => 'Yves Perrousseaux',
                'isbn' => '978-2911220289',
                'excerpt' => 'Voici la neuvième édition du Manuel de typographie française élémentaire, édité par Atelier Perrousseaux. Quatorze années et 55 000 exemplaires plus tard, l’auteur lui a apporté un certain nombre de perfectionnements dans le but de le rapprocher du monde du secrétariat, qui représente un lectorat croissant. Changement de couverture, changement de titre : Règles de l’écriture typographique du français, mieux compris par ce public et qui correspond mieux à l’essentiel du contenu. Le vocabulaire trop professionnel a été revu pour correspondre à celui des utilisateurs non-typographes. Un certain nombre d’informations concernant des applications ou des utilitaires ont été mises à jour, ou bien supprimées si nécessaire. La plus grande partie des pages intérieures indique toujours les bonnes règles d’écriture du français, ainsi que les erreurs que l’on rencontre un peu partout. Cet ouvrage est toujours le seul Code typographique sur le marché qui montre les erreurs rencontrées, et toujours le seul imprimé en couleurs. Un classique. Ce manuel se compose de trois parties : 1.Un bref historique des différentes étapes de notre écriture, des premiers alphabets archaïques phéniciens (vers 1200) aux caractères contem¬porains numérisés. Ce qui permet de faire le lien entre l’origine notre écriture et l’évolution de nos caractères typographiques à travers bientôt six siècles. 2. Les règles élémentaires de composition typogra¬phique sur lesquelles chacun bute à longueur de journée. Ce manuel est le seul code typographi¬que existant sur le marché à montrer non seule¬ment ce qu’il faut faire, mais également les erreurs qu’il ne faut pas faire, et que l’on rencontre un peu partout. 3. Des informations pratiques, comme les grilles des polices de caractères standards ou de signes (comme le Zapf Dingbats), obtenues sur les claviers du Macintosh ou des PC. Ces grilles vous permettront d’utiliser complètement les quatre caractères générés par certaines touches de votre clavier et donc de savoir composer les capitales accentuées, les guillemets « français », les apostro¬phes typographiques [’] et non pas verticales [ ], etc. Comme également le « Protocole des signes de correction sur épreuves » autant utiles en secré¬tariat qu’en imprimerie.',
                'bac' => '2',
                'category' => 'design graphique',
                'price' => 21.5,
                'price_amazon' => 21.72,
            ],
            [
                'title' => 'Mise en page(s) etc&nbsp;:',
                'author' => 'Claire Gauthier',
                'isbn' => '978-2350171692',
                'excerpt' => 'Pourquoi percevons-nous de manière différente un livre, une revue ou un journal? Quel est l’impact d’une typographie ou d’une grille spécifiques sur une maquette? Pourquoi une mise en page nous semble-t-elle plus appropriée qu’une autre? Mise en page(s), etc. explore tous les aspects de la composition d’un livre, d’une affiche ou d’un document promotionnel : de l’élaboration des grilles de composition en passant par l’utilisation avertie des couleurs et des caractères jusqu’aux réglages typographiques fins tels que justification, alignement, césures. Des schémas commentés expliquent les termes techniques qu’il est indispensable d’avoir assimilé afin de maîtriser les règles de la composition. De nombreuses créations graphiques contemporaines illustrent cet ouvrage qui se présente comme un manuel extrêmement détaillé en matière de conception graphique.',
                'bac' => '2',
                'category' => 'design graphique',
                'price' => 47.5,
                'price_amazon' => 49.9,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
