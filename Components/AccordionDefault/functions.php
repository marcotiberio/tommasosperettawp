<?php

namespace Flynt\Components\AccordionDefault;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'AccordionDefault',
        'label' => 'Accordion: Default',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Accordion Panels', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Accordion Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel ID', 'flynt'),
                        'name' => 'panelId',
                        'type' => 'number'
                    ],
                    [
                        'label' => __('Panel Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Panel Project', 'flynt'),
                        'name' => 'panelProject',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Panel Credit', 'flynt'),
                        'name' => 'panelCredit',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Panel Year', 'flynt'),
                        'name' => 'panelYear',
                        'type' => 'number'
                    ],
                    [
                        'label' => __('Panel Content Info', 'flynt'),
                        'name' => 'panelContentInfo',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 0,
                    ],
                    [
                        'label' => __('Panel Content Description', 'flynt'),
                        'name' => 'panelContentDescription',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 0,
                    ],
                    [
                        'label' => __('Panel Content Gallery', 'flynt'),
                        'name' => 'panelContentGallery',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 1,
                        'delay' => 0,
                    ],
                ],
            ]
        ],
    ];
}
