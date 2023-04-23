








<?php
require "Articles.php";
$objArticle = new Docs();
$articles = $objArticle->getAllArticles();

?>








<?php
foreach ($articles as $key => $article) {
?>
<div class="rows">
    <div class="col-md-12"></div>
        <div class="rows">
            <div class="col-md-12"><?php echo $article['createdOn'];  ?></div>
            <div class="col-md-10">
            <strong><?php echo $article['title '];  ?></strong>
            <p><?php echo $article['Docs_Info'];  ?></p>
            <p class="text-right"><?php echo $article['author'];  ?></p>
            </div>
        <div class="col-md-2'>
            <a href='Docs.php?aid=1'>Edit</a><br><br>
        </div>
    </div>
</div>
<?php 
}
?>