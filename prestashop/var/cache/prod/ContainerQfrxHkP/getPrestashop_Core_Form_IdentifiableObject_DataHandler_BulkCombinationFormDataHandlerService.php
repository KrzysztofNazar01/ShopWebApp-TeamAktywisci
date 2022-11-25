<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_handler.bulk_combination_form_data_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_handler.bulk_combination_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\BulkCombinationFormDataHandler(($this->services['prestashop.core.command_bus'] ?? $this->load('getPrestashop_Core_CommandBusService.php')), ($this->services['prestashop.core.form.data_formatter.bulk_combination_form_data_formatter'] ?? ($this->services['prestashop.core.form.data_formatter.bulk_combination_form_data_formatter'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter\BulkCombinationFormDataFormatter())), ($this->services['prestashop.core.form.command_builder.combination.combination_commands_builder'] ?? $this->load('getPrestashop_Core_Form_CommandBuilder_Combination_CombinationCommandsBuilderService.php')));
