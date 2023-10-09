<?php

return [
    'sessions' => 'Sessions',
    'visitors' => 'Visiteurs',
    'pageviews' => 'Pages vues',
    'bounce_rate' => 'Taux de rebond',
    'page_session' => 'Pages/Session',
    'avg_duration' => 'Avg. Duration',
    'percent_new_session' => 'Percent new session',
    'new_users' => 'Nouveaux visiteurs',
    'visits' => 'visites',
    'views' => 'vues',
    'view_id_not_specified' => 'You must provide a valid view id. The document here: <a href="https://docs.puzzvel.com/cms/master/plugin-analytics" target="_blank">https://docs.puzzvel.com/cms/master/plugin-analytics</a>',
    'credential_is_not_valid' => 'Analytics credentials is not valid. The document here: <a href="https://docs.puzzvel.com/cms/master/plugin-analytics" target="_blank">https://docs.puzzvel.com/cms/master/plugin-analytics</a>',
    'start_date_can_not_before_end_date' => 'Start date :start_date cannot be after end date :end_date',
    'wrong_configuration' => 'Pour afficher les données analytiques, vous devez obtenir un identifiant de client Google Analytics et l\'ajouter à vos paramètres. <br /> Vous avez également besoin de données d\'identification JSON. <br /> The document here: <a href="https://docs.puzzvel.com/cms/master/plugin-analytics" target="_blank">https://docs.puzzvel.com/cms/master/plugin-analytics</a>',
    'settings' => [
        'title' => 'Google Analytics',
        'description' => 'Config Credentials for Google Analytics',
        'tracking_code' => 'Tracking ID',
        'tracking_code_placeholder' => 'Example: GA-12586526-8',
        'view_id' => 'View ID',
        'view_id_description' => 'Google Analytics View ID',
        'json_credential' => 'Service Account Credentials',
        'json_credential_description' => 'Service Account Credentials',
    ],
    'widget_analytics_page' => 'Pages les plus visitées',
    'widget_analytics_browser' => 'Les meilleurs navigateurs',
    'widget_analytics_referrer' => 'Principaux référents',
    'widget_analytics_general' => 'Site Analytics',
];
