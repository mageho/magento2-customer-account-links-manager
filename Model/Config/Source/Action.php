<?php
/**
 * Copyright © 2017 MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagePal\CustomerAccountLinksManager\Model\Config\Source;

class Action implements \Magento\Framework\Option\ArrayInterface
{
    const EXCLUDE_SELECTED = 1;
    const INCLUDE_SELECTED = 2;

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => self::EXCLUDE_SELECTED,
                'label' => __('Hide all selected links')
            ],
            [
                'value' => self::INCLUDE_SELECTED,
                'label' => __('Display only links selected')
            ],
        ];

    }

}
