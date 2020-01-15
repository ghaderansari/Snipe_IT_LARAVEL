<?php

return array(

    'does_not_exist' => 'Статус актива не существует.',
    'assoc_users'	 => 'Данный статус связан с одним или несколькими активами, и не может быть удален. Удалите либо измените связанные активы. ',
    'assoc_assets'	 => 'Это месторасположение связано как минимум с одним активом и не может быть удалено. Измените ваши активы так, чтобы они не ссылались на это месторасположение и попробуйте ещё раз. ',
    'assoc_child_loc'	 => 'У этого месторасположения является родительским и у него есть как минимум одно месторасположение уровнем ниже. Поэтому оно не может быть удалено. Обновите ваши месторасположения, так чтобы не ссылаться на него и попробуйте снова. ',


    'create' => array(
        'error'   => 'Статус актива не был создан, попробуйте еще раз.',
        'success' => 'Статус актива успешно создан.'
    ),

    'update' => array(
        'error'   => 'Статус актива не был обновлен, попробуйте еще раз',
        'success' => 'Статус актива успешно обновлен.'
    ),

    'delete' => array(
        'confirm'   	=> 'Вы уверено, что хотите удалить этот статус?',
        'error'   => 'При удалении статуса актива произошла ошибка. Попробуйте еще раз.',
        'success' => 'Статус актива успешно удален.'
    )

);
