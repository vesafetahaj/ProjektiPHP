<?php
require_once 'D:\xampp\htdocs\Projekti\ProjektiPHP\Professional-IT-School-1\html\news.html';
require_once('D:\xampp\htdocs\Projekti\ProjektiPHP\database\database\databaseConnection.php');
class News{
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
$news = new News();
$news->savePDFsToDatabase();

?>