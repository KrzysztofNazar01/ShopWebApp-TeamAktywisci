<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Webservice', 3 => 'PrestaShopBundle\\Form\\Admin\\Type', 4 => 'PrestaShopBundle\\Form\\Admin\\Category', 5 => 'PrestaShopBundle\\Form\\Admin\\Feature', 6 => 'PrestaShopBundle\\Form\\Admin\\Product', 7 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices', 8 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance', 9 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General', 10 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration', 11 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences', 12 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences', 13 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\CustomerPreferences', 14 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences', 15 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Import', 16 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Delivery', 17 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization', 18 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation', 19 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Payment\\Preferences', 20 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email', 21 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations', 22 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta', 23 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Category', 24 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Employee', 25 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql', 26 => 'PrestaShopBundle\\Form\\Admin\\Type\\Common\\Team', 27 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme', 28 => 'PrestaShopBundle\\Form\\Admin\\Catalog\\Category', 29 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Backup', 30 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer', 31 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Currencies', 32 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Language', 33 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax', 34 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\Contact', 35 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages', 36 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Manufacturer', 37 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address', 38 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\MailTheme', 39 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order', 40 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Supplier', 41 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CatalogPriceRule', 42 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Catalog', 43 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService', 44 => 'PrestaShopBundle\\Form\\Admin\\CustomerService\\CustomerThread', 45 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CreditSlip', 46 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Attachment', 47 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Profile', 48 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product', 49 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Description', 50 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Image', 51 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category', 52 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification', 53 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock', 54 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Shipping', 55 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing', 56 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\SEO', 57 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options', 58 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination', 59 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderStates', 60 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderReturnStates', 61 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Logs', 62 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\SearchEngines', 63 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Locations', 64 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\FeatureFlag', 65 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Security', 66 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService\\MerchandiseReturn', 67 => 'PrestaShop\\Module\\LinkList\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 4 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Webservice\\WebserviceKeyType', 5 => 'PrestaShopBundle\\Form\\Admin\\Type\\DatePickerType', 6 => 'PrestaShopBundle\\Form\\Admin\\Type\\NavigationTabType', 7 => 'PrestaShopBundle\\Form\\Admin\\Type\\EmailType', 8 => 'PrestaShopBundle\\Form\\Admin\\Type\\DateRangeType', 9 => 'PrestaShopBundle\\Form\\Admin\\Category\\SimpleCategory', 10 => 'PrestaShopBundle\\Form\\Admin\\Type\\ChoiceCategoriesTreeType', 11 => 'PrestaShopBundle\\Form\\Admin\\Type\\TranslateType', 12 => 'PrestaShopBundle\\Form\\Admin\\Feature\\ProductFeature', 13 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductAttachement', 14 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombination', 15 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCustomField', 16 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductInformation', 17 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductOptions', 18 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice', 19 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductQuantity', 20 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSeo', 21 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping', 22 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSpecificPrice', 23 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductSupplierCombination', 24 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductVirtual', 25 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductWarehouseCombination', 26 => 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductCollectionType', 27 => 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductPackCollectionType', 28 => 'PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadCustomerCollectionType', 29 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCombinationBulk', 30 => 'PrestaShopBundle\\Form\\Admin\\Product\\ProductCategories', 31 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByDateType', 32 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByStatusType', 33 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\InvoiceOptionsType', 34 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\SmartyType', 35 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\DebugModeType', 36 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\OptionalFeaturesType', 37 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\CombineCompressCacheType', 38 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\MediaServersType', 39 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\MemcacheServerType', 40 => 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\CachingType', 41 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General\\PreferencesType', 42 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General\\MaintenanceType', 43 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\GeneralType', 44 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\UploadQuotaType', 45 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\NotificationsType', 46 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\HandlingType', 47 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\CarrierOptionsType', 48 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\GeneralType', 49 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\StockType', 50 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\PageType', 51 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\PaginationType', 52 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\CustomerPreferences\\GeneralType', 53 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GeneralType', 54 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType', 55 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Import\\ImportType', 56 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Delivery\\SlipPdfType', 57 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Delivery\\SlipOptionsType', 58 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\LocalizationConfigurationType', 59 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\ImportLocalizationPackType', 60 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\LocalUnitsType', 61 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\AdvancedConfigurationType', 62 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationByIpAddressType', 63 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationIpAddressWhitelistType', 64 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationOptionsType', 65 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Payment\\Preferences\\PaymentModulePreferencesType', 66 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email\\EmailConfigurationType', 67 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email\\SmtpConfigurationType', 68 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email\\DkimConfigurationType', 69 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Email\\TestEmailSendingType', 70 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\ModifyTranslationsType', 71 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\AddUpdateLanguageType', 72 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\ExportCataloguesType', 73 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\CopyLanguageType', 74 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\SetUpUrlType', 75 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\ShopUrlType', 76 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\UrlSchemaType', 77 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\SEOOptionsType', 78 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\MetaType', 79 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Category\\DeleteCategoriesType', 80 => 'PrestaShopBundle\\Form\\Admin\\Type\\YesAndNoChoiceType', 81 => 'PrestaShopBundle\\Form\\Admin\\Type\\DeltaQuantityType', 82 => 'PrestaShopBundle\\Form\\Admin\\Type\\SubmittableDeltaQuantityType', 83 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Employee\\EmployeeOptionsType', 84 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql\\SqlRequestSettingsType', 85 => 'PrestaShopBundle\\Form\\Admin\\Type\\Common\\Team\\ProfileChoiceType', 86 => 'PrestaShopBundle\\Form\\Admin\\Type\\CountryChoiceType', 87 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme\\PageLayoutsCustomizationType', 88 => 'PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\CategoryType', 89 => 'PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType', 90 => 'PrestaShopBundle\\Form\\Admin\\Type\\CategoryChoiceTreeType', 91 => 'PrestaShopBundle\\Form\\Admin\\Type\\TranslatableType', 92 => 'PrestaShopBundle\\Form\\Admin\\Type\\TranslatableChoiceType', 93 => 'PrestaShopBundle\\Form\\Admin\\Type\\ShopChoiceTreeType', 94 => 'PrestaShopBundle\\Form\\Admin\\Type\\SearchAndResetType', 95 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql\\SqlRequestType', 96 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Backup\\BackupOptionsType', 97 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\RequiredFieldsType', 98 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\TransferGuestAccountType', 99 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\CustomerType', 100 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Currencies\\CurrencyType', 101 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\DeleteCustomersType', 102 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme\\ImportThemeType', 103 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme\\AdaptThemeToRTLLanguagesType', 104 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Language\\LanguageType', 105 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Currencies\\CurrencyExchangeRateType', 106 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxOptionsType', 107 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Webservice\\WebserviceConfigurationType', 108 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\Contact\\ContactType', 109 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages\\CmsPageCategoryType', 110 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxType', 111 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Manufacturer\\ManufacturerType', 112 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Employee\\EmployeeType', 113 => 'PrestaShopBundle\\Form\\Admin\\Type\\ChangePasswordType', 114 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages\\CmsPageType', 115 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType', 116 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme\\ShopLogosType', 117 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\MailTheme\\GenerateMailsType', 118 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\MailTheme\\MailThemeConfigurationType', 119 => 'PrestaShopBundle\\Form\\Admin\\Type\\IntegerMinMaxFilterType', 120 => 'PrestaShopBundle\\Form\\Admin\\Type\\NumberMinMaxFilterType', 121 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\ChangeOrdersStatusType', 122 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Supplier\\SupplierType', 123 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CatalogPriceRule\\CatalogPriceRuleType', 124 => 'PrestaShopBundle\\Form\\Admin\\Type\\PriceReductionType', 125 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\PrivateNoteType', 126 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\InternalNoteType', 127 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\AddOrderCartRuleType', 128 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\AddProductRowType', 129 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\EditProductRowType', 130 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\UpdateOrderStatusType', 131 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\OrderPaymentType', 132 => 'PrestaShopBundle\\Form\\Admin\\Type\\AmountCurrencyType', 133 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Catalog\\FeatureType', 134 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\ChangeOrderCurrencyType', 135 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\MailTheme\\TranslateMailsBodyType', 136 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\UpdateOrderShippingType', 137 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address\\RequiredFieldsAddressType', 138 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService\\ReplyToCustomerThreadType', 139 => 'PrestaShopBundle\\Form\\Admin\\CustomerService\\CustomerThread\\ForwardCustomerThreadType', 140 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CreditSlip\\GeneratePdfByDateType', 141 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CreditSlip\\CreditSlipOptionsType', 142 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\ChangeOrderAddressType', 143 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService\\OrderMessageType', 144 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\OrderMessageType', 145 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address\\CustomerAddressType', 146 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Attachment\\AttachmentType', 147 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CancelProductType', 148 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CartSummaryType', 149 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Profile\\ProfileType', 150 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\CreateProductFormType', 151 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EditProductFormType', 152 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ProductTypeType', 153 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\HeaderType', 154 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Description\\DescriptionType', 155 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Description\\ManufacturerType', 156 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Image\\ImageDropzoneType', 157 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoryFilterType', 158 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoriesType', 159 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoryTagsCollectionType', 160 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\ProductCategoryType', 161 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification\\SpecificationsType', 162 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification\\FeaturesType', 163 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification\\FeatureValueType', 164 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification\\ReferencesType', 165 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Specification\\CustomizationsType', 166 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoryTreeSelectorType', 167 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\StockType', 168 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\QuantityType', 169 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\StockMovementType', 170 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\StockOptionsType', 171 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\VirtualProductFileType', 172 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\AvailabilityType', 173 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Shipping\\ShippingType', 174 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Shipping\\DimensionsType', 175 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Shipping\\DeliveryTimeNotesType', 176 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\PricingType', 177 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\RetailPriceType', 178 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\UnitPriceType', 179 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\PriceSummaryType', 180 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPricesType', 181 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPriceType', 182 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPriceImpactType', 183 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\ProductSpecificPricePriorityType', 184 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPricePriorityType', 185 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\ApplicableGroupsType', 186 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\SEO\\SEOType', 187 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\SEO\\SerpType', 188 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Stock\\PackedProductType', 189 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\SEO\\RedirectOptionType', 190 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\OptionsType', 191 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\VisibilityType', 192 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\CustomizationFieldType', 193 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\SuppliersType', 194 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\ProductSupplierCollectionType', 195 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\ProductSupplierType', 196 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ExtraModulesType', 197 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\FooterType', 198 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationsType', 199 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationManagerType', 200 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationAvailabilityType', 201 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationListType', 202 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationItemType', 203 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationFormType', 204 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationHeaderType', 205 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationStockType', 206 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationPriceImpactType', 207 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationImagesChoiceType', 208 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationType', 209 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationStockType', 210 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationPriceType', 211 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationReferencesType', 212 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationImagesType', 213 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderStates\\OrderStateType', 214 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderReturnStates\\OrderReturnStateType', 215 => 'PrestaShopBundle\\Form\\Admin\\Type\\LogSeverityChoiceType', 216 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Logs\\LogsByEmailType', 217 => 'PrestaShopBundle\\Form\\Admin\\Type\\UnavailableType', 218 => 'PrestaShopBundle\\Form\\Admin\\Type\\SubmittableInputType', 219 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\SearchEngines\\SearchEngineType', 220 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Locations\\ZoneType', 221 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\FeatureFlag\\FeatureFlagListType', 222 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\FeatureFlag\\FeatureFlagType', 223 => 'PrestaShopBundle\\Form\\Admin\\Type\\EntitySearchInputType', 224 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\ProductAttachmentsType', 225 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\AttachedFileType', 226 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Security\\GeneralType', 227 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Security\\PasswordPolicyType', 228 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService\\MerchandiseReturn\\MerchandiseReturnOptionsType', 229 => 'PrestaShopBundle\\Form\\Admin\\Type\\ZoneChoiceType', 230 => 'PrestaShopBundle\\Form\\Admin\\Type\\ConfigurableCountryChoiceType', 231 => 'PrestaShopBundle\\Form\\Admin\\Type\\DisablingSwitchType', 232 => 'PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType', 233 => 'PrestaShop\\Module\\LinkList\\Form\\Type\\CustomUrlType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'PrestaShopBundle\\Form\\Admin\\Extension\\CommaTransformerExtension', 9 => 'PrestaShopBundle\\Form\\Admin\\Type\\CustomMoneyType', 10 => 'PrestaShopBundle\\Form\\Admin\\Type\\ResizableTextType', 11 => 'PrestaShopBundle\\Form\\Admin\\Extension\\HelpTextExtension', 12 => 'PrestaShopBundle\\Form\\Admin\\Extension\\HintTextExtension', 13 => 'PrestaShopBundle\\Form\\Admin\\Extension\\DefaultEmptyDataExtension', 14 => 'PrestaShopBundle\\Form\\Extension\\DataListExtension', 15 => 'PrestaShopBundle\\Form\\Admin\\Extension\\RowAttributesExtension', 16 => 'PrestaShopBundle\\Form\\Admin\\Extension\\ExternalLinkExtension', 17 => 'PrestaShopBundle\\Form\\Admin\\Extension\\AlertExtension', 18 => 'PrestaShopBundle\\Form\\Admin\\Extension\\LabelOptionsExtension', 19 => 'PrestaShopBundle\\Form\\Admin\\Extension\\FormThemeExtension', 20 => 'PrestaShopBundle\\Form\\Admin\\Extension\\ColumnsNumberExtension', 21 => 'PrestaShopBundle\\Form\\Admin\\Extension\\MultistoreConfigurationTypeExtension', 22 => 'PrestaShopBundle\\Form\\Admin\\Extension\\UnitTypeExtension', 23 => 'PrestaShopBundle\\Form\\Admin\\Extension\\MultistoreExtension', 24 => 'PrestaShopBundle\\Form\\Admin\\Extension\\DownloadFileExtension', 25 => 'PrestaShopBundle\\Form\\Admin\\Extension\\AlertsTrackingExtension', 26 => 'PrestaShopBundle\\Form\\Admin\\Extension\\ModifyAllShopsExtension', 27 => 'PrestaShopBundle\\Form\\Admin\\Extension\\DisablingSwitchExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:form');

return $instance;
