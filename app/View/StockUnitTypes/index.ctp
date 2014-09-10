<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#item-units-table").DataTable({
            paging: false,
            orderMulti: true,
            info: false,
            columns: [
                {searchable: true},
                {searchable: true}
            ],
            search: {
                caseInsensitive: true
            }
        });
    });
</script>
<div id="item-units-add">
    <?php
    echo $this->Form->create('StockUnitType');
    echo $this->Form->inputs(array(), array('created', 'modified'));
    echo $this->Form->end(__('Submit'));
    ?>
</div>
<br class="clear"/>
<hr/>
<table id="item-units-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $id => $name): ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </tfoot>
</table>
