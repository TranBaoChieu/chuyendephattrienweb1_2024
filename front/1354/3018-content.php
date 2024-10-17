<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3018">

    <div class="container">
        <!-- Share Section -->
        <div class="share-section">
            <span class="text-share">Share this :</span>
            <a class="icon facebook" href="#"><i class="fab ti-facebook"></i></a>
            <a class="icon twitter" href="#"><i class="fab ti-twitter"></i></a>
            <a class="icon linkedin" href="#"><i class="fab ti-linkedin"></i></a>
            <a class="icon skype" href="#"><i class="fab ti-skype"></i></a>
        </div>

        <!-- Author Section -->
        <div class="author-section">
            <img src="./img/avatar.png" alt="Author Image" class="author-img">
            <div class="author-info">
                <h4 class="header-author">Natalie Stanley</h4>
                <p class="desc-author">Hi, this is dummy biographical info for the design template kit moxcreative. If
                    any questions do hesitate
                    to send us a message on the profile page ThemeForest.</p>
            </div>
        </div>

        <!-- Comment Section -->
        <div class="comment-section">
            <h3 class="header-comment">Leave a Reply</h3>
            <p class="content-comment">Your email address will not be published. Required fields are marked *</p>
            <form action="#" method="POST">
                <label for="comment">Comment *</label>
                <textarea class="desc-comment" name="comment" placeholder="Comment *" required></textarea>
                <label for="comment">Name *</label>
                <input class="input-comment name" type="text" name="name" placeholder="Name *" required>
                <label for="comment">Email *</label>
                <input class="input-comment email" type="email" name="email" placeholder="Email *" required>
                <label for="comment">Website *</label>
                <input class="input-comment website" type="url" name="website" placeholder="Website">
                <div class="checkbox">
                    <input type="checkbox" name="save-info" id="save-info">
                    <label for="save-info">Save my name, email, and website in this browser for the next time I
                        comment.</label>
                </div>
                <button type="submit" class="post-comment">Post Comment</button>
            </form>
        </div>
    </div>
</div>