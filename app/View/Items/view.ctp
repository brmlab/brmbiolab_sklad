<table class="dataTable">
    <tr>
        <td>ID</td>
        <td><?php echo $item['Item']['id']; ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $item['Item']['name']; ?></td>
    </tr>
    <tr>
        <td>Type</td>
        <td><?php echo $item['ItemType']['name']; ?></td>
    </tr>
    <tr>
        <td>Stock Quantity</td>
        <td><?php echo $item['StockHistory'][0]['amount_in_stock'] . ' ' . $item['StockUnitType']['name']; ?></td>
    </tr>
    <tr>
        <td>Placement</td>
        <td><?php echo $item['StockHistory'][0]['location']; ?></td>
    </tr>
</table>
<br class="clear"/>
<hr/>
<h2>Update Stock Quantity and Placement</h2>
<?php
echo $this->Form->create('StockHistory');
echo $this->Form->hidden('item_id', array('value' => $item['Item']['id']));
echo $this->Form->inputs(array(), array('created', 'modified', 'item_id'));
echo $this->Form->end(__('Save'));
?>
<br class="clear"/>
<hr/>
<h2>Item Stock History</h2>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#item-stock-history").DataTable({
            paging: false,
            orderMulti: true,
            info: false,
            columns: [
                {searchable: true},
                {searchable: true},
                {searchable: true},
                {searchable: true},
            ],
            order: [
                [3, 'desc']
            ],
            search: {
                caseInsensitive: true
            }
        });
    });
</script>
<table id="item-stock-history">
    <thead>
    <tr>
        <td>ID</td>
        <td>Quantity</td>
        <td>Placement</td>
        <td>When</td>
    </tr>
    </thead>
    <?php
    foreach ($item['StockHistory'] as $history) {
        printf(
            '<tr>
                <td>%d</td>
                <td>%d</td>
                <td>%s</td>
                <td>%s</td>
            </tr>',
            $history['id'],
            $history['amount_in_stock'],
            $history['location'],
            $history['created']
        );
    }
    ?>
    <tfoot>
    <tr>
        <td>ID</td>
        <td>Quantity</td>
        <td>Placement</td>
        <td>When</td>
    </tr>
    </tfoot>
</table>