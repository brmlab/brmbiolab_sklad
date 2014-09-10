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
        '//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js',
        '//cdn.datatables.net/plug-ins/725b2a2115b/filtering/type-based/accent-neutralise.js'
    ));
    echo $this->Html->css(array(
        'reset', 'styles',
        '//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css'
    ));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script type="text/javascript">
        jQuery.fn.DataTable.ext.type.search.string = function (data) {
            return !data ?
                '' :
                typeof data === 'string' ?
                    data
                        .replace(/\n/g, ' ')
                        .replace(/á/g, 'a')
                        .replace(/é/g, 'e')
                        .replace(/í/g, 'i')
                        .replace(/ó/g, 'o')
                        .replace(/ú/g, 'u')
                        .replace(/ê/g, 'e')
                        .replace(/î/g, 'i')
                        .replace(/ô/g, 'o')
                        .replace(/è/g, 'e')
                        .replace(/ï/g, 'i')
                        .replace(/ü/g, 'u')
                        .replace(/ě/g, 'e')
                        .replace(/š/g, 's')
                        .replace(/č/g, 'c')
                        .replace(/ř/g, 'r')
                        .replace(/ž/g, 'z')
                        .replace(/ý/g, 'y')
                        .replace(/ö/g, 'o')
                        .replace(/ä/g, 'a')
                        .replace(/ň/g, 'n')
                        .replace(/Ě/g, 'e')
                        .replace(/Š/g, 's')
                        .replace(/Č/g, 'c')
                        .replace(/Ř/g, 'r')
                        .replace(/Ž/g, 'z')
                        .replace(/Ý/g, 'y')
                        .replace(/Á/g, 'a')
                        .replace(/Í/g, 'i')
                        .replace(/É/g, 'e')
                        .replace(/Ň/g, 'n')
                        .replace(/Ť/g, 't')
                        .replace(/Ď/g, 'd')
                        .replace(/ç/g, 'c') :
                    data;
        };
    </script>
</head>
<body>
<div id="container">
    <div id="header">
        <h1><?php echo $title_for_layout; ?></h1>
        <ul id="top-menu">
            <li><?php echo $this->Html->link(__('All Items'), array('controller' => 'items', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link(__('Add Item'), array('controller' => 'items', 'action' => 'add')) ?></li>
            <li><?php echo $this->Html->link(__('Add Item Type'), array('controller' => 'item_types', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link(__('Add Unit Type'), array('controller' => 'stock_unit_types', 'action' => 'index')) ?></li>
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
