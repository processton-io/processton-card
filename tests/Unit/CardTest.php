<?php

namespace Processton\ProcesstonCard\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Processton\ProcesstonCard\ProcesstonCard;

class CardTest extends TestCase
{
    public function test_card(): void
    {
        $content = ProcesstonCard::generateCard(
            ProcesstonCard::generateCardHeader(
                'Title',
                'Sub Title',
                'image.com/dummy',
                'icon',
                [
                    [
                        'label' => 'Action',
                        'url' => 'abc.com'
                    ]
                ],
                'Some Additional Content Here'
            ),
            ProcesstonCard::generateCardBody(
                'Some Body Context Here',
                [
                    [
                        'label' => 'Action',
                        'url' => 'abc.com'
                    ]
                ]
            ),
            ProcesstonCard::generateCardFooter(
                'Some Footer Context Here',
                [
                    [
                        'label' => 'Action',
                        'url' => 'abc.com'
                    ]
                ]
            )
        );

        $expected = [
            'type' => 'card',
            'title' => '',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'name' => '',
            'data' => [
                'header' => [
                    'title' => 'Title',
                    'subtitle' => 'Sub Title',
                    'image' => 'image.com/dummy',
                    'icon' => 'icon',
                    'actions' => [
                        [
                            'label' => 'Action',
                            'url' => 'abc.com'
                        ]
                    ],
                    'content' => 'Some Additional Content Here',
                ],
                'body' => [
                    'actions' => [
                        [
                            'label' => 'Action',
                            'url' => 'abc.com'
                        ]
                    ],
                    'content' => 'Some Body Context Here'
                ],
                'footer' => [
                    'actions' => [
                        [
                            'label' => 'Action',
                            'url' => 'abc.com'
                        ]
                    ],
                    'content' => 'Some Footer Context Here'
                ],
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }


    public function test_card_from_url(): void
    {
        $content = ProcesstonCard::generateCardFromURL(
            'abc.com/xyz'
        );

        $expected = [
            'type' => 'card',
            'title' => '',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => 'abc.com/xyz',
                'attachments' => [],
            ],
            'name' => '',
            'data' => [],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_card_data(): void
    {
        $content = ProcesstonCard::generateCardData(
            ProcesstonCard::generateCardHeader('Title'),
            ProcesstonCard::generateCardBody('Body'),
            ProcesstonCard::generateCardFooter('Footer')
        );

        $expected = [
            'header' => [
                'title' => 'Title',
                'subtitle' => '',
                'image' => '',
                'icon' => '',
                'actions' => [],
                'content' => '',
            ],
            'body' => [
                'actions' => [],
                'content' => 'Body'
            ],
            'footer' => [
                'actions' => [],
                'content' => 'Footer'
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_card_header(): void
    {
        $content = ProcesstonCard::generateCardHeader('Title');

        $expected = [
            'title' => 'Title',
            'subtitle' => '',
            'image' => '',
            'icon' => '',
            'actions' => [],
            'content' => '',
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_card_body(): void
    {
        $content = ProcesstonCard::generateCardBody('Body');

        $expected = [
            'actions' => [],
            'content' => 'Body'
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_card_footer(): void
    {
        $content = ProcesstonCard::generateCardFooter('Footer');

        $expected = [
            'actions' => [],
            'content' => 'Footer'
        ];

        $this->assertEquals($expected, $content);

    }

}