<?php
$id = $data['id'];
$_SESSION['category_id'] = $id;
echo '<script type = "text/javascript">
        window.location.href = "<?php echo Utils\BASE_URL ?>/home/catalog"</script>';

