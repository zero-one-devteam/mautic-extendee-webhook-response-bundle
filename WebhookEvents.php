<?php

/*
 * @copyright   Mautic, Inc
 * @author      Mautic, Inc
 *
 * @link        http://mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticExtendeeWebhookResponseBundle;

/**
 * Class MauticWebhookEvents
 * Events available for MauticWebhookBundle.
 */
final class WebhookEvents
{
    /**
     * The mautic.webhook.campaign_on_trigger_decision event is dispatched when the campaign condition triggers.
     *
     * The event listener receives a
     * Mautic\CampaignBundle\Event\CampaignTriggerEvent instance.
     *
     * @var string
     */
    const ON_CAMPAIGN_TRIGGER_DECISION = 'mautic.plugin.webhook.campaign_on_trigger_decision';
}
