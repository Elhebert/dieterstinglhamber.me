<?php

namespace Parser\Renderer;

use League\CommonMark\Util\Xml;
use League\CommonMark\HtmlElement;
use League\CommonMark\Block\Element\ListBlock;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\BlockRendererInterface;

class ListBlockRenderer implements BlockRendererInterface
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        if (!($block instanceof ListBlock)) {
            throw new \InvalidArgumentException('Incompatible block type: ' . get_class($block));
        }

        $listData = $block->getListData();
        $tag = $listData->type === ListBlock::TYPE_UNORDERED ? 'ul' : 'ol';
        $attrs = [
            'class' => 'mb-8',
        ];

        foreach ($block->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        if ($listData->start !== null && $listData->start !== 1) {
            $attrs['start'] = (string) $listData->start;
        }

        return new HtmlElement(
            $tag,
            $attrs,
            $htmlRenderer->getOption('inner_separator', "\n") . $htmlRenderer->renderBlocks(
                $block->children(),
                $block->isTight()
            ) . $htmlRenderer->getOption('inner_separator', "\n")
        );
    }
}
