<?php

echo $this->Form->create('Item');
echo $this->Form->inputs(array(), array('created', 'modified', 'is_deleted'));
echo $this->Form->input('StockHistory.amount_in_stock');
echo $this->Form->input('StockHistory.location');
echo $this->Form->end(__('Save'));