<script type="text/javascript">
    $(document).ready(function () {
        var table = $("#item-types-table").DataTable({
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
<div id="item-type-add">
    <?php
    echo $this->Form->create('ItemType');
    echo $this->Form->inputs(array(), array('created', 'modified'));
    echo $this->Form->end(__('Submit'));
    ?>
</div>
<br class="clear"/>
<hr/>
<table id="item-types-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($itemTypes as $id => $name): ?>
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
