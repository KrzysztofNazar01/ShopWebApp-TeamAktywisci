<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.handler.product' shared service.

return $this->services['prestashop.adapter.import.handler.product'] = new \PrestaShop\PrestaShop\Adapter\Import\Handler\ProductImportHandler(($this->services['prestashop.adapter.import.data_formatter'] ?? $this->load('getPrestashop_Adapter_Import_DataFormatterService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getAllShopIds(), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID(), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id, ($this->services['prestashop.adapter.feature.multistore'] ?? $this->load('getPrestashop_Adapter_Feature_MultistoreService.php'))->isUsed(), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->id, ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.logger'] ?? ($this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger())), ($this->services['prestashop.adapter.data_provider.employee'] ?? $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php'))->getId(), ($this->services['prestashop.adapter.database'] ?? ($this->services['prestashop.adapter.database'] = new \PrestaShop\PrestaShop\Adapter\Database())), ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ?? ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->getAddress(), ($this->services['prestashop.adapter.validate'] ?? ($this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate())), ($this->services['prestashop.adapter.tools'] ?? ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())), ($this->services['prestashop.adapter.import.image_copier'] ?? $this->load('getPrestashop_Adapter_Import_ImageCopierService.php')));