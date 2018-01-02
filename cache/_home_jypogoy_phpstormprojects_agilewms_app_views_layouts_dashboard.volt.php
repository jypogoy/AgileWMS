<?= $this->partial('header.phtml') ?>
<?php include "sidebar.phtml" ?> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php echo $this->getContent(); ?>
</div>

<?php include "footer.phtml" ?>