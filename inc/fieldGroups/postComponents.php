<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'movieMeta',
        'title' => 'Info Movie',
        'style' => '',
        'fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titletitle',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ],
            ],
            [
                'label' => __('Project', 'flynt'),
                'name' => 'project',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ],
            ],
            [
                'label' => __('Credit', 'flynt'),
                'name' => 'credit',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ],
            ],
            [
                'label' => __('Year', 'flynt'),
                'name' => 'year',
                'type' => 'number',
                'wrapper' => [
                    'width' => '25',
                ],
            ],
            [
                'label' => __('Content Info', 'flynt'),
                'name' => 'contentInfo',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 0,
            ],
            [
                'label' => __('Content Description', 'flynt'),
                'name' => 'contentDescription',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 0,
            ],
            [
                'label' => __('Content Gallery', 'flynt'),
                'name' => 'contentGallery',
                'type' => 'gallery',
                'min' => 1,
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                'required' => 0
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'acf_after_title',
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => 'Post Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
});
