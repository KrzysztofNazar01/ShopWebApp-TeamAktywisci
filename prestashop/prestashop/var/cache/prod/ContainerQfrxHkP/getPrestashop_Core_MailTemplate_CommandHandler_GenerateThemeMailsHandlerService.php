<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.mail_template.command_handler.generate_theme_mails_handler' shared service.

return $this->services['prestashop.core.mail_template.command_handler.generate_theme_mails_handler'] = new \PrestaShop\PrestaShop\Core\Domain\MailTemplate\CommandHandler\GenerateThemeMailTemplatesCommandHandler(($this->services['prestashop.core.admin.lang.repository'] ?? $this->load('getPrestashop_Core_Admin_Lang_RepositoryService.php')), ($this->services['prestashop.core.mail_template.theme_folder_catalog'] ?? $this->load('getPrestashop_Core_MailTemplate_ThemeFolderCatalogService.php')), ($this->services['prestashop.core.mail_template.generator'] ?? $this->load('getPrestashop_Core_MailTemplate_GeneratorService.php')), (\dirname(__DIR__, 4).'/mails'), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_PS_MODULE_DIR_"));
