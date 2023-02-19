
<?php
require_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');
class NewsDB{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
        // $pdf_files = glob("D:\\xampp\\htdocs\\Projekti\\ProjektiPHP\\pdf\\*.pdf"); 
        // foreach ($pdf_files as $pdf_file) {
        //     $filename = basename($pdf_file);
        //     $text = shell_exec("pdftotext '$pdf_file' -");
        //     $sql = "INSERT INTO news (filename, description) VALUES ('$filename', '$text')";
        //     $this->connection->query($sql);
        // }  
    }
     public function savePDFsToDatabase() {
        $html = file_get_contents('D:\xampp\htdocs\Projekti\ProjektiPHP\Professional-IT-School-1\html\news.html');
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $pdf_links = $xpath->query("//div[@class='newsContent']/a/@href");
        foreach ($pdf_links as $pdf_link) {
            $pdf_file = basename($pdf_link->nodeValue);
            $pdf_path = "D:\\xampp\\htdocs\\Projekti\\ProjektiPHP\\pdf\\$pdf_file";
            if (file_exists($pdf_path)) {
                $sql = "SELECT * FROM news WHERE filename = '$pdf_file'";
                $result = $this->connection->query($sql);
                if ($result->rowCount() == 0) {
                    $sql = "INSERT INTO news (filename) VALUES ('$pdf_file')";
                    $this->connection->query($sql);
                }
            }
        }
    }

}
$news = new NewsDB();
$news->savePDFsToDatabase();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>News - START SMART ACADEMY</title>
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/style-navbar.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel = "icon" href = "http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-color.png" type = "image/x-icon">
        <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/news.css">
        <link rel="stylesheet" href="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/css/footer.css">
        <script src="https://kit.fontawesome.com/c2df117003.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header id="header">
            <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-high-resolution-logo-color-on-transparent-background.png" id="logo"></a>
            <div id="socials">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div id="nav">
                <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php">Home</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/planprogrami.php">Planprogrami</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/news.php" class="activeNav">News</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/aboutus.php">About Us</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/database/view/contact.php">Contact</a>
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php">Regjistrohu</a>
            </div>
            <button id="loginbttn" onclick="location.href='http://localhost:8080/Projekti/ProjektiPHP/login validation/login.php'">Your Projects</button>
        </header>
        <main>
            <div class="mainNews">
                <a href="http://localhost:8080/Projekti/ProjektiPHP/regjistrohu.php"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/homeslide_02.jpg">
                    <h3>Regjistrimet kane filluar.Behu edhe ti pjese e Start Smart Academy</h3>
                </a>
            </div>
            <div class="sideNews">
                <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/digital-resources-600x337.jpg" alt="">
                    <h5>November Fest pezullohet deri me 18 Dhjetor 2022</h5>
                </a>
            </div>
            <div class="sideNews">
                <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Prof-Young-NB-600x337.jpg" alt="">
                    <h5>Mbledhje nga profesoresha Elizabeta Young rreth tregut te punes</h5>
                </a>
            </div>
            <div class="sideNews">
                <a href="#"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/SamLarson_NDSCS-2.jpg" alt="">
                    <h5>Studenti Sam Larson fiton vendin e dyte ne garat Hackathon</h5>
                </a>
            </div>
            <div class="news">
                <div class="newsContent" id="firstContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Panairi i Start Smart Academy.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/uni-fair-NB-600x338.jpg">
                        <h3>Panairi i Start Smart Academy</h3>
                        <h5>Shume nxenes te grupmoshave 16-18 paten mundesine
                            te marrin pjese ne nje panair te organizuar nga
                            akademia jone duke i informuar ata per mbarvajtjen
                            e mesimit te Start Smart Academy.
                        </h5>
                    </a>
                </div>
                <div class="newsContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Prezentimi i Projekteve Personale.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/personal-NB-600x337.jpg">
                        <h3>Prezentimi i Projekteve Personale</h3>
                        <h5>Projekti Personal është një pjesë integrale e kurrikulës sone, sepse u jep studentëve një mundësi për të vënë në praktikë 
                            të gjitha aftësitë e rëndësishme që kanë mësuar gjatë gjithë kohës së tyre në SSA, të tilla si aftësitë e komunikimit, 
                            aftësitë organizative dhe aftësitë e menaxhimit të kohës.
                        </h5>
                    </a>
                </div>
                <div class="newsContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Ceremonia e Certifikimit.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/grad-seanNB-600x337.jpg">
                        <h3>Ceremonia e Çertifikimit</h3>
                        <h5>Pasi qe nxenesit te aftesohen ne fushen e programimit
                            dhe te kene permbushur kerkesat e kurrikules tone, atyre 
                            u mbahet nje ceremoni certifikimi.Nje e tille do te mbahet
                            ne Qershor te vitit 2023.
                        </h5>
                    </a>
                </div>
            </div>
            <div class="news">
                <div class="newsContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Panairi virtual.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Higher-edu-NB-600x337.jpg">
                        <h3>Panairi virtual</h3>
                        <h5>Panairi virtual i mbajtur ne mars te vitit 2022 u kishte ofruar një mundësi studenteve te akademise sone për të takuar universitetet 
                            virtualisht duke ndërvepruar me përfaqësuesit zyrtarë të pranimeve, alumni dhe studentët aktualë.Mbi 120 universitete dhe kolegje 
                            në mbarë botën janë regjistruar në këtë ngjarje bashkëpunuese.
                        </h5>
                    </a>
                </div>
                <div class="newsContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Sfida e kodimit per vajza.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/Girls_Coding-600x337.jpg">
                        <h3>Sfida e kodimit per vajza</h3>
                        <h5>Çdo vit, Technovation fton ekipe vajzash në mbarë botën për të mësuar dhe zbatuar 
                            aftësitë e nevojshme për të zgjidhur problemet e botës reale përmes teknologjisë. 
                            Kjo organizatë globale ka krijuar një sfidë tetë-javore për të gjetur një zgjidhje 
                            teknologjike (një aplikacion celular ose një pajisje inteligjence artificiale) 
                            për një problem të komunitetit, per te cilin kane kontribuar edhe vajzat e akademise sone.
                        </h5>
                    </a>
                </div>
                <div class="newsContent">
                    <a href="http://localhost:8080/Projekti/ProjektiPHP/pdf/Aktitete jashte kurrikulare.pdf" target="_blank">
                        <img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/DofE-600x337.jpg">
                        <h3>Aktivitete jashte kurrikulare</h3>
                        <h5>Cdo fundjave studenteve te akademise sone iu ofrohen edhe 
                            aktivitete te ndryshme jashte kurrikulare per relaksim. Zakonisht
                            orgaizohen kampe te ndryshme, ne te cilat studentet kane mundesi
                            te zgjerojne aftesite e tyre shoqerore dhe komunikuese.
                        </h5>
                    </a>
                </div>

            </div>
            <div class="news">
            <?php
                    include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\manage projects - admin\printNews.php');
                    include_once('D:\xampp\htdocs\Projekti\ProjektiPHP\manage projects - admin\dbNews.php');
                    $newsdb = new DBNews();
                    $news = $newsdb->getNews();
                    foreach($news as $new){
                        $Imgsrc = $new['imgSrc'];
                        $name = $new['name'];
                        $description = $new['description'];
                        printNews($Imgsrc, $name,$description);
                    }
                ?>
            </div>
        </main>
        <footer style="margin-top: 300px;">
            <a href="http://localhost:8080/Projekti/ProjektiPHP/home.php"><img src="http://localhost:8080/Projekti/ProjektiPHP/Professional-IT-School-1/images/start-smart-website-favicon-white.png"></a>
            <div class="first-content">
                <a href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124"><p>Lagjja Kalabria,10000 Prishtine, Kosovo</p></a>
            </div>
            <div class="second-content">
                <p>+383 38 541 400</p>
            </div>
            <div class="third-content">
                <a href="https://mail.google.com/"><p>startsmartacademy@gmail.com</p></a>
            </div>
            <p id="legal">© COPYRIGHT 2022. START SMART ACADEMY. ALL RIGHTS RESERVED.</p>
        </footer>
    </body>
</html>

