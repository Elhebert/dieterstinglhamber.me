<?php

namespace Parser\Renderer;

use League\CommonMark\Util\Xml;
use League\CommonMark\HtmlElement;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\BlockRendererInterface;

class HeadingRenderer implements BlockRendererInterface
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        if (!($block instanceof Heading)) {
            throw new \InvalidArgumentException('Incompatible block type: ' . get_class($block));
        }

        $tag = 'h' . ($block->getLevel() + 2);

        $titleFontSize = 5 - $block->getLevel();
        $class = "text-{$titleFontSize}xl text-title font-normal | mb-6 pt-16";

        $attrs = [
            'class' => $class,
        ];

        foreach ($block->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        return new HtmlElement($tag, $attrs, $htmlRenderer->renderInlines($block->children()));
    }
}
