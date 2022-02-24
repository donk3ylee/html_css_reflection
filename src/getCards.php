<?php
include_once( __DIR__ ."/bootstrap.php");

// selecting
try{

    $db = new DB;
    $conn = $db->get_connection();
    $query =    "SELECT authors.name, authors.portrait_url, posts.date_published, posts.image_url, posts.title,
                 posts.copy, posts.url, posts.category, posts.color, authors.author_id, posts.author_id
                 FROM posts
                 INNER JOIN authors
                 ON authors.author_id = posts.author_id 
                 ORDER BY posts.date_published DESC
                 LIMIT 3;";
    $data = $conn->query($query);

} catch (PDOException $e) {
    throw $e;
}


foreach($data as $row){
    ?>

    <div class="col-12 col-md-6 col-xl-4">
        <div class="item">
            <div class="img-constrainer">
                <div class="category" style="background-color:<?= $row['color'] ?>"><?= $row['category'] ?></div>
                <img class="item-img" src="<?= $row['image_url'] ?>" alt="">
            </div>
            <h2 style="color:<?= $row['color'] ?>;"><?= $row['title'] ?></h2>
            <p><?= $row['copy'] ?></p>
            <a class="url" href="<?= $row['url'] ?>">
                <div class="button" style="background-color:<?= $row['color'] ?>; border-color: <?= $row['color'] ?>;">Read More</div>
            </a>
            <hr>
            <div class="logo">
                <img src="<?= $row['portrait_url']; ?>" alt="<?= $row['name']; ?> portrait">
                <div class="cite-container">
                    <strong class="cite">Posted by <?= $row['name']; ?></strong>
                    <p class="date"><?= date_format(date_create($row['date_published']), 'jS F Y'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
}
