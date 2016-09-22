<?= $this->layout('layouts/admin'); ?>

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
                <?php
                $idSelector = "theID-{$post['id']}";
                $authorSelector = "author-{$post['id']}";
                $titleSelector = "title-{$post['id']}";
                $contentSelector = "content-{$post['id']}";
                ?>
                <!-- Section title
                ================================================== -->
                <div class="col-sm-12">
                    <div class="section-title ">
                        <h5 style="margin-bottom: 60px;" id="<?php echo "header-{$post['title']}"; ?>"><?php echo $post['title']; ?></h5>
                        <form role="form" action="<?php echo $urlToPost; ?>" method="post">
                            <div style="text-align: left" class="form-group">
                                <label for="<?php echo $idSelector; ?>">ID: </label>
                                <input class="form-control" type="text" name="theID" id="<?php echo $idSelector ?>"
                                       value="<?php echo $post['id']; ?>" readonly>
                            </div>
                            <div style="text-align: left" class="form-group">
                                <label for="<?php echo $authorSelector; ?>">Author: </label>
                                <input class="form-control" type="text" name="author"
                                       id="<?php echo $authorSelector; ?>"
                                       value="<?php echo $post['author']; ?>">
                            </div>
                            <div style="text-align: left" class="form-group">
                                <label for="<?php echo $titleSelector; ?>">Title: </label>
                                <input class="form-control" type="text" name="title"
                                       id="<?php echo $titleSelector; ?>"
                                       value="<?php echo $post['title']; ?>">
                            </div>
                            <hr>
                            <div style="text-align: left" class="form-group">
                                <label for="<?php echo $contentSelector; ?>">Content: </label>
                                <textarea rows="20" class="form-control mytextarea" name="content"
                                          id="<?php echo $contentSelector; ?>">
                                    <?php echo $post['content']; ?>
                                </textarea>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success">
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
