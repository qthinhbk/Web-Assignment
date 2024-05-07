<h1>New Category</h1>
<?php
Utils\redirect_if_not_being_admin();
?>

<?php
require_once "../as232/mvc/views/admin/categories/form_category.php";
?>

<a href="<?php echo Utils\BASE_URL ?>/Category/index">Back</a>
