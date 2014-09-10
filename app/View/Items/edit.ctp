<?php

echo $this->Form->create('Item');
echo $this->Form->inputs(array(), array('created', 'modified'));
echo $this->Form->end(__('Save'));