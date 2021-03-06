<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Bundle\ChannelBundle\Form\Type;

use Integrated\Common\Form\Type\ActionsType as BaseActionsType;

/**
 * @author Jan Sanne Mulder <jansanne@e-active.nl>
 */
class ActionsType extends BaseActionsType
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('integrated_channel_actions', [
            'create' => [
                'type' => 'submit',
                'options' => ['label' => 'form.actions.create', 'translation_domain' => 'IntegratedChannelBundle']
            ],
            'save'   => [
                'type' => 'submit',
                'options' => ['label' => 'form.actions.save', 'translation_domain' => 'IntegratedChannelBundle']
            ],
            'delete' => [
                'type' => 'submit',
                'options' => ['label' => 'form.actions.delete', 'translation_domain' => 'IntegratedChannelBundle']
            ],
            'cancel' => [
                'type' => 'submit',
                'options' => [
                    'label' => 'form.actions.cancel',
                    'translation_domain' => 'IntegratedChannelBundle',
                    'button_class' => 'default'
                ]
            ],
        ]);
    }
}
