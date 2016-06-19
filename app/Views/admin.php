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
                        <form role="form" action="/admin.php" method="post">
                            <div class="form-group">
                                <label for="author">Author: </label>
                                <input style="width: 90px; height: 390px;" type="text" name="author" id="author" value="<?php echo $post['author']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Title: </label>
                                <input style="width: 90px; height: 390px;" type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="content">Content: </label>
                                <input style="width: 90px; height: 390px;" type="text" name="content" id="content" value="<?php echo $post['content']; ?>">
                            </div>
                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
