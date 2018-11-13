<?php

return [
    'name'        => 'MauticExtendeeWebhookResponseBundle',
    'description' => '',
    'author'      => 'kuzmany.biz',
    'version'     => '1.0.0',
    'services' => [
        'events' => [
            'mautic.plugin.webhook.campaign.subscriber.response' => [
                'class'     => \MauticPlugin\MauticExtendeeWebhookResponseBundle\EventListener\SendWebhookSubscriber::class,
                'arguments' => [
                    'mautic.campaign.executioner.realtime',
                ],
            ],
        ],
        'others' => [
        ],
    ],
];
