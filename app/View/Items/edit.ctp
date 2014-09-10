<?php

echo $this->Form->create('Item');
echo $this->Form->inputs(array(), array('created', 'modified', 'is_deleted'));
echo $this->Form->end(__('Save'));