<?php echo $this->Html->link('<i class="' . $is_starred_class . '"></i><span class="hide">' . __l('Star') . '</span>', array('controller' => 'messages', 'action' => 'star', $message['Message']['id'], !$message['Message']['is_starred']), array('class' => 'js-star js-no-pjax', 'escape' => false));?>