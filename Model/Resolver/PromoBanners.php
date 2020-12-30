<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_PromoBannerGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\PromoBannerGraphQl\Model\Resolver;

use Exception;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\PromoBanner\Model\Api\PromoBannerRepository;

/**
 * Class PromoBanners
 * @package Mageplaza\PromoBannerGraphQl\Model\Resolver
 */
class PromoBanners implements ResolverInterface
{
    /**
     * @var PromoBannerRepository
     */
    private $promoBannerRepository;

    /**
     * Config constructor.
     *
     * @param PromoBannerRepository $promoBannerRepository
     */
    public function __construct(
        PromoBannerRepository $promoBannerRepository
    ) {
        $this->promoBannerRepository = $promoBannerRepository;
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        try {
            $promoBanners = $this->promoBannerRepository->getPromoBannersByPage($args['action_name']);

            return [
                'items' => $promoBanners->getItems()
            ];
        } catch (Exception $e) {
            throw new GraphQlInputException(__($e->getMessage()));
        }
    }
}
