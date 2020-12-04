<?php
include "commentsContainer.php";
include "database.php";

$db = new DataBase();

if(isset($_POST['userName'])) {
    $db->insertComment($_POST['userName'], $_POST['comment']);
}

$commentsFromDB = $db->selectLastThreeComments();
$commentsContainer = new CommentsContainer($commentsFromDB);

include "header.php"
?>

<section class="comments">

    <div class="comments-container">
        <?php $commentsContainer->showComments() ?>
    </div>

    <hr>

    <div class="leave-a-comment">
        <h2 class="leave-a-comment__title">Оставить комментарий</h2>

        <form action="" method="post">
            <label for="userName">Ваше имя</label>
            <input type="text" name="userName" value="Герасим" class="name-field">
            <label>Ваш комментарий</label>
            <textarea name="comment" class="message"></textarea>
            <input class="button" type="submit" value="Отправить">
        </form>
    </div>
</section>

<?php include "footer.php" ?>


