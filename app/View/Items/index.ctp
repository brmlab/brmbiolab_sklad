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

    $(document).ready(function () {
        var table = $("#items-table").DataTable({
            paging: false,
            orderMulti: true,
            info: false,
            columns: [
                {searchable: true},
                {searchable: true},
                {searchable: true},
                {searchable: true},
                {searchable: true},
                {searchable: false}
            ],
            search: {
                caseInsensitive: true
            }
        });
    });
</script>
<table id="items-table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Type</td>
        <td>Stock Quantity</td>
        <td>Placement</td>
        <td></td>
    </tr>
    </thead>
    <?php

    foreach ($items as $item) {
        printf(
            '<tr>
                <td>%d</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td class="actions">%s %s %s</td>
            </tr>',
            $item['Item']['id'],
            $item['Item']['name'],
            $item['ItemType']['name'],
            sprintf('%d %s', $item['StockHistory'][0]['amount_in_stock'], $item['StockUnitType']['name']),
            $item['StockHistory'][0]['location'],
            $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['Item']['id'])),
            $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['Item']['id'])),
            $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['Item']['id']), array(), __('Are you sure you want to delete # %s?', $item['Item']['id']))
        );
    }
    ?>

    <tfoot>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Type</td>
        <td>Stock Quantity</td>
        <td>Placement</td>
        <td></td>
    </tr>
    </tfoot>
</table>