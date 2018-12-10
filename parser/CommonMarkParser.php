<?php

namespace Parser;

use Parser\Renderer\LinkRenderer;
use League\CommonMark\Environment;
use Parser\Renderer\ImageRenderer;
use Parser\Renderer\HeadingRenderer;
use Parser\Renderer\ListBlockRenderer;
use Parser\Renderer\ParagraphRenderer;
use Parser\Renderer\BlockQuoteRenderer;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Inline\Element\Link;
use Mni\FrontYAML\Markdown\MarkdownParser;
use Parser\Renderer\ThematicBreakRenderer;
use League\CommonMark\Inline\Element\Image;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\Block\Element\ListBlock;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\Block\Element\BlockQuote;
use League\CommonMark\Block\Element\FencedCode;
use League\CommonMark\Block\Element\IndentedCode;
use League\CommonMark\Block\Element\ThematicBreak;
use Spatie\CommonMarkHighlighter\FencedCodeRenderer;
use Spatie\CommonMarkHighlighter\IndentedCodeRenderer;

class CommonMarkParser implements MarkdownParser
{
    public function __construct()
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addBlockRenderer(FencedCode::class, new FencedCodeRenderer());
        $environment->addBlockRenderer(IndentedCode::class, new IndentedCodeRenderer());
        $environment->addBlockRenderer(Paragraph::class, new ParagraphRenderer());
        $environment->addInlineRenderer(Link::class, new LinkRenderer());
        $environment->addBlockRenderer(ThematicBreak::class, new ThematicBreakRenderer());
        $environment->addBlockRenderer(Heading::class, new HeadingRenderer());
        $environment->addBlockRenderer(BlockQuote::class, new BlockQuoteRenderer());
        $environment->addBlockRenderer(ListBlock::class, new ListBlockRenderer());
        $environment->addInlineRenderer(Image::class, new ImageRenderer());

        $this->parser = new CommonMarkConverter([], $environment);
    }

    public function parse($markdown)
    {
        return $this->parser->convertToHtml($markdown);
    }
}
