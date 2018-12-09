<?php

namespace Parser;

use League\CommonMark\Environment;
use Parser\Renderer\ParagraphRenderer;
use League\CommonMark\CommonMarkConverter;
use Mni\FrontYAML\Markdown\MarkdownParser;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\Block\Element\FencedCode;
use League\CommonMark\Block\Element\IndentedCode;
use Spatie\CommonMarkHighlighter\FencedCodeRenderer;
use Spatie\CommonMarkHighlighter\IndentedCodeRenderer;

class CommonMarkParser implements MarkdownParser
{
    public function __construct()
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addBlockRenderer(
            FencedCode::class,
            new FencedCodeRenderer(['html', 'js', 'php'])
        );
        $environment->addBlockRenderer(
            IndentedCode::class,
            new IndentedCodeRenderer(['html', 'js', 'php'])
        );
        $environment->addBlockRenderer(
            Paragraph::class,
            new ParagraphRenderer()
        );

        $this->parser = new CommonMarkConverter([], $environment);
    }

    public function parse($markdown)
    {
        return $this->parser->convertToHtml($markdown);
    }
}
