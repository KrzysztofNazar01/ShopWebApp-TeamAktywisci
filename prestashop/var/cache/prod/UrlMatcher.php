<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/common/notifications' => [[['_route' => 'admin_common_notifications', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::notificationsAction', '_legacy_controller' => 'AdminCommon', '_legacy_link' => 'AdminCommon'], null, ['POST' => 0], null, false, false, null]],
        '/common/notifications/ack' => [[['_route' => 'admin_common_notifications_ack', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::notificationsAckAction'], null, ['POST' => 0], null, false, false, null]],
        '/security/compromised' => [[['_route' => 'admin_security_compromised', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SecurityController::compromisedAccessAction'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/products/new' => [[['_route' => 'admin_product_new', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::newAction'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/products/image/positions' => [[['_route' => 'admin_product_image_positions', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::updateImagePositionAction'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products/attributes/get-all' => [[['_route' => 'admin_attribute_get_all', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getAllAttributesAction', '_format' => 'json', '_legacy_controller' => 'AdminProducts'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/products/attributes/generator' => [[['_route' => 'admin_attribute_generator', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::attributesGeneratorAction', '_legacy_controller' => 'AdminProducts'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products/categories/add/simple' => [[['_route' => 'admin_category_simple_add_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::addSimpleCategoryFormAction'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products/specific-prices/add' => [[['_route' => 'admin_specific_price_add', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::addAction'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/all-attribute-groups' => [[['_route' => 'admin_all_attribute_groups', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::getAllAttributeGroupsAction', '_legacy_controller' => 'AdminProducts'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/images/add' => [[['_route' => 'admin_products_v2_add_image', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ImageController::addImageAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:addimage'], '_legacy_parameters' => ['id_product' => 'productId']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2' => [
            [['_route' => 'admin_products_v2_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::indexAction', '_legacy_controller' => 'AdminProducts'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_products_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.product', 'redirectRoute' => 'admin_products_v2_index', '_legacy_controller' => 'AdminProducts'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/products-v2/light-list' => [[['_route' => 'admin_products_v2_light_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::lightListAction', '_legacy_controller' => 'AdminProducts'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/create' => [[['_route' => 'admin_products_v2_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::createAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:addproduct', 'AdminProducts:add']], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/products-v2/update_position' => [[['_route' => 'admin_products_v2_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::updatePositionAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:positionproduct'], '_legacy_parameters' => ['id_product' => 'productId']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/bulk-enable' => [[['_route' => 'admin_products_v2_bulk_enable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::bulkEnableAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:submitBulkdisableSelectionproduct']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/bulk-disable' => [[['_route' => 'admin_products_v2_bulk_disable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::bulkDisableAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:submitBulkenableSelectionproduct']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/bulk-duplicate' => [[['_route' => 'admin_products_v2_bulk_duplicate', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::bulkDuplicateAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:submitBulkduplicateSelectionproduct'], '_legacy_parameters' => ['id_product' => 'productId']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/products-v2/bulk-delete' => [[['_route' => 'admin_products_v2_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::bulkDeleteAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:submitBulkdeleteproduct'], '_legacy_parameters' => ['id_product' => 'productId']], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/sell/catalog/categories/search' => [[['_route' => 'admin_categories_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:submitFiltercategory', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.category', 'redirectRoute' => 'admin_categories_index', 'redirectQueryParamsToKeep' => ['categoryId']], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/bulk-status-enable' => [[['_route' => 'admin_categories_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::bulkEnableStatusAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:submitBulkenableSelectioncategory'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/bulk-status-disable' => [[['_route' => 'admin_categories_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::bulkDisableStatusAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:submitBulkdisableSelectioncategory'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/bulk-delete' => [[['_route' => 'admin_categories_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::bulkDeleteAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:submitBulkdeleteSelectioncategory'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/delete' => [[['_route' => 'admin_categories_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::deleteAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:deletecategory'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/export' => [[['_route' => 'admin_categories_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::exportAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:exportcategory'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/categories/new' => [[['_route' => 'admin_categories_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::createAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:addcategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/categories/new-root' => [[['_route' => 'admin_categories_create_root', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::createRootAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:addcategoryroot', '_legacy_parameters' => ['id_category' => 'categoryId']], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/categories/update-positions' => [[['_route' => 'admin_categories_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::updatePositionAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:updatePositions'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/categories/tree' => [[['_route' => 'admin_categories_get_categories_tree', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::getCategoriesTreeAction', '_legacy_controller' => 'AdminCategories'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/suppliers' => [
            [['_route' => 'admin_suppliers_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::indexAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_suppliers_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:submitFiltersupplier', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.supplier', 'redirectRoute' => 'admin_suppliers_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/suppliers/new' => [[['_route' => 'admin_suppliers_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::createAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:addsupplier'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/suppliers/bulk-delete' => [[['_route' => 'admin_suppliers_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::bulkDeleteAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:submitBulkdeletesupplier'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/suppliers/bulk-enable' => [[['_route' => 'admin_suppliers_bulk_enable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::bulkEnableAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:submitBulkenableSelectionsupplier'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/suppliers/bulk-disable' => [[['_route' => 'admin_suppliers_bulk_disable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::bulkDisableAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:submitBulkdisableSelectionsupplier'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/suppliers/export' => [[['_route' => 'admin_suppliers_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::exportAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:exportsupplier'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/brands' => [
            [['_route' => 'admin_manufacturers_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::indexAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_manufacturers_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::searchAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:submitFiltermanufacturer'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/brands/new' => [[['_route' => 'admin_manufacturers_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::createAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:addmanufacturer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/brands/bulk-delete' => [[['_route' => 'admin_manufacturers_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::bulkDeleteAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:submitBulkdeletemanufacturer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/brands/bulk-enable' => [[['_route' => 'admin_manufacturers_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::bulkEnableAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:submitBulkenableSelectionmanufacturer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/brands/bulk-disable' => [[['_route' => 'admin_manufacturers_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::bulkDisableAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:submitBulkdisableSelectionmanufacturer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/brands/export' => [[['_route' => 'admin_manufacturers_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::exportAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:exportmanufacturer'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/brands/addresses/new' => [[['_route' => 'admin_manufacturer_addresses_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::createAddressAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:addaddress'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/brands/addresses/bulk-delete' => [[['_route' => 'admin_manufacturer_addresses_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::bulkDeleteAddressAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:submitBulkdeleteaddress'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/brands/addresses/export' => [[['_route' => 'admin_manufacturer_addresses_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::exportAddressAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:exportaddress'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/monitoring' => [
            [['_route' => 'admin_monitorings_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\MonitoringController::indexAction', '_legacy_controller' => 'AdminTracking', '_legacy_link' => 'AdminTracking'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_monitorings_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\MonitoringController::searchAction', '_legacy_controller' => 'AdminTracking'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/monitoring/delete-bulk' => [[['_route' => 'admin_monitoring_products_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\MonitoringController::deleteBulkAction', '_legacy_controller' => 'AdminTracking'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/catalog-price-rules' => [
            [['_route' => 'admin_catalog_price_rules_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::indexAction', '_legacy_controller' => 'AdminSpecificPriceRule'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_catalog_price_rules_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::searchAction', '_legacy_controller' => 'AdminSpecificPriceRule'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/catalog-price-rules/new' => [[['_route' => 'admin_catalog_price_rules_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::createAction', '_legacy_controller' => 'AdminSpecificPriceRule'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/catalog-price-rules/bulk-delete' => [[['_route' => 'admin_catalog_price_rules_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::bulkDeleteAction', '_legacy_controller' => 'AdminSpecificPriceRule'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/features' => [[['_route' => 'admin_features_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\FeatureController::indexAction', '_legacy_controller' => 'AdminFeatures'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/sell/catalog/attribute-groups' => [
            [['_route' => 'admin_attribute_groups_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::indexAction', '_legacy_controller' => 'AdminAttributesGroups'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_attribute_groups_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminAttributesGroups', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.attribute_group', 'redirectRoute' => 'admin_attribute_groups_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/attribute-groups/new' => [[['_route' => 'admin_attribute_groups_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::indexAction', '_legacy_controller' => 'AdminAttributesGroups'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/catalog/attribute-groups/bulk-delete' => [[['_route' => 'admin_attribute_groups_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::bulkDeleteAction', '_legacy_controller' => 'AdminAttributesGroups'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/attribute-groups/export' => [[['_route' => 'admin_attribute_groups_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::exportAction', '_legacy_controller' => 'AdminAttributesGroups'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/attribute-groups/update-position' => [[['_route' => 'admin_attribute_groups_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::updatePositionAction', '_legacy_controller' => 'AdminAttributesGroups'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/cart-rules' => [
            [['_route' => 'admin_cart_rules_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::indexAction', '_legacy_controller' => 'AdminCartRules'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_cart_rules_search_grid', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.cart_rule', 'redirectRoute' => 'admin_cart_rules_index', '_legacy_controller' => 'AdminCartRules'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/catalog/cart-rules/search' => [[['_route' => 'admin_cart_rules_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::searchAction', '_legacy_controller' => 'AdminCartRules'], null, ['GET' => 0], null, false, false, null]],
        '/sell/catalog/cart-rules/bulk-delete' => [[['_route' => 'admin_cart_rules_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::bulkDeleteAction', '_legacy_controller' => 'AdminCartRules'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/cart-rules/bulk-enable' => [[['_route' => 'admin_cart_rules_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::bulkEnableAction', '_legacy_controller' => 'AdminCartRules'], null, ['POST' => 0], null, false, false, null]],
        '/sell/catalog/cart-rules/bulk-disable' => [[['_route' => 'admin_cart_rules_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::bulkDisableAction', '_legacy_controller' => 'AdminCartRules'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers' => [
            [['_route' => 'admin_customers_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::indexAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_customers_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:submitFiltercustomer', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.customer', 'redirectRoute' => 'admin_customers_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/customers/new' => [[['_route' => 'admin_customers_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::createAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:addcustomer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/customers/set-required-fields' => [[['_route' => 'admin_customers_set_required_fields', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::setRequiredFieldsAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:submitFields'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers/delete-bulk' => [[['_route' => 'admin_customers_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::deleteBulkAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:submitBulkdeletecustomer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers/delete' => [[['_route' => 'admin_customers_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::deleteAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:deletecustomer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers/enable-bulk' => [[['_route' => 'admin_customers_enable_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::enableBulkAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:submitBulkenableSelectioncustomer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers/disable-bulk' => [[['_route' => 'admin_customers_disable_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::disableBulkAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:submitBulkdisableSelectioncustomer'], null, ['POST' => 0], null, false, false, null]],
        '/sell/customers/export' => [[['_route' => 'admin_customers_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::exportAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:exportcustomer'], null, ['GET' => 0], null, false, false, null]],
        '/sell/customers/search' => [[['_route' => 'admin_customers_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::searchAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:searchCustomers'], null, ['GET' => 0], null, false, false, null]],
        '/sell/customers/customer-information' => [[['_route' => 'admin_customer_for_address_information', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::getCustomerInformationAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:loadNames'], null, ['GET' => 0], null, false, false, null]],
        '/sell/addresses' => [
            [['_route' => 'admin_addresses_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::indexAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_addresses_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.address', 'redirectRoute' => 'admin_addresses_index', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:submitFilteraddress'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/addresses/new' => [[['_route' => 'admin_addresses_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::createAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:addaddress'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/addresses/delete-bulk' => [[['_route' => 'admin_addresses_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::deleteBulkAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:submitBulkdeleteaddress'], null, ['POST' => 0], null, false, false, null]],
        '/sell/addresses/save-required-fields' => [[['_route' => 'admin_addresses_save_required_fields', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::saveRequiredFieldsAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:submitFields'], null, ['POST' => 0], null, false, false, null]],
        '/sell/outstanding' => [
            [['_route' => 'admin_outstanding_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\OutstandingController::indexAction', '_legacy_controller' => 'AdminOutstanding', '_legacy_link' => 'AdminOutstanding'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_outstanding_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\OutstandingController::searchAction', '_legacy_controller' => 'AdminOutstanding', '_legacy_link' => 'AdminOutstanding:submitFilterorder_invoice'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/customer-service/order-messages' => [
            [['_route' => 'admin_order_messages_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController::indexAction', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_order_messages_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.order_message', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage:submitFilterorder_message', 'redirectRoute' => 'admin_order_messages_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/customer-service/order-messages/new' => [[['_route' => 'admin_order_messages_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController::createAction', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage:addorder_message'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/customer-service/order-messages/bulk-delete' => [[['_route' => 'admin_order_messages_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController::bulkDeleteAction', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage:submitBulkdeleteorder_message', 'legacy_parameters' => ['order_messageBox' => 'order_message_order_messages_bulk']], null, ['POST' => 0], null, false, false, null]],
        '/sell/customer-service/merchandise-return' => [
            [['_route' => 'admin_merchandise_returns_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\MerchandiseReturnController::indexAction', '_legacy_controller' => 'AdminReturn'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_merchandise_returns_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.merchandise_return', 'redirectRoute' => 'admin_merchandise_returns_index', '_legacy_controller' => 'AdminReturn'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/customer-service/merchandise-return/options' => [[['_route' => 'admin_merchandise_returns_save_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\MerchandiseReturnController::indexAction', '_legacy_controller' => 'AdminReturn'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/orders/delivery-slips' => [[['_route' => 'admin_order_delivery_slip', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\DeliveryController::slipAction', '_legacy_controller' => 'AdminDeliverySlip', '_legacy_link' => 'AdminDeliverySlip'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/sell/orders/delivery-slips/pdf' => [[['_route' => 'admin_order_delivery_slip_pdf', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\DeliveryController::generatePdfAction', '_legacy_controller' => 'AdminDeliverySlip', '_legacy_link' => 'AdminDeliverySlip:submitAdddelivery'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/invoices' => [
            [['_route' => 'admin_order_invoices', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::indexAction', '_legacy_controller' => 'AdminInvoices', '_legacy_link' => 'AdminInvoices'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_order_invoices_process', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::processAction', '_legacy_controller' => 'AdminInvoices', '_legacy_link' => 'AdminInvoices:update'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/orders/invoices/by_date' => [[['_route' => 'admin_order_invoices_generate_by_date', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::generatePdfByDateAction', '_legacy_controller' => 'AdminInvoices', '_legacy_link' => 'AdminInvoices:submitAddinvoice_date'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/invoices/by_status' => [[['_route' => 'admin_order_invoices_generate_by_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::generatePdfByStatusAction', '_legacy_controller' => 'AdminInvoices', '_legacy_link' => 'AdminInvoices:submitAddinvoice_status'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/carts/new' => [[['_route' => 'admin_carts_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::createAction', '_legacy_controller' => 'AdminCarts'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders' => [
            [['_route' => 'admin_orders_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::indexAction', '_legacy_controller' => 'AdminOrders', '_legacy_link' => 'AdminOrders'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_orders_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminOrders', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.order', 'redirectRoute' => 'admin_orders_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/orders/new' => [[['_route' => 'admin_orders_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::createAction', '_legacy_controller' => 'AdminOrders', '_legacy_link' => 'AdminOrders:addorder'], null, ['GET' => 0], null, false, false, null]],
        '/sell/orders/place' => [[['_route' => 'admin_orders_place', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::placeAction', '_legacy_controller' => 'AdminOrders'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/change-orders-status' => [[['_route' => 'admin_orders_change_orders_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::changeOrdersStatusAction', '_legacy_controller' => 'AdminOrders'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/export' => [[['_route' => 'admin_orders_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::exportAction', '_legacy_controller' => 'AdminOrders'], null, ['GET' => 0], null, false, false, null]],
        '/sell/orders/change-customer-address' => [[['_route' => 'admin_orders_change_customer_address', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::changeCustomerAddressAction', '_legacy_controller' => 'AdminOrders'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/process-order-email' => [[['_route' => 'admin_orders_send_process_order_email', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::sendProcessOrderEmailAction', '_legacy_controller' => 'AdminOrders'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/configure-product-pagination' => [[['_route' => 'admin_orders_configure_product_pagination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::configureProductPaginationAction', '_legacy_controller' => 'AdminOrders'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/products/search' => [[['_route' => 'admin_orders_products_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::searchProductsAction', '_legacy_controller' => 'AdminOrders'], null, ['GET' => 0], null, false, false, null]],
        '/sell/orders/credit-slips' => [
            [['_route' => 'admin_credit_slips_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CreditSlipController::indexAction', '_legacy_controller' => 'AdminSlip', '_legacy_link' => 'AdminSlip'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_credit_slips_process_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CreditSlipController::indexAction', '_legacy_controller' => 'AdminSlip', '_legacy_link' => 'AdminSlip:submitOptionsorder_slip'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/orders/credit-slips/search' => [[['_route' => 'admin_credit_slips_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminSlip', '_legacy_link' => 'AdminSlip:submitFilterorder_slip', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.credit_slip', 'redirectRoute' => 'admin_credit_slips_index'], null, ['POST' => 0], null, false, false, null]],
        '/sell/orders/credit-slips/pdf-by-date' => [[['_route' => '_admin_credit_slips_pdf_by_date', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CreditSlipController::generatePdfByDateAction', '_legacy_link' => 'AdminSlip:submitAddorder_slip', '_legacy_controller' => 'AdminSlip'], null, ['GET' => 0], null, false, false, null]],
        '/sell/stocks' => [[['_route' => 'admin_stock_overview', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\StockController::overviewAction', '_legacy_controller' => 'AdminStockManagement', '_legacy_link' => 'AdminStockManagement'], null, ['GET' => 0], null, true, false, null]],
        '/sell/stocks/movements' => [[['_route' => 'admin_stock_movements_overview', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\StockController::overviewAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, false, false, null]],
        '/sell/attachments' => [
            [['_route' => 'admin_attachments_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::indexAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_attachments_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminAttachments', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.attachment', 'redirectRoute' => 'admin_attachments_index', '_legacy_link' => 'AdminAttachments:submitFilterattachment'], null, ['POST' => 0], null, true, false, null],
        ],
        '/sell/attachments/new' => [[['_route' => 'admin_attachments_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::createAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:addattachment'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sell/attachments/delete-bulk' => [[['_route' => 'admin_attachments_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::deleteBulkAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:submitBulkdeleteattachment'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/logs' => [
            [['_route' => 'admin_logs_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::indexAction', '_legacy_controller' => 'AdminLogs', '_legacy_link' => 'AdminLogs'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_logs_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::searchAction', '_legacy_controller' => 'AdminLogs'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/logs/settings' => [[['_route' => 'admin_logs_save_settings', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::saveSettingsAction', '_legacy_controller' => 'AdminLogs', '_legacy_link' => 'AdminLogs:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/logs/delete-all' => [[['_route' => 'admin_logs_delete_all', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::deleteAllAction', '_legacy_controller' => 'AdminLogs', '_legacy_link' => 'AdminLogs:deletelog'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/administration' => [[['_route' => 'admin_administration', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::indexAction', '_legacy_controller' => 'AdminAdminPreferences', '_legacy_link' => 'AdminAdminPreferences'], null, ['GET' => 0], null, true, false, null]],
        '/configure/advanced/administration/general' => [[['_route' => 'admin_administration_general_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::processGeneralFormAction', '_legacy_controller' => 'AdminAdminPreferences', '_legacy_link' => 'AdminAdminPreferences:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/administration/upload-quota' => [[['_route' => 'admin_administration_upload_quota_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::processUploadQuotaFormAction', '_legacy_controller' => 'AdminAdminPreferences'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/administration/notifications' => [[['_route' => 'admin_administration_notifications_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::processNotificationsFormAction', '_legacy_controller' => 'AdminAdminPreferences'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/import' => [[['_route' => 'admin_import', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::importAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/configure/advanced/import/data' => [
            [['_route' => 'admin_import_data_configuration_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportDataConfigurationController::indexAction', '_legacy_controller' => 'AdminImport'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'admin_import_data_configuration_index_redirect', 'route' => 'admin_import', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/configure/advanced/import/process' => [[['_route' => 'admin_import_process', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::processImportAction', '_legacy_controller' => 'AdminImport'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/import/file/upload' => [[['_route' => 'admin_import_file_upload', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::uploadAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:uploadCsv'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/import/file/delete' => [[['_route' => 'admin_import_file_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::deleteAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:delete'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/import/file/download' => [[['_route' => 'admin_import_file_download', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::downloadAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:download'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/import/match' => [
            [['_route' => 'admin_import_data_configuration_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportDataConfigurationController::createAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:saveImportMatch'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'admin_import_data_configuration_get', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportDataConfigurationController::getAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:getImportMatch'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_import_data_configuration_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportDataConfigurationController::deleteAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:deleteImportMatch'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/configure/advanced/import/fields' => [[['_route' => 'admin_import_get_available_fields', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::getAvailableEntityFieldsAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:getAvailableEntityFields'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/performance' => [[['_route' => 'admin_performance', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::indexAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance'], null, ['GET' => 0], null, true, false, null]],
        '/configure/advanced/performance/smarty' => [[['_route' => 'admin_performance_smarty_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processSmartyFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/debug-mode' => [[['_route' => 'admin_performance_debug_mode_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processDebugModeFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/optional-features' => [[['_route' => 'admin_performance_optional_features_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processOptionalFeaturesFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/combine-compress-cache' => [[['_route' => 'admin_performance_combine_compress_cache_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processCombineCompressCacheFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/media-servers' => [[['_route' => 'admin_performance_media_servers_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processMediaServersFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/caching' => [[['_route' => 'admin_performance_caching_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processCachingFormAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/performance/disable-non-builtin' => [[['_route' => 'admin_performance_module_disable_non_builtin', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::disableNonBuiltInAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:update'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/performance/clear-cache' => [[['_route' => 'admin_clear_cache', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::clearCacheAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:empty_smarty_cache'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/performance/memcache/servers' => [
            [['_route' => 'admin_servers', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::listAction', '_legacy_controller' => 'AdminPerformance'], null, ['GET' => 0], null, false, false, 1],
            [['_route' => 'admin_servers_add', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::addAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:submitAddServer'], null, ['POST' => 0], null, false, false, 1],
            [['_route' => 'admin_servers_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::deleteAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:deleteMemcachedServer'], null, ['DELETE' => 0], null, false, false, 1],
        ],
        '/configure/advanced/performance/memcache/servers/test' => [[['_route' => 'admin_servers_test', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::testAction', '_legacy_controller' => 'AdminPerformance', '_legacy_link' => 'AdminPerformance:test_server'], null, ['GET' => 0], null, false, false, 1]],
        '/configure/advanced/system-information' => [[['_route' => 'admin_system_information', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::indexAction', '_legacy_controller' => 'AdminInformation', '_legacy_link' => 'AdminInformation'], null, ['GET' => 0], null, true, false, null]],
        '/configure/advanced/system-information/files' => [[['_route' => 'admin_system_information_check_files', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::displayCheckFilesAction', '_legacy_controller' => 'AdminInformation', '_legacy_link' => 'AdminInformation:checkFiles'], null, ['POST' => 0], null, false, false, 1]],
        '/configure/advanced/emails' => [
            [['_route' => 'admin_emails_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::indexAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_emails_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.email_logs', 'redirectRoute' => 'admin_emails_index', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:search'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/emails/options' => [
            [['_route' => 'admin_emails_save_options_get', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::indexAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:update'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_emails_save_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::saveOptionsAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:update'], null, ['POST' => 0], null, false, false, null],
        ],
        '/configure/advanced/emails/send-testing-email' => [[['_route' => 'admin_emails_send_test', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::sendTestAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:testEmail'], null, ['POST' => 0], null, false, false, 1]],
        '/configure/advanced/emails/delete-bulk' => [[['_route' => 'admin_emails_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteBulkAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:submitBulkdeletemail'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/emails/delete-all' => [[['_route' => 'admin_emails_delete_all', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteAllAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:deleteAll'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/sql-requests' => [
            [['_route' => 'admin_sql_requests_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::indexAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_sql_requests_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.request_sql', 'redirectRoute' => 'admin_sql_requests_index', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:search'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/sql-requests/process-settings' => [[['_route' => 'admin_sql_requests_process_settings', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::processFormAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/sql-requests/new' => [[['_route' => 'admin_sql_requests_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::createAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:addrequest_sql'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/advanced/sql-requests/delete-bulk' => [[['_route' => 'admin_sql_requests_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::deleteBulkAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:submitBulkdeleterequest_sql'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/webservice-keys' => [
            [['_route' => 'admin_webservice_keys_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::indexAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_webservice_keys_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.webservice_key', 'redirectRoute' => 'admin_webservice_keys_index', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:submitFilterwebservice_account'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/webservice-keys/settings' => [[['_route' => 'admin_webservice_save_settings', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::saveSettingsAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:submitOptionswebservice_account'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/advanced/webservice-keys/new' => [[['_route' => 'admin_webservice_keys_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::createAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:addwebservice_account'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/advanced/webservice-keys/bulk-delete' => [[['_route' => 'admin_webservice_keys_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::bulkDeleteAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:submitBulkdeletewebservice_account'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/webservice-keys/bulk-enable' => [[['_route' => 'admin_webservice_keys_bulk_enable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::bulkEnableAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:submitBulkenableSelectionwebservice_account'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/webservice-keys/bulk-disable' => [[['_route' => 'admin_webservice_keys_bulk_disable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::bulkDisableAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:submitBulkdisableSelectionwebservice_account'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/backups' => [
            [['_route' => 'admin_backups_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::indexAction', '_legacy_controller' => 'AdminBackup', '_legacy_link' => 'AdminBackup'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_backups_save_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::saveOptionsAction', '_legacy_controller' => 'AdminBackup', '_legacy_link' => 'AdminBackup:update'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/backups/new' => [[['_route' => 'admin_backups_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::createAction', '_legacy_controller' => 'AdminBackup', '_legacy_link' => 'AdminBackup:addbackup'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees' => [
            [['_route' => 'admin_employees_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::indexAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_employees_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.employee', 'redirectRoute' => 'admin_employees_index', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:submitFilteremployee'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/employees/save-options' => [[['_route' => 'admin_employees_save_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::saveOptionsAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:submitOptionsemployee'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/bulk-enable-status' => [[['_route' => 'admin_employees_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::bulkStatusEnableAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:submitBulkenableSelectionemployee'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/bulk-disable-status' => [[['_route' => 'admin_employees_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::bulkStatusDisableAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:submitBulkdisableSelectionemployee'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/bulk-delete' => [[['_route' => 'admin_employees_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::bulkDeleteAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:submitBulkdeleteemployee'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/new' => [[['_route' => 'admin_employees_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::createAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:addemployee'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/advanced/employees/toggle-navigation' => [[['_route' => 'admin_employees_toggle_navigation', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::toggleNavigationMenuAction'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/change-form-language' => [[['_route' => 'admin_employees_change_form_language', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::changeFormLanguageAction'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/employees/tabs' => [[['_route' => 'admin_employees_get_tabs', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::getAccessibleTabsAction', '_legacy_controller' => 'AdminEmployees'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/profiles' => [
            [['_route' => 'admin_profiles_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController::indexAction', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_profiles_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.profile', 'redirectRoute' => 'admin_profiles_index', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles:submitFilterprofile'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/advanced/profiles/new' => [[['_route' => 'admin_profiles_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController::createAction', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles:addprofile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/advanced/profiles/delete/bulk' => [[['_route' => 'admin_profiles_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController::bulkDeleteAction', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles:submitBulkdeleteprofile'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/feature-flags' => [[['_route' => 'admin_feature_flags_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\FeatureFlagController::indexAction', '_legacy_controller' => 'AdminFeatureFlag', '_legacy_link' => 'AdminFeatureFlag'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/configure/advanced/security' => [[['_route' => 'admin_security', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::indexAction', '_legacy_controller' => 'AdminSecurity', '_legacy_link' => 'AdminSecurity'], null, ['GET' => 0], null, true, false, null]],
        '/configure/advanced/security/general' => [[['_route' => 'admin_security_general_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::processGeneralFormAction', '_legacy_controller' => 'AdminSecurity', '_legacy_link' => 'AdminSecurity'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/security/password-policy' => [[['_route' => 'admin_security_password_policy_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::processPasswordPolicyFormAction', '_legacy_controller' => 'AdminSecurity', '_legacy_link' => 'AdminSecurity'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/security/session/customer/clear' => [[['_route' => 'admin_security_sessions_customer_clear', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::clearCustomerSessionAction', '_legacy_controller' => 'AdminSecuritySessionCustomer', '_legacy_link' => 'AdminSecuritySessionCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/security/session/customer' => [
            [['_route' => 'admin_security_sessions_customer_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::customerSessionAction', '_legacy_controller' => 'AdminSecuritySessionCustomer', '_legacy_link' => 'AdminSecuritySessionCustomer'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_security_sessions_customer_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminSecuritySessionCustomer', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.security.session.customer', 'redirectRoute' => 'admin_security_sessions_customer_list'], null, ['POST' => 0], null, false, false, null],
        ],
        '/configure/advanced/security/session/employee/clear' => [[['_route' => 'admin_security_sessions_employee_clear', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::clearEmployeeSessionAction', '_legacy_controller' => 'AdminSecuritySessionEmployee', '_legacy_link' => 'AdminSecuritySessionEmployee'], null, ['GET' => 0], null, false, false, null]],
        '/configure/advanced/security/session/employee' => [
            [['_route' => 'admin_security_sessions_employee_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::employeeSessionAction', '_legacy_controller' => 'AdminSecuritySessionEmployee', '_legacy_link' => 'AdminSecuritySessionEmployee'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_security_sessions_employee_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminSecuritySessionEmployee', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.security.session.employee', 'redirectRoute' => 'admin_security_sessions_employee_list'], null, ['POST' => 0], null, false, false, null],
        ],
        '/configure/advanced/security/session/employee/delete/bulk' => [[['_route' => 'admin_security_sessions_employee_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::bulkDeleteEmployeeSessionAction', '_legacy_controller' => 'AdminSecuritySessionEmployee', '_legacy_link' => 'AdminSecuritySessionEmployee:submitBulkdeleteemployees'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/configure/advanced/security/session/customer/delete/bulk' => [[['_route' => 'admin_security_sessions_customer_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::bulkDeleteCustomerSessionAction', '_legacy_controller' => 'AdminSecuritySessionCustomer', '_legacy_link' => 'AdminSecuritySessionCustomer:submitBulkdeleteemployees'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/configure/advanced/permissions' => [[['_route' => 'admin_permissions_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PermissionController::indexAction', '_legacy_controller' => 'AdminAccess'], null, ['GET' => 0], null, true, false, null]],
        '/configure/advanced/permissions/update/permissions/tab' => [[['_route' => 'admin_permissions_update_tab_permissions', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PermissionController::updateTabPermissionsAction', '_legacy_controller' => 'AdminAccess'], null, ['POST' => 0], null, false, false, null]],
        '/configure/advanced/permissions/update/permissions/module' => [[['_route' => 'admin_permissions_update_module_permissions', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PermissionController::updateModulePermissionsAction', '_legacy_controller' => 'AdminAccess'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/preferences/preferences' => [
            [['_route' => 'admin_preferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::indexAction', '_legacy_controller' => 'AdminPreferences', '_legacy_link' => 'AdminPreferences'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_preferences_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::processFormAction', '_legacy_controller' => 'AdminPreferences', '_legacy_link' => 'AdminPreferences:update'], null, ['POST' => 0], null, false, false, null],
        ],
        '/configure/shop/order-preferences' => [[['_route' => 'admin_order_preferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController::indexAction', '_legacy_controller' => 'AdminOrderPreferences', '_legacy_link' => 'AdminOrderPreferences'], null, ['GET' => 0], null, true, false, null]],
        '/configure/shop/order-preferences/general' => [[['_route' => 'admin_order_preferences_general_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController::processGeneralFormAction', '_legacy_controller' => 'AdminOrderPreferences', '_legacy_link' => 'AdminOrderPreferences:update'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/order-preferences/gift-options' => [[['_route' => 'admin_order_preferences_gift_options_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController::processGiftOptionsFormAction', '_legacy_controller' => 'AdminOrderPreferences'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/product-preferences' => [[['_route' => 'admin_product_preferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::indexAction', '_legacy_controller' => 'AdminPPreferences', '_legacy_link' => 'AdminPPreferences'], null, ['GET' => 0], null, true, false, null]],
        '/configure/shop/product-preferences/general' => [[['_route' => 'admin_product_preferences_general_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processGeneralFormAction', '_legacy_controller' => 'AdminPPreferences', '_legacy_link' => 'AdminPPreferences:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/product-preferences/pagination' => [[['_route' => 'admin_product_preferences_pagination_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processPaginationFormAction', '_legacy_controller' => 'AdminPPreferences', '_legacy_link' => 'AdminPPreferences:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/product-preferences/page' => [[['_route' => 'admin_product_preferences_page_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processPageFormAction', '_legacy_controller' => 'AdminPPreferences', '_legacy_link' => 'AdminPPreferences:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/product-preferences/stock' => [[['_route' => 'admin_product_preferences_stock_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processStockFormAction', '_legacy_controller' => 'AdminPPreferences', '_legacy_link' => 'AdminPPreferences:update'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/customer-preferences' => [
            [['_route' => 'admin_customer_preferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::indexAction', '_legacy_controller' => 'AdminCustomerPreferences', '_legacy_link' => 'AdminCustomerPreferences'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_customer_preferences_process', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::processAction', '_legacy_controller' => 'AdminCustomerPreferences', '_legacy_link' => 'AdminCustomerPreferences:update'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/maintenance' => [
            [['_route' => 'admin_maintenance', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::indexAction', '_legacy_controller' => 'AdminMaintenance', '_legacy_link' => 'AdminMaintenance'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_maintenance_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::processFormAction', '_legacy_controller' => 'AdminMaintenance', '_legacy_link' => 'AdminMaintenance:update'], null, ['PATCH' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/configure/shop/seo-urls' => [
            [['_route' => 'admin_metas_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::indexAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_metas_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.meta', 'redirectRoute' => 'admin_metas_index', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:submitFiltermeta'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/seo-urls/new' => [[['_route' => 'admin_metas_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::createAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:addmeta'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/seo-urls/delete' => [[['_route' => 'admin_metas_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::deleteBulkAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:submitBulkdeletemeta'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/seo-urls/set-up-urls' => [[['_route' => 'admin_metas_set_up_urls_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::processSetUpUrlsFormAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:submitOptionsmeta'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/seo-urls/shop-urls' => [[['_route' => 'admin_metas_shop_urls_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::processShopUrlsFormAction', '_legacy_controller' => 'AdminMeta'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/seo-urls/url-schema' => [[['_route' => 'admin_metas_url_schema_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::processUrlSchemaFormAction', '_legacy_controller' => 'AdminMeta'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/seo-urls/seo-options' => [[['_route' => 'admin_metas_seo_options_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::processSeoOptionsFormAction', '_legacy_controller' => 'AdminMeta'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/seo-urls/generate/robots' => [[['_route' => 'admin_metas_generate_robots_text_file', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::generateRobotsFileAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:submitRobots'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/contacts' => [
            [['_route' => 'admin_contacts_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController::indexAction', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_contacts_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.contacts', 'redirectRoute' => 'admin_contacts_index', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts:submitFiltercontact'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/contacts/new' => [[['_route' => 'admin_contacts_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController::createAction', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts:addcontact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/contacts/delete/bulk' => [[['_route' => 'admin_contacts_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController::deleteBulkAction', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts:submitBulkdeletecontact'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/order-states' => [
            [['_route' => 'admin_order_states', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::indexAction', '_legacy_controller' => 'AdminStatuses'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_order_states_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::searchGridAction', '_legacy_controller' => 'AdminStatuses', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.order_states', 'redirectRoute' => 'admin_order_states'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/order-states/new' => [[['_route' => 'admin_order_states_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::createAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:addorderstate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/order-states/delete-bulk' => [[['_route' => 'admin_order_states_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::deleteBulkAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:submitBulkdeleteorderstate'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/order-return-states/new' => [[['_route' => 'admin_order_return_states_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::createOrderReturnStateAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:addorderreturnstate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/order-return-states/delete-bulk' => [[['_route' => 'admin_order_return_states_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::deleteOrderReturnStateBulkAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:submitBulkdeleteorderreturnstate'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/search-engines' => [
            [['_route' => 'admin_search_engines_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController::indexAction', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_search_engines_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.search_engines', 'redirectRoute' => 'admin_search_engines_index', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines:submitFiltersearch_engine'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/search-engines/new' => [[['_route' => 'admin_search_engines_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController::createAction', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines:addsearch_engine'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/search-engines/bulk-delete' => [[['_route' => 'admin_search_engines_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController::bulkDeleteAction', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines:submitBulkdeletesearch_engine'], null, ['POST' => 0], null, false, false, null]],
        '/configure/shop/title' => [
            [['_route' => 'admin_title_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController::indexAction', '_legacy_controller' => 'AdminGenders'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_title_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.title', 'redirectRoute' => 'admin_title_index', '_legacy_controller' => 'AdminGenders'], null, ['POST' => 0], null, true, false, null],
        ],
        '/configure/shop/title/new' => [[['_route' => 'admin_title_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController::createAction', '_legacy_controller' => 'AdminGenders'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configure/shop/title/bulk-delete' => [[['_route' => 'admin_title_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController::bulkDeleteAction', '_legacy_controller' => 'AdminGenders'], null, ['POST' => 0], null, false, false, null]],
        '/configure/showcase-card/close' => [[['_route' => 'admin_close_showcase_card', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShowcaseCardController::closeShowcaseCardAction'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/translations' => [[['_route' => 'admin_international_translation_overview', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::overviewAction', '_legacy_controller' => 'AdminTranslations', '_legacy_link' => 'AdminTranslationSf'], null, ['GET' => 0], null, true, false, null]],
        '/improve/international/translations/export' => [[['_route' => 'admin_international_translations_export_catalogues', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::exportCataloguesAction', '_legacy_controller' => 'AdminTranslations', '_legacy_link' => 'AdminTranslations:submitExport'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/translations/settings' => [[['_route' => 'admin_international_translations_show_settings', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::showSettingsAction', '_legacy_controller' => 'AdminTranslations', '_legacy_link' => 'AdminTranslations:settings'], null, ['GET' => 0], null, false, false, null]],
        '/improve/international/translations/modify' => [[['_route' => 'admin_international_translations_modify', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::modifyTranslationsAction', '_legacy_controller' => 'AdminTranslations'], null, ['GET' => 0], null, false, false, null]],
        '/improve/international/translations/add-update-language' => [[['_route' => 'admin_international_translations_add_update_language', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::addUpdateLanguageAction', '_legacy_controller' => 'AdminTranslations', '_legacy_link' => 'AdminTranslations:submitAddLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/translations/copy' => [[['_route' => 'admin_international_translations_copy_language', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController::copyLanguageAction', '_legacy_controller' => 'AdminTranslations', '_legacy_link' => 'AdminTranslations:submitCopyLang'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/localization' => [[['_route' => 'admin_localization_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::indexAction', '_legacy_controller' => 'AdminLocalization', '_legacy_link' => 'AdminLocalization'], null, ['GET' => 0], null, true, false, null]],
        '/improve/international/localization/configuration' => [[['_route' => 'admin_localization_configuration_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::processConfigurationFormAction', '_legacy_controller' => 'AdminLocalization', '_legacy_link' => 'AdminLocalization:update'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/localization/local-units' => [[['_route' => 'admin_localization_local_units_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::processLocalUnitsFormAction', '_legacy_controller' => 'AdminLocalization'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/localization/advanced' => [[['_route' => 'admin_localization_advanced_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::processAdvancedFormAction', '_legacy_controller' => 'AdminLocalization'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/localization/import-pack' => [[['_route' => 'admin_localization_import_pack', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::importPackAction', '_legacy_controller' => 'AdminLocalization', '_legacy_link' => 'AdminLocalization:submitLocalizationPack'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/geolocation' => [[['_route' => 'admin_geolocation_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::indexAction', '_legacy_controller' => 'AdminGeolocation', '_legacy_link' => 'AdminGeolocation'], null, ['GET' => 0], null, true, false, null]],
        '/improve/international/geolocation/by-ip-address' => [[['_route' => 'admin_geolocation_by_ip_address_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::processByIpAddressFormAction', '_legacy_controller' => 'AdminGeolocation', '_legacy_link' => 'AdminGeolocation:update'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/geolocation/whitelist' => [[['_route' => 'admin_geolocation_whitelist_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::processWhitelistFormAction', '_legacy_controller' => 'AdminGeolocation', '_legacy_link' => 'AdminGeolocation:update'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/geolocation/options' => [[['_route' => 'admin_geolocation_options_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::processOptionsFormAction', '_legacy_controller' => 'AdminGeolocation', '_legacy_link' => 'AdminGeolocation:update'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/languages' => [
            [['_route' => 'admin_languages_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::indexAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_languages_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.language', 'redirectRoute' => 'admin_languages_index', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => ['AdminLanguages:submitFilterlang', 'AdminLanguages:submitFiltercurrency']], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/languages/new' => [[['_route' => 'admin_languages_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::createAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:addlang'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/languages/bulk-delete' => [[['_route' => 'admin_languages_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::bulkDeleteAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:submitBulkdeletelang'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/currencies' => [
            [['_route' => 'admin_currencies_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::indexAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_currencies_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.currency', 'redirectRoute' => 'admin_currencies_index', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:submitFiltercurrency'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/currencies/new' => [[['_route' => 'admin_currencies_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::createAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:addcurrency'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/currencies/update-live-exchange-rates' => [[['_route' => 'admin_currencies_update_live_exchange_rates', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::updateLiveExchangeRatesAction', '_legacy_controller' => 'AdminCurrencies'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/currencies/refresh-exchange-rates' => [[['_route' => 'admin_currencies_refresh_exchange_rates', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::refreshExchangeRatesAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:SubmitExchangesRates'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/currencies/bulk-delete' => [[['_route' => 'admin_currencies_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::bulkDeleteAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:submitBulkdeletecurrency'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/improve/international/taxes' => [
            [['_route' => 'admin_taxes_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::indexAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_taxes_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.tax', 'redirectRoute' => 'admin_taxes_index', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:submitFiltertax'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/taxes/save-options' => [[['_route' => 'admin_taxes_save_options', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::saveOptionsAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:submitOptionstax'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/taxes/new' => [[['_route' => 'admin_taxes_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::createAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:addtax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/taxes/bulk-enable-status' => [[['_route' => 'admin_taxes_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::bulkEnableStatusAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:submitBulkenableSelectiontax'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/taxes/bulk-disable-status' => [[['_route' => 'admin_taxes_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::bulkDisableStatusAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:submitBulkdisableSelectiontax'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/taxes/bulk-delete' => [[['_route' => 'admin_taxes_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::bulkDeleteAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:submitBulkdeletetax'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/states/country-states' => [[['_route' => 'admin_country_states', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::getStatesAction', '_legacy_controller' => 'AdminStates'], null, ['GET' => 0], null, false, false, null]],
        '/improve/international/states' => [
            [['_route' => 'admin_states_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::indexAction', '_legacy_controller' => 'AdminStates'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_states_filter', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminStates', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.state', 'redirectRoute' => 'admin_states_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/states/new' => [[['_route' => 'admin_states_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::createAction', '_legacy_controller' => 'AdminStates'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/states/delete-bulk' => [[['_route' => 'admin_states_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::deleteBulkAction', '_legacy_controller' => 'AdminStates'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/states/bulk-status-enable' => [[['_route' => 'admin_states_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::bulkEnableAction', '_legacy_controller' => 'AdminStates'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/states/bulk-status-disable' => [[['_route' => 'admin_states_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::bulkDisableAction', '_legacy_controller' => 'AdminStates'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/tax_rules_groups' => [
            [['_route' => 'admin_tax_rules_groups_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::indexAction', '_legacy_controller' => 'AdminTaxRulesGroup'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_tax_rules_groups_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminTaxRulesGroup', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.tax_rules_group', 'redirectRoute' => 'admin_tax_rules_groups_index'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/tax_rules_groups/new' => [[['_route' => 'admin_tax_rules_groups_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::createAction', '_legacy_controller' => 'AdminTaxRulesGroup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/tax_rules_groups/bulk-enable-status' => [[['_route' => 'admin_tax_rules_groups_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::bulkEnableStatusAction', '_legacy_controller' => 'AdminTaxRulesGroup'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/tax_rules_groups/bulk-disable-status' => [[['_route' => 'admin_tax_rules_groups_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::bulkDisableStatusAction', '_legacy_controller' => 'AdminTaxRulesGroup'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/tax_rules_groups/bulk-delete' => [[['_route' => 'admin_tax_rules_groups_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::bulkDeleteAction', '_legacy_controller' => 'AdminTaxRulesGroup'], null, ['POST' => 0], null, false, false, null]],
        '/improve/international/zones' => [
            [['_route' => 'admin_zones_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::indexAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_zones_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::searchAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:submitFilterzone'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/international/zones/new' => [[['_route' => 'admin_zones_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::createAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:addzone'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/international/zones/bulk-delete' => [[['_route' => 'admin_zones_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::bulkDeleteAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:submitBulkdeletezone'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/improve/international/countries' => [
            [['_route' => 'admin_countries_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CountryController::indexAction', '_legacy_controller' => 'AdminCountries'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_countries_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.country', 'redirectRoute' => 'admin_countries_index', '_legacy_controller' => 'AdminCountries'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/modules/import' => [[['_route' => 'admin_module_import', 'module_name' => null, '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::importModuleAction'], null, ['POST' => 0], null, false, false, null]],
        '/improve/modules/alerts' => [[['_route' => 'admin_module_notification', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AlertsController::indexAction', '_legacy_controller' => 'AdminModulesNotifications', '_legacy_link' => 'AdminModulesNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/improve/modules/alerts/count' => [[['_route' => 'admin_module_notification_count', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AlertsController::notificationsCountAction', '_legacy_controller' => 'AdminModulesNotifications', '_legacy_link' => 'AdminModulesNotifications:count'], null, ['GET' => 0], null, false, false, null]],
        '/improve/modules/updates' => [[['_route' => 'admin_module_updates', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\UpdatesController::indexAction', '_legacy_controller' => 'AdminModulesUpdates', '_legacy_link' => 'AdminModulesUpdates'], null, ['GET' => 0], null, false, false, null]],
        '/improve/design/modules/positions' => [[['_route' => 'admin_modules_positions', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController::indexAction', '_legacy_controller' => 'AdminModulesPositions', '_legacy_link' => 'AdminModulesPositions'], null, ['GET' => 0], null, true, false, null]],
        '/improve/design/modules/positions/unhook' => [[['_route' => 'admin_modules_positions_unhook', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController::unhookAction', '_legacy_controller' => 'AdminModulesPositions', '_legacy_link' => 'AdminModulesPositions:unhook'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/improve/design/modules/positions/toggle-status' => [[['_route' => 'admin_modules_positions_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController::toggleStatusAction', '_legacy_controller' => 'AdminModulesPositions', '_legacy_link' => 'AdminModulesPositions'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/themes' => [[['_route' => 'admin_themes_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::indexAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes'], null, ['GET' => 0], null, true, false, null]],
        '/improve/design/themes/upload-logos' => [[['_route' => 'admin_themes_upload_logos', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::uploadLogosAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:submitOptionsconfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/themes/export' => [[['_route' => 'admin_themes_export_current', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::exportAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:exporttheme'], null, ['GET' => 0], null, false, false, null]],
        '/improve/design/themes/import' => [[['_route' => 'admin_themes_import', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::importAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:importtheme'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/design/themes/adapt-to-rtl-languages' => [[['_route' => 'admin_themes_adapt_to_rtl_languages', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::adaptToRTLLanguagesAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:submitGenerateRTL'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/themes/customize-layouts' => [[['_route' => 'admin_theme_customize_layouts', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::customizeLayoutsAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:submitConfigureLayouts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/design/cms-pages' => [[['_route' => 'admin_cms_pages_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::indexAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent'], null, ['GET' => 0], null, true, false, null]],
        '/improve/design/cms-pages/search' => [[['_route' => 'admin_cms_pages_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::searchAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitFiltercms'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/new' => [[['_route' => 'admin_cms_pages_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::createAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:addcms'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/design/cms-pages/bulk-enable-status' => [[['_route' => 'admin_cms_pages_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::bulkEnableCmsPageStatusAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkenableSelectioncms'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/bulk-disable-status' => [[['_route' => 'admin_cms_pages_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::bulkDisableCmsPageStatusAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkdisableSelectioncms'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/bulk-delete' => [[['_route' => 'admin_cms_pages_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::bulkDeleteCmsPageAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkdeletecms'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/category/search' => [[['_route' => 'admin_cms_pages_search_cms_category', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', 'gridDefinitionFactoryService' => 'prestashop.core.grid.definition.factory.cms_page_category', 'redirectRoute' => 'admin_cms_pages_index', 'redirectQueryParamsToKeep' => ['id_cms_category'], '_legacy_link' => 'AdminCmsContent:submitFiltercms_category'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/category/new' => [[['_route' => 'admin_cms_pages_category_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::createCmsCategoryAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:addcms_category'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/design/cms-pages/category/delete-bulk' => [[['_route' => 'admin_cms_pages_category_delete_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::deleteBulkCmsCategoryAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkdeletecms_category'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/category/bulk-enable-status' => [[['_route' => 'admin_cms_pages_category_bulk_status_enable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::bulkCmsPageCategoryStatusEnableAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkenableSelectioncms_category'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/category/bulk-disable-status' => [[['_route' => 'admin_cms_pages_category_bulk_status_disable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::bulkCmsPageCategoryStatusDisableAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:submitBulkdisableSelectioncms_category'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/category/update-position' => [[['_route' => 'admin_cms_pages_category_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::updateCmsCategoryPositionAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:updatecms_category'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/cms-pages/update-position' => [[['_route' => 'admin_cms_pages_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::updateCmsPositionAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:updatecms'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/mail_theme/saveConfiguration' => [[['_route' => 'admin_mail_theme_save_configuration_deprecated', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'admin_mail_theme_save_configuration', 'permanent' => true], null, null, null, false, false, null]],
        '/improve/design/mail_theme' => [[['_route' => 'admin_mail_theme_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::indexAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme'], null, ['GET' => 0], null, true, false, null]],
        '/improve/design/mail_theme/generate' => [[['_route' => 'admin_mail_theme_generate', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::generateMailsAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:postGenerateMails'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/mail_theme/save-configuration' => [[['_route' => 'admin_mail_theme_save_configuration', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::saveConfigurationAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:saveConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/improve/design/mail_theme/translate-body' => [[['_route' => 'admin_mail_theme_translate_body', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::translateBodyAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:translateBody'], null, ['POST' => 0], null, false, false, null]],
        '/improve/payment/payment_methods' => [[['_route' => 'admin_payment_methods', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentMethodsController::indexAction', '_legacy_controller' => 'AdminPayment', '_legacy_link' => 'AdminPayment'], null, ['GET' => 0], null, false, false, null]],
        '/improve/payment/preferences' => [
            [['_route' => 'admin_payment_preferences', '_legacy_controller' => 'AdminPaymentPreferences', '_legacy_link' => 'AdminPaymentPreferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentPreferencesController::indexAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_payment_preferences_process', '_legacy_controller' => 'AdminPaymentPreferences', '_legacy_link' => 'AdminPaymentPreferences:update', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentPreferencesController::processFormAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/improve/shipping/preferences' => [[['_route' => 'admin_shipping_preferences', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController::indexAction', '_legacy_controller' => 'AdminShipping', '_legacy_link' => 'AdminShipping'], null, ['GET' => 0], null, true, false, null]],
        '/improve/shipping/preferences/handling' => [[['_route' => 'admin_shipping_preferences_handling_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController::processHandlingFormAction', '_legacy_controller' => 'AdminShipping', '_legacy_link' => 'AdminShipping:update'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/shipping/preferences/carrier-options' => [[['_route' => 'admin_shipping_preferences_carrier_options_save', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController::processCarrierOptionsFormAction', '_legacy_controller' => 'AdminShipping'], null, ['PATCH' => 0, 'POST' => 1], null, false, false, null]],
        '/improve/shipping/carriers' => [
            [['_route' => 'admin_carriers_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::indexAction', '_legacy_controller' => 'AdminCarriers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_carriers_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::searchAction', '_legacy_controller' => 'AdminCarriers'], null, ['POST' => 0], null, true, false, null],
        ],
        '/improve/shipping/carriers/update-position' => [[['_route' => 'admin_carriers_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::updatePositionAction', '_legacy_controller' => 'AdminCarriers'], null, ['POST' => 0], null, false, false, null]],
        '/improve/shipping/carriers/bulk-enable' => [[['_route' => 'admin_carriers_bulk_enable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::bulkEnableStatusAction', '_legacy_controller' => 'AdminCarriers'], null, ['POST' => 0], null, false, false, null]],
        '/improve/shipping/carriers/bulk-disable' => [[['_route' => 'admin_carriers_bulk_disable_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::bulkDisableStatusAction', '_legacy_controller' => 'AdminCarriers'], null, ['POST' => 0], null, false, false, null]],
        '/improve/shipping/carriers/bulk-delete' => [[['_route' => 'admin_carriers_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::bulkDeleteAction', '_legacy_controller' => 'AdminCarriers'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/errors/enable-debug-mode' => [[['_route' => 'admin_errors_enable_debug_mode', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ErrorController::enableDebugModeAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/stocks' => [[['_route' => 'api_stock_list_products', '_controller' => 'prestashop.core.api.stock.controller:listProductsAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, true, false, null]],
        '/api/stocks/export' => [[['_route' => 'api_stock_list_products_export', '_controller' => 'prestashop.core.api.stock.controller:listProductsExportAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, false, false, null]],
        '/api/stocks/products' => [[['_route' => 'api_stock_bulk_edit_products', '_controller' => 'prestashop.core.api.stock.controller:bulkEditProductsAction', '_legacy_controller' => 'AdminStockManagement'], null, ['POST' => 0], null, false, false, null]],
        '/api/stock-movements' => [[['_route' => 'api_stock_list_movements', '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, true, false, null]],
        '/api/stock-movements/employees' => [[['_route' => 'api_stock_list_movements_employees', '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsEmployeesAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, false, false, null]],
        '/api/stock-movements/types' => [[['_route' => 'api_stock_list_movements_types', '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsTypesAction', '_legacy_controller' => 'AdminStockManagement'], null, ['GET' => 0], null, false, false, null]],
        '/api/suppliers' => [[['_route' => 'api_stock_list_suppliers', '_controller' => 'prestashop.core.api.supplier.controller:listSuppliersAction'], null, ['GET' => 0], null, true, false, null]],
        '/api/manufacturers' => [[['_route' => 'api_stock_list_manufacturers', '_controller' => 'prestashop.core.api.manufacturer.controller:listManufacturersAction'], null, ['GET' => 0], null, true, false, null]],
        '/api/categories' => [[['_route' => 'api_stock_list_categories', '_controller' => 'prestashop.core.api.category.controller:listCategoriesAction'], null, ['GET' => 0], null, true, false, null]],
        '/api/attributes' => [[['_route' => 'api_stock_list_attributes', '_controller' => 'prestashop.core.api.attribute.controller:listAttributesAction'], null, ['GET' => 0], null, true, false, null]],
        '/api/features' => [[['_route' => 'api_stock_list_features', '_controller' => 'prestashop.core.api.feature.controller:listFeaturesAction'], null, ['GET' => 0], null, true, false, null]],
        '/api/translations/edit' => [[['_route' => 'api_translation_value_edit', '_controller' => 'prestashop.core.api.translation.controller:translationEditAction', '_legacy_controller' => 'AdminTranslations'], null, ['POST' => 0], null, false, false, null]],
        '/api/translations/reset' => [[['_route' => 'api_translation_value_reset', '_controller' => 'prestashop.core.api.translation.controller:translationResetAction', '_legacy_controller' => 'AdminTranslations'], null, ['POST' => 0], null, false, false, null]],
        '/api/improve/design/positions/update' => [[['_route' => 'api_improve_design_positions_update', '_controller' => 'prestashop.core.api.improve.design.postions.controller:updateAction', '_legacy_controller' => 'AdminModulesPositions'], null, ['POST' => 0], null, false, false, null]],
        '/modules/blockwishlist/configuration' => [[['_route' => 'blockwishlist_configuration', '_controller' => 'PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::configurationAction', '_legacy_controller' => 'WishlistConfigurationAdminController', '_legacy_link' => 'WishlistConfigurationAdminController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modules/blockwishlist/statistics' => [[['_route' => 'blockwishlist_statistics', '_controller' => 'PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::statisticsAction', '_legacy_controller' => 'WishlistStatisticsAdminController', '_legacy_link' => 'WishlistStatisticsAdminController'], null, ['GET' => 0], null, false, false, null]],
        '/modules/blockwishlist/statistics/reset' => [[['_route' => 'blockwishlist_statistics_reset', '_controller' => 'PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController::resetStatisticsCacheAction'], null, ['POST' => 0], null, false, false, null]],
        '/modules/link-widget/list' => [[['_route' => 'admin_link_block_list', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::listAction', '_legacy_controller' => 'AdminLinkWidget', '_legacy_link' => 'AdminLinkWidget'], null, ['GET' => 0], null, false, false, null]],
        '/modules/link-widget/create' => [
            [['_route' => 'admin_link_block_create', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createAction', '_legacy_controller' => 'AdminLinkWidget'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_link_block_create_process', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createProcessAction', '_legacy_controller' => 'AdminLinkWidget'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/co(?'
                    .'|mmon/(?'
                        .'|pagination(?:/(\\d+)(?:/(\\d+)(?:/(\\d+)(?:/(full|quicknav))?)?)?)?(*:85)'
                        .'|sidebar/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:136)'
                        .'|reset_search/([^/]++)(?'
                            .'|/([^/]++)(*:177)'
                            .'|(*:185)'
                        .')'
                    .')'
                    .'|nfigure/(?'
                        .'|advanced/(?'
                            .'|import/sample/download/([^/]++)(*:249)'
                            .'|em(?'
                                .'|ails/delete/(\\d+)(*:279)'
                                .'|ployees/(?'
                                    .'|([^/]++)/(?'
                                        .'|toggle\\-status(*:324)'
                                        .'|delete(*:338)'
                                    .')'
                                    .'|(\\d+)/edit(*:357)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|hops/search/([^/]++)(*:391)'
                                .'|ql\\-requests/(?'
                                    .'|(\\d+)/edit(*:425)'
                                    .'|(\\d+)/delete(*:445)'
                                    .'|tables/([^/]++)/columns(*:476)'
                                    .'|(\\d+)/view(*:494)'
                                    .'|(\\d+)/export(*:514)'
                                .')'
                                .'|ecurity/session/(?'
                                    .'|customer/(\\d+)(*:556)'
                                    .'|employee/(\\d+)(*:578)'
                                .')'
                            .')'
                            .'|webservice\\-keys/(?'
                                .'|(\\d+)/edit(*:618)'
                                .'|(\\d+)/delete(*:638)'
                                .'|(\\d+)/toggle\\-status(*:666)'
                            .')'
                            .'|backups/(?'
                                .'|view/([^/]++)(*:699)'
                                .'|download/([^/]++)(*:724)'
                                .'|([^/]++)(*:740)'
                                .'|bulk\\-delete(*:760)'
                            .')'
                            .'|profiles/(?'
                                .'|(\\d+)/edit(*:791)'
                                .'|(\\d+)/delete(*:811)'
                            .')'
                        .')'
                        .'|shop/(?'
                            .'|se(?'
                                .'|o\\-urls/([^/]++)/(?'
                                    .'|edit(*:858)'
                                    .'|delete(*:872)'
                                .')'
                                .'|arch\\-engines/(?'
                                    .'|(\\d+)/edit(*:908)'
                                    .'|(\\d+)/delete(*:928)'
                                .')'
                            .')'
                            .'|contacts/(?'
                                .'|(\\d+)/edit(*:960)'
                                .'|(\\d+)/delete(*:980)'
                            .')'
                            .'|order\\-(?'
                                .'|states/(?'
                                    .'|([^/]++)/edit(*:1022)'
                                    .'|(\\d+)/toggle\\-delivery(*:1053)'
                                    .'|(\\d+)/toggle\\-invoice(*:1083)'
                                    .'|(\\d+)/toggle\\-send\\-email(*:1117)'
                                    .'|([^/]++)/delete(*:1141)'
                                .')'
                                .'|return\\-states/([^/]++)/(?'
                                    .'|edit(*:1182)'
                                    .'|delete(*:1197)'
                                .')'
                            .')'
                            .'|title/(?'
                                .'|(\\d+)/edit(*:1227)'
                                .'|(\\d+)/delete(*:1248)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/sell/(?'
                    .'|c(?'
                        .'|atalog/(?'
                            .'|products(?'
                                .'|/(?'
                                    .'|(\\d+)(*:1304)'
                                    .'|virtual/(?'
                                        .'|save(?:/(\\d+))?(*:1339)'
                                        .'|remove(?'
                                            .'|\\-file(?:/(\\d+))?(*:1374)'
                                            .'|(?:/(\\d+))?(*:1394)'
                                        .')'
                                        .'|download\\-file(?:/(\\d+))?(*:1429)'
                                    .')'
                                    .'|attachment/form/add(?:/(\\d+))?(*:1469)'
                                    .'|image/(?'
                                        .'|upload(?:/(\\d+))?(*:1504)'
                                        .'|form(?:/(\\d+))?(*:1528)'
                                        .'|delete(?:/(\\d+))?(*:1554)'
                                    .')'
                                    .'|([^/]++)/toggle\\-status(*:1587)'
                                    .'|attributes/(?'
                                        .'|([^/]++)(*:1618)'
                                        .'|delete\\-all(?:/(\\d+))?(*:1649)'
                                        .'|form\\-images(?:/(\\d+))?(*:1681)'
                                    .')'
                                    .'|c(?'
                                        .'|ategories/list(?:/(\\d+))?(*:1720)'
                                        .'|ombinations(?'
                                            .'|/form(?:/([^/]++))?(*:1762)'
                                            .'|(?:/(\\d+))?(*:1782)'
                                        .')'
                                    .')'
                                    .'|features(?:/(\\d+))?(*:1812)'
                                    .'|s(?'
                                        .'|pecific\\-prices/(?'
                                            .'|list(?:/(\\d+))?(*:1859)'
                                            .'|form/(\\d+)(*:1878)'
                                            .'|update/(\\d+)(*:1899)'
                                            .'|delete(?:/(\\d+))?(*:1925)'
                                        .')'
                                        .'|uppliers/refresh\\-product\\-supplier\\-combination\\-form(?:/(\\d+)(?:/([^/]++))?)?(*:2014)'
                                    .')'
                                    .'|warehouses/refresh\\-product\\-warehouse\\-combination\\-form(?:/(\\d+))?(*:2092)'
                                .')'
                                .'|(?:/(last|\\d+)(?:/(_limit|last|\\d+)(?:/(last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(last|asc|desc))?)?)?)?(*:2267)'
                                .'|/(?'
                                    .'|filters(?:/(none|<=\\d+|<\\d+|>\\d+|>=\\d+)(?:/(none|1|0))?)?(*:2337)'
                                    .'|list(?:/(last|\\d+)(?:/(_limit|last|\\d+)(?:/(last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(last|asc|desc)(?:/(full|quicknav))?)?)?)?)?(*:2536)'
                                    .'|bulk/(activate_all|deactivate_all|delete_all|duplicate_all)(*:2604)'
                                    .'|unit/(delete|duplicate|activate|deactivate)/(\\d+)(*:2662)'
                                    .'|massedit/(sort)(*:2686)'
                                    .'|export(?:\\.(csv))?(*:2713)'
                                .')'
                                .'|\\-v2/(?'
                                    .'|([^/]++)/combinations(?'
                                        .'|(*:2755)'
                                        .'|/ids(*:2768)'
                                    .')'
                                    .'|combinations/(?'
                                        .'|([^/]++)/update\\-combination\\-from\\-listing(*:2837)'
                                        .'|(\\d+)/edit(*:2856)'
                                    .')'
                                    .'|([^/]++)/combinations/bulk\\-form(*:2898)'
                                    .'|(\\d+)/combinations/bulk\\-edit(*:2936)'
                                    .'|combinations/(\\d+)/delete(*:2970)'
                                    .'|(\\d+)/combinations/bulk\\-delete(*:3010)'
                                    .'|([^/]++)/attribute\\-groups(*:3045)'
                                    .'|generate\\-combinations/([^/]++)(*:3085)'
                                    .'|(\\d+)/images(*:3106)'
                                    .'|images/(?'
                                        .'|(\\d+)/update(*:3137)'
                                        .'|(\\d+)/delete(*:3158)'
                                    .')'
                                    .'|(\\d+)/specific\\-prices/list(*:3195)'
                                    .'|(\\d+)/specific\\-prices/create(*:3233)'
                                    .'|specific\\-prices/(?'
                                        .'|(\\d+)/edit(*:3272)'
                                        .'|(\\d+)/delete(*:3293)'
                                    .')'
                                    .'|(\\d+)/edit(*:3313)'
                                    .'|virtual\\-product\\-file/(\\d+)(*:3350)'
                                    .'|(\\d+)/delete(*:3371)'
                                    .'|(\\d+)/duplicate(*:3395)'
                                    .'|(\\d+)/toggle_status(*:3423)'
                                    .'|search/(?'
                                        .'|([a-zA-Z]{2}(?:-[a-zA-Z]{2})?)(*:3472)'
                                        .'|combination/([a-zA-Z]{2}(?:-[a-zA-Z]{2})?)(*:3523)'
                                    .')'
                                .')'
                            .')'
                            .'|ca(?'
                                .'|t(?'
                                    .'|egories(?'
                                        .'|(?:/(\\d+))?(*:3565)'
                                        .'|/(?'
                                            .'|([^/]++)/toggle\\-status(*:3601)'
                                            .'|(\\d+)/edit(*:3620)'
                                            .'|(\\d+)/edit\\-root(*:3645)'
                                            .'|(\\d+)/delete\\-cover\\-image(*:3680)'
                                            .'|(\\d+)/menu\\-thumbnails/(0|1|2)/delete(*:3726)'
                                        .')'
                                    .')'
                                    .'|alog\\-price\\-rules/(?'
                                        .'|(\\d+)/edit(*:3769)'
                                        .'|(\\d+)/delete(*:3790)'
                                    .')'
                                .')'
                                .'|rt\\-rules/(?'
                                    .'|(\\d+)/toggle\\-status(*:3834)'
                                    .'|(\\d+)/delete(*:3855)'
                                .')'
                            .')'
                            .'|suppliers/(?'
                                .'|(\\d+)/products(*:3893)'
                                .'|(\\d+)/edit(*:3912)'
                                .'|(\\d+)/delete(*:3933)'
                                .'|(\\d+)/toggle\\-status(*:3962)'
                            .')'
                            .'|brands/(?'
                                .'|(\\d+)/view(*:3992)'
                                .'|(\\d+)/edit(*:4011)'
                                .'|(\\d+)/delete(*:4032)'
                                .'|(\\d+)/toggle\\-status(*:4061)'
                                .'|addresses/(?'
                                    .'|(\\d+)/edit(*:4093)'
                                    .'|(\\d+)/delete(*:4114)'
                                .')'
                            .')'
                            .'|attribute\\-groups/(?'
                                .'|(\\d+)/attributes(?'
                                    .'|(*:4165)'
                                .')'
                                .'|(\\d+)/attributes/new(*:4195)'
                                .'|(\\d+)/attributes/(\\d+)/edit(*:4231)'
                                .'|(\\d+)/attributes/([^/]++)/delete(*:4272)'
                                .'|(\\d+)/attributes/delete(*:4304)'
                                .'|(\\d+)/attributes/update\\-position(*:4346)'
                                .'|(\\d+)/view(*:4365)'
                                .'|(\\d+)/edit(*:4384)'
                                .'|(\\d+)/delete(*:4405)'
                            .')'
                        .')'
                        .'|ustomer(?'
                            .'|s/(?'
                                .'|(\\d+)/edit(*:4441)'
                                .'|(\\d+)/view(*:4460)'
                                .'|(\\d+)/set\\-private\\-note(*:4493)'
                                .'|(\\d+)/toggle\\-status(*:4522)'
                                .'|([^/]++)/transform\\-guest\\-to\\-customer(*:4570)'
                                .'|(\\d+)/toggle\\-newsletter\\-subscription(*:4617)'
                                .'|(\\d+)/toggle\\-partner\\-offer\\-subscription(*:4668)'
                                .'|(\\d+)/carts(*:4688)'
                                .'|(\\d+)/orders(*:4709)'
                            .')'
                            .'|\\-service/(?'
                                .'|order\\-messages/(?'
                                    .'|(\\d+)/edit(*:4761)'
                                    .'|(\\d+)/delete(*:4782)'
                                .')'
                                .'|customer\\-threads/(?'
                                    .'|(\\d+)/view(*:4823)'
                                    .'|(\\d+)/reply(*:4843)'
                                    .'|(\\d+)/update\\-status/([^/]++)(*:4881)'
                                    .'|(\\d+)/forward(*:4903)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ddresses/(?'
                            .'|(\\d+)/edit(*:4942)'
                            .'|order/(\\d+)/(delivery|invoice)/edit(*:4986)'
                            .'|cart/(\\d+)/(delivery|invoice)/edit(*:5029)'
                            .'|(\\d+)/delete(*:5050)'
                        .')'
                        .'|ttachments/(?'
                            .'|(\\d+)/edit(*:5084)'
                            .'|(\\d+)/view(*:5103)'
                            .'|(\\d+)/delete(*:5124)'
                            .'|(\\d+)/info(*:5143)'
                            .'|search/([^/]++)(*:5167)'
                        .')'
                    .')'
                    .'|orders/(?'
                        .'|invoices/(\\d+)/generate(*:5211)'
                        .'|carts/(?'
                            .'|(\\d+)/view(*:5239)'
                            .'|(\\d+)/info(*:5258)'
                            .'|(\\d+)/addresses(*:5282)'
                            .'|(\\d+)/carrier(*:5304)'
                            .'|(\\d+)/currency(*:5327)'
                            .'|(\\d+)/language(*:5350)'
                            .'|(\\d+)/rules/delivery\\-settings(*:5389)'
                            .'|([^/]++)/cart\\-rules(?'
                                .'|(*:5421)'
                                .'|/([^/]++)/delete(*:5446)'
                            .')'
                            .'|(\\d+)/products(*:5470)'
                            .'|(\\d+)/products/(\\d+)/price(*:5505)'
                            .'|(\\d+)/products/(\\d+)/quantity(*:5543)'
                            .'|(\\d+)/delete\\-product(*:5573)'
                        .')'
                        .'|(\\d+)/generate\\-invoice\\-pdf(*:5611)'
                        .'|(\\d+)/generate\\-delivery\\-slip\\-pdf(*:5655)'
                        .'|(\\d+)/view(*:5674)'
                        .'|(\\d+)/cart\\-rules(*:5700)'
                        .'|list/(\\d+)/status(*:5726)'
                        .'|(\\d+)/status(*:5747)'
                        .'|(\\d+)/payment(*:5769)'
                        .'|(\\d+)/duplicate\\-cart(*:5799)'
                        .'|(\\d+)/currency/change(*:5829)'
                        .'|(\\d+)/products/(\\d+)(*:5858)'
                        .'|(\\d+)/cart\\-rules/(\\d+)/delete(*:5897)'
                        .'|(\\d+)/history/(\\d+)/statuses/(\\d+)/resend\\-email(*:5954)'
                        .'|(\\d+)/preview(*:5976)'
                        .'|(\\d+)/shipping(*:5999)'
                        .'|(\\d+)/invoice/(\\d+)/note(*:6032)'
                        .'|(\\d+)/invoice(*:6054)'
                        .'|([^/]++)/send\\-message(*:6085)'
                        .'|(\\d+)/partial\\-refund(*:6115)'
                        .'|(\\d+)/standard\\-refund(*:6146)'
                        .'|(\\d+)/return\\-product(*:6176)'
                        .'|(\\d+)/products(*:6199)'
                        .'|(\\d+)/products/(\\d+)/delete(*:6235)'
                        .'|(\\d+)/discounts(*:6259)'
                        .'|(\\d+)/prices(*:6280)'
                        .'|(\\d+)/payments(*:6303)'
                        .'|(\\d+)/products(*:6326)'
                        .'|(\\d+)/invoices(*:6349)'
                        .'|(\\d+)/documents(*:6373)'
                        .'|(\\d+)/shipping(*:6396)'
                        .'|(\\d+)/cancellation(*:6423)'
                        .'|display\\-customization\\-image/(\\d+)/(.+)(*:6472)'
                        .'|(\\d+)/products/prices(*:6502)'
                        .'|(\\d+)/set\\-internal\\-note(*:6536)'
                        .'|credit\\-slips/(\\d+)/pdf(*:6568)'
                    .')'
                .')'
                .'|/improve/(?'
                    .'|international/(?'
                        .'|languages/(?'
                            .'|(\\d+)/edit(*:6631)'
                            .'|(\\d+)/delete(*:6652)'
                            .'|([^/]++)/toggle\\-status(*:6684)'
                            .'|bulk\\-toggle\\-status/(enable|disable)(*:6730)'
                        .')'
                        .'|c(?'
                            .'|urrencies/(?'
                                .'|(\\d+)/edit(*:6767)'
                                .'|(\\d+)/delete(*:6788)'
                                .'|(\\d+)/toggle\\-status(*:6817)'
                                .'|reference\\-data/([^/]++)(*:6850)'
                                .'|bulk\\-toggle\\-status/(enable|disable)(*:6896)'
                            .')'
                            .'|ountries/(\\d+)/edit(*:6925)'
                        .')'
                        .'|tax(?'
                            .'|es/(?'
                                .'|(\\d+)/edit(*:6957)'
                                .'|(\\d+)/delete(*:6978)'
                                .'|(\\d+)/toggle\\-status(*:7007)'
                            .')'
                            .'|_rules_groups/(?'
                                .'|(\\d+)/edit(*:7044)'
                                .'|(\\d+)/delete(*:7065)'
                                .'|(\\d+)/toggle\\-status(*:7094)'
                            .')'
                        .')'
                        .'|states/(?'
                            .'|(\\d+)/edit(*:7125)'
                            .'|(\\d+)/delete(*:7146)'
                            .'|([^/]++)/toggle\\-status(*:7178)'
                        .')'
                        .'|zones/(?'
                            .'|(\\d+)/edit(*:7207)'
                            .'|(\\d+)/delete(*:7228)'
                            .'|(\\d+)/toggle\\-status(*:7257)'
                            .'|bulk\\-toggle\\-status/(enable|disable)(*:7303)'
                        .')'
                    .')'
                    .'|modules/manage(?'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:7359)'
                        .'|/(?'
                            .'|action/(?'
                                .'|(install|uninstall|enable|disable|enableMobile|disableMobile|reset|upgrade)/([^/]++)(*:7466)'
                                .'|configure/([^/]++)(*:7493)'
                            .')'
                            .'|bulk/(install|uninstall|configure|enable|disable|reset|upgrade)(*:7566)'
                            .'|update/all(*:7585)'
                        .')'
                    .')'
                    .'|design/(?'
                        .'|themes/(?'
                            .'|([a-zA-Z0-9_.-]+)/enable(*:7640)'
                            .'|([a-zA-Z0-9_.-]+)/delete(*:7673)'
                            .'|([a-zA-Z0-9_.-]+)/reset\\-layouts(*:7714)'
                        .')'
                        .'|cms\\-pages/(?'
                            .'|(\\d+)/edit(*:7748)'
                            .'|(\\d+)/toggle\\-status(*:7777)'
                            .'|(\\d+)/delete(*:7798)'
                            .'|category/(?'
                                .'|(\\d+)/edit(*:7829)'
                                .'|(\\d+)/delete(*:7850)'
                                .'|(\\d+)/toggle\\-status(*:7879)'
                            .')'
                        .')'
                        .'|mail_theme/(?'
                            .'|send(?'
                                .'|TestMail/([^/]++)/([^/]++)/([^/]++)(?'
                                    .'|(*:7949)'
                                    .'|/([^/]++)(*:7967)'
                                .')'
                                .'|\\-test\\-mail/([^/]++)/([^/]++)/([^/]++)(?'
                                    .'|(*:8019)'
                                    .'|/([^/]++)(*:8037)'
                                .')'
                            .')'
                            .'|preview/([^/]++)(?'
                                .'|(*:8067)'
                                .'|/([^/]++)/(?'
                                    .'|([^/\\.]++)\\.([^/]++)(*:8109)'
                                    .'|([^/]++)/([^/\\.]++)\\.([^/]++)(*:8147)'
                                .')'
                            .')'
                            .'|raw/([^/]++)/([^/]++)/(?'
                                .'|([^/\\.]++)\\.([^/]++)(*:8203)'
                                .'|([^/]++)/([^/\\.]++)\\.([^/]++)(*:8241)'
                            .')'
                        .')'
                    .')'
                    .'|shipping/carriers/(?'
                        .'|(\\d+)/edit(*:8284)'
                        .'|(\\d+)/delete(*:8305)'
                        .'|(\\d+)/toggle\\-status(*:8334)'
                        .'|(\\d+)/toggle\\-is\\-free(*:8365)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|stock(?'
                        .'|s/(?'
                            .'|(\\d+)(*:8402)'
                            .'|product/(?'
                                .'|(\\d+)(*:8427)'
                                .'|(\\d+)/combination/(\\d+)(*:8459)'
                            .')'
                        .')'
                        .'|\\-movements/product/(\\d+)(*:8495)'
                    .')'
                    .'|i18n/(\\w+)(*:8515)'
                    .'|translations/(?'
                        .'|tree/([^/]++)/([^/]++)(?:/([^/]++))?(*:8576)'
                        .'|([^/]++)/([^/]++)(?:/([^/]++))?(*:8616)'
                    .')'
                .')'
                .'|/modules/link\\-widget/(?'
                    .'|edit/([^/]++)(?'
                        .'|(*:8668)'
                    .')'
                    .'|delete/(\\d+)(*:8690)'
                    .'|update\\-positions/(\\d+)(*:8722)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        85 => [[['_route' => 'admin_common_pagination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction', 'offset' => 0, 'limit' => 20, 'total' => 0, 'view' => 'full'], ['offset', 'limit', 'total', 'view'], ['GET' => 0], null, false, true, null]],
        136 => [[['_route' => 'admin_common_sidebar', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::renderSidebarAction', 'title' => '', 'footer' => ''], ['url', 'title', 'footer'], ['GET' => 0], null, false, true, null]],
        177 => [[['_route' => 'admin_common_reset_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::resetSearchAction', 'filterId' => ''], ['controller', 'action'], ['POST' => 0], null, false, true, null]],
        185 => [[['_route' => 'admin_common_reset_search_by_filter_id', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::resetSearchAction', 'controller' => '', 'action' => ''], ['filterId'], ['POST' => 0], null, false, true, null]],
        249 => [[['_route' => 'admin_import_sample_download', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::downloadSampleAction', '_legacy_controller' => 'AdminImport', '_legacy_link' => 'AdminImport:sampleDownload'], ['sampleName'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'admin_emails_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteAction', '_legacy_controller' => 'AdminEmails', '_legacy_link' => 'AdminEmails:deletemail', '_legacy_parameters' => ['id_mail' => 'mailId']], ['mailId'], ['POST' => 0], null, false, true, null]],
        324 => [[['_route' => 'admin_employees_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::toggleStatusAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:statusemployee', '_legacy_parameters' => ['id_employee' => 'employeeId']], ['employeeId'], ['POST' => 0], null, false, false, null]],
        338 => [[['_route' => 'admin_employees_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::deleteAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:deleteemployee', '_legacy_parameters' => ['id_employee' => 'employeeId']], ['employeeId'], ['POST' => 0], null, false, false, null]],
        357 => [[['_route' => 'admin_employees_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController::editAction', '_legacy_controller' => 'AdminEmployees', '_legacy_link' => 'AdminEmployees:updateemployee', '_legacy_parameters' => ['id_employee' => 'employeeId']], ['employeeId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        391 => [[['_route' => 'admin_shops_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ShopController::searchAction'], ['searchTerm'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => 'admin_sql_requests_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::editAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:updaterequest_sql', '_legacy_parameters' => ['id_request_sql' => 'sqlRequestId']], ['sqlRequestId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'admin_sql_requests_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::deleteAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:deleterequest_sql', '_legacy_parameters' => ['id_request_sql' => 'sqlRequestId']], ['sqlRequestId'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        476 => [[['_route' => 'admin_sql_requests_table_columns', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::ajaxTableColumnsAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:ajax', '_legacy_parameters' => ['table' => 'mySqlTableName']], ['mySqlTableName'], ['GET' => 0], null, false, false, null]],
        494 => [[['_route' => 'admin_sql_requests_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::viewAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:viewsql_request', '_legacy_parameters' => ['id_request_sql' => 'sqlRequestId']], ['sqlRequestId'], ['GET' => 0], null, false, false, null]],
        514 => [[['_route' => 'admin_sql_requests_export', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::exportAction', '_legacy_controller' => 'AdminRequestSql', '_legacy_link' => 'AdminRequestSql:exportsql_request', '_legacy_parameters' => ['id_request_sql' => 'sqlRequestId']], ['sqlRequestId'], ['GET' => 0], null, false, false, null]],
        556 => [[['_route' => 'admin_security_sessions_customer_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::deleteCustomerSessionAction', '_legacy_controller' => 'AdminSecuritySessionCustomer', '_legacy_link' => 'AdminSecuritySessionCustomer'], ['sessionId'], ['DELETE' => 0], null, false, true, null]],
        578 => [[['_route' => 'admin_security_sessions_employee_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController::deleteEmployeeSessionAction', '_legacy_controller' => 'AdminSecuritySessionEmployee', '_legacy_link' => 'AdminSecuritySessionEmployee'], ['sessionId'], ['DELETE' => 0], null, false, true, null]],
        618 => [[['_route' => 'admin_webservice_keys_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::editAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:updatewebservice_account', '_legacy_parameters' => ['id_webservice_account' => 'webserviceKeyId']], ['webserviceKeyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        638 => [[['_route' => 'admin_webservice_keys_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::deleteAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:deletewebservice_account', '_legacy_parameters' => ['id_webservice_account' => 'webserviceKeyId']], ['webserviceKeyId'], ['DELETE' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'admin_webservice_keys_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::toggleStatusAction', '_legacy_controller' => 'AdminWebservice', '_legacy_link' => 'AdminWebservice:statuswebservice_account', '_legacy_parameters' => ['id_webservice_account' => 'webserviceKeyId']], ['webserviceKeyId'], ['POST' => 0], null, false, false, null]],
        699 => [[['_route' => 'admin_backups_download_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::downloadViewAction', '_legacy_controller' => 'AdminBackup'], ['downloadFileName'], ['GET' => 0], null, false, true, null]],
        724 => [[['_route' => 'admin_backup_download', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::downloadContentAction', '_legacy_controller' => 'AdminBackup'], ['downloadFileName'], ['GET' => 0], null, false, true, null]],
        740 => [[['_route' => 'admin_backups_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::deleteAction', '_legacy_controller' => 'AdminBackup', '_legacy_link' => 'AdminBackup:delete', '_legacy_parameters' => ['filename' => 'deleteFileName']], ['deleteFileName'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        760 => [[['_route' => 'admin_backups_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::bulkDeleteAction', '_legacy_controller' => 'AdminBackup', '_legacy_link' => 'AdminBackup:submitBulkdeletebackup'], [], ['POST' => 0], null, true, false, null]],
        791 => [[['_route' => 'admin_profiles_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController::editAction', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles:updateprofile', '_legacy_parameters' => ['id_profile' => 'profileId']], ['profileId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        811 => [[['_route' => 'admin_profiles_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController::deleteAction', '_legacy_controller' => 'AdminProfiles', '_legacy_link' => 'AdminProfiles:deleteprofile', '_legacy_parameters' => ['id_profile' => 'profileId']], ['profileId'], ['POST' => 0], null, false, false, null]],
        858 => [[['_route' => 'admin_metas_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::editAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:updatemeta', '_legacy_parameters' => ['id_meta' => 'metaId']], ['metaId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'admin_metas_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::deleteAction', '_legacy_controller' => 'AdminMeta', '_legacy_link' => 'AdminMeta:deletemeta', '_legacy_parameters' => ['id_meta' => 'metaId']], ['metaId'], ['DELETE' => 0], null, false, false, null]],
        908 => [[['_route' => 'admin_search_engines_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController::editAction', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines:updatesearch_engine'], ['searchEngineId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        928 => [[['_route' => 'admin_search_engines_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController::deleteAction', '_legacy_controller' => 'AdminSearchEngines', '_legacy_link' => 'AdminSearchEngines:deletesearch_engine'], ['searchEngineId'], ['POST' => 0], null, false, false, null]],
        960 => [[['_route' => 'admin_contacts_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController::editAction', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts:updatecontact'], ['contactId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        980 => [[['_route' => 'admin_contacts_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController::deleteAction', '_legacy_controller' => 'AdminContacts', '_legacy_link' => 'AdminContacts:deletecontact'], ['contactId'], ['POST' => 0], null, false, false, null]],
        1022 => [[['_route' => 'admin_order_states_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::editAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:updateorderstate', '_legacy_parameters' => ['id_order_state' => 'orderStateId']], ['orderStateId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1053 => [[['_route' => 'admin_order_states_toggle_delivery', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::toggleDeliveryAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:deliveryorderstate', '_legacy_parameters' => ['id_order_state' => 'orderStateId']], ['orderStateId'], ['POST' => 0], null, false, false, null]],
        1083 => [[['_route' => 'admin_order_states_toggle_invoice', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::toggleInvoiceAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:invoiceorderstate', '_legacy_parameters' => ['id_order_state' => 'orderStateId']], ['orderStateId'], ['POST' => 0], null, false, false, null]],
        1117 => [[['_route' => 'admin_order_states_toggle_send_email', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::toggleSendEmailAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:sendemailorderstate', '_legacy_parameters' => ['id_order_state' => 'orderStateId']], ['orderStateId'], ['POST' => 0], null, false, false, null]],
        1141 => [[['_route' => 'admin_order_states_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::deleteAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:deleteorderstate', '_legacy_parameters' => ['id_order_state' => 'orderStateId']], ['orderStateId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        1182 => [[['_route' => 'admin_order_return_states_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::editOrderReturnStateAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:updateorderreturnstate', '_legacy_parameters' => ['id_order_return_state' => 'orderReturnStateId']], ['orderReturnStateId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1197 => [[['_route' => 'admin_order_return_states_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController::deleteOrderReturnStateAction', '_legacy_controller' => 'AdminStatuses', '_legacy_link' => 'AdminStatuses:deleteorderreturnstate', '_legacy_parameters' => ['id_order_return_state' => 'orderReturnStateId']], ['orderReturnStateId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        1227 => [[['_route' => 'admin_title_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController::editAction', '_legacy_controller' => 'AdminGenders'], ['titleId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1248 => [[['_route' => 'admin_title_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController::deleteAction', '_legacy_controller' => 'AdminGenders'], ['titleId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        1304 => [[['_route' => 'admin_product_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::formAction', '_legacy_controller' => 'AdminProducts', '_legacy_param_mapper_class' => 'PrestaShop\\PrestaShop\\Adapter\\Product\\AdminProductDataProvider', '_legacy_param_mapper_method' => 'mapLegacyParametersProductForm'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1339 => [[['_route' => 'admin_product_virtual_save_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::saveAction', 'idProduct' => 0], ['idProduct'], ['POST' => 0], null, false, true, null]],
        1374 => [[['_route' => 'admin_product_virtual_remove_file_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeFileAction', 'idProduct' => 0], ['idProduct'], null, null, false, true, null]],
        1394 => [[['_route' => 'admin_product_virtual_remove_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeAction', 'idProduct' => 0], ['idProduct'], null, null, false, true, null]],
        1429 => [[['_route' => 'admin_product_virtual_download_file_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::downloadFileAction', 'idProduct' => 0], ['idProduct'], null, null, false, true, null]],
        1469 => [[['_route' => 'admin_product_attachement_add_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttachementProductController::addAction', 'idProduct' => 0], ['idProduct'], ['POST' => 0], null, false, true, null]],
        1504 => [[['_route' => 'admin_product_image_upload', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::uploadImageAction', 'idProduct' => 0], ['idProduct'], ['POST' => 0], null, false, true, null]],
        1528 => [[['_route' => 'admin_product_image_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::formAction', 'idImage' => 0], ['idImage'], null, null, false, true, null]],
        1554 => [[['_route' => 'admin_product_image_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::deleteAction', 'idImage' => 0], ['idImage'], null, null, false, true, null]],
        1587 => [[['_route' => 'admin_product_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::toggleStatusAction', '_legacy_controller' => 'AdminTracking', '_legacy_link' => 'AdminTracking:statusproduct', '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['POST' => 0], null, false, false, null]],
        1618 => [[['_route' => 'admin_delete_attribute', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAttributeAction', '_legacy_controller' => 'AdminProducts'], ['idProduct'], ['DELETE' => 0], null, false, true, null]],
        1649 => [[['_route' => 'admin_delete_all_attributes', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAllAttributeAction', '_legacy_controller' => 'AdminProducts', 'idProduct' => 0], ['idProduct'], ['GET' => 0], null, false, true, null]],
        1681 => [[['_route' => 'admin_get_form_images_combination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getFormImagesAction', '_format' => 'json', '_legacy_controller' => 'AdminProducts', 'idProduct' => 0], ['idProduct'], ['GET' => 0], null, false, true, null]],
        1720 => [[['_route' => 'admin_get_ajax_categories', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::getAjaxCategoriesAction', '_format' => 'json', 'limit' => 20], ['limit'], ['GET' => 0], null, false, true, null]],
        1762 => [[['_route' => 'admin_combination_generate_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::generateCombinationFormAction', 'combinationIds' => 0], ['combinationIds'], ['GET' => 0], null, false, true, null]],
        1782 => [[['_route' => 'admin_get_product_combinations', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::getProductCombinationsAction', '_format' => 'json', 'idProduct' => 0], ['idProduct'], ['GET' => 0], null, false, true, null]],
        1812 => [[['_route' => 'admin_feature_get_feature_values', 'idFeature' => 0, '_controller' => 'PrestaShopBundle\\Controller\\Admin\\FeatureController::getFeatureValuesAction'], ['idFeature'], ['GET' => 0], null, false, true, null]],
        1859 => [[['_route' => 'admin_specific_price_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::listAction', '_format' => 'json', 'idProduct' => 0], ['idProduct'], ['GET' => 0], null, false, true, null]],
        1878 => [[['_route' => 'admin_get_specific_price_update_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::getUpdateFormAction', 'idSpecificPrice' => 0], ['idSpecificPrice'], ['GET' => 0], null, true, true, null]],
        1899 => [[['_route' => 'admin_specific_price_update', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::updateAction', 'idSpecificPrice' => 0], ['idSpecificPrice'], ['POST' => 0], null, true, true, null]],
        1925 => [[['_route' => 'admin_delete_specific_price', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::deleteAction', 'idSpecificPrice' => 0], ['idSpecificPrice'], ['GET' => 0], null, false, true, null]],
        2014 => [[['_route' => 'admin_supplier_refresh_product_supplier_combination_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SupplierController::refreshProductSupplierCombinationFormAction', 'supplierIds' => 0, 'idProduct' => 0], ['idProduct', 'supplierIds'], ['GET' => 0], null, false, true, null]],
        2092 => [[['_route' => 'admin_warehouse_refresh_product_warehouse_combination_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\WarehouseController::refreshProductWarehouseCombinationFormAction', 'idProduct' => 0], ['idProduct'], ['GET' => 0], null, false, true, null]],
        2267 => [[['_route' => 'admin_product_catalog', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogAction', '_legacy_controller' => 'AdminProducts', 'limit' => 'last', 'offset' => 0, 'orderBy' => 'last', 'sortOrder' => 'last'], ['offset', 'limit', 'orderBy', 'sortOrder'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2337 => [[['_route' => 'admin_product_catalog_filters', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogFiltersAction', '_legacy_controller' => 'AdminProducts', 'quantity' => 'none', 'active' => 'none'], ['quantity', 'active'], ['GET' => 0], null, false, true, null]],
        2536 => [[['_route' => 'admin_product_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::listAction', 'limit' => 'last', 'offset' => 0, 'orderBy' => 'last', 'sortOrder' => 'last', 'view' => 'full'], ['offset', 'limit', 'orderBy', 'sortOrder', 'view'], ['GET' => 0], null, false, true, null]],
        2604 => [[['_route' => 'admin_product_bulk_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::bulkAction'], ['action'], ['POST' => 0], null, false, true, null]],
        2662 => [[['_route' => 'admin_product_unit_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::unitAction'], ['action', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        2686 => [[['_route' => 'admin_product_mass_edit_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::massEditAction'], ['action'], ['POST' => 0], null, false, true, null]],
        2713 => [[['_route' => 'admin_product_export_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::exportAction', '_format' => 'csv'], ['_format'], ['GET' => 0], null, false, true, null]],
        2755 => [[['_route' => 'admin_products_combinations', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::getListAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['GET' => 0], null, false, false, null]],
        2768 => [[['_route' => 'admin_products_combinations_ids', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::getCombinationIdsAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['GET' => 0], null, false, false, null]],
        2837 => [[['_route' => 'admin_products_combinations_update_combination_from_listing', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::updateCombinationFromListingAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['PATCH' => 0], null, false, false, null]],
        2856 => [[['_route' => 'admin_products_combinations_edit_combination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::editAction', '_legacy_controller' => 'AdminProducts'], ['combinationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2898 => [[['_route' => 'admin_products_combinations_bulk_combination_form', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::bulkEditFormAction', '_legacy_controller' => 'AdminProducts', 'requirements' => ['productId' => '\\d+']], ['productId'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        2936 => [[['_route' => 'admin_products_combinations_bulk_edit_combination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::bulkEditAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['PATCH' => 0], null, false, false, null]],
        2970 => [[['_route' => 'admin_products_combinations_delete_combination', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::deleteAction', '_legacy_controller' => 'AdminProducts'], ['combinationId'], ['DELETE' => 0], null, false, false, null]],
        3010 => [[['_route' => 'admin_products_combinations_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::bulkDeleteAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['POST' => 0], null, false, false, null]],
        3045 => [[['_route' => 'admin_products_attribute_groups', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::getAttributeGroupsAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['GET' => 0], null, false, false, null]],
        3085 => [[['_route' => 'admin_products_combinations_generate', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::generateCombinationsAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['POST' => 0], null, false, true, null]],
        3106 => [[['_route' => 'admin_products_v2_get_images', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ImageController::getImagesAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:getimages'], '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['GET' => 0], null, false, false, null]],
        3137 => [[['_route' => 'admin_products_v2_update_image', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ImageController::updateImageAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:editimage'], '_legacy_parameters' => ['id_product_image' => 'productImageId']], ['productImageId'], ['PATCH' => 0], null, false, false, null]],
        3158 => [[['_route' => 'admin_products_v2_delete_image', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ImageController::deleteImageAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:deleteimage'], '_legacy_parameters' => ['id_product_image' => 'productImageId']], ['productImageId'], ['POST' => 0], null, false, false, null]],
        3195 => [[['_route' => 'admin_products_specific_prices_list', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\SpecificPriceController::listAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['GET' => 0], null, false, false, null]],
        3233 => [[['_route' => 'admin_products_specific_prices_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\SpecificPriceController::createAction', '_legacy_controller' => 'AdminProducts'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3272 => [[['_route' => 'admin_products_specific_prices_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\SpecificPriceController::editAction', '_legacy_controller' => 'AdminProducts'], ['specificPriceId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3293 => [[['_route' => 'admin_products_specific_prices_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\SpecificPriceController::deleteAction', '_legacy_controller' => 'AdminProducts'], ['specificPriceId'], ['DELETE' => 0], null, false, false, null]],
        3313 => [[['_route' => 'admin_products_v2_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::editAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:updateproduct', 'AdminProducts:update'], '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        3350 => [[['_route' => 'admin_products_v2_download_virtual_product_file', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::downloadVirtualFileAction', '_legacy_controller' => 'AdminProducts'], ['virtualProductFileId'], ['GET' => 0], null, false, true, null]],
        3371 => [[['_route' => 'admin_products_v2_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::deleteAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:delete'], '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        3395 => [[['_route' => 'admin_products_v2_duplicate', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::duplicateAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:duplicate'], '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['POST' => 0], null, false, false, null]],
        3423 => [[['_route' => 'admin_products_v2_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::toggleStatusAction', '_legacy_controller' => 'AdminProducts', '_legacy_link' => ['AdminProducts:statusproduct'], '_legacy_parameters' => ['id_product' => 'productId']], ['productId'], ['POST' => 0], null, false, false, null]],
        3472 => [[['_route' => 'admin_products_v2_search_associations', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController::searchAssociationsAction', '_legacy_controller' => 'AdminProducts'], ['languageCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3523 => [[['_route' => 'admin_products_v2_search_combinations', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController::searchCombinationProductsAction', '_legacy_controller' => 'AdminProducts'], ['languageCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3565 => [[['_route' => 'admin_categories_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::indexAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories', '_legacy_parameters' => ['id_category' => 'categoryId'], 'categoryId' => null], ['categoryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3601 => [[['_route' => 'admin_categories_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::toggleStatusAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:statuscategory', '_legacy_parameters' => ['id_category' => 'categoryId']], ['categoryId'], ['POST' => 0], null, false, false, null]],
        3620 => [[['_route' => 'admin_categories_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::editAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:updatecategory', '_legacy_parameters' => ['id_category' => 'categoryId']], ['categoryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3645 => [[['_route' => 'admin_categories_edit_root', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::editRootAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:updatecategory', '_legacy_parameters' => ['id_category' => 'categoryId']], ['categoryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3680 => [[['_route' => 'admin_categories_delete_cover_image', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::deleteCoverImageAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:deleteImage', '_legacy_parameters' => ['id_category' => 'categoryId']], ['categoryId'], ['POST' => 0], null, false, false, null]],
        3726 => [[['_route' => 'admin_categories_delete_menu_thumbnail', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController::deleteMenuThumbnailAction', '_legacy_controller' => 'AdminCategories', '_legacy_link' => 'AdminCategories:forceDeleteThumb', '_legacy_parameters' => ['id_category' => 'categoryId']], ['categoryId', 'menuThumbnailId'], ['POST' => 0], null, false, false, null]],
        3769 => [[['_route' => 'admin_catalog_price_rules_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::editAction', '_legacy_controller' => 'AdminSpecificPriceRule', '_legacy_parameters' => ['id_specific_price_rule' => 'catalogPriceRuleId']], ['catalogPriceRuleId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3790 => [[['_route' => 'admin_catalog_price_rules_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController::deleteAction', '_legacy_controller' => 'AdminSpecificPriceRule', '_legacy_parameters' => ['id_specific_price_rule' => 'catalogPriceRuleId']], ['catalogPriceRuleId'], ['POST' => 0], null, false, false, null]],
        3834 => [[['_route' => 'admin_cart_rule_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::toggleStatusAction', '_legacy_controller' => 'AdminCartRules', '_legacy_parameters' => ['id_cart_rule' => 'cartRuleId']], ['cartRuleId'], ['POST' => 0], null, false, false, null]],
        3855 => [[['_route' => 'admin_cart_rules_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController::deleteAction', '_legacy_controller' => 'AdminCartRules', '_legacy_parameters' => ['id_cart_rule' => 'cartRuleId']], ['cartRuleId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        3893 => [[['_route' => 'admin_suppliers_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::viewAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:viewsupplier', '_legacy_parameters' => ['id_supplier' => 'supplierId']], ['supplierId'], ['GET' => 0], null, false, false, null]],
        3912 => [[['_route' => 'admin_suppliers_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::editAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:updatesupplier', '_legacy_parameters' => ['id_supplier' => 'supplierId']], ['supplierId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3933 => [[['_route' => 'admin_suppliers_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::deleteAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:deletesupplier', '_legacy_parameters' => ['id_supplier' => 'supplierId']], ['supplierId'], ['DELETE' => 0], null, false, false, null]],
        3962 => [[['_route' => 'admin_suppliers_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController::toggleStatusAction', '_legacy_controller' => 'AdminSuppliers', '_legacy_link' => 'AdminSuppliers:statussupplier', '_legacy_parameters' => ['id_supplier' => 'supplierId']], ['supplierId'], ['POST' => 0], null, false, false, null]],
        3992 => [[['_route' => 'admin_manufacturers_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::viewAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:viewmanufacturer', '_legacy_parameters' => ['id_manufacturer' => 'manufacturerId']], ['manufacturerId'], ['GET' => 0], null, false, false, null]],
        4011 => [[['_route' => 'admin_manufacturers_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::editAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:updatemanufacturer', '_legacy_parameters' => ['id_manufacturer' => 'manufacturerId']], ['manufacturerId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4032 => [[['_route' => 'admin_manufacturers_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::deleteAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:deletemanufacturer', '_legacy_parameters' => ['id_manufacturer' => 'manufacturerId']], ['manufacturerId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        4061 => [[['_route' => 'admin_manufacturers_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::toggleStatusAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:statusmanufacturer', '_legacy_parameters' => ['id_manufacturer' => 'manufacturerId']], ['manufacturerId'], ['POST' => 0], null, false, false, null]],
        4093 => [[['_route' => 'admin_manufacturer_addresses_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::editAddressAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:editaddresses', '_legacy_parameters' => ['id_address' => 'addressId']], ['addressId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4114 => [[['_route' => 'admin_manufacturer_addresses_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController::deleteAddressAction', '_legacy_controller' => 'AdminManufacturers', '_legacy_link' => 'AdminManufacturers:deleteaddress', '_legacy_parameters' => ['id_address' => 'addressId']], ['addressId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        4165 => [
            [['_route' => 'admin_attributes_index', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::indexAction', '_legacy_controller' => 'AdminAttributesGroups', 'redirectQueryParamsToKeep' => ['attributeGroupId'], '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId'], 'requirements' => ['attributeGroupId' => '\\d+']], ['attributeGroupId'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_attributes_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::searchGridAction', '_legacy_controller' => 'AdminAttributesGroups', 'gridDefinitionFactoryServiceId' => 'prestashop.core.grid.definition.factory.attribute', 'redirectRoute' => 'admin_attributes_index', 'redirectQueryParamsToKeep' => ['attributeGroupId']], ['attributeGroupId'], ['POST' => 0], null, true, false, null],
        ],
        4195 => [[['_route' => 'admin_attributes_create', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::createAction', '_legacy_controller' => 'AdminAttributesGroups', 'redirectQueryParamsToKeep' => ['attributeGroupId']], ['attributeGroupId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4231 => [[['_route' => 'admin_attributes_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::editAction', '_legacy_controller' => 'AdminAttributesGroups', 'redirectQueryParamsToKeep' => ['attributeGroupId'], '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId', 'id_attribute' => 'attributeId']], ['attributeGroupId', 'attributeId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4272 => [[['_route' => 'admin_attributes_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::deleteAction', '_legacy_controller' => 'AdminAttributesGroups', 'redirectQueryParamsToKeep' => ['attributeGroupId'], '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId', 'id_attribute' => 'attributeId']], ['attributeGroupId', 'attributeId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        4304 => [[['_route' => 'admin_attributes_bulk_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::bulkDeleteAction', '_legacy_controller' => 'AdminAttributesGroups', 'redirectQueryParamsToKeep' => ['attributeGroupId'], '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId', 'id_attribute' => 'attributeId']], ['attributeGroupId'], ['POST' => 0], null, false, false, null]],
        4346 => [[['_route' => 'admin_attributes_update_position', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::updatePositionAction', '_legacy_controller' => 'AdminAttributesGroups'], ['attributeGroupId'], ['POST' => 0], null, false, false, null]],
        4365 => [[['_route' => 'admin_attribute_groups_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController::indexAction', '_legacy_controller' => 'AdminAttributesGroups', '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId']], ['attributeGroupId'], ['GET' => 0], null, false, false, null]],
        4384 => [[['_route' => 'admin_attribute_groups_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::editAction', '_legacy_controller' => 'AdminAttributesGroups', '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId']], ['attributeGroupId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4405 => [[['_route' => 'admin_attribute_groups_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController::deleteAction', '_legacy_controller' => 'AdminAttributesGroups', '_legacy_parameters' => ['id_attribute_group' => 'attributeGroupId']], ['attributeGroupId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        4441 => [[['_route' => 'admin_customers_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::editAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:updatecustomer', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4460 => [[['_route' => 'admin_customers_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::viewAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:viewcustomer', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4493 => [[['_route' => 'admin_customers_set_private_note', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::setPrivateNoteAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:updateCustomerNote', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['POST' => 0], null, false, false, null]],
        4522 => [[['_route' => 'admin_customers_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::toggleStatusAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:statuscustomer', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['POST' => 0], null, false, false, null]],
        4570 => [[['_route' => 'admin_customers_transform_guest_to_customer', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::transformGuestToCustomerAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:guesttocustomer', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['POST' => 0], null, false, false, null]],
        4617 => [[['_route' => 'admin_customers_toggle_newsletter_subscription', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::toggleNewsletterSubscriptionAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:changeNewsletterVal', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['POST' => 0], null, false, false, null]],
        4668 => [[['_route' => 'admin_customers_toggle_partner_offer_subscription', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::togglePartnerOfferSubscriptionAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers:changeOptinVal', '_legacy_parameters' => ['id_customer' => 'customerId']], ['customerId'], ['POST' => 0], null, false, false, null]],
        4688 => [[['_route' => 'admin_customers_carts', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::getCartsAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers'], ['customerId'], ['GET' => 0], null, false, false, null]],
        4709 => [[['_route' => 'admin_customers_orders', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController::getOrdersAction', '_legacy_controller' => 'AdminCustomers', '_legacy_link' => 'AdminCustomers'], ['customerId'], ['GET' => 0], null, false, false, null]],
        4761 => [[['_route' => 'admin_order_messages_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController::editAction', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage:updateorder_message', 'legacy_parameters' => ['id_order_message' => 'orderMessageId']], ['orderMessageId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4782 => [[['_route' => 'admin_order_messages_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController::deleteAction', '_legacy_controller' => 'AdminOrderMessage', '_legacy_link' => 'AdminOrderMessage:deleteorder_message', 'legacy_parameters' => ['id_order_message' => 'orderMessageId']], ['orderMessageId'], ['POST' => 0], null, false, false, null]],
        4823 => [[['_route' => 'admin_customer_threads_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\CustomerThreadController::viewAction', '_legacy_controller' => 'AdminCustomerThreads'], ['customerThreadId'], ['GET' => 0], null, false, false, null]],
        4843 => [[['_route' => 'admin_customer_threads_reply', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\CustomerThreadController::replyAction', '_legacy_controller' => 'AdminCustomerThreads'], ['customerThreadId'], ['POST' => 0], null, false, false, null]],
        4881 => [[['_route' => 'admin_customer_threads_update_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\CustomerThreadController::updateStatusAction', '_legacy_controller' => 'AdminCustomerThreads'], ['customerThreadId', 'newStatus'], ['POST' => 0], null, false, true, null]],
        4903 => [[['_route' => 'admin_customer_threads_forward', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\CustomerThreadController::forwardAction', '_legacy_controller' => 'AdminCustomerThreads'], ['customerThreadId'], ['POST' => 0], null, false, false, null]],
        4942 => [[['_route' => 'admin_addresses_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::editAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:updateaddress', '_legacy_parameters' => ['id_address' => 'addressId']], ['addressId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4986 => [[['_route' => 'admin_order_addresses_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::editOrderAddressAction', '_legacy_controller' => 'AdminAddresses'], ['orderId', 'addressType'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5029 => [[['_route' => 'admin_cart_addresses_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::editCartAddressAction', '_legacy_controller' => 'AdminAddresses'], ['cartId', 'addressType'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5050 => [[['_route' => 'admin_addresses_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController::deleteAction', '_legacy_controller' => 'AdminAddresses', '_legacy_link' => 'AdminAddresses:deleteaddress', '_legacy_parameters' => ['id_address' => 'addressId']], ['addressId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        5084 => [[['_route' => 'admin_attachments_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::editAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:updateattachment', '_legacy_parameters' => ['id_attachment' => 'attachmentId']], ['attachmentId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5103 => [[['_route' => 'admin_attachments_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::viewAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:viewattachment', '_legacy_parameters' => ['id_attachment' => 'attachmentId']], ['attachmentId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5124 => [[['_route' => 'admin_attachments_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::deleteAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:deleteattachment', '_legacy_parameters' => ['id_attachment' => 'attachmentId']], ['attachmentId'], ['POST' => 0], null, false, false, null]],
        5143 => [[['_route' => 'admin_attachments_attachment_info', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::getAttachmentInfoAction'], ['attachmentId'], ['GET' => 0], null, false, false, null]],
        5167 => [[['_route' => 'admin_attachments_search', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController::searchAction', '_legacy_controller' => 'AdminAttachments', '_legacy_link' => 'AdminAttachments:search'], ['searchPhrase'], ['GET' => 0], null, false, true, null]],
        5211 => [[['_route' => 'admin_order_invoices_generate_by_id', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::generatePdfByIdAction', '_legacy_controller' => 'AdminInvoices'], ['invoiceId'], ['GET' => 0], null, false, false, null]],
        5239 => [[['_route' => 'admin_carts_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::viewAction', '_legacy_controller' => 'AdminCarts', '_legacy_link' => 'AdminCarts:viewcart', '_legacy_parameters' => ['id_cart' => 'cartId']], ['cartId'], ['GET' => 0], null, false, false, null]],
        5258 => [[['_route' => 'admin_carts_info', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::getInfoAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['GET' => 0], null, false, false, null]],
        5282 => [[['_route' => 'admin_carts_edit_addresses', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editAddressesAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5304 => [[['_route' => 'admin_carts_edit_carrier', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editCarrierAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5327 => [[['_route' => 'admin_carts_edit_currency', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editCurrencyAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5350 => [[['_route' => 'admin_carts_edit_language', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editLanguageAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5389 => [[['_route' => 'admin_carts_set_delivery_settings', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::updateDeliverySettingsAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5421 => [[['_route' => 'admin_carts_add_cart_rule', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::addCartRuleAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5446 => [[['_route' => 'admin_carts_delete_cart_rule', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::deleteCartRuleAction', '_legacy_controller' => 'AdminCarts'], ['cartId', 'cartRuleId'], ['POST' => 0], null, false, false, null]],
        5470 => [[['_route' => 'admin_carts_add_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::addProductAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5505 => [[['_route' => 'admin_carts_edit_product_price', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editProductPriceAction', '_legacy_controller' => 'AdminCarts'], ['cartId', 'productId'], ['POST' => 0], null, false, false, null]],
        5543 => [[['_route' => 'admin_carts_edit_product_quantity', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::editProductQuantityAction', '_legacy_controller' => 'AdminCarts'], ['cartId', 'productId'], ['POST' => 0], null, false, false, null]],
        5573 => [[['_route' => 'admin_carts_delete_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController::deleteProductAction', '_legacy_controller' => 'AdminCarts'], ['cartId'], ['POST' => 0], null, false, false, null]],
        5611 => [[['_route' => 'admin_orders_generate_invoice_pdf', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::generateInvoicePdfAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        5655 => [[['_route' => 'admin_orders_generate_delivery_slip_pdf', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::generateDeliverySlipPdfAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        5674 => [[['_route' => 'admin_orders_view', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::viewAction', '_legacy_controller' => 'AdminOrders', '_legacy_link' => 'AdminOrders:vieworder', '_legacy_parameters' => ['id_order' => 'orderId']], ['orderId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5700 => [[['_route' => 'admin_orders_add_cart_rule', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::addCartRuleAction'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5726 => [[['_route' => 'admin_orders_list_update_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::updateStatusFromListAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5747 => [[['_route' => 'admin_orders_update_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::updateStatusAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5769 => [[['_route' => 'admin_orders_add_payment', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::addPaymentAction'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5799 => [[['_route' => 'admin_orders_duplicate_cart', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::duplicateOrderCartAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5829 => [[['_route' => 'admin_orders_change_currency', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::changeCurrencyAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        5858 => [[['_route' => 'admin_orders_update_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::updateProductAction', '_legacy_controller' => 'AdminOrders'], ['orderId', 'orderDetailId'], ['POST' => 0], null, false, true, null]],
        5897 => [[['_route' => 'admin_orders_remove_cart_rule', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::removeCartRuleAction'], ['orderId', 'orderCartRuleId'], ['GET' => 0], null, false, false, null]],
        5954 => [[['_route' => 'admin_orders_resend_email', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::resendEmailAction'], ['orderId', 'orderHistoryId', 'orderStatusId'], ['POST' => 0], null, false, false, null]],
        5976 => [[['_route' => 'admin_orders_preview', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::previewAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        5999 => [[['_route' => 'admin_orders_update_shipping', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::updateShippingAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6032 => [[['_route' => 'admin_orders_update_invoice_note', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::updateInvoiceNoteAction'], ['orderId', 'orderInvoiceId'], ['POST' => 0], null, false, false, null]],
        6054 => [[['_route' => 'admin_orders_generate_invoice', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::generateInvoiceAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6085 => [[['_route' => 'admin_orders_send_message', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::sendMessageAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6115 => [[['_route' => 'admin_orders_partial_refund', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::partialRefundAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6146 => [[['_route' => 'admin_orders_standard_refund', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::standardRefundAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6176 => [[['_route' => 'admin_orders_return_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::returnProductAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6199 => [[['_route' => 'admin_orders_add_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::addProductAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6235 => [[['_route' => 'admin_orders_delete_product', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::deleteProductAction', '_legacy_controller' => 'AdminOrders'], ['orderId', 'orderDetailId'], ['POST' => 0], null, false, false, null]],
        6259 => [[['_route' => 'admin_orders_get_discounts', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getDiscountsAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6280 => [[['_route' => 'admin_orders_get_prices', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getPricesAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6303 => [[['_route' => 'admin_orders_get_payments', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getPaymentsAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6326 => [[['_route' => 'admin_orders_get_products', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getProductsListAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6349 => [[['_route' => 'admin_orders_get_invoices', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getInvoicesAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6373 => [[['_route' => 'admin_orders_get_documents', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getDocumentsAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6396 => [[['_route' => 'admin_orders_get_shipping', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getShippingAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6423 => [[['_route' => 'admin_orders_cancellation', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::cancellationAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['POST' => 0], null, false, false, null]],
        6472 => [[['_route' => 'admin_orders_display_customization_image', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::displayCustomizationImageAction', '_legacy_controller' => 'AdminOrders'], ['orderId', 'value'], ['GET' => 0], null, false, true, null]],
        6502 => [[['_route' => 'admin_orders_product_prices', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::getProductPricesAction', '_legacy_controller' => 'AdminOrders'], ['orderId'], ['GET' => 0], null, false, false, null]],
        6536 => [[['_route' => 'admin_orders_set_internal_note', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController::setInternalNoteAction', '_legacy_controller' => 'AdminOrders', '_legacy_link' => 'AdminOrders:updateInternalNote', '_legacy_parameters' => ['id_order' => 'orderId']], ['orderId'], ['POST' => 0], null, false, false, null]],
        6568 => [[['_route' => 'admin_credit_slips_generate_pdf', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CreditSlipController::generatePdfAction', '_legacy_controller' => 'AdminSlip', '_legacy_link' => 'AdminSlip:submitgenerateOrderSlipPdf', '_legacy_parameters' => ['id_order_slip' => 'creditSlipId']], ['creditSlipId'], ['GET' => 0], null, false, false, null]],
        6631 => [[['_route' => 'admin_languages_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::editAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:updatelang'], ['languageId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6652 => [[['_route' => 'admin_languages_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::deleteAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:deletelang'], ['languageId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        6684 => [[['_route' => 'admin_languages_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::toggleStatusAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:statuslang'], ['languageId'], ['POST' => 0], null, false, false, null]],
        6730 => [[['_route' => 'admin_languages_bulk_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController::bulkToggleStatusAction', '_legacy_controller' => 'AdminLanguages', '_legacy_link' => 'AdminLanguages:submitBulkupdatelang'], ['status'], ['POST' => 0], null, false, true, null]],
        6767 => [[['_route' => 'admin_currencies_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::editAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:updatecurrency', '_legacy_parameters' => ['id_currency' => 'currencyId']], ['currencyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6788 => [[['_route' => 'admin_currencies_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::deleteAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:deletecurrency', '_legacy_parameters' => ['id_currency' => 'currencyId']], ['currencyId'], ['DELETE' => 0], null, false, false, null]],
        6817 => [[['_route' => 'admin_currencies_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::toggleStatusAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:statuscurrency', '_legacy_parameters' => ['id_currency' => 'currencyId']], ['currencyId'], ['POST' => 0], null, false, false, null]],
        6850 => [[['_route' => 'admin_currencies_get_reference_data', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::getReferenceDataAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:getReferenceData'], ['currencyIsoCode'], ['GET' => 0], null, false, true, null]],
        6896 => [[['_route' => 'admin_currencies_bulk_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController::bulkToggleStatusAction', '_legacy_controller' => 'AdminCurrencies', '_legacy_link' => 'AdminCurrencies:submitBulkupdatecurrency'], ['status'], ['POST' => 0], null, false, true, null]],
        6925 => [[['_route' => 'admin_country_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CountryController::editAction', '_legacy_controller' => 'AdminCountry', '_legacy_parameters' => ['id_country' => 'countryId']], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6957 => [[['_route' => 'admin_taxes_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::editAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:updatetax', '_legacy_parameters' => ['id_tax' => 'taxId']], ['taxId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6978 => [[['_route' => 'admin_taxes_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::deleteAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:deletetax', '_legacy_parameters' => ['id_tax' => 'taxId']], ['taxId'], ['POST' => 0], null, false, false, null]],
        7007 => [[['_route' => 'admin_taxes_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController::toggleStatusAction', '_legacy_controller' => 'AdminTaxes', '_legacy_link' => 'AdminTaxes:statustax', '_legacy_parameters' => ['id_tax' => 'taxId']], ['taxId'], ['POST' => 0], null, false, false, null]],
        7044 => [[['_route' => 'admin_tax_rules_groups_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::editAction', '_legacy_controller' => 'AdminTaxRulesGroup', '_legacy_parameters' => ['id_tax_rules_group' => 'taxRulesGroupId']], ['taxRulesGroupId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7065 => [[['_route' => 'admin_tax_rules_groups_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::deleteAction', '_legacy_controller' => 'AdminTaxRulesGroup', '_legacy_parameters' => ['id_tax_rules_group' => 'taxRulesGroupId']], ['taxRulesGroupId'], ['POST' => 0], null, false, false, null]],
        7094 => [[['_route' => 'admin_tax_rules_groups_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController::toggleStatusAction', '_legacy_controller' => 'AdminTaxRulesGroup', '_legacy_parameters' => ['id_tax_rules_group' => 'taxRulesGroupId']], ['taxRulesGroupId'], ['POST' => 0], null, false, false, null]],
        7125 => [[['_route' => 'admin_states_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::editAction', '_legacy_controller' => 'AdminStates', '_legacy_parameters' => ['id_state' => 'stateId']], ['stateId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7146 => [[['_route' => 'admin_states_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::deleteAction', '_legacy_controller' => 'AdminStates', '_legacy_parameters' => ['id_state' => 'stateId']], ['stateId'], ['DELETE' => 0], null, false, false, null]],
        7178 => [[['_route' => 'admin_states_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController::toggleStatusAction', '_legacy_controller' => 'AdminStates', '_legacy_parameters' => ['id_state' => 'stateId']], ['stateId'], ['POST' => 0], null, false, false, null]],
        7207 => [[['_route' => 'admin_zones_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::editAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:updatezone', '_legacy_parameters' => ['id_zone' => 'zoneId']], ['zoneId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7228 => [[['_route' => 'admin_zones_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::deleteAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:deletezone', '_legacy_parameters' => ['id_zone' => 'zoneId']], ['zoneId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        7257 => [[['_route' => 'admin_zones_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::toggleStatusAction', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:enableSelection', '_legacy_parameters' => ['id_zone' => 'zoneId']], ['zoneId'], ['POST' => 0], null, false, false, null]],
        7303 => [[['_route' => 'admin_zones_bulk_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController::bulkToggleStatus', '_legacy_controller' => 'AdminZones', '_legacy_link' => 'AdminZones:submitBulkupdatezone'], ['status'], ['POST' => 0], null, false, true, null]],
        7359 => [[['_route' => 'admin_module_manage', 'category' => null, 'keyword' => null, '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::manageAction', '_legacy_controller' => 'AdminModulesManage', '_legacy_link' => ['AdminModulesManage', 'AdminModulesSf']], ['category', 'keyword'], ['GET' => 0], null, false, true, null]],
        7466 => [[['_route' => 'admin_module_manage_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction'], ['action', 'module_name'], ['POST' => 0], null, false, true, null]],
        7493 => [[['_route' => 'admin_module_configure_action', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::configureModuleAction', '_legacy_controller' => 'AdminModules'], ['module_name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        7566 => [[['_route' => 'admin_module_manage_action_bulk', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction'], ['action'], ['POST' => 0], null, false, true, null]],
        7585 => [[['_route' => 'admin_module_manage_update_all', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction'], [], ['POST' => 0], null, false, false, null]],
        7640 => [[['_route' => 'admin_themes_enable', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::enableAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:enableTheme', '_legacy_parameters' => ['theme_name' => 'themeName']], ['themeName'], ['POST' => 0], null, false, false, null]],
        7673 => [[['_route' => 'admin_themes_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::deleteAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:deleteTheme', '_legacy_parameters' => ['theme_name' => 'themeName']], ['themeName'], ['POST' => 0], null, false, false, null]],
        7714 => [[['_route' => 'admin_themes_reset_layouts', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController::resetLayoutsAction', '_legacy_controller' => 'AdminThemes', '_legacy_link' => 'AdminThemes:resetToDefaults', '_legacy_parameters' => ['theme_name' => 'themeName']], ['themeName'], ['POST' => 0], null, false, false, null]],
        7748 => [[['_route' => 'admin_cms_pages_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::editAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:updatecms', '_legacy_parameters' => ['id_cms' => 'cmsPageId']], ['cmsPageId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7777 => [[['_route' => 'admin_cms_pages_toggle', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::toggleCmsAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:statuscms', '_legacy_parameters' => ['id_cms' => 'cmsId']], ['cmsId'], ['POST' => 0], null, false, false, null]],
        7798 => [[['_route' => 'admin_cms_pages_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::deleteCmsAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:deletecms', '_legacy_parameters' => ['id_cms' => 'cmsId']], ['cmsId'], ['DELETE' => 0], null, false, false, null]],
        7829 => [[['_route' => 'admin_cms_pages_category_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::editCmsCategoryAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:updatecms_category', '_legacy_parameters' => ['id_cms_category' => 'cmsCategoryId']], ['cmsCategoryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7850 => [[['_route' => 'admin_cms_pages_category_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::deleteCmsCategoryAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:deletecms_category', '_legacy_parameters' => ['id_cms_category' => 'cmsCategoryId']], ['cmsCategoryId'], ['DELETE' => 0], null, false, false, null]],
        7879 => [[['_route' => 'admin_cms_pages_category_toggle', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController::toggleCmsCategoryAction', '_legacy_controller' => 'AdminCmsContent', '_legacy_link' => 'AdminCmsContent:statuscms_category', '_legacy_parameters' => ['id_cms_category' => 'cmsCategoryId']], ['cmsCategoryId'], ['POST' => 0], null, false, false, null]],
        7949 => [[['_route' => 'admin_mail_theme_send_test_mail_deprecated', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'admin_mail_theme_send_test_mail', 'permanent' => true], ['locale', 'theme', 'layout'], null, null, false, true, null]],
        7967 => [[['_route' => 'admin_mail_theme_send_test_module_mail_deprecated', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'admin_mail_theme_send_test_module_mail', 'permanent' => true], ['locale', 'theme', 'module', 'layout'], ['GET' => 0], null, false, true, null]],
        8019 => [[['_route' => 'admin_mail_theme_send_test_mail', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::sendTestMailAction', '_legacy_link' => 'AdminMailTheme:rawModuleLayout', '_legacy_controller' => 'AdminMailTheme', 'module' => ''], ['locale', 'theme', 'layout'], ['GET' => 0], null, false, true, null]],
        8037 => [[['_route' => 'admin_mail_theme_send_test_module_mail', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::sendTestMailAction', '_legacy_link' => 'AdminMailTheme:rawModuleLayout', '_legacy_controller' => 'AdminMailTheme'], ['locale', 'theme', 'module', 'layout'], ['GET' => 0], null, false, true, null]],
        8067 => [[['_route' => 'admin_mail_theme_preview', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::previewThemeAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:previewTheme'], ['theme'], ['GET' => 0], null, false, true, null]],
        8109 => [[['_route' => 'admin_mail_theme_preview_layout', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::previewLayoutAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:previewLayout', 'module' => ''], ['locale', 'theme', 'layout', 'type'], ['GET' => 0], null, false, true, null]],
        8147 => [[['_route' => 'admin_mail_theme_preview_module_layout', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::previewLayoutAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:previewModuleLayout'], ['locale', 'theme', 'module', 'layout', 'type'], ['GET' => 0], null, false, true, null]],
        8203 => [[['_route' => 'admin_mail_theme_raw_layout', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::rawLayoutAction', '_legacy_controller' => 'AdminMailTheme', '_legacy_link' => 'AdminMailTheme:rawLayout', 'module' => ''], ['locale', 'theme', 'layout', 'type'], ['GET' => 0], null, false, true, null]],
        8241 => [[['_route' => 'admin_mail_theme_raw_module_layout', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController::rawLayoutAction', '_legacy_link' => 'AdminMailTheme:rawModuleLayout', '_legacy_controller' => 'AdminMailTheme'], ['locale', 'theme', 'module', 'layout', 'type'], ['GET' => 0], null, false, true, null]],
        8284 => [[['_route' => 'admin_carriers_edit', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::editAction'], ['carrierId'], ['GET' => 0], null, false, false, null]],
        8305 => [[['_route' => 'admin_carriers_delete', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::deleteAction', '_legacy_controller' => 'AdminCarriers', '_legacy_parameters' => ['id_carrier' => 'carrierId']], ['carrierId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        8334 => [[['_route' => 'admin_carriers_toggle_status', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::toggleStatusAction', '_legacy_controller' => 'AdminCarriers', '_legacy_parameters' => ['id_carrier' => 'carrierId']], ['carrierId'], ['POST' => 0], null, false, false, null]],
        8365 => [[['_route' => 'admin_carriers_toggle_is_free', '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController::toggleIsFreeAction', '_legacy_controller' => 'AdminCarriers', '_legacy_parameters' => ['id_carrier' => 'carrierId']], ['carrierId'], ['POST' => 0], null, false, false, null]],
        8402 => [[['_route' => 'api_stock_list_product_combinations', '_controller' => 'prestashop.core.api.stock.controller:listProductsAction', '_legacy_controller' => 'AdminStockManagement'], ['productId'], ['GET' => 0], null, false, true, null]],
        8427 => [[['_route' => 'api_stock_edit_product', '_controller' => 'prestashop.core.api.stock.controller:editProductAction', '_legacy_controller' => 'AdminStockManagement'], ['productId'], ['POST' => 0], null, false, true, null]],
        8459 => [[['_route' => 'api_stock_edit_product_combination', '_controller' => 'prestashop.core.api.stock.controller:editProductAction', '_legacy_controller' => 'AdminStockManagement'], ['productId', 'combinationId'], ['POST' => 0], null, false, true, null]],
        8495 => [[['_route' => 'api_stock_product_list_movements', '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction', '_legacy_controller' => 'AdminStockManagement'], ['productId'], ['GET' => 0], null, false, true, null]],
        8515 => [[['_route' => 'api_i18n_translations_list', '_controller' => 'prestashop.core.api.i18n.controller:listTranslationAction'], ['page'], ['GET' => 0], null, false, true, null]],
        8576 => [[['_route' => 'api_translation_domains_tree', '_controller' => 'prestashop.core.api.translation.controller:listTreeAction', '_legacy_controller' => 'AdminTranslations', 'selected' => null], ['lang', 'type', 'selected'], ['GET' => 0], null, false, true, null]],
        8616 => [[['_route' => 'api_translation_domain_catalog', '_controller' => 'prestashop.core.api.translation.controller:listDomainTranslationAction', '_legacy_controller' => 'AdminTranslations', 'theme' => null, 'module' => null], ['locale', 'domain', 'theme'], ['GET' => 0], null, false, true, null]],
        8668 => [
            [['_route' => 'admin_link_block_edit', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editAction', '_legacy_controller' => 'AdminLinkWidget'], ['linkBlockId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'admin_link_block_edit_process', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editProcessAction', '_legacy_controller' => 'AdminLinkWidget'], ['linkBlockId'], ['POST' => 0], null, false, true, null],
        ],
        8690 => [[['_route' => 'admin_link_block_delete', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::deleteAction', '_legacy_controller' => 'AdminLinkWidget'], ['linkBlockId'], ['POST' => 0], null, false, true, null]],
        8722 => [
            [['_route' => 'admin_link_block_update_positions', '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::updatePositionsAction', '_legacy_controller' => 'AdminLinkWidget'], ['hookId'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request) { // $checkCondition
        switch ($condition) {
            case 1: return $request->isXmlHttpRequest();
        }
    },
];
