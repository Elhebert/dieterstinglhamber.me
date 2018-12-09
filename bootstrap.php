<?php

use Parser\CommonMarkParser;
use TightenCo\Jigsaw\Jigsaw;
use Mni\FrontYAML\Markdown\MarkdownParser;

// @var $container \Illuminate\Container\Container
// @var $events \TightenCo\Jigsaw\Events\EventBus

$container->bind(MarkdownParser::class, CommonMarkParser::class);

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */
