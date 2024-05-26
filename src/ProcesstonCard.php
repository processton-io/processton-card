<?php

namespace Processton\ProcesstonCard;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ProcesstonCard
{
    
    public static function generateCard(
        $header = [],
        $body = [],
        $footer = [],
        $attachments = [],
        $width = false
    ){
        return ProcesstonInteraction::generateElement(
            'card',
            '',
            self::generateCardData(
                $header,
                $body,
                $footer
            ),
            '',
            $attachments,
            [],
            $width
        );
    }

    public static function generateCardFromURL(
        $srcOfData = '',
        $attachments = [],
        $width = false
    ) {
        return ProcesstonInteraction::generateElementByUrl(
            $srcOfData,
            '',
            '',
            'card',
            $attachments,
            [],
            $width
        );
    }

    public static function generateCardData(
        $header = [],
        $body = [],
        $footer = []
    ){
        return [
            'header' => $header,
            'body' => $body,
            'footer' => $footer,
        ];
    }

    public static function generateCardHeader(
        $title,
        $subtitle = '',
        $image = '',
        $icon = '',
        $actions = [],
        $content = ''
    ){
        return [
            'title' => $title,
            'subtitle' => $subtitle,
            'image' => $image,
            'icon' => $icon,
            'actions' => $actions,
            'content' => $content,
        ];
    }

    public static function generateCardBody(
        $content = '',
        $actions = []
        
    ){
        return [
            'actions' => $actions,
            'content' => $content,
        ];
    }

    public static function generateCardFooter(
        $content = '',
        $actions = []
    ){
        return [
            'actions' => $actions,
            'content' => $content,
        ];
    }
}
