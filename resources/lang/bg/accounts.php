<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'настройки',
        'username' => 'потребителско име',

        'avatar' => [
            'title' => 'Аватар',
            'rules' => 'Моля, уверете се, че вашият аватар се придържда към :link.<br/>Това означава, че задължително трябва да бъде <strong>подходящ за всички възрасти</strong>. т.е. няма голота, ругатни или внушаващо съдържание.',
            'rules_link' => 'обществените правила',
        ],

        'email' => [
            'current' => 'текущ имейл',
            'new' => 'нов имейл',
            'new_confirmation' => 'потвърди новия имейл',
            'title' => 'Имейл',
        ],

        'password' => [
            'current' => 'текуща парола',
            'new' => 'нова парола',
            'new_confirmation' => 'потвърди новата парола',
            'title' => 'Парола',
        ],

        'profile' => [
            'title' => 'Профил',

            'user' => [
                'user_discord' => '',
                'user_from' => 'настоящо местонахождение',
                'user_interests' => 'интереси',
                'user_occ' => 'работа/занимание',
                'user_twitter' => '',
                'user_website' => 'уеб сайт',
            ],
        ],

        'signature' => [
            'title' => 'Подпис',
            'update' => 'обнови',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'покажи известие за нови проблеми при квалифицирани бийтмапове от следния режим на игра',
        'beatmapset_disqualify' => 'покажи известие, когато бийтмапове от следния режим на игра са дисквалифицирани',
        'comment_reply' => 'покажи известие при отговор на моите коментари',
        'title' => 'Известия',
        'topic_auto_subscribe' => 'автоматично включи известията за всяка новосъздадена от мен форумна тема',

        'options' => [
            '_' => 'опции за доставка',
            'beatmap_owner_change' => 'трудност от гост',
            'beatmapset:modding' => 'бийтмап modding',
            'channel_message' => 'лично съобщение',
            'comment_new' => 'нов коментар',
            'forum_topic_reply' => 'отговор на тема',
            'mail' => 'поща',
            'mapping' => 'бийтмап mapper',
            'push' => 'push',
            'user_achievement_unlock' => 'нов отключен медал',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'оторизирани клиенти',
        'own_clients' => 'собствени клиенти',
        'title' => 'OAuth',
    ],

    'options' => [
        'beatmapset_show_nsfw' => 'скрий предупрежденията за бийтмапове с чувствително съдържание',
        'beatmapset_title_show_original' => 'покажете метаданни на beatmap на оригиналния език',
        'title' => 'Hастройки',

        'beatmapset_download' => [
            '_' => 'тип на теглене на бийтмапове по подразбиране',
            'all' => 'с видео при наличност',
            'direct' => 'отвори в osu!direct',
            'no_video' => 'без видео',
        ],
    ],

    'playstyles' => [
        'keyboard' => 'клавиатура',
        'mouse' => 'мишка',
        'tablet' => 'таблет',
        'title' => 'Стил на игра',
        'touch' => 'тъчскрийн',
    ],

    'privacy' => [
        'friends_only' => 'блокирай лични съобщения от хора с които не съм приятел',
        'hide_online' => 'скрий моето онлайн присъствие',
        'title' => 'Поверителност',
    ],

    'security' => [
        'current_session' => 'текущ',
        'end_session' => 'Прекрати сесията',
        'end_session_confirmation' => 'Това незабавно ще прекрати сесията Ви на съответното устройство. Сигурни ли сте?',
        'last_active' => 'Последно активен:',
        'title' => 'Сигурност',
        'web_sessions' => 'уеб сесии',
    ],

    'update_email' => [
        'update' => 'обнови',
    ],

    'update_password' => [
        'update' => 'обнови',
    ],

    'verification_completed' => [
        'text' => 'Можете да затворите този раздел сега',
        'title' => 'Проверката на потребителя е завършена',
    ],

    'verification_invalid' => [
        'title' => 'Невалидна или изтекла връзка за потвърждение',
    ],
];
