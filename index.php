<html>
    
<h1>Recherche de film.</h1>

<h2>Classement pas année de sortie.</h2>

<form  action="index.php" method="get">
    
    <label>Liste des années renseigner :</label>
    <br>
    
    <input type="radio" name="choice" value="2015">2015
    <br>
    
     <input type="radio" name="choice" value="2016">2016
    <br>
    
     <input type="radio" name="choice" value="2017">2017
    <br>
    
     <input type="radio" name="choice" value="2018">2018
    <br>
    
     <input type="radio" name="choice" value="2019">2019
    <br>
    
     <input type="radio" name="choice" value="2020">2020
    <br>
    
    <input type="submit">
    
</form>
    
</html>

<?php

$movings = array (
    
    array ("movie" => "The Revenant", "year" => "2015", "descritpion" => "Dans une Amérique profondément sauvage, Hugh Glass, un trappeur, est attaqué par un ours et grièvement blessé. Abandonné par ses équipiers, il est laissé pour mort. Mais Glass refuse de mourir. "),
    
    array ("movie" => "Heidi", "year" => "2015", "descritpion" => "Heidi, une jeune orpheline, part vivre chez son grand-père dans les montagnes des Alpes suisses. D'abord effrayée par ce vieil homme solitaire, elle apprend vite à l'aimer et découvre la beauté des alpages avec Peter, son nouvel ami. "),
    
    array ("movie" => "Fast & Furious 7", "year" => "2015", "descritpion" => "Dominic Toretto et sa famille doivent faire face à Deckard Shaw, bien décidé à se venger de la mort de son frère. "),
    
    array ("movie" => "Les Innocentes", "year" => "2015", "descritpion" => "Pologne, décembre 1945. Mathilde Beaulieu, une jeune interne de la Croix-Rouge chargée de soigner les rescapés français avant leur rapatriement, est appelée au secours par une religieuse polonaise.D’abord réticente, Mathilde accepte de la suivre dans son couvent..."),
    
    array ("movie" => "La La Land", "year" => "2016", "descritpion" => "Au cœur de Los Angeles, une actrice en devenir prénommée Mia sert des cafés entre deux auditions. De son côté, Sebastian, passionné de jazz, joue du piano dans des clubs miteux pour assurer sa subsistance. Tous deux sont bien loin de la vie rêvée à laquelle ils aspirent… "),
    
    array ("movie" => "Sully", "year" => "2016", "descritpion" => "Le 15 janvier 2009, l'incroyable se produit : un avion qui vient de subir une terrible avarie réussit à se poser sans encombre sur les eaux glacées du fleuve Hudson, au large de Manhattan. Bilan : les 155 passagers ont la vie sauve !"),
    
    array ("movie" => "Snowden", "year" => "2016", "descritpion" => "Patriote idéaliste et enthousiaste, le jeune Edward Snowden semble réaliser son rêve quand il rejoint les équipes de la CIA puis de la NSA. Il découvre alors au cœur des Services de Renseignements américains l’ampleur insoupçonnée de la cyber-surveillance. Violant la Constitution, soutenue par de grandes entreprises, la NSA collecte des montagnes de données et piste toutes les formes de télécommunications à un niveau planétaire. "),
    
    array ("movie" => "Dalida", "year" => "2016", "descritpion" => "De sa naissance au Caire en 1933 à son premier Olympia en 1956, de son mariage avec Lucien Morisse, patron de la jeune radio Europe n°1, aux soirées disco, de ses voyages initiatiques en Inde au succès mondial de Gigi l’Amoroso en 1974, le film Dalida est le portrait intime d’une femme absolue, complexe et solaire... Une femme moderne à une époque qui l’était moins ... Malgré son suicide en 1987, Dalida continue de rayonner de sa présence éternelle."),
    
    array ("movie" => "Coco", "year" => "2017", "descritpion" => "Depuis déjà plusieurs générations, la musique est bannie dans la famille de Miguel. Un vrai déchirement pour le jeune garçon dont le rêve ultime est de devenir un musicien aussi accompli que son idole, Ernesto de la Cruz."),
    
    array ("movie" => "120 Battements Par Minute", "year" => "2017", "descritpion" => "Début des années 90. Alors que le sida tue depuis près de dix ans, les militants d'Act Up-Paris multiplient les actions pour lutter contre l'indifférence générale. Nouveau venu dans le groupe, Nathan va être bouleversé par la radicalité de Sean. "),
    
    array ("movie" => "Paddington 2", "year" => "2017", "descritpion" => "Installé dans sa nouvelle famille à Londres. Paddington est devenu un membre populaire de la communauté locale. A la recherche du cadeau parfait pour le 100e anniversaire de sa chère Tante Lucy, Paddington tombe sur un livre animé exceptionnel.  "),
    
    array ("movie" => "La Planète des Singe - Suprématie", "year" => "2017", "descritpion" => "Dans ce volet final de la trilogie, César, à la tête des Singes, doit défendre les siens contre une armée humaine prônant leur destruction. L’issue du combat déterminera non seulement le destin de chaque espèce, mais aussi l’avenir de la planète."),
    
    array ("movie" => "Bohemian Rhapsody", "year" => "2018", "descritpion" => "Du succès fulgurant de Freddie Mercury à ses excès, risquant la quasi-implosion du groupe, jusqu’à son retour triomphal sur scène lors du concert Live Aid, alors qu’il était frappé par la maladie, découvrez la vie exceptionnelle d’un homme qui continue d’inspirer les outsiders, les rêveurs et tous ceux qui aiment la musique."),
    
    array ("movie" => "Avengers: Infinity War", "year" => "2018", "descritpion" => "Les Avengers et leurs alliés devront être prêts à tout sacrifier pour neutraliser le redoutable Thanos avant que son attaque éclair ne conduise à la destruction complète de l’univers."),
    
    array ("movie" => "Sauver ou périr", "year" => "2018", "descritpion" => "Franck est Sapeur-Pompier de Paris. Il sauve des gens. Il vit dans la caserne avec sa femme qui accouche de jumelles. Il est heureux. Lors d’une intervention sur un incendie, il se sacrifie pour sauver ses hommes. A son réveil dans un centre de traitement des Grands Brûlés, il comprend que son visage a fondu dans les flammes. Il va devoir réapprendre à vivre, et accepter d’être sauvé à son tour."),
    
    array ("movie" => "Tout le Monde Debout", "year" => "2018", "descritpion" => "Jocelyn, homme d'affaire en pleine réussite, est un dragueur et un menteur invétéré. Lassé d'être lui-même, il se retrouve malgré lui à séduire une jeune et jolie femme en se faisant passer pour un handicapé. Jusqu'au jour où elle lui présente sa sœur elle-même handicapée..."),
    
    array ("movie" => "Le Chant du Loup", "year" => "2019", "descritpion" => "Un jeune homme a le don rare de reconnaître chaque son qu’il entend. A bord d’un sous-marin nucléaire français, tout repose sur lui, l’Oreille d’Or. Réputé infaillible, il commet pourtant une erreur qui met l’équipage en danger de mort. Il veut retrouver la confiance de ses camarades mais sa quête les entraîne dans une situation encore plus dramatique. "),
    
    array ("movie" => "Avengers: Endgame", "year" => "2019", "descritpion" => "Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel. "),
    
    array ("movie" => "Le Roi Lion", "year" => "2019", "descritpion" => "Au fond de la savane africaine, tous les animaux célèbrent la naissance de Simba, leur futur roi. Les mois passent. Simba idolâtre son père, le roi Mufasa, qui prend à cœur de lui faire comprendre les enjeux de sa royale destinée. Mais tout le monde ne semble pas de cet avis. Scar, le frère de Mufasa, l'ancien héritier du trône, a ses propres plans.."),
    
    array ("movie" => "Once Upon a Timme... in Hollywood", "year" => "2019", "descritpion" => "En 1969, la star de télévision Rick Dalton et le cascadeur Cliff Booth, sa doublure de longue date, poursuivent leurs carrières au sein d’une industrie qu’ils ne reconnaissent plus."),
    
    array ("movie" => "Fast & Furious 9 ", "year" => "2020", "descritpion" => "Le neuvième volet de la saga Fast & Furious..."),
    
    array ("movie" => "Ducobu 3", "year" => "2020", "descritpion" => "Nouvelle rentrée des classes pour l'élève Ducobu, Léonie Gratin et l'instituteur Latouche. Mais cette année, un rival de taille pour Ducobu débarque à l’école : TGV, le roi de la triche 2.0. Alors que la situation financière de Saint-Potache devient désastreuse, les deux cancres vont devoir unir leurs créativités pour remporter un concours de chant et sauver leur école."),
    
    array ("movie" => "Les Tuche 4", "year" => "2020", "descritpion" => "Le quatrième volet des aventures de la famille Tuche"),
    
    array ("movie" => "Un vrai bonhomme", "year" => "2020", "descritpion" => "Tom, un adolescent timide et sensible, s’apprête à faire sa rentrée dans un nouveau lycée.Pour l’aider à s’intégrer, il peut compter sur les conseils de Léo, son grand frère et véritable mentor.Léo va s’employer à faire de Tom un mec, un vrai, mais son omniprésence va rapidement se transformer en une influence toxique. Tom va devoir batailler pour s’affranchir de l’emprise de Léo et trouver son propre chemin…. "),
    
);

if (isset($_GET["choice"])){
    $choice = $_GET["choice"];
    foreach ($movings as $select)
    {
        if ($select["year"]==$choice) 
        {
            echo "l'année de votre choix est : " .$choice; 
            echo "<br>";
            echo "le titre du film : " .($select["movie"]);
            echo "<br>";
            echo "la description : " .($select["descritpion"]);
            echo "<br>";           
        }
    }
}

?>