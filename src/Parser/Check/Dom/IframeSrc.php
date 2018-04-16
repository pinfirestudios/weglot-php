<?php

namespace Weglot\Parser\Check\Dom;

use Weglot\Client\Api\Enum\WordType;
use Weglot\Parser\Util\Text as TextUtil;

/**
 * Class IframeSrc
 * @package Weglot\Parser\Check\Dom
 */
class IframeSrc extends AbstractDomChecker
{
    /**
     * {@inheritdoc}
     */
    const DOM = 'iframe';

    /**
     * {@inheritdoc}
     */
    const PROPERTY = 'src';

    /**
     * {@inheritdoc}
     */
    const WORD_TYPE = WordType::IFRAME_SRC;

    /**
     * {@inheritdoc}
     */
    protected function check()
    {
        return TextUtil::contains(TextUtil::fullTrim($this->node->src), '.youtube.');
    }
}
