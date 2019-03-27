<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

        [
            'NAME' => 'Nike Metcon DSX Flyknit 2',
            'DESCRIPTION' => "La chaussure de cross-training et de renforcement musculaire Metcon DSX Flyknit 2 pour Femme comporte une base forte et stable et offre un maintien souple, une légèreté optimale et une excellente durabilité pour une multitude d'activités de training, que vous effectuiez des accélérations, des exercices sur traîneau de puissance ou des séances de musculation ou de montée à la corde.",
            'PRICE' => '15000',
            'WEIGHT' => '100',
            'STOCK' => '128',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://images.eastbay.com/pi/4595001/large/nike-metcon-dsx-flyknit-2-womens',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Metcon Flyknit 3',
            'DESCRIPTION' => "La Metcon la plus confortable à ce jour, la Nike Metcon Flyknit 3 offre la respirabilité et la souplesse d'une empeigne Flyknit avec un col repensé pour plus de confort. Sa semelle intermédiaire intérieure est reliée au plastique rigide dans le talon pour offrir durabilité et stabilité lors des phases de fractionné intenses.",
            'PRICE' => '15000',
            'WEIGHT' => '115',
            'STOCK' => '96',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://www.stadium.se/INTERSHOP/static/WFS/Stadium-SwedenB2C-Site/-/Stadium/sv_SE/Small1x1/272550_103_NIKE_WMNS%20NIKE%20METCON%20FLYKNIT%203.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Air Zoom Elevate',
            'DESCRIPTION' => "Dotée d'une empeigne durable en tissu et synthétique et d'un amorti réactif, la Nike Air Zoom Elevate Metallic vous soutient dans votre entraînement grâce à son maintien respirant. L'unité Zoom Air au talon s'adapte aux mouvements spécifiques de l'entraînement tandis que les rainures flexibles de l avant-pied permettent à votre pied de bouger naturellement.",
            'PRICE' => '12000',
            'WEIGHT' => '200',
            'STOCK' => '300',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://content.sportmaster.dk/sites/default/files/styles/product_large/public/PIM-images/nike/2039314/nike-airzoomelevate-blackwhite-2039314-v1-570417.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Pureboost Trainer',
            'DESCRIPTION' => "Une chaussure aérée et polyvalente pour l’entrainement ou le running.
            Conçue pour le running et le cross-training, cette chaussure polyvalente affiche une tige en maille respirante. Une bride à la cheville assure un maintien optimal. L'amorti dynamique offre un retour d'énergie à chaque foulée.",
            'PRICE' => '11995',
            'WEIGHT' => '280',
            'STOCK' => '76',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://www.sil.lt/media/.thumb/.600x600-create-02-01-adidas-pureboost-trainer_man_bb7211_s0.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Metcon Flyknit 3',
            'DESCRIPTION' => "La Metcon la plus confortable à ce jour, la Nike Metcon Flyknit 3 offre la respirabilité et la souplesse d'une empeigne Flyknit avec un col repensé pour plus de confort. Sa semelle intermédiaire intérieure est reliée au caoutchouc ferme dans le talon pour offrir durabilité et stabilité lors des phases de fractionné intenses.",
            'PRICE' => '15000',
            'WEIGHT' => '180',
            'STOCK' => '116',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://content.sportmaster.dk/sites/default/files/styles/product_large/public/PIM-images/nike/2080653/nike-metconflyknit3-obsidianvolt-2080653-v1-573577.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Free x Metcon',
            'DESCRIPTION' => "La Metcon la plus confortable à ce jour, la Nike Metcon Flyknit 3 offre la respirabilité et la souplesse d'une empeigne Flyknit avec un col repensé pour plus de confort. Sa semelle intermédiaire intérieure est reliée au caoutchouc ferme dans le talon pour offrir durabilité et stabilité lors des phases de fractionné intenses.",
            'PRICE' => '12000',
            'WEIGHT' => '170',
            'STOCK' => '225',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://cdn.fashiola.fr/L580338669/nike-chaussure-de-cross-training-et-de-renforcement-musculaire-free-x-metcon.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas 24/7',
            'DESCRIPTION' => "Une chaussure légère offrant un confort immédiat.
            Effectue tes étirements, tes exercices ou ton échauffement avec cette chaussure. Sa tige en mesh souple et respirant s’adapte à la forme de ton pied à chaque mouvement. Son système de laçage personnalisable assure un ajustement parfait.",
            'PRICE' => '9995',
            'WEIGHT' => '155',
            'STOCK' => '89',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://www.traininn.com/f/13703/137038297/adidas-athletics-24-7-tr.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Alphabounce',
            'DESCRIPTION' => "Une chaussure offrant une stabilité idéale pour travailler ta force à l’entrainement.
            Cette chaussure de cross-training t’offre une stabilité optimale lorsque tu effectues des exercices avec haltères, des box jumps, des burpees ou pour un run court. Idéale pour le renforcement musculaire, elle présente un drop réduit pour t’assurer une base solide lorsque tu soulèves des poids lourds. La tige en mesh sans coutures épouse la forme du pied pour plus de confort et un excellent maintien lors des mouvements latéraux.",
            'PRICE' => '9995',
            'WEIGHT' => '186',
            'STOCK' => '169',
            'id_CATEGORY' => '1',
            'IMAGE' => 'https://www.traininn.com/f/13703/137038556/adidas-alphabounce-trainer.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Energy Cloud V',
            'DESCRIPTION' => "Une chaussure de running légère, respirante et confortable.
            Un run urbain tout en agilité. Cette chaussure de running en mesh aéré t'offre souplesse et légèreté pour plus de performance. La semelle intermédiaire ultra douce assure un confort durable.",
            'PRICE' => '6495',
            'WEIGHT' => '200',
            'STOCK' => '143',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://photos6.spartoo.com/photos/152/15281697/15281697_500_A.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Alphaedge',
            'DESCRIPTION' => "Cette chaussure futuriste a été conçue en tenant compte des retours d’expériences des athlètes sur plusieurs années.  Parfaite pour le cross training, elle affiche une tige adidas Primeknit avec des coutures placées stratégiquement pour t'offrir un maintien parfait là où tu en as le plus besoin. Sa semelle intermédiaire en une seule pièce présente une structure aérée unique qui t’assure une performance ultime. ",
            'PRICE' => '29995',
            'WEIGHT' => '156',
            'STOCK' => '46',
            'id_CATEGORY' => '2',
            'IMAGE' => 'http://cdn.shopify.com/s/files/1/0015/1263/6483/products/adidas_Alphaedge_4D_White_grande.png?v=1545757562',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Zoom Fly Flyknit',
            'DESCRIPTION' => "La chaussure de running Nike Zoom Fly Flyknit pour Femme est conçue pour établir de nouveaux records de vitesse. L'empeigne Flyknit offre un maintien d'une légèreté ultime épousant la forme de votre pied.",
            'PRICE' => '16000',
            'WEIGHT' => '212',
            'STOCK' => '98',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://cdn.shopify.com/s/files/1/2621/5296/products/AR4561-044-PHSRH000-2000.png?v=1536280477',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Zoom Fly SP Fast',
            'DESCRIPTION' => "La Nike Zoom Fly SP Fast présente une empeigne déstructurée pour une chaussure légère et sans contrainte. Sous le pied, la technologie Nike React, associée à une plaque en nylon carbone sur toute la longueur, assure un retour d'énergie révolutionnaire.",
            'PRICE' => '17000',
            'WEIGHT' => '184',
            'STOCK' => '126',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://d2jr20rz353a5n.cloudfront.net/images/galleries/14860/MG-8625(1).png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Zoom Pegasus Turbo',
            'DESCRIPTION' => "La Nike Zoom Pegasus Turbo reprend la Pegasus que vous adorez en y intégrant des améliorations majeures en termes de vitesse. L'empeigne ultra-légère est aussi rapide qu'elle en a l'air, tandis que la mousse Nike ZoomX révolutionnaire, qui a été conçue pour les coureurs d'élite Nike pendant la tentative de Breaking 2, vous permet d'établir de nouveaux records de vitesse et de réactivité pendant vos runs quotidiens.",
            'PRICE' => '18000',
            'WEIGHT' => '213',
            'STOCK' => '56',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://images.footlocker.com/pi/J4115060/zoom/J4115060.jpeg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Odyssey React Flyknit 2',
            'DESCRIPTION' => "La Nike Odyssey React Flyknit 2 combine de manière stratégique conception Flyknit légère et matière synthétique pour un bon maintien. Sous le pied, l'amorti Nike React assure une foulée souple et dynamique, pour avaler les kilomètres.",
            'PRICE' => '13000',
            'WEIGHT' => '125',
            'STOCK' => '212',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201901/09/00117730846700____1__1200x1200.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Alphabounce RC 2.0',
            'DESCRIPTION' => "Cette chaussure à foulée universelle est parfaite pour les athlètes polyvalents qui passent du running au cross training. Elle présente une tige en mesh sans coutures qui enveloppe le pied pour un chaussant ajusté. Les zones de maintien et les empiècements stretch permettent des mouvements multidirectionnels rapides. L'amorti souple et dynamique offre un confort durable.",
            'PRICE' => '7995',
            'WEIGHT' => '250',
            'STOCK' => '48',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://www.runnerinn.com/f/13703/137038551/adidas-alphabounce-rc-2.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Ultraboost Laceless',
            'DESCRIPTION' => "Conçue pour les runners à foulée universelle, cette chaussure de running a été élaborée avec une technologie de capture de mouvement. Elle présente une tige en maille stretch sans lacets qui épouse la forme du pied. Une bande renforcée au médio-pied assure un maintien ajusté. Elle est équipée d'un amorti dynamique et d’une semelle extérieure souple pour un run tout en confort.",
            'PRICE' => '15995',
            'WEIGHT' => '200',
            'STOCK' => '114',
            'id_CATEGORY' => '2',
            'IMAGE' => 'https://www.stadium.fi/INTERSHOP/static/WFS/Stadium-FinlandB2C-Site/-/Stadium/fi_FI/Detail/276235_101_ADIDAS_W%20ULTRABOOST%20LACELESS.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Sleek S',
            'DESCRIPTION' => "L'élégance insolente. Cette chaussure femmes revisite le sportswear classique dans un style féminin décomplexé. Sa semelle intermédiaire épaisse et angulaire te permet de prendre de la hauteur. La tige en cuir souple épouse la forme de ton pied. Les fermetures par bandes auto-agrippantes assurent un chaussant adapté et apportent une touche tendance.",
            'PRICE' => '9995',
            'WEIGHT' => '188',
            'STOCK' => '74',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://brand.campaign.adidas.com/Images/originals-ss19-sleek-drop2-item-2-d_tcm66-318979.png?locale=en_US&device=mobile&version=2',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Stan Smith Detail Python',
            'DESCRIPTION' => "Le style épuré de la Stan Smith, avec son avant-pied souple et ses 3 bandes perforées, en a fait une icône mondiale. Elle s'offre un relooking chic avec cette version en nubuck texturé. Le talon est rehaussé d'un motif python et du slogan « Brand with the 3-Stripes » en français pour une touche d'élégance.",
            'PRICE' => '9995',
            'WEIGHT' => '245',
            'STOCK' => '163',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://www.courir.com/dw/image/v2/BCCL_PRD/on/demandware.static/-/Sites-master-catalog-courir/default/dwcd45fb3c/images/hi-res/001429932_101.png?sw=600&sh=600&sm=fit',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Blazer Mid ‘77 Slam Jam',
            'DESCRIPTION' => "Tirant son nom de l'équipe de basketball de Portland lorsqu'elle a rejoint la ligue, la Blazer est devenue un classique sur le terrain et au quotidien dès sa sortie en 1972. Cette silhouette emblématique revient avec une empeigne mélangeant de la toile, du cuir et du daim, pour symboliser la culture multidisciplinaire de la génération slash et l'union entre Milan et New York.",
            'PRICE' => '11000',
            'WEIGHT' => '198',
            'STOCK' => '38',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://image.goat.com/attachments/product_template_pictures/images/019/246/246/original/485753_00.png.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Air Jordan 1 High Zip',
            'DESCRIPTION' => "La Air Jordan 1 High Zip est une version revisitée et élégante de l'emblématique AJ 1 avec sa fermeture éclair.",
            'PRICE' => '15000',
            'WEIGHT' => '129',
            'STOCK' => '289',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://cdn.shopify.com/s/files/1/1149/0698/products/AQ3742-016-PHSRH000-2000_1024x1024.png?v=1544785618',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike React Element 55',
            'DESCRIPTION' => "S'inspirant des chaussures de running Nike classiques telles que la Internationalist, la chaussure Nike React Element 55 pour Homme s'empare du passé afin de le projeter vers l'avenir. La mousse Nike React procure un confort en toute légèreté, tandis que les renforts de semelle extérieure en caoutchouc et les détails réfléchissants assurent un look révolutionnaire qui ne laissera personne indifférent.",
            'PRICE' => '13000',
            'WEIGHT' => '286',
            'STOCK' => '313',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://www.courir.com/dw/image/v2/BCCL_PRD/on/demandware.static/-/Sites-master-catalog-courir/default/dwee5cd4d0/images/hi-res/001434083_101.png?sw=600&sh=600&sm=fit',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Air Force 1 07',
            'DESCRIPTION' => "La légende perdure avec la Nike Air Force 1 '07 1, version moderne de la fameuse AF1, qui allie style classique et détails tendance.",
            'PRICE' => '10000',
            'WEIGHT' => '214',
            'STOCK' => '121',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://image.keller-sports.com/storage/products/BE/5C/BE5CF3DBFC9ADC643CA2611E93CC9D32.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Deerupt S',
            'DESCRIPTION' => "La Deerupt fait sensation avec son design minimaliste. Cette chaussure affiche une tige bicolore avec un imprimé ondulé inspiré du solstice. Sa tige souple permet de l'emporter partout. Ultra légère, elle est ajustée et confortable.",
            'PRICE' => '10995',
            'WEIGHT' => '214',
            'STOCK' => '16',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://image.goat.com/attachments/product_template_pictures/images/017/986/043/original/BD7875.png.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas EQT Bask ADV',
            'DESCRIPTION' => "Une chaussure mi-montante moderne et futuriste. La EQT Bask ADV ajoute une audacieuse touche basketball au style Equipment rétro des années 90. Ornée de détails en suède synthétique, cette sneaker structurée affiche une tige en maille qui épouse la forme du pied. Le renfort en TPU au talon et les 3 bandes sur la semelle intermédiaire restent fidèles au look authentique.",
            'PRICE' => '10995',
            'WEIGHT' => '185',
            'STOCK' => '69',
            'id_CATEGORY' => '3',
            'IMAGE' => 'https://www.sil.lt/media/.thumb/.600x600-create-12-06-adidas-originals-eqt-bask-adv_man_b37516_s0.png',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Ultra Comfort 3 Printed',
            'DESCRIPTION' => "Spécialement conçue pour les pieds des femmes, la claquette Nike Ultra Comfort 3 Printed est indispensable pour les journées chaudes. Elle offre le confort d'une lanière rembourrée et une semelle intérieure compensée en mousse à mémoire de forme avec des contours placés de manière stratégique pour assurer le maintien de la voûte plantaire.",
            'PRICE' => '4000',
            'WEIGHT' => '120',
            'STOCK' => '59',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://s3.eu-central-1.amazonaws.com/sneakerjagers.com/products/396x396/95208.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Benassi JDI Floral',
            'DESCRIPTION' => "La claquette Nike Benassi JDI Floral pour Femme comporte une semelle intérieure texturée et une semelle intermédiaire/extérieure en mousse légère pour vous procurer détente et confort.",
            'PRICE' => '3000',
            'WEIGHT' => '112',
            'STOCK' => '96',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://http2.mlstatic.com/sandalia-feminina-nike-benassi-jdi-floral-original-footlet-D_NQ_NP_763015-MLB27336976533_052018-F.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Adilette Confort',
            'DESCRIPTION' => "À la plage ou dans la rue. Cette sandale slip-on possède une assise plantaire matelassée pour un confort optimal. La tige à bride procure une sensation de légèreté.",
            'PRICE' => '3995',
            'WEIGHT' => '96',
            'STOCK' => '26',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://images.eastbay.com/is/image//EBFL2/F97200_a1?hei=500&wid=500',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Eezay',
            'DESCRIPTION' => "Un design classique et confortable. Cette sandale affiche des picots intégrés qui massent les pieds quand tu te déplaces. Elle offre douceur, amorti et légèreté.",
            'PRICE' => '1995',
            'WEIGHT' => '126',
            'STOCK' => '85',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650//0/0/0000200857190_01_ki.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Benassi JDI Fanny Pack',
            'DESCRIPTION' => "La claquette Nike Benassi JDI Fanny Pack pour Homme présente une semelle en mousse souple pour un amorti confortable tout en légèreté. La poche zippée sur le strap inspirée du sac banane offre un rangement pratique pour vos petits objets.",
            'PRICE' => '5000',
            'WEIGHT' => '98',
            'STOCK' => '65',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://image.goat.com/crop/1000/attachments/product_template_additional_pictures/images/013/464/898/original/382754_08.jpg.jpeg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Nike Benassi JDI Printed',
            'DESCRIPTION' => "La claquette Nike Benassi JDI Printed pour Homme est dotée d'une semelle intérieure texturée pour un confort total avant et après le sport.",
            'PRICE' => '3000',
            'WEIGHT' => '2000',
            'STOCK' => '26',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://images.footaction.com/pi/31261006/zoom/nike-benassi-jdi-slide-mens',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Adilette',
            'DESCRIPTION' => "Lancée en 1972, la adilette est devenue la sandale adidas la plus populaire de tous les temps. Conçue pour les loisirs et la détente, la version adidas Originals adilette pour hommes est un modèle léger, doté d'un bandage confortable et d'une assise plantaire ergonomique pour un confort durable.",
            'PRICE' => '3495',
            'WEIGHT' => '100',
            'STOCK' => '156',
            'id_CATEGORY' => '4',
            'IMAGE' => 'http://www.chezvirginie.fr/images/category_3/ADIDAS%20Tongs%20ADILETTE%20HEREN%20en%20noir%20%20-%2076427_0.jpg',
            'is_ACTIVE' => '1'
        ],
        [
            'NAME' => 'Adidas Adilette Cloudfoam',
            'DESCRIPTION' => "Parfaite à porter sous la douche ou au bord de la piscine, cette sandale hommes possède une assise plantaire Cloudfoam qui sèche rapidement. Elle épouse la forme du pied pour un confort ultime. La tige à bride unique affiche 3 bandes contrastées pour un look sport classique. La semelle extérieure en EVA allie légèreté et confort.",
            'PRICE' => '2495',
            'WEIGHT' => '216',
            'STOCK' => '14',
            'id_CATEGORY' => '4',
            'IMAGE' => 'https://photos6.spartoo.com/photos/122/12261130/adidas-Originals-ADILETTE-SHOWER-12261130_350_A.jpg',
            'is_ACTIVE' => '1'
        ],
            ]);
    }
}
