<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/_partial/channels' => [[['_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel::indexAction', '_sylius' => ['repository' => ['method' => 'findAll'], 'template' => '$template', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/_partial/payment-methods/payment-gateways' => [[['_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method::getPaymentGatewaysAction', 'template' => '@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/_partial/product-attributes/attribute-types' => [[['_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute::getAttributeTypesAction', 'template' => '@SyliusAdmin/ProductAttribute/Types/attributeTypes.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/_partial/product-attributes/attributes' => [[['_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute::renderAttributesAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeChoice.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/_partial/taxons/tree' => [[['_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findHydratedRootNodes'], 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/root-nodes' => [[['_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findRootNodes']]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leafs' => [[['_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findChildren', 'arguments' => ['parentCode' => '$parentCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leaf' => [[['_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/search' => [[['_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => 'expr:service(\'request_stack\').getCurrentRequest().query.get(\'phrase\', \'\')', 'locale' => null, 'limit' => 25]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug::generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug::generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/search' => [[['_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => '!!int 25']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products/search-phrase' => [[['_route' => 'sylius_admin_ajax_products_by_phrase', '_controller' => 'sylius.controller.product::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhrase', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => '!!int 25']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products/code' => [[['_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products' => [[['_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Default'], 'permission' => true, 'grid' => 'sylius_admin_product']], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/product-attributes/attribute-forms' => [[['_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute::renderAttributeValueFormsAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeValues.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-taxons/update' => [[['_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon::updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/update' => [[['_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant::updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/search' => [[['_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhraseAndProductCode', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/search-all' => [[['_route' => 'sylius_admin_ajax_all_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhrase', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => '!!int 25']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-variants' => [[['_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodesAndProductCode', 'arguments' => ['$code', '$productCode']]]], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/product-variants/all' => [[['_route' => 'sylius_admin_ajax_all_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodes', 'arguments' => ['$code']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-options/search-phrase' => [[['_route' => 'sylius_admin_ajax_product_options_by_phrase', '_controller' => 'sylius.controller.product_option::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhrase', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => '!!int 10']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-options/options' => [[['_route' => 'sylius_admin_ajax_find_product_options', '_controller' => 'sylius.controller.product_option::indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodes', 'arguments' => ['codes' => '$code']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/render-province-form' => [[['_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province::choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusAdmin/Common/Form/_province.html.twig']], null, null, null, false, false, null]],
        '/admin/ajax/get-version' => [[['_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification::getVersionAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard::indexAction'], null, null, null, true, false, null]],
        '/admin/statistics' => [[['_route' => 'sylius_admin_dashboard_statistics', '_controller' => 'sylius.controller.admin.dashboard::getRawData'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user::indexAction', '_sylius' => ['grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig'], 'icon' => 'lock']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/bulk-delete' => [[['_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/catalog-promotions' => [[['_route' => 'sylius_admin_catalog_promotion_index', '_controller' => 'sylius.controller.catalog_promotion::indexAction', '_sylius' => ['grid' => 'sylius_admin_catalog_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_on_product_catalog', 'templates' => ['form' => '@SyliusAdmin/CatalogPromotion/_form.html.twig'], 'icon' => 'bookmark']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/catalog-promotions/new' => [[['_route' => 'sylius_admin_catalog_promotion_create', '_controller' => 'sylius.controller.catalog_promotion::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_catalog_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_on_product_catalog', 'templates' => ['form' => '@SyliusAdmin/CatalogPromotion/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels' => [[['_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel::indexAction', '_sylius' => ['grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig'], 'icon' => 'share alternate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/channels/new' => [[['_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels/bulk-delete' => [[['_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/countries' => [[['_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country::indexAction', '_sylius' => ['grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig'], 'icon' => 'flag']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/countries/new' => [[['_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/countries/bulk-delete' => [[['_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/currencies' => [[['_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency::indexAction', '_sylius' => ['grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig'], 'icon' => 'dollar']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/currencies/new' => [[['_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/currencies/bulk-delete' => [[['_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/customers' => [[['_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer::indexAction', '_sylius' => ['grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig'], 'icon' => 'users']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customers/new' => [[['_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customers/bulk-delete' => [[['_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders-statistics' => [[['_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics::renderAction', '_sylius' => ['section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/customer-groups' => [[['_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group::indexAction', '_sylius' => ['grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig'], 'icon' => 'archive']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customer-groups/new' => [[['_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customer-groups/bulk-delete' => [[['_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/exchange-rates' => [[['_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate::indexAction', '_sylius' => ['grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig'], 'icon' => 'sliders']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/exchange-rates/new' => [[['_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/exchange-rates/bulk-delete' => [[['_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/inventory' => [[['_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => ['icon' => 'history', 'templates' => ['breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'], 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales' => [[['_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale::indexAction', '_sylius' => ['grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig'], 'icon' => 'translate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales/new' => [[['_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/locales/bulk-delete' => [[['_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payments' => [[['_route' => 'sylius_admin_payment_index', '_controller' => 'sylius.controller.payment::indexAction', '_sylius' => ['grid' => 'sylius_admin_payment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payments', 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods' => [[['_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method::indexAction', '_sylius' => ['grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods/bulk-delete' => [[['_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/products/bulk-delete' => [[['_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/products/new/simple' => [[['_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'factory' => ['method' => 'createWithVariant'], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create_simple']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types' => [[['_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig'], 'icon' => 'tasks']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-association-types/new' => [[['_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types/bulk-delete' => [[['_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-attributes' => [[['_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'icon' => 'cubes']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-attributes/bulk-delete' => [[['_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-options' => [[['_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig'], 'icon' => 'options']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-options/new' => [[['_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-options/bulk-delete' => [[['_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-reviews' => [[['_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig'], 'icon' => 'newspaper']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-reviews/bulk-delete' => [[['_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-taxons/update' => [[['_route' => 'sylius_admin_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon::updateProductTaxonsPositionsAction'], null, ['PUT' => 0], null, false, false, null]],
        '/admin/promotions' => [[['_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion::indexAction', '_sylius' => ['grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig'], 'icon' => 'in cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/promotions/new' => [[['_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotions/bulk-delete' => [[['_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/login' => [[['_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security::loginAction', '_sylius' => ['template' => '@SyliusAdmin/Security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard']], null, ['GET' => 0], null, false, false, null]],
        '/admin/login-check' => [[['_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security::checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sylius_admin_logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin/forgotten-password' => [
            [['_route' => 'sylius_admin_render_reset_password_page', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\RenderRequestPasswordResetPageAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_admin_request_password_reset', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\RequestPasswordResetAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/shipments' => [[['_route' => 'sylius_admin_shipment_index', '_controller' => 'sylius.controller.shipment::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipments', 'icon' => 'truck']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories' => [[['_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig'], 'icon' => 'list layout']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories/new' => [[['_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-categories/bulk-delete' => [[['_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/shipping-methods' => [[['_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig'], 'icon' => 'shipping']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-methods/new' => [[['_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-methods/bulk-delete' => [[['_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons/new' => [[['_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxons/bulk-delete' => [[['_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons' => [[['_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories' => [[['_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category::indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig'], 'icon' => 'tags']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories/new' => [[['_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-categories/bulk-delete' => [[['_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/tax-rates' => [[['_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate::indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig'], 'icon' => 'money']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-rates/new' => [[['_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-rates/bulk-delete' => [[['_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/zones' => [[['_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone::indexAction', '_sylius' => ['grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'icon' => 'world']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/zones/bulk-delete' => [[['_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/api/v2/shop/reset-password-requests' => [[['_route' => 'api_account_reset_password_requests_shop_create_reset_password_request_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_account_reset_password_requests_shop_create_reset_password_request_collection', '_api_collection_operation_name' => 'shop_create_reset_password_request'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/shop/addresses' => [
            [['_route' => 'api_addresses_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_addresses_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_post_collection', '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/reset-password-requests' => [[['_route' => 'api_admin_reset_password_requests_admin_create_reset_password_request_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_admin_reset_password_requests_admin_create_reset_password_request_collection', '_api_collection_operation_name' => 'admin_create_reset_password_request'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/catalog-promotions' => [
            [['_route' => 'api_catalog_promotions_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_catalog_promotions_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/channels' => [
            [['_route' => 'api_channels_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_channels_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/channels' => [[['_route' => 'api_channels_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/contact-requests' => [[['_route' => 'api_request_contacts_shop_send_contact_request_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_request_contacts_shop_send_contact_request_collection', '_api_collection_operation_name' => 'shop_send_contact_request'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/countries' => [
            [['_route' => 'api_countries_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_countries_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/countries' => [[['_route' => 'api_countries_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/currencies' => [
            [['_route' => 'api_currencies_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_currencies_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/currencies' => [[['_route' => 'api_currencies_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/customers' => [[['_route' => 'api_customers_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_post_collection', '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/exchange-rates' => [
            [['_route' => 'api_exchange_rates_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_exchange_rates_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/exchange-rates' => [[['_route' => 'api_exchange_rates_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/locales' => [
            [['_route' => 'api_locales_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_locales_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/locales' => [[['_route' => 'api_locales_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/orders' => [[['_route' => 'api_orders_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/orders' => [
            [['_route' => 'api_orders_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_post_collection', '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_orders_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/admin/payments' => [[['_route' => 'api_payments_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/payment-methods' => [[['_route' => 'api_payment_methods_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payment_methods_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/products' => [
            [['_route' => 'api_products_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_products_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/products' => [[['_route' => 'api_products_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-association-types' => [
            [['_route' => 'api_product_association_types_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_product_association_types_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-images' => [[['_route' => 'api_product_images_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_images_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-options' => [
            [['_route' => 'api_product_options_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_product_options_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-reviews' => [[['_route' => 'api_product_reviews_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/product-reviews' => [
            [['_route' => 'api_product_reviews_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_shop_post_collection', '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_product_reviews_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-taxons' => [[['_route' => 'api_product_taxa_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_taxa_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-variants' => [
            [['_route' => 'api_product_variants_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_product_variants_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/product-variants' => [[['_route' => 'api_product_variants_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/shipments' => [[['_route' => 'api_shipments_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/shipping-methods' => [
            [['_route' => 'api_shipping_methods_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_shipping_methods_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/shipping-methods' => [[['_route' => 'api_shipping_methods_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/taxons' => [
            [['_route' => 'api_taxa_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_taxa_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/taxons' => [[['_route' => 'api_taxa_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_shop_get_collection', '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/taxon-translations' => [[['_route' => 'api_taxon_translations_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxon_translations_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/account-verification-requests' => [[['_route' => 'api_verify_customer_accounts_shop_resend_verification_email_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount', '_api_identifiers' => ['token'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_verify_customer_accounts_shop_resend_verification_email_collection', '_api_collection_operation_name' => 'shop_resend_verification_email'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/zones' => [
            [['_route' => 'api_zones_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_zones_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/authentication-token' => [[['_route' => 'sylius_api_admin_authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/shop/authentication-token' => [[['_route' => 'sylius_api_shop_authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch::switchAction'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'sylius_shop_request_password_reset_token_redirect', 'route' => 'sylius_shop_request_password_reset_token', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, ['GET' => 0], null, false, false, null]],
        '/paypal-webhook/api' => [[['_route' => 'sylius_paypal_plugin_webhook_refund_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\Webhook\\RefundOrderAction'], null, ['POST' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:223)'
                    .'|([A-z0-9_-]*)/(.+)(*:249)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|_partial/(?'
                            .'|address/log\\-entry/([^/]++)(*:310)'
                            .'|c(?'
                                .'|atalog\\-promotions/([^/]++)(*:349)'
                                .'|ustomers/(?'
                                    .'|latest/([^/]++)(*:384)'
                                    .'|([^/]++)(*:400)'
                                .')'
                            .')'
                            .'|orders/(?'
                                .'|latest/([^/]++)(?'
                                    .'|(*:438)'
                                    .'|/([^/]++)(*:455)'
                                .')'
                                .'|([^/]++)/shipments/([^/]++)/ship(*:496)'
                            .')'
                            .'|pro(?'
                                .'|ducts/([^/]++)(*:525)'
                                .'|motions/([^/]++)(*:549)'
                            .')'
                            .'|taxons/([^/]++)(*:573)'
                        .')'
                        .'|ajax/taxons/([^/]++)/move(?'
                            .'|(*:610)'
                            .'|\\-(?'
                                .'|up(*:625)'
                                .'|down(*:637)'
                            .')'
                        .')'
                        .'|impersonate(?:/([^/]++))?(*:672)'
                        .'|users/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:705)'
                                .'|remove\\-avatar(*:727)'
                            .')'
                            .'|(*:736)'
                        .')'
                        .'|c(?'
                            .'|atalog\\-promotions/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:787)'
                                    .'|variants(*:803)'
                                .')'
                                .'|(*:812)'
                                .'|(*:820)'
                            .')'
                            .'|hannels/([^/]++)(?'
                                .'|/edit(*:853)'
                                .'|(*:861)'
                            .')'
                            .'|ountries/([^/]++)/edit(*:892)'
                            .'|u(?'
                                .'|rrencies/([^/]++)/edit(*:926)'
                                .'|stomer(?'
                                    .'|s/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:964)'
                                            .'|orders(*:978)'
                                        .')'
                                        .'|(*:987)'
                                    .')'
                                    .'|\\-groups/([^/]++)(?'
                                        .'|/edit(*:1021)'
                                        .'|(*:1030)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|e(?'
                            .'|xchange\\-rates/([^/]++)(?'
                                .'|/edit(*:1078)'
                                .'|(*:1087)'
                            .')'
                            .'|nable\\-seller/([^/]++)(*:1119)'
                        .')'
                        .'|locales/([^/]++)/edit(*:1150)'
                        .'|orders/([^/]++)(?'
                            .'|(*:1177)'
                            .'|/(?'
                                .'|history(*:1197)'
                                .'|edit(*:1210)'
                                .'|cancel(*:1225)'
                                .'|payments/([^/]++)/(?'
                                    .'|complete(*:1263)'
                                    .'|refund(*:1278)'
                                .')'
                                .'|ship(*:1292)'
                                .'|resend\\-confirmation\\-email(*:1328)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|s/([^/]++)/complete(*:1371)'
                                .'|\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1409)'
                                        .'|(*:1418)'
                                    .')'
                                    .'|new/([^/]++)(*:1440)'
                                .')'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:1479)'
                                            .'|/edit(*:1493)'
                                        .')'
                                        .'|taxon/([^/]++)(*:1517)'
                                        .'|new(*:1529)'
                                        .'|([^/]++)(?'
                                            .'|(*:1549)'
                                            .'|/variants(?'
                                                .'|(*:1570)'
                                                .'|/(?'
                                                    .'|new(*:1586)'
                                                    .'|([^/]++)/edit(*:1608)'
                                                    .'|bulk\\-delete(*:1629)'
                                                    .'|([^/]++)(*:1646)'
                                                    .'|generate(*:1663)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ssociation\\-types/([^/]++)(?'
                                                .'|/edit(*:1719)'
                                                .'|(*:1728)'
                                            .')'
                                            .'|ttributes/([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:1767)'
                                                    .'|new(*:1779)'
                                                .')'
                                                .'|(*:1789)'
                                            .')'
                                        .')'
                                        .'|options/([^/]++)(?'
                                            .'|/edit(*:1824)'
                                            .'|(*:1833)'
                                        .')'
                                        .'|review(?'
                                            .'|s/([^/]++)(?'
                                                .'|/edit(*:1870)'
                                                .'|(*:1879)'
                                            .')'
                                            .'|/([^/]++)/(?'
                                                .'|accept(*:1908)'
                                                .'|reject(*:1923)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|motions/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1963)'
                                        .'|coupons(?'
                                            .'|(*:1982)'
                                            .'|/(?'
                                                .'|new(*:1998)'
                                                .'|([^/]++)/edit(*:2020)'
                                                .'|generate(*:2037)'
                                                .'|bulk\\-delete(*:2058)'
                                                .'|([^/]++)(*:2075)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:2087)'
                                .')'
                            .')'
                        .')'
                        .'|forgotten\\-password/([^/]++)(?'
                            .'|(*:2130)'
                        .')'
                        .'|sh(?'
                            .'|ip(?'
                                .'|ments/([^/]++)(?'
                                    .'|/(?'
                                        .'|ship(*:2175)'
                                        .'|resend\\-confirmation\\-email(*:2211)'
                                    .')'
                                    .'|(*:2221)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:2267)'
                                        .'|(*:2276)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:2313)'
                                            .'|archive(*:2329)'
                                        .')'
                                        .'|(*:2339)'
                                    .')'
                                .')'
                            .')'
                            .'|op\\-user/([^/]++)(*:2368)'
                        .')'
                        .'|tax(?'
                            .'|ons/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:2407)'
                                    .'|(*:2416)'
                                .')'
                                .'|new/([^/]++)(*:2438)'
                            .')'
                            .'|\\-(?'
                                .'|categories/([^/]++)(?'
                                    .'|/edit(*:2480)'
                                    .'|(*:2489)'
                                .')'
                                .'|rates/([^/]++)(?'
                                    .'|/edit(*:2521)'
                                    .'|(*:2530)'
                                .')'
                            .')'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:2567)'
                                .'|(*:2576)'
                            .')'
                            .'|(country|province|zone)/new(*:2613)'
                        .')'
                        .'|download/payouts\\-report/([^/]++)(*:2656)'
                    .')'
                    .'|pi/v2(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:2703)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:2740)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:2772)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:2812)'
                            .'|shop/(?'
                                .'|reset\\-password\\-requests/([^/]++)(*:2863)'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(?'
                                            .'|(*:2899)'
                                        .')'
                                        .'|justments/([^/]++)(*:2927)'
                                    .')'
                                    .'|ccount(?'
                                        .'|/orders/([^/]++)/payments/([^/]++)(*:2980)'
                                        .'|\\-verification\\-requests/([^/]++)(*:3022)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|atalog\\-promotions/([^/]++)(*:3064)'
                                    .'|hannels/([^/]++)(*:3089)'
                                    .'|ountries/([^/]++)(*:3115)'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:3145)'
                                        .'|stomers/([^/]++)(?'
                                            .'|(*:3173)'
                                            .'|/password(*:3191)'
                                            .'|(*:3200)'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(*:3236)'
                                .'|locales/([^/]++)(*:3261)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:3291)'
                                        .'|/(?'
                                            .'|items(?'
                                                .'|(*:3312)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3333)'
                                                    .'|(*:3342)'
                                                    .'|/adjustments(*:3363)'
                                                .')'
                                                .'|(*:3373)'
                                            .')'
                                            .'|shipments/([^/]++)(*:3401)'
                                            .'|payments/([^/]++)(?'
                                                .'|(*:3430)'
                                                .'|/configuration(*:3453)'
                                            .')'
                                            .'|complete(*:3471)'
                                            .'|adjustments(*:3491)'
                                        .')'
                                        .'|(*:3501)'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(*:3530)'
                                        .'|\\-units/([^/]++)(*:3555)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(*:3589)'
                                        .'|\\-methods/([^/]++)(*:3616)'
                                    .')'
                                    .'|roduct(?'
                                        .'|s(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:3651)'
                                                .'|/attributes(*:3671)'
                                            .')'
                                            .'|\\-by\\-slug/([^/]++)(*:3700)'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ssociation(?'
                                                    .'|s/([^/]++)(*:3742)'
                                                    .'|\\-types/([^/]++)(*:3767)'
                                                .')'
                                                .'|ttribute(?'
                                                    .'|s/([^/]++)(*:3798)'
                                                    .'|\\-values/([^/]++)(*:3824)'
                                                .')'
                                            .')'
                                            .'|images/([^/]++)(*:3850)'
                                            .'|option(?'
                                                .'|s/([^/]++)(*:3878)'
                                                .'|\\-values/([^/]++)(*:3904)'
                                            .')'
                                            .'|reviews/([^/]++)(*:3930)'
                                            .'|t(?'
                                                .'|axons/([^/]++)(*:3957)'
                                                .'|ranslations/([^/]++)(*:3986)'
                                            .')'
                                            .'|variant(?'
                                                .'|s/([^/]++)(*:4016)'
                                                .'|\\-translation/([^/]++)(*:4047)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ship(?'
                                    .'|ments/([^/]++)(*:4081)'
                                    .'|ping\\-method(?'
                                        .'|s/([^/]++)(*:4115)'
                                        .'|\\-translations/([^/]++)(*:4147)'
                                    .')'
                                .')'
                                .'|taxon(?'
                                    .'|s/([^/]++)(*:4176)'
                                    .'|\\-translations/([^/]++)(*:4208)'
                                .')'
                            .')'
                            .'|admin/(?'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(*:4252)'
                                        .'|justments/([^/]++)(*:4279)'
                                        .'|ministrators(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:4321)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:4360)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|vatar\\-images(?'
                                        .'|(?:\\.([^/]++))?(*:4403)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4441)'
                                        .')'
                                    .')'
                                .')'
                                .'|reset\\-password\\-requests/([^/]++)(*:4487)'
                                .'|c(?'
                                    .'|atalog\\-promotion(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4533)'
                                        .')'
                                        .'|\\-(?'
                                            .'|actions/([^/\\.]++)(?:\\.([^/]++))?(*:4581)'
                                            .'|scopes/([^/\\.]++)(?:\\.([^/]++))?(*:4622)'
                                            .'|translations/([^/]++)(*:4652)'
                                        .')'
                                    .')'
                                    .'|hannel(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4685)'
                                            .'|/shop\\-billing\\-data(*:4714)'
                                        .')'
                                        .'|\\-pricings/([^/\\.]++)(?:\\.([^/]++))?(*:4760)'
                                    .')'
                                    .'|ountries/([^/]++)(?'
                                        .'|(*:4790)'
                                        .'|/provinces(*:4809)'
                                    .')'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:4840)'
                                        .'|stomer(?'
                                            .'|s/([^/]++)(*:4868)'
                                            .'|\\-groups(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:4906)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:4945)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(?'
                                    .'|(*:4986)'
                                .')'
                                .'|locales/([^/]++)(*:5012)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:5042)'
                                        .'|/(?'
                                            .'|cancel(*:5061)'
                                            .'|payments(*:5078)'
                                            .'|shipments(*:5096)'
                                        .')'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5129)'
                                            .'|/adjustments(*:5150)'
                                        .')'
                                        .'|\\-units/([^/]++)(*:5176)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5213)'
                                            .'|/complete(*:5231)'
                                        .')'
                                        .'|\\-methods/([^/]++)(*:5259)'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|s/([^/]++)(?'
                                                .'|(*:5294)'
                                            .')'
                                            .'|\\-(?'
                                                .'|association\\-type(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5342)'
                                                    .')'
                                                    .'|\\-translations/([^/\\.]++)(?:\\.([^/]++))?(*:5392)'
                                                .')'
                                                .'|images/([^/]++)(*:5417)'
                                                .'|option(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5448)'
                                                        .'|/values(*:5464)'
                                                    .')'
                                                    .'|\\-(?'
                                                        .'|translations/([^/\\.]++)(?:\\.([^/]++))?(*:5517)'
                                                        .'|values/([^/]++)(*:5541)'
                                                    .')'
                                                .')'
                                                .'|reviews/([^/]++)(?'
                                                    .'|(*:5571)'
                                                    .'|/(?'
                                                        .'|accept(*:5590)'
                                                        .'|reject(*:5605)'
                                                    .')'
                                                .')'
                                                .'|t(?'
                                                    .'|axons/([^/]++)(*:5634)'
                                                    .'|ranslations/([^/]++)(*:5663)'
                                                .')'
                                                .'|variant(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5696)'
                                                    .')'
                                                    .'|\\-translation/([^/]++)(*:5728)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|motions(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:5768)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:5807)'
                                            .')'
                                        .')'
                                        .'|vinces/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:5853)'
                                        .')'
                                    .')'
                                .')'
                                .'|sh(?'
                                    .'|ip(?'
                                        .'|ments/([^/]++)(?'
                                            .'|(*:5892)'
                                            .'|/ship(*:5906)'
                                        .')'
                                        .'|ping\\-(?'
                                            .'|categories(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:5956)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:5995)'
                                                .')'
                                            .')'
                                            .'|method(?'
                                                .'|s/([^/]++)(?'
                                                    .'|(*:6028)'
                                                    .'|/(?'
                                                        .'|archive(*:6048)'
                                                        .'|restore(*:6064)'
                                                    .')'
                                                .')'
                                                .'|\\-translations/([^/]++)(*:6098)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|op\\-billing\\-datas/([^/\\.]++)(?:\\.([^/]++))?(*:6154)'
                                .')'
                                .'|tax(?'
                                    .'|\\-categories(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:6203)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:6242)'
                                        .')'
                                    .')'
                                    .'|on(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:6271)'
                                        .')'
                                        .'|\\-translations/([^/]++)(*:6304)'
                                    .')'
                                .')'
                                .'|zone(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:6335)'
                                        .'|/members(?:\\.([^/]++))?(*:6367)'
                                    .')'
                                    .'|\\-members/([^/]++)(*:6395)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)(?'
                    .'|/(?'
                        .'|a(?'
                            .'|jax/(?'
                                .'|users/check(*:6514)'
                                .'|cart/(?'
                                    .'|add(*:6534)'
                                    .'|([^/]++)/remove(*:6558)'
                                .')'
                                .'|render\\-province\\-form(*:6590)'
                            .')'
                            .'|ccount(?'
                                .'|/(?'
                                    .'|orders(?'
                                        .'|(*:6622)'
                                        .'|/([^/]++)(*:6640)'
                                    .')'
                                    .'|address\\-book(?'
                                        .'|(*:6666)'
                                        .'|/(?'
                                            .'|add(*:6682)'
                                            .'|([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:6710)'
                                                    .'|set\\-as\\-default(*:6735)'
                                                .')'
                                                .'|(*:6745)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|dashboard(*:6766)'
                                    .'|profile/edit(*:6787)'
                                    .'|change\\-password(*:6812)'
                                .')'
                                .'|(*:6822)'
                            .')'
                        .')'
                        .'|_partial/(?'
                            .'|taxons/by\\-(?'
                                .'|slug/(.+)(*:6868)'
                                .'|c(?'
                                    .'|ode/([^/]++)(*:6893)'
                                    .'|hannel\\-menu\\-taxon(*:6921)'
                                .')'
                            .')'
                            .'|cart/(?'
                                .'|summary(*:6947)'
                                .'|add\\-item(*:6965)'
                            .')'
                            .'|products/(?'
                                .'|latest/([^/]++)(*:7002)'
                                .'|([^/]++)(?'
                                    .'|(*:7022)'
                                    .'|/(?'
                                        .'|reviews/latest(?:/([^/]++))?(*:7063)'
                                        .'|associations/([^/]++)(*:7093)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|log(?'
                            .'|in(?'
                                .'|(*:7117)'
                                .'|\\-check(*:7133)'
                            .')'
                            .'|out(*:7146)'
                        .')'
                        .'|register(?'
                            .'|(*:7167)'
                            .'|\\-after\\-checkout/([^/]++)(*:7202)'
                        .')'
                        .'|forgotten\\-password(?'
                            .'|(*:7234)'
                            .'|/([^/]++)(*:7252)'
                        .')'
                        .'|verify(?'
                            .'|(*:7271)'
                            .'|/([^/]++)(*:7289)'
                        .')'
                        .'|products/([^/]++)(?'
                            .'|(*:7319)'
                            .'|/reviews(?'
                                .'|(*:7339)'
                                .'|/new(*:7352)'
                            .')'
                        .')'
                        .'|taxons/(.+(?<!/))(*:7380)'
                        .'|c(?'
                            .'|art(?'
                                .'|(*:7399)'
                                .'|/(?'
                                    .'|checkout(*:7420)'
                                    .'|([^/]++)/remove(*:7444)'
                                .')'
                                .'|(*:7454)'
                            .')'
                            .'|heckout(?'
                                .'|(*:7474)'
                                .'|/(?'
                                    .'|address(*:7494)'
                                    .'|select\\-shipping(*:7519)'
                                    .'|complete(*:7536)'
                                .')'
                            .')'
                            .'|ontact(*:7553)'
                        .')'
                        .'|order/(?'
                            .'|thank\\-you(*:7582)'
                            .'|([^/]++)/pay(*:7603)'
                            .'|after\\-pay(*:7622)'
                        .')'
                        .'|switch\\-(?'
                            .'|currency/([^/]++)(*:7660)'
                            .'|locale/([^/]++)(*:7684)'
                        .')'
                    .')'
                    .'|(*:7695)'
                .')'
                .'|/payment/(?'
                    .'|authorize/([^/]++)(*:7735)'
                    .'|capture/([^/]++)(*:7760)'
                    .'|notify/(?'
                        .'|unsafe/([^/]++)(*:7794)'
                        .'|([^/]++)(*:7811)'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/(?'
                    .'|p(?'
                        .'|ay\\-(?'
                            .'|with\\-paypal/([^/]++)/([^/]++)(*:7943)'
                            .'|pal\\-(?'
                                .'|order\\-payment\\-page/([^/]++)/c(?'
                                    .'|reate(*:7999)'
                                    .'|omplete(*:8015)'
                                .')'
                                .'|payment\\-error(*:8039)'
                            .')'
                        .')'
                        .'|rocess\\-pay\\-pal\\-order(*:8073)'
                    .')'
                    .'|c(?'
                        .'|reate\\-pay\\-pal\\-order(?'
                            .'|/([^/]++)(*:8121)'
                            .'|\\-from\\-(?'
                                .'|cart/([^/]++)(*:8154)'
                                .'|product/([^/]++)(*:8179)'
                            .')'
                        .')'
                        .'|omplete\\-pay\\-pal\\-(?'
                            .'|order/([^/]++)(*:8226)'
                            .'|payment/([^/]++)(*:8251)'
                        .')'
                        .'|heckout/select\\-payment(*:8284)'
                        .'|ancel\\-pay\\-pal\\-(?'
                            .'|order(*:8318)'
                            .'|payment(*:8334)'
                            .'|checkout\\-payment(*:8360)'
                        .')'
                    .')'
                    .'|update\\-pay\\-pal\\-order(*:8394)'
                    .'|order/([^/]++)(?'
                        .'|(*:8420)'
                        .'|/cancel\\-last\\-pay\\-pal\\-payment(*:8461)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry::indexAction', '_sylius' => ['template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'sylius_admin_partial_catalog_promotion_show', '_controller' => 'sylius.controller.catalog_promotion::showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer::indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['repository' => ['method' => 'findLatestInChannel', 'arguments' => ['count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))']], 'template' => '$template', 'permission' => true]], ['channelCode', 'count'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['orderId', 'id'], ['GET' => 0], null, false, false, null]],
        525 => [[['_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        549 => [[['_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion::showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        573 => [[['_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon::showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        610 => [[['_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon::updateAction', '_format' => 'json', '_sylius' => ['permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType']], ['id'], ['PUT' => 0], null, false, false, null]],
        625 => [[['_route' => 'sylius_admin_ajax_taxon_move_up', '_controller' => 'sylius.controller.taxon_position::moveUpAction', '_format' => 'json', '_sylius' => ['permission' => true]], ['id'], ['PUT' => 0], null, false, false, null]],
        637 => [[['_route' => 'sylius_admin_ajax_taxon_move_down', '_controller' => 'sylius.controller.taxon_position::moveDownAction', '_format' => 'json', '_sylius' => ['permission' => true]], ['id'], ['PUT' => 0], null, false, false, null]],
        672 => [[['_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user::impersonateAction', 'username' => '$username'], ['username'], null, null, false, true, null]],
        705 => [[['_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        727 => [[['_route' => 'sylius_admin_admin_user_remove_avatar', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\RemoveAvatarAction'], ['id'], ['PUT' => 0], null, false, false, null]],
        736 => [[['_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        787 => [[['_route' => 'sylius_admin_catalog_promotion_update', '_controller' => 'sylius.controller.catalog_promotion::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_catalog_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_on_product_catalog', 'templates' => ['form' => '@SyliusAdmin/CatalogPromotion/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        803 => [[['_route' => 'sylius_admin_catalog_promotion_product_variant_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['section' => 'admin', 'grid' => 'sylius_admin_product_variant_with_catalog_promotion', 'template' => '@SyliusAdmin/CatalogPromotion/ProductVariant/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_on_product_catalog']]], ['id'], ['GET' => 0], null, false, false, null]],
        812 => [[['_route' => 'sylius_admin_catalog_promotion_show', '_controller' => 'sylius.controller.catalog_promotion::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin/CatalogPromotion/show.html.twig', 'permission' => true, 'alias' => 'catalog_promotion']], ['id'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'sylius_admin_catalog_promotion_delete', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Controller\\RemoveCatalogPromotionAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'alias' => 'catalog_promotion']], ['code'], ['DELETE' => 0], null, false, true, null]],
        853 => [[['_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        861 => [[['_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        892 => [[['_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        926 => [[['_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        964 => [[['_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        978 => [[['_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => ['route' => ['parameters' => ['$customerId' => '$id']], 'templates' => ['breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'], 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], ['id'], ['GET' => 0], null, false, false, null]],
        987 => [[['_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin/Customer/show.html.twig', 'permission' => true]], ['id'], null, null, false, true, null]],
        1021 => [[['_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1030 => [[['_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1078 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1087 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1119 => [[['_route' => 'sylius_paypal_plugin_admin_enable_seller', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\EnableSellerAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1150 => [[['_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1177 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1197 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
        1210 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1225 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order::applyStateMachineTransitionAction', '_sylius' => ['repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        1263 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        1278 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        1292 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['id'], ['PUT' => 0], null, false, false, null]],
        1328 => [[['_route' => 'sylius_admin_order_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1371 => [[['_route' => 'sylius_admin_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer', 'flash' => 'sylius.payment.completed']], ['id'], ['PUT' => 0], null, false, false, null]],
        1409 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1418 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1440 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1479 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1493 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'redirect' => 'referer', 'template' => '@SyliusAdmin/Crud/update.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig', 'toolbar' => '@SyliusAdmin/Product/Update/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1517 => [[['_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], ['taxonId'], ['GET' => 0], null, false, true, null]],
        1529 => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create']]]], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1549 => [[['_route' => 'sylius_admin_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Product/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1570 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'], 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants']]], ['productId'], ['GET' => 0], null, true, false, null]],
        1586 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant::createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig']]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1608 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant::updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig', 'toolbar' => '@SyliusAdmin/ProductVariant/Update/_toolbar.html.twig']]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1629 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
        1646 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1663 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1719 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1728 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1767 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1779 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1789 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1824 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1833 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1870 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1879 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1908 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'referer', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
        1923 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'referer', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
        1963 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig', 'toolbar' => '@SyliusAdmin/Promotion/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1982 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon::indexAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'], 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
        1998 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon::createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig']]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2020 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon::updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'], 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns']]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        2037 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon::generateAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2058 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
        2075 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
        2087 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2130 => [
            [['_route' => 'sylius_admin_render_password_reset', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\RenderResetPasswordPageAction'], ['token'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_password_reset', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\ResetPasswordAction'], ['token'], ['POST' => 0], null, false, true, null],
        ],
        2175 => [[['_route' => 'sylius_admin_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'flash' => 'sylius.shipment.shipped', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['id'], ['PUT' => 0], null, false, false, null]],
        2211 => [[['_route' => 'sylius_admin_shipment_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendShipmentConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2221 => [[['_route' => 'sylius_admin_shipment_show', '_controller' => 'sylius.controller.shipment::showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        2267 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2276 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2313 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2329 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        2339 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2368 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2407 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2416 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2438 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']], 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2480 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2489 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2521 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2530 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2567 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2576 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2613 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2656 => [[['_route' => 'sylius_paypal_plugin_admin_download_payouts_report', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\DownloadPayoutsReportAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2703 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        2740 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        2772 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        2812 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        2863 => [[['_route' => 'api_account_reset_password_requests_shop_update_reset_password_request_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_account_reset_password_requests_shop_update_reset_password_request_item', '_api_item_operation_name' => 'shop_update_reset_password_request'], ['resetPasswordToken'], ['PATCH' => 0], null, false, true, null]],
        2899 => [
            [['_route' => 'api_addresses_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_delete_item', '_api_item_operation_name' => 'shop_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        2927 => [[['_route' => 'api_adjustments_shop_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_adjustments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        2980 => [[['_route' => 'api_orders_shop_account_change_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_account_change_payment_method_item', '_api_item_operation_name' => 'shop_account_change_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        3022 => [[['_route' => 'api_verify_customer_accounts_shop_verify_customer_account_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount', '_api_identifiers' => ['token'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_verify_customer_accounts_shop_verify_customer_account_item', '_api_item_operation_name' => 'shop_verify_customer_account'], ['token'], ['PATCH' => 0], null, false, true, null]],
        3064 => [[['_route' => 'api_catalog_promotions_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3089 => [[['_route' => 'api_channels_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3115 => [[['_route' => 'api_countries_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3145 => [[['_route' => 'api_currencies_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3173 => [[['_route' => 'api_customers_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3191 => [[['_route' => 'api_customers_shop_password_update_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_password_update_item', '_api_item_operation_name' => 'shop_password_update'], ['id'], ['PUT' => 0], null, false, false, null]],
        3200 => [[['_route' => 'api_customers_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null]],
        3236 => [[['_route' => 'api_exchange_rates_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3261 => [[['_route' => 'api_locales_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3291 => [
            [['_route' => 'api_orders_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['tokenValue'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_delete_item', '_api_item_operation_name' => 'shop_delete'], ['tokenValue'], ['DELETE' => 0], null, false, true, null],
        ],
        3312 => [[['_route' => 'api_orders_shop_add_item', '_controller' => 'api_platform.action.post_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_add_item', '_api_item_operation_name' => 'shop_add_item'], ['tokenValue'], ['POST' => 0], null, false, false, null]],
        3333 => [[['_route' => 'api_orders_shop_remove_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\DeleteOrderItemAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_remove_item', '_api_item_operation_name' => 'shop_remove_item'], ['tokenValue', 'itemId'], ['DELETE' => 0], null, false, true, null]],
        3342 => [[['_route' => 'api_orders_shop_change_quantity_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_change_quantity_item', '_api_item_operation_name' => 'shop_change_quantity'], ['tokenValue', 'orderItemId'], ['PATCH' => 0], null, false, true, null]],
        3363 => [[['_route' => 'api_orders_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_orders_items_adjustments_get_subresource']], ['tokenValue', 'items'], ['GET' => 0], null, false, false, null]],
        3373 => [[['_route' => 'api_orders_items_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_get_subresource', '_api_subresource_context' => ['property' => 'items', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_items_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3401 => [[['_route' => 'api_orders_shop_select_shipping_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_select_shipping_method_item', '_api_item_operation_name' => 'shop_select_shipping_method'], ['tokenValue', 'shipmentId'], ['PATCH' => 0], null, false, true, null]],
        3430 => [[['_route' => 'api_orders_shop_select_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_select_payment_method_item', '_api_item_operation_name' => 'shop_select_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        3453 => [[['_route' => 'api_orders_get_configuration_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\Payment\\GetPaymentConfiguration', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_get_configuration_item', '_api_item_operation_name' => 'get_configuration'], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, false, null]],
        3471 => [[['_route' => 'api_orders_shop_complete_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_complete_item', '_api_item_operation_name' => 'shop_complete'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        3491 => [[['_route' => 'api_orders_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_adjustments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3501 => [[['_route' => 'api_orders_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['tokenValue'], ['PUT' => 0], null, false, true, null]],
        3530 => [[['_route' => 'api_order_items_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3555 => [[['_route' => 'api_order_item_units_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_item_units_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3589 => [[['_route' => 'api_payments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3616 => [[['_route' => 'api_payment_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payment_methods_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3651 => [[['_route' => 'api_products_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3671 => [[['_route' => 'api_products_attributes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_identifiers' => ['code' => ['App\\Entity\\Product\\Product', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_products_attributes_get_subresource', '_api_subresource_context' => ['property' => 'attributes', 'identifiers' => ['code' => ['App\\Entity\\Product\\Product', 'code', true]], 'collection' => true, 'operationId' => 'api_products_attributes_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        3700 => [[['_route' => 'api_products_shop_get_by_slug_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\GetProductBySlugAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_shop_get_by_slug_item', '_api_item_operation_name' => 'shop_get_by_slug'], ['slug'], ['GET' => 0], null, false, true, null]],
        3742 => [[['_route' => 'api_product_associations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_associations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3767 => [[['_route' => 'api_product_association_types_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3798 => [[['_route' => 'api_product_attributes_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_attributes_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3824 => [[['_route' => 'api_product_attribute_values_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_attribute_values_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3850 => [[['_route' => 'api_product_images_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_images_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3878 => [[['_route' => 'api_product_options_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3904 => [[['_route' => 'api_product_option_values_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_values_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3930 => [[['_route' => 'api_product_reviews_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3957 => [[['_route' => 'api_product_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_taxa_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3986 => [[['_route' => 'api_product_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4016 => [[['_route' => 'api_product_variants_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4047 => [[['_route' => 'api_product_variant_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variant_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4081 => [[['_route' => 'api_shipments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4115 => [[['_route' => 'api_shipping_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4147 => [[['_route' => 'api_shipping_method_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_method_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4176 => [[['_route' => 'api_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4208 => [[['_route' => 'api_taxon_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxon_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4252 => [[['_route' => 'api_addresses_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4279 => [[['_route' => 'api_adjustments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_adjustments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4321 => [
            [['_route' => 'api_administrators_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4360 => [
            [['_route' => 'api_administrators_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4403 => [[['_route' => 'api_avatar_images_admin_post_collection', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\UploadAvatarImageAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        4441 => [
            [['_route' => 'api_avatar_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_avatar_images_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4487 => [[['_route' => 'api_admin_reset_password_requests_admin_update_reset_password_request_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_admin_reset_password_requests_admin_update_reset_password_request_item', '_api_item_operation_name' => 'admin_update_reset_password_request'], ['resetPasswordToken'], ['PATCH' => 0], null, false, true, null]],
        4533 => [
            [['_route' => 'api_catalog_promotions_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_catalog_promotions_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_catalog_promotions_admin_delete_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\RemoveCatalogPromotionAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4581 => [[['_route' => 'api_catalog_promotion_actions_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionAction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_actions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4622 => [[['_route' => 'api_catalog_promotion_scopes_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionScope', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_scopes_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4652 => [[['_route' => 'api_catalog_promotion_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4685 => [
            [['_route' => 'api_channels_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_channels_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4714 => [[['_route' => 'api_channels_shop_billing_data_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_channels_shop_billing_data_get_subresource', '_api_subresource_context' => ['property' => 'shopBillingData', 'identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], 'collection' => false, 'operationId' => 'api_channels_shop_billing_data_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        4760 => [[['_route' => 'api_channel_pricings_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\ChannelPricing', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channel_pricings_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4790 => [
            [['_route' => 'api_countries_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_countries_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4809 => [[['_route' => 'api_countries_provinces_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_countries_provinces_get_subresource', '_api_subresource_context' => ['property' => 'provinces', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], 'collection' => true, 'operationId' => 'api_countries_provinces_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        4840 => [[['_route' => 'api_currencies_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4868 => [[['_route' => 'api_customers_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4906 => [
            [['_route' => 'api_customer_groups_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4945 => [
            [['_route' => 'api_customer_groups_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4986 => [
            [['_route' => 'api_exchange_rates_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        5012 => [[['_route' => 'api_locales_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5042 => [[['_route' => 'api_orders_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['tokenValue'], ['GET' => 0], null, false, true, null]],
        5061 => [[['_route' => 'api_orders_admin_cancel_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\OrderStateMachineTransitionApplicatorInterface::cancel', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_admin_cancel_item', '_api_item_operation_name' => 'admin_cancel'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        5078 => [[['_route' => 'api_orders_payments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_payments_get_subresource', '_api_subresource_context' => ['property' => 'payments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_payments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        5096 => [[['_route' => 'api_orders_shipments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_shipments_get_subresource', '_api_subresource_context' => ['property' => 'shipments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_shipments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        5129 => [[['_route' => 'api_order_items_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5150 => [[['_route' => 'api_order_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_order_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_order_items_adjustments_get_subresource']], ['id'], ['GET' => 0], null, false, false, null]],
        5176 => [[['_route' => 'api_order_item_units_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_item_units_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5213 => [[['_route' => 'api_payments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5231 => [[['_route' => 'api_payments_admin_complete_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\PaymentStateMachineTransitionApplicatorInterface::complete', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_admin_complete_item', '_api_item_operation_name' => 'admin_complete'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5259 => [[['_route' => 'api_payment_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payment_methods_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5294 => [
            [['_route' => 'api_products_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5342 => [
            [['_route' => 'api_product_association_types_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5392 => [[['_route' => 'api_product_association_type_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_type_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        5417 => [[['_route' => 'api_product_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_images_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5448 => [
            [['_route' => 'api_product_options_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_options_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        5464 => [[['_route' => 'api_product_options_values_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_product_options_values_get_subresource', '_api_subresource_context' => ['property' => 'values', 'identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], 'collection' => true, 'operationId' => 'api_product_options_values_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        5517 => [[['_route' => 'api_product_option_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        5541 => [[['_route' => 'api_product_option_values_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_values_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5571 => [
            [['_route' => 'api_product_reviews_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        5590 => [[['_route' => 'api_product_reviews_admin_accept_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ProductReviewStateMachineTransitionApplicatorInterface::accept', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_accept_item', '_api_item_operation_name' => 'admin_accept'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5605 => [[['_route' => 'api_product_reviews_admin_reject_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ProductReviewStateMachineTransitionApplicatorInterface::reject', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_reject_item', '_api_item_operation_name' => 'admin_reject'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5634 => [[['_route' => 'api_product_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_taxa_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5663 => [[['_route' => 'api_product_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5696 => [
            [['_route' => 'api_product_variants_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_variants_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        5728 => [[['_route' => 'api_product_variant_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variant_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5768 => [
            [['_route' => 'api_promotions_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_promotions_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        5807 => [
            [['_route' => 'api_promotions_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotions_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        5853 => [
            [['_route' => 'api_provinces_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_provinces_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_provinces_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_provinces_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        5892 => [[['_route' => 'api_shipments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5906 => [[['_route' => 'api_shipments_admin_ship_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_admin_ship_item', '_api_item_operation_name' => 'admin_ship'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5956 => [
            [['_route' => 'api_shipping_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        5995 => [
            [['_route' => 'api_shipping_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6028 => [
            [['_route' => 'api_shipping_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        6048 => [[['_route' => 'api_shipping_methods_admin_archive_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingShippingMethodApplicatorInterface::archive', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_archive_item', '_api_item_operation_name' => 'admin_archive'], ['code'], ['PATCH' => 0], null, false, false, null]],
        6064 => [[['_route' => 'api_shipping_methods_admin_restore_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingShippingMethodApplicatorInterface::restore', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_restore_item', '_api_item_operation_name' => 'admin_restore'], ['code'], ['PATCH' => 0], null, false, false, null]],
        6098 => [[['_route' => 'api_shipping_method_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_method_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6154 => [[['_route' => 'api_shop_billing_datas_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shop_billing_datas_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        6203 => [
            [['_route' => 'api_tax_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        6242 => [
            [['_route' => 'api_tax_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6271 => [
            [['_route' => 'api_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_taxa_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        6304 => [[['_route' => 'api_taxon_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxon_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6335 => [
            [['_route' => 'api_zones_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        6367 => [[['_route' => 'api_zones_members_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_zones_members_get_subresource', '_api_subresource_context' => ['property' => 'members', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], 'collection' => true, 'operationId' => 'api_zones_members_get_subresource']], ['code', '_format'], ['GET' => 0], null, false, true, null]],
        6395 => [[['_route' => 'api_zone_members_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zone_members_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6514 => [[['_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user::showAction', '_format' => 'json', '_sylius' => ['repository' => ['method' => 'findOneByEmail', 'arguments' => ['email' => '$email']], 'serialization_groups' => ['Secured']]], ['_locale'], ['GET' => 0], null, false, false, null]],
        6534 => [[['_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item::addAction', '_format' => 'json', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'flash' => 'sylius.cart.add_item']], ['_locale'], ['POST' => 0], null, false, false, null]],
        6558 => [[['_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item::removeAction', '_format' => 'json', '_sylius' => ['flash' => 'sylius.cart.remove_item']], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        6590 => [[['_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province::choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusShop/Common/Form/_province.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        6622 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
        6640 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
        6666 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        6682 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address::createAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6710 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address::updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        6735 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        6745 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address::deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        6766 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        6787 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        6812 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user::changePasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6822 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
        6868 => [[['_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneBySlug', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        6893 => [[['_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildren', 'arguments' => ['$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        6921 => [[['_route' => 'sylius_shop_partial_channel_menu_taxon_index', '_controller' => 'sylius.controller.taxon::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildrenByChannelMenuTaxon', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel().getMenuTaxon()', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        6947 => [[['_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order::widgetAction', '_sylius' => ['template' => '$template']], ['_locale'], ['GET' => 0], null, false, false, null]],
        6965 => [[['_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item::addAction', '_sylius' => ['template' => '$template', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        7002 => [[['_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByChannel', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count']]]], ['_locale', 'count'], ['GET' => 0], null, false, true, null]],
        7022 => [[['_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7063 => [[['_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByProductId', 'arguments' => ['$productId', '!!int $count']]], 'count' => 3], ['_locale', 'productId', 'count'], ['GET' => 0], null, false, true, null]],
        7093 => [[['_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => ['expr:service(\'sylius.repository.product_association\')', 'findWithProductsWithinChannel'], 'arguments' => ['$id', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'productId', 'id'], ['GET' => 0], null, false, true, null]],
        7117 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security::loginAction', '_sylius' => ['template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7133 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security::checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7146 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7167 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7202 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
        7234 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user::requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7252 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user::resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        7271 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user::requestVerificationTokenAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7289 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user::verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        7319 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '@SyliusShop/Product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7339 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
        7352 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review::createAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7380 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7399 => [
            [['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order::summaryAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_shop_cart_save', '_controller' => 'sylius.controller.order::saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save']], ['_locale'], ['PUT' => 0, 'PATCH' => 1], null, true, false, null],
        ],
        7420 => [[['_route' => 'sylius_shop_cart_checkout', '_controller' => 'sylius.controller.order::saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_checkout_start', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => false]], ['_locale'], ['PATCH' => 0], null, false, false, null]],
        7444 => [[['_route' => 'sylius_shop_cart_item_remove', '_controller' => 'sylius.controller.order_item::removeAction', '_sylius' => ['flash' => 'sylius.cart.remove_item', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        7454 => [[['_route' => 'sylius_shop_cart_clear', '_controller' => 'sylius.controller.order::clearAction', '_sylius' => ['redirect' => 'sylius_shop_cart_summary']], ['_locale'], ['DELETE' => 0], null, true, false, null]],
        7474 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
        7494 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7519 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7536 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7553 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact::requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        7582 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order::thankYouAction', '_sylius' => ['template' => '@SyliusShop/Order/thankYou.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7603 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum::prepareCaptureAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
        7622 => [[['_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum::afterCaptureAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7660 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        7684 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        7695 => [[['_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage::indexAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
        7735 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        7760 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        7794 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        7811 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
        7943 => [[['_route' => 'sylius_paypal_plugin_pay_with_paypal_form', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayWithPayPalFormAction'], ['_locale', 'orderToken', 'paymentId'], ['GET' => 0], null, false, true, null]],
        7999 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8015 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8039 => [[['_route' => 'sylius_paypal_plugin_payment_error', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayPalPaymentOnErrorAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8073 => [[['_route' => 'sylius_paypal_plugin_process_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\ProcessPayPalOrderAction'], ['_locale'], ['POST' => 0], null, true, false, null]],
        8121 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8154 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_cart', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromCartAction'], ['_locale', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8179 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_product', '_controller' => 'sylius.controller.order_item::createFromProductDetailsAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']]]], ['_locale', 'productId'], ['POST' => 0], null, false, true, null]],
        8226 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8251 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalPaymentAction'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        8284 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8318 => [[['_route' => 'sylius_paypal_plugin_cancel_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8334 => [[['_route' => 'sylius_paypal_plugin_cancel_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8360 => [[['_route' => 'sylius_paypal_plugin_cancel_checkout_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalCheckoutPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8394 => [[['_route' => 'sylius_paypal_plugin_update_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\UpdatePayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8420 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['template' => '@SyliusShop/Order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'options' => ['validation_groups' => ['sylius_order_pay']]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        8461 => [
            [['_route' => 'sylius_paypal_plugin_cancel_last_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelLastPayPalPaymentAction'], ['_locale', 'token'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
