-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 27 mai 2018 à 22:59
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id5952524_movie`
--

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `id` int(6) NOT NULL,
  `title` varchar(300) NOT NULL,
  `img` varchar(400) NOT NULL,
  `abstract` varchar(2000) NOT NULL,
  `desc` varchar(2000) NOT NULL,
  `trailer` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id`, `title`, `img`, `abstract`, `desc`, `trailer`) VALUES
(5, 'Chappie', 'http://fr.web.img6.acsta.net/pictures/15/02/09/15/56/012011.jpg', 'Dans un futur proche, la population, opprimée par une police entièrement robotisée, commence à se rebeller. Chappie, l’un de ces droïdes policiers, est kidnappé ...', '<b>Date de sortie</b>	 4 mars 2015 (1h54min) <br>\r\n<b>Réalisé par	</b>  :   Neill Blomkamp<br>\r\n<b>Avec	   </b>  :   Sharlto Copley, Dev Patel, Hugh Jackman ...<br>\r\n<b>Genre	  </b>  :     Science fiction , Action<br>\r\n<b>Nationalité	</b> Américain , mexicain<br>Dans un futur proche, la population, opprimée par une police entièrement robotisée, commence à se rebeller. Chappie, l’un de ces droïdes policiers, est kidnappé. Reprogrammé, il devient le premier robot capable de penser et ressentir par lui-même. Mais des forces puissantes, destructrices, considèrent Chappie comme un danger pour l’humanité et l’ordre établi. Elles vont tout faire pour maintenir le statu quo et s’assurer qu’il soit le premier, et le dernier, de son espèce.</br>', 'https://www.youtube.com/embed/lyy7y0QOK-0'),
(4, 'San andreas', 'https://s2.thcdn.com/productimg/600/600/11127527-8084503204245250.jpg', 'Lorsque la tristement célèbre Faille de San Andreas finit par s\'ouvrir, et par provoquer un séisme de magnitude 9 en Californie, un pilote d\'hélicoptère de secours en montagne...', '<b>Date de sortie</b>	27 mai 2015 (1h54min)  <br>\r\n<b>Réalisé par	</b>  :   Brad Peyton<br>\r\n<b>Avec	   </b>  :   Dwayne Johnson, Carla Gugino, Alexandra Daddario  ...<br>\r\n<b>Genre	  </b>  :     Action , Aventure , Thriller<br>\r\n<b>Nationalité	</b> Américain <br>Lorsque la tristement célèbre Faille de San Andreas finit par s\'ouvrir, et par provoquer un séisme de magnitude 9 en Californie, un pilote d\'hélicoptère de secours en montagne et la femme dont il s\'est séparé quittent Los Angeles pour San Francisco dans l\'espoir de sauver leur fille unique. Alors qu\'ils s\'engagent dans ce dangereux périple vers le nord de l\'État, pensant que le pire est bientôt derrière eux, ils ne tardent pas à comprendre que la réalité est bien plus effroyable encore…</br>', 'https://www.youtube.com/embed/yftHosO0eUo'),
(2, 'Toy Story 3', 'http://img.filmsactu.net/datas/films/t/o/toy-story-3/xl/4bd7e72d1108e.jpg', 'Les créateurs des très populaires films Toy Story ouvrent à nouveau le coffre à jouets et invitent les spectateurs à retrouver le monde délicieusement magique de Woody et Buzz ...', 'Date de sortie	1 juillet 2015 \r\nRéalisé par	: Pierre-François Martin-Laval\r\nAvec	: Kev Adams, Isabelle Nanty, Didier Bourdon ...\r\nGenre	: Comédie\r\nNationalité	francais\r\nLes pires Profs de France débarquent en Angleterre pour une mission ultra-secrète. Avec Boulard, le Roi des cancres, ils sont parachutés dans le meilleur lycée du pays, et ils vont appliquer leurs célèbres méthodes sur la future élite de la nation. L\'enjeu est énorme : de leur réussite dépendra l\'avenir du Royaume tout entier... Cette année : aux meilleurs élèves, les pires profs quand même !!!', 'https://www.youtube.com/embed/TNMpa5yBf5o'),
(3, 'Les profs 2', 'http://www.kgs.be/wp-content/uploads/2018/04/the-profs-2_120x176_arnaud.jpg', 'Les pires Profs de France débarquent en Angleterre pour une mission ultra-secrète. Avec Boulard, le Roi des cancres, ils sont parachutés dans le meilleur lycée du pays ...', 'Date de sortie	1 juillet 2015 \r\nRéalisé par	: Pierre-François Martin-Laval\r\nAvec	: Kev Adams, Isabelle Nanty, Didier Bourdon ...\r\nGenre	: Comédie\r\nNationalité	francais\r\nLes pires Profs de France débarquent en Angleterre pour une mission ultra-secrète. Avec Boulard, le Roi des cancres, ils sont parachutés dans le meilleur lycée du pays, et ils vont appliquer leurs célèbres méthodes sur la future élite de la nation. L\'enjeu est énorme : de leur réussite dépendra l\'avenir du Royaume tout entier... Cette année : aux meilleurs élèves, les pires profs quand même !!!', 'https://www.youtube.com/embed/X9frx_v7KUQ'),
(1, 'Prince of Percia: Sands of Time', 'http://fr.web.img6.acsta.net/medias/nmedia/18/67/06/10/19419606.jpg', 'Un prince rebelle est contraint d\'unir ses forces avec une mystérieuse princesse pour affronter ensemble les forces du mal et protéger une dague antique capable de libérer les Sables...', '<b>Date de sortie</b>	26 mai 2010 (2h6min)   <br>\r\n<b>Réalisé par	</b>  :   Mike Newell<br>\r\n<b>Avec	   </b>  :  Jake Gyllenhaal, Gemma Arterton, Ben Kingsley   ...<br>\r\n<b>Genre	  </b>  :     Aventure , Action<br>\r\n<b>Nationalité	</b> Américain<br>\r\nUn prince rebelle est contraint d\'unir ses forces avec une mystérieuse princesse pour affronter ensemble les forces du mal et protéger une dague antique capable de libérer les Sables du temps, un don de dieu qui peut inverser le cours du temps et permettre à son possesseur de régner en maître absolu sur le monde.</br>', 'https://www.youtube.com/embed/ZgEt-4L3fKQ'),
(77, 'the vikings', 'https://i1.wp.com/freevideolectures.com/wp-content/uploads/2018/03/The-Vikings.jpg?fit=1073%2C644&ssl=1', 'wesxdrcfvtgyhnj', 'awzsexdrctfvygbuhnij', 'https://www.youtube.com/embed/s28cBkmoVIk'),
(6, 'Sky Fighters', 'https://www.ost.co/img/202970.jpg', '', '', 'https://www.youtube.com/embed/CUWtQ_ImTaU'),
(7, 'Sky Hunter', 'http://t1.gstatic.com/images?q=tbn:ANd9GcTO_1wAlmGA755mGEg-8GYoCVUVZyoEuFwgpfpJZZ71nBU2e2md', 'The plot centers on an elite group of Chinese soldiers that thwart a terrorist plot and resolve a hostage crisis.', '<b>Première sortie :</b> 29 septembre 2017 (Chine)<br> <b>Réalisateur :</b> Li Chen<br> <b>Box-office :</b> 317,3 millions CNY<br> <b>Bande originale :</b> Andrew Kawczynski<br> <b>Scénario :</b> Li Chen<br> <b>Budget :</b> 200 millions CNY<br> The plot centers on an elite group of Chinese soldiers that thwart a terrorist plot and resolve a hostage crisis.<br><br>', 'https://www.youtube.com/embed/_bVG7QrIfvI'),
(8, 'Deadpool', 'https://cdn.egy.best/serve/movies/art-0224158064-x300.jpg', 'Wade Wilson (Ryan Reynolds) était un ancien officier des forces spéciales, mais il devint bientôt mercenaire et reçut le nom de Didbol,..', 'Wade Wilson, un ancien militaire des forces spéciales, est devenu mercenaire. Après avoir subi une expérimentation hors-norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d\'un humour noir survolté, il va traquer l\'homme qui a bien failli anéantir sa vie.<br>\r\n<b>Première sortie : </b>21 janvier 2016 (Taipei)<br>\r\n<b>Réalisateur : </b>Tim Miller<br>\r\n<b>Box-office : </b>783,1 millions USD<br>\r\n<b>Titre musical associé : </b>Careless Whisper<br>\r\n<b>Budget : </b>58 millions USD<br>', 'https://www.youtube.com/embed/Xithigfg7dA'),
(9, 'Deadpool 2', 'https://cdn.egy.best/serve/movies/art-1982370247-x300.jpg', 'Après une tentative ratée de sauver un jeune mutant au pouvoir destructeur,Deadpool se voit contraint de rejoindre les X-Men. Il est jeté en prison anti-mutants.', 'Après une tentative ratée de sauver un jeune mutant au pouvoir destructeur,Deadpool se voit contraint de rejoindre les X-Men. Il est jeté en prison anti-mutants. Vient Cable, un soldat venant du futur et ayant pour cible le jeune mutant, en quête de vengeance. Deadpool décide de le combattre. Peu convaincu par les règles des X-Men, il crée sa propre équipe, la « X-Force ». Mais cette mission lui réservera de grosses surprises, des ennemis de taille et des alliés indispensables.<br><br>\r\nDeadpool 2 est un film de super-héros américain réalisé par David Leitch, sorti en 2018. Il s\'agit de la suite de Deadpool de Tim Miller, sorti en 2016. <br><br>\r\n<b>Budget : </b>110 millions USD Tendances<br>\r\n<b>Première sortie :</b> 10 mai 2018 (États-Unis)<br>\r\n<b>Réalisateur :</b> David Leitch<br>\r\n<b>Bande originale : </b>Tyler Bates<br>\r\n<b>Sociétés de production : </b>20th Century Fox, Marvel Entertainment... <br>', 'https://www.youtube.com/embed/D86RtevtfrA'),
(10, 'Maze Runner: The Death Cure (2018)', 'https://cdn.egy.best/serve/movies/art-1906889491-x300.jpg', 'Thomas et les Blocards s\'engagent dans une ultime mission, plus dangereuse que jamais.', 'Thomas et les Blocards s\'engagent dans une ultime mission, plus dangereuse que jamais. Afin de sauver leurs amis, ils devront pénétrer dans la légendaire et sinueuse Dernière Ville contrôlée par la terrible organisation WICKED. Cette cité pourrait s\'avérer être le plus redoutable des labyrinthes. Seuls les Blocards qui parviendront à en sortir vivants auront une chance d\'obtenir les réponses tant recherchées depuis leur réveil au coeur du Labyrinthe.<br><br>\r\n<b>Première sortie : </b>17 janvier 2018 (Corée du Sud)<br>\r\n<b>Réalisateur : </b>Wes Ball<br>\r\n<b>Titre québécois : </b>L\'Épreuve: Le Remède mortel<br>\r\n<b>Box-office : </b>184 millions USD<br>\r\n<b>Série de films : </b>Maze Runner<br>', 'https://www.youtube.com/embed/zWn8Dg40qLs'),
(13, 'Pacific Rim: Uprising', 'http://fr.web.img6.acsta.net/c_215_290/pictures/18/01/24/17/09/1857016.jpg', 'Jake Pentecost est un pilote Jaeger prometteur dont le père légendaire a ', 'Jake Pentecost est un pilote Jaeger prometteur dont le père légendaire', 'https://www.youtube.com/embed/8BAhwgjMvnM');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
