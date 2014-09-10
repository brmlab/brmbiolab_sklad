<script type="text/javascript">
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