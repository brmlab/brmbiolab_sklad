<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Biolab Catalogue
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->script(array(
        '//code.jquery.com/jquery-1.10.2.min.js',
        '//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js'
    ));
    echo $this->Html->css(array(
        'reset', 'styles',
        '//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css'
    ));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="header">
        <h1><?php echo $title_for_layout; ?></h1>
        <ul id="top-menu">
            <li><?php echo $this->Html->link(__('All Items'), array('controller' => 'items', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link(__('Add Item'), array('controller' => 'items', 'action' => 'add')) ?></li>
            <li><?php echo $this->Html->link(__('Add Item Type'), array('controller' => 'item_types', 'action' => 'add')) ?></li>
            <li><?php echo $this->Html->link(__('Add Unit Type'), array('controller' => 'unit_types', 'action' => 'add')) ?></li>
        </ul>
        <br class="clear"/>
    </div>
    <div id="content">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
</div>
</body>
</html>
