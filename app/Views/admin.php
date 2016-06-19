<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>

Dashboard

<?php $this->stop() ?>

<!-- Navigation section
================================================== -->
<section style="background-color: indianred;" class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="http://www.codeburrow.com">
                <div id="logo" class="smoothScroll navbar-brand"></div>
            </a>
        </div>
    </div>
</section>


<div style="margin-bottom: 150px;" id="top" class="parallax-section">
</div>

<!-- Articles section
================================================== -->
<section style="margin-top: 150px;" id="articles" class="parallax-section">
    <div class="container">
        <div class="row">

            <?php foreach ($posts as $post) { ?>
                <!-- Section title
                ================================================== -->
                <div class="col-sm-12">
                    <div class="section-title">
                        <form action="/admin.php" method="post">
                            <label for="author">Author: </label>
                            <input type="text" name="author" id="author" placeholder="<?php echo $post['author']; ?>">

                            <label for="title">Title: </label>
                            <input type="text" name="title" id="title" placeholder="<?php echo $post['title']; ?>">
                            <hr>

                            <label for="content">Content: </label>
                            <textarea rows="10" cols="10"><input type="text" name="content" id="content" placeholder="<?php echo $post['content']; ?>"></textarea>

                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
