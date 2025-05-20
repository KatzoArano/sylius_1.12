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
        '/admin/credit-memos' => [[['_route' => 'sylius_refund_admin_credit_memo_index', '_controller' => 'sylius_refund.controller.credit_memo::indexAction', '_sylius' => ['grid' => 'sylius_refund_credit_memo', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius_refund.ui.manage_credit_memos', 'icon' => 'inbox']]], null, ['GET' => 0], null, true, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch::switchAction'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'sylius_shop_request_password_reset_token_redirect', 'route' => 'sylius_shop_request_password_reset_token', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, ['GET' => 0], null, false, false, null]],
        '/paypal-webhook/api' => [[['_route' => 'sylius_paypal_plugin_webhook_refund_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\Webhook\\RefundOrderAction'], null, ['POST' => 0], null, true, false, null]],
        '/payplug/ipn' => [[['_route' => 'payplug_sylius_ipn', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\IpnAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                            .'|redit\\-memos/([^/]++)/(?'
                                .'|download(*:1075)'
                                .'|send(*:1088)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|xchange\\-rates/([^/]++)(?'
                                .'|/edit(*:1134)'
                                .'|(*:1143)'
                            .')'
                            .'|nable\\-seller/([^/]++)(*:1175)'
                        .')'
                        .'|locales/([^/]++)/edit(*:1206)'
                        .'|orders/([^/]++)(?'
                            .'|(*:1233)'
                            .'|/(?'
                                .'|history(*:1253)'
                                .'|edit(*:1266)'
                                .'|c(?'
                                    .'|ancel(*:1284)'
                                    .'|redit\\-memos(?'
                                        .'|(*:1308)'
                                        .'|/([^/]++)(*:1326)'
                                    .')'
                                .')'
                                .'|payments/([^/]++)/(?'
                                    .'|complete(*:1366)'
                                    .'|refund(*:1381)'
                                .')'
                                .'|ship(*:1395)'
                                .'|re(?'
                                    .'|send\\-confirmation\\-email(*:1434)'
                                    .'|funds(*:1448)'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|s/([^/]++)/complete(*:1492)'
                                .'|\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1530)'
                                        .'|(*:1539)'
                                    .')'
                                    .'|new/([^/]++)(*:1561)'
                                .')'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:1600)'
                                            .'|/edit(*:1614)'
                                        .')'
                                        .'|taxon/([^/]++)(*:1638)'
                                        .'|new(*:1650)'
                                        .'|([^/]++)(?'
                                            .'|(*:1670)'
                                            .'|/variants(?'
                                                .'|(*:1691)'
                                                .'|/(?'
                                                    .'|new(*:1707)'
                                                    .'|([^/]++)/edit(*:1729)'
                                                    .'|bulk\\-delete(*:1750)'
                                                    .'|([^/]++)(*:1767)'
                                                    .'|generate(*:1784)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ssociation\\-types/([^/]++)(?'
                                                .'|/edit(*:1840)'
                                                .'|(*:1849)'
                                            .')'
                                            .'|ttributes/([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:1888)'
                                                    .'|new(*:1900)'
                                                .')'
                                                .'|(*:1910)'
                                            .')'
                                        .')'
                                        .'|options/([^/]++)(?'
                                            .'|/edit(*:1945)'
                                            .'|(*:1954)'
                                        .')'
                                        .'|review(?'
                                            .'|s/([^/]++)(?'
                                                .'|/edit(*:1991)'
                                                .'|(*:2000)'
                                            .')'
                                            .'|/([^/]++)/(?'
                                                .'|accept(*:2029)'
                                                .'|reject(*:2044)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|motions/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:2084)'
                                        .'|coupons(?'
                                            .'|(*:2103)'
                                            .'|/(?'
                                                .'|new(*:2119)'
                                                .'|([^/]++)/edit(*:2141)'
                                                .'|generate(*:2158)'
                                                .'|bulk\\-delete(*:2179)'
                                                .'|([^/]++)(*:2196)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:2208)'
                                .')'
                            .')'
                        .')'
                        .'|forgotten\\-password/([^/]++)(?'
                            .'|(*:2251)'
                        .')'
                        .'|sh(?'
                            .'|ip(?'
                                .'|ments/([^/]++)(?'
                                    .'|/(?'
                                        .'|ship(*:2296)'
                                        .'|resend\\-confirmation\\-email(*:2332)'
                                    .')'
                                    .'|(*:2342)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:2388)'
                                        .'|(*:2397)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:2434)'
                                            .'|archive(*:2450)'
                                        .')'
                                        .'|(*:2460)'
                                    .')'
                                .')'
                            .')'
                            .'|op\\-user/([^/]++)(*:2489)'
                        .')'
                        .'|tax(?'
                            .'|ons/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:2528)'
                                    .'|(*:2537)'
                                .')'
                                .'|new/([^/]++)(*:2559)'
                            .')'
                            .'|\\-(?'
                                .'|categories/([^/]++)(?'
                                    .'|/edit(*:2601)'
                                    .'|(*:2610)'
                                .')'
                                .'|rates/([^/]++)(?'
                                    .'|/edit(*:2642)'
                                    .'|(*:2651)'
                                .')'
                            .')'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:2688)'
                                .'|(*:2697)'
                            .')'
                            .'|(country|province|zone)/new(*:2734)'
                        .')'
                        .'|download/payouts\\-report/([^/]++)(*:2777)'
                    .')'
                    .'|pi/v2(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:2824)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:2861)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:2893)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:2933)'
                            .'|shop/(?'
                                .'|reset\\-password\\-requests/([^/]++)(*:2984)'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(?'
                                            .'|(*:3020)'
                                        .')'
                                        .'|justments/([^/]++)(*:3048)'
                                    .')'
                                    .'|ccount(?'
                                        .'|/orders/([^/]++)/payments/([^/]++)(*:3101)'
                                        .'|\\-verification\\-requests/([^/]++)(*:3143)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|atalog\\-promotions/([^/]++)(*:3185)'
                                    .'|hannels/([^/]++)(*:3210)'
                                    .'|ountries/([^/]++)(*:3236)'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:3266)'
                                        .'|stomers/([^/]++)(?'
                                            .'|(*:3294)'
                                            .'|/password(*:3312)'
                                            .'|(*:3321)'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(*:3357)'
                                .'|locales/([^/]++)(*:3382)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:3412)'
                                        .'|/(?'
                                            .'|items(?'
                                                .'|(*:3433)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:3454)'
                                                    .'|(*:3463)'
                                                    .'|/adjustments(*:3484)'
                                                .')'
                                                .'|(*:3494)'
                                            .')'
                                            .'|shipments/([^/]++)(*:3522)'
                                            .'|payments/([^/]++)(?'
                                                .'|(*:3551)'
                                                .'|/configuration(*:3574)'
                                            .')'
                                            .'|complete(*:3592)'
                                            .'|adjustments(*:3612)'
                                        .')'
                                        .'|(*:3622)'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(*:3651)'
                                        .'|\\-units/([^/]++)(*:3676)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(*:3710)'
                                        .'|\\-methods/([^/]++)(*:3737)'
                                    .')'
                                    .'|roduct(?'
                                        .'|s(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:3772)'
                                                .'|/attributes(*:3792)'
                                            .')'
                                            .'|\\-by\\-slug/([^/]++)(*:3821)'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ssociation(?'
                                                    .'|s/([^/]++)(*:3863)'
                                                    .'|\\-types/([^/]++)(*:3888)'
                                                .')'
                                                .'|ttribute(?'
                                                    .'|s/([^/]++)(*:3919)'
                                                    .'|\\-values/([^/]++)(*:3945)'
                                                .')'
                                            .')'
                                            .'|images/([^/]++)(*:3971)'
                                            .'|option(?'
                                                .'|s/([^/]++)(*:3999)'
                                                .'|\\-values/([^/]++)(*:4025)'
                                            .')'
                                            .'|reviews/([^/]++)(*:4051)'
                                            .'|t(?'
                                                .'|axons/([^/]++)(*:4078)'
                                                .'|ranslations/([^/]++)(*:4107)'
                                            .')'
                                            .'|variant(?'
                                                .'|s/([^/]++)(*:4137)'
                                                .'|\\-translation/([^/]++)(*:4168)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ship(?'
                                    .'|ments/([^/]++)(*:4202)'
                                    .'|ping\\-method(?'
                                        .'|s/([^/]++)(*:4236)'
                                        .'|\\-translations/([^/]++)(*:4268)'
                                    .')'
                                .')'
                                .'|taxon(?'
                                    .'|s/([^/]++)(*:4297)'
                                    .'|\\-translations/([^/]++)(*:4329)'
                                .')'
                            .')'
                            .'|admin/(?'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(*:4373)'
                                        .'|justments/([^/]++)(*:4400)'
                                        .'|ministrators(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:4442)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:4481)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|vatar\\-images(?'
                                        .'|(?:\\.([^/]++))?(*:4524)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4562)'
                                        .')'
                                    .')'
                                .')'
                                .'|reset\\-password\\-requests/([^/]++)(*:4608)'
                                .'|c(?'
                                    .'|atalog\\-promotion(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4654)'
                                        .')'
                                        .'|\\-(?'
                                            .'|actions/([^/\\.]++)(?:\\.([^/]++))?(*:4702)'
                                            .'|scopes/([^/\\.]++)(?:\\.([^/]++))?(*:4743)'
                                            .'|translations/([^/]++)(*:4773)'
                                        .')'
                                    .')'
                                    .'|hannel(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4806)'
                                            .'|/shop\\-billing\\-data(*:4835)'
                                        .')'
                                        .'|\\-pricings/([^/\\.]++)(?:\\.([^/]++))?(*:4881)'
                                    .')'
                                    .'|ountries/([^/]++)(?'
                                        .'|(*:4911)'
                                        .'|/provinces(*:4930)'
                                    .')'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:4961)'
                                        .'|stomer(?'
                                            .'|s/([^/]++)(*:4989)'
                                            .'|\\-groups(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:5027)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:5066)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(?'
                                    .'|(*:5107)'
                                .')'
                                .'|locales/([^/]++)(*:5133)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:5163)'
                                        .'|/(?'
                                            .'|cancel(*:5182)'
                                            .'|payments(*:5199)'
                                            .'|shipments(*:5217)'
                                        .')'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5250)'
                                            .'|/adjustments(*:5271)'
                                        .')'
                                        .'|\\-units/([^/]++)(*:5297)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5334)'
                                            .'|/complete(*:5352)'
                                        .')'
                                        .'|\\-methods/([^/]++)(*:5380)'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|s/([^/]++)(?'
                                                .'|(*:5415)'
                                            .')'
                                            .'|\\-(?'
                                                .'|association\\-type(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5463)'
                                                    .')'
                                                    .'|\\-translations/([^/\\.]++)(?:\\.([^/]++))?(*:5513)'
                                                .')'
                                                .'|images/([^/]++)(*:5538)'
                                                .'|option(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5569)'
                                                        .'|/values(*:5585)'
                                                    .')'
                                                    .'|\\-(?'
                                                        .'|translations/([^/\\.]++)(?:\\.([^/]++))?(*:5638)'
                                                        .'|values/([^/]++)(*:5662)'
                                                    .')'
                                                .')'
                                                .'|reviews/([^/]++)(?'
                                                    .'|(*:5692)'
                                                    .'|/(?'
                                                        .'|accept(*:5711)'
                                                        .'|reject(*:5726)'
                                                    .')'
                                                .')'
                                                .'|t(?'
                                                    .'|axons/([^/]++)(*:5755)'
                                                    .'|ranslations/([^/]++)(*:5784)'
                                                .')'
                                                .'|variant(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:5817)'
                                                    .')'
                                                    .'|\\-translation/([^/]++)(*:5849)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|motions(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:5889)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:5928)'
                                            .')'
                                        .')'
                                        .'|vinces/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:5974)'
                                        .')'
                                    .')'
                                .')'
                                .'|sh(?'
                                    .'|ip(?'
                                        .'|ments/([^/]++)(?'
                                            .'|(*:6013)'
                                            .'|/ship(*:6027)'
                                        .')'
                                        .'|ping\\-(?'
                                            .'|categories(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:6077)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:6116)'
                                                .')'
                                            .')'
                                            .'|method(?'
                                                .'|s/([^/]++)(?'
                                                    .'|(*:6149)'
                                                    .'|/(?'
                                                        .'|archive(*:6169)'
                                                        .'|restore(*:6185)'
                                                    .')'
                                                .')'
                                                .'|\\-translations/([^/]++)(*:6219)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|op\\-billing\\-datas/([^/\\.]++)(?:\\.([^/]++))?(*:6275)'
                                .')'
                                .'|tax(?'
                                    .'|\\-categories(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:6324)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:6363)'
                                        .')'
                                    .')'
                                    .'|on(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:6392)'
                                        .')'
                                        .'|\\-translations/([^/]++)(*:6425)'
                                    .')'
                                .')'
                                .'|zone(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:6456)'
                                        .'|/members(?:\\.([^/]++))?(*:6488)'
                                    .')'
                                    .'|\\-members/([^/]++)(*:6516)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([a-z]{2}(?:_[A-Z]{2})?)/(?'
                    .'|_partial/orders/([^/]++)/credit\\-memos(*:6597)'
                    .'|credit\\-memos/([^/]++)/download(*:6637)'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)(?'
                    .'|/(?'
                        .'|a(?'
                            .'|jax/(?'
                                .'|users/check(*:6752)'
                                .'|cart/(?'
                                    .'|add(*:6772)'
                                    .'|([^/]++)/remove(*:6796)'
                                .')'
                                .'|render\\-province\\-form(*:6828)'
                            .')'
                            .'|ccount(?'
                                .'|/(?'
                                    .'|orders(?'
                                        .'|(*:6860)'
                                        .'|/([^/]++)(*:6878)'
                                    .')'
                                    .'|address\\-book(?'
                                        .'|(*:6904)'
                                        .'|/(?'
                                            .'|add(*:6920)'
                                            .'|([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:6948)'
                                                    .'|set\\-as\\-default(*:6973)'
                                                .')'
                                                .'|(*:6983)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|dashboard(*:7004)'
                                    .'|profile/edit(*:7025)'
                                    .'|change\\-password(*:7050)'
                                .')'
                                .'|(*:7060)'
                            .')'
                        .')'
                        .'|_partial/(?'
                            .'|taxons/by\\-(?'
                                .'|slug/(.+)(*:7106)'
                                .'|c(?'
                                    .'|ode/([^/]++)(*:7131)'
                                    .'|hannel\\-menu\\-taxon(*:7159)'
                                .')'
                            .')'
                            .'|cart/(?'
                                .'|summary(*:7185)'
                                .'|add\\-item(*:7203)'
                            .')'
                            .'|products/(?'
                                .'|latest/([^/]++)(*:7240)'
                                .'|([^/]++)(?'
                                    .'|(*:7260)'
                                    .'|/(?'
                                        .'|reviews/latest(?:/([^/]++))?(*:7301)'
                                        .'|associations/([^/]++)(*:7331)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|log(?'
                            .'|in(?'
                                .'|(*:7355)'
                                .'|\\-check(*:7371)'
                            .')'
                            .'|out(*:7384)'
                        .')'
                        .'|register(?'
                            .'|(*:7405)'
                            .'|\\-after\\-checkout/([^/]++)(*:7440)'
                        .')'
                        .'|forgotten\\-password(?'
                            .'|(*:7472)'
                            .'|/([^/]++)(*:7490)'
                        .')'
                        .'|verify(?'
                            .'|(*:7509)'
                            .'|/([^/]++)(*:7527)'
                        .')'
                        .'|products/([^/]++)(?'
                            .'|(*:7557)'
                            .'|/reviews(?'
                                .'|(*:7577)'
                                .'|/new(*:7590)'
                            .')'
                        .')'
                        .'|taxons/(.+(?<!/))(*:7618)'
                        .'|c(?'
                            .'|art(?'
                                .'|(*:7637)'
                                .'|/(?'
                                    .'|checkout(*:7658)'
                                    .'|([^/]++)/remove(*:7682)'
                                .')'
                                .'|(*:7692)'
                            .')'
                            .'|heckout(?'
                                .'|(*:7712)'
                                .'|/(?'
                                    .'|address(*:7732)'
                                    .'|select\\-shipping(*:7757)'
                                    .'|complete(*:7774)'
                                .')'
                            .')'
                            .'|ontact(*:7791)'
                        .')'
                        .'|order/(?'
                            .'|thank\\-you(*:7820)'
                            .'|([^/]++)/pay(*:7841)'
                            .'|after\\-pay(*:7860)'
                        .')'
                        .'|switch\\-(?'
                            .'|currency/([^/]++)(*:7898)'
                            .'|locale/([^/]++)(*:7922)'
                        .')'
                    .')'
                    .'|(*:7933)'
                .')'
                .'|/payment/(?'
                    .'|authorize/([^/]++)(*:7973)'
                    .'|capture/([^/]++)(*:7998)'
                    .'|notify/(?'
                        .'|unsafe/([^/]++)(*:8032)'
                        .'|([^/]++)(*:8049)'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/(?'
                    .'|p(?'
                        .'|ay\\-(?'
                            .'|with\\-paypal/([^/]++)/([^/]++)(*:8181)'
                            .'|pal\\-(?'
                                .'|order\\-payment\\-page/([^/]++)/c(?'
                                    .'|reate(*:8237)'
                                    .'|omplete(*:8253)'
                                .')'
                                .'|payment\\-error(*:8277)'
                            .')'
                        .')'
                        .'|rocess\\-pay\\-pal\\-order(*:8311)'
                    .')'
                    .'|c(?'
                        .'|reate\\-pay\\-pal\\-order(?'
                            .'|/([^/]++)(*:8359)'
                            .'|\\-from\\-(?'
                                .'|cart/([^/]++)(*:8392)'
                                .'|product/([^/]++)(*:8417)'
                            .')'
                        .')'
                        .'|omplete\\-pay\\-pal\\-(?'
                            .'|order/([^/]++)(*:8464)'
                            .'|payment/([^/]++)(*:8489)'
                        .')'
                        .'|heckout/select\\-payment(*:8522)'
                        .'|ancel\\-pay\\-pal\\-(?'
                            .'|order(*:8556)'
                            .'|payment(*:8572)'
                            .'|checkout\\-payment(*:8598)'
                        .')'
                    .')'
                    .'|update\\-pay\\-pal\\-order(*:8632)'
                    .'|order/([^/]++)(?'
                        .'|(*:8658)'
                        .'|/cancel\\-last\\-pay\\-pal\\-payment(*:8699)'
                    .')'
                .')'
                .'|/admin/orders/([^/]++)/refund\\-(?'
                    .'|payments/([^/]++)/complete(*:8770)'
                    .'|units(*:8784)'
                .')'
                .'|/([^/]++)/(?'
                    .'|pay(?'
                        .'|plug/oney(?'
                            .'|_(?'
                                .'|complete_info(*:8842)'
                                .'|popin(*:8856)'
                            .')'
                            .'|/is\\-product\\-eligible(*:8888)'
                        .')'
                        .'|ment/capture/([^/]++)/1\\-click\\-checkup(*:8937)'
                    .')'
                    .'|account/saved\\-cards(?'
                        .'|(*:8970)'
                        .'|/delete/([^/]++)(*:8995)'
                    .')'
                .')'
                .'|/payplug/apple\\-pay/(?'
                    .'|prepare/([^/]++)(*:9045)'
                    .'|c(?'
                        .'|omplete/([^/]++)(*:9074)'
                        .'|ancel/([^/]++)(*:9097)'
                    .')'
                .')'
                .'|/([^/]++)/payplug/integrated_payment/init/([^/]++)(*:9158)'
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
        1075 => [[['_route' => 'sylius_refund_admin_credit_memo_download', '_controller' => 'Sylius\\RefundPlugin\\Action\\Admin\\DownloadCreditMemoAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1088 => [[['_route' => 'sylius_refund_admin_credit_memo_send', '_controller' => 'Sylius\\RefundPlugin\\Action\\Admin\\SendCreditMemoAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1134 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1143 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1175 => [[['_route' => 'sylius_paypal_plugin_admin_enable_seller', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\EnableSellerAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1206 => [[['_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1233 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1253 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
        1266 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1284 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order::applyStateMachineTransitionAction', '_sylius' => ['repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        1308 => [[['_route' => 'sylius_refund_order_credit_memos_list', '_controller' => 'sylius_refund.controller.credit_memo::indexAction', '_sylius' => ['template' => '@SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig', 'repository' => ['method' => 'findByOrderId', 'arguments' => '$orderId']]], ['orderId'], ['GET' => 0], null, false, false, null]],
        1326 => [[['_route' => 'sylius_refund_credit_memo_details', '_controller' => 'sylius_refund.controller.credit_memo::showAction', '_sylius' => ['template' => '@SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig', 'criteria' => ['id' => '$id']]], ['orderNumber', 'id'], ['GET' => 0], null, false, true, null]],
        1366 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        1381 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        1395 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['id'], ['PUT' => 0], null, false, false, null]],
        1434 => [[['_route' => 'sylius_admin_order_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1448 => [[['_route' => 'sylius_refund_order_refunds_list', '_controller' => 'Sylius\\RefundPlugin\\Action\\Admin\\OrderRefundsListAction'], ['orderNumber'], ['GET' => 0], null, false, false, null]],
        1492 => [[['_route' => 'sylius_admin_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer', 'flash' => 'sylius.payment.completed']], ['id'], ['PUT' => 0], null, false, false, null]],
        1530 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1539 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1561 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1600 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1614 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'redirect' => 'referer', 'template' => '@SyliusAdmin/Crud/update.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig', 'toolbar' => '@SyliusAdmin/Product/Update/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1638 => [[['_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], ['taxonId'], ['GET' => 0], null, false, true, null]],
        1650 => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create']]]], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1670 => [[['_route' => 'sylius_admin_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Product/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1691 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'], 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants']]], ['productId'], ['GET' => 0], null, true, false, null]],
        1707 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant::createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig']]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1729 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant::updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig', 'toolbar' => '@SyliusAdmin/ProductVariant/Update/_toolbar.html.twig']]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1750 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
        1767 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1784 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1840 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1849 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1888 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1900 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1910 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1945 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1954 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1991 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2000 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2029 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'referer', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
        2044 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'referer', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
        2084 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig', 'toolbar' => '@SyliusAdmin/Promotion/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2103 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon::indexAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'], 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
        2119 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon::createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig']]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2141 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon::updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'], 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns']]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        2158 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon::generateAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2179 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
        2196 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
        2208 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2251 => [
            [['_route' => 'sylius_admin_render_password_reset', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\RenderResetPasswordPageAction'], ['token'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_password_reset', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\Account\\ResetPasswordAction'], ['token'], ['POST' => 0], null, false, true, null],
        ],
        2296 => [[['_route' => 'sylius_admin_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'flash' => 'sylius.shipment.shipped', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['id'], ['PUT' => 0], null, false, false, null]],
        2332 => [[['_route' => 'sylius_admin_shipment_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendShipmentConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2342 => [[['_route' => 'sylius_admin_shipment_show', '_controller' => 'sylius.controller.shipment::showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        2388 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2397 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2434 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2450 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        2460 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2489 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2528 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2537 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2559 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']], 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2601 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2610 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2642 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2651 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2688 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2697 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2734 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2777 => [[['_route' => 'sylius_paypal_plugin_admin_download_payouts_report', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\DownloadPayoutsReportAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2824 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        2861 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        2893 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        2933 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        2984 => [[['_route' => 'api_account_reset_password_requests_shop_update_reset_password_request_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_account_reset_password_requests_shop_update_reset_password_request_item', '_api_item_operation_name' => 'shop_update_reset_password_request'], ['resetPasswordToken'], ['PATCH' => 0], null, false, true, null]],
        3020 => [
            [['_route' => 'api_addresses_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_delete_item', '_api_item_operation_name' => 'shop_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        3048 => [[['_route' => 'api_adjustments_shop_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_adjustments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3101 => [[['_route' => 'api_orders_shop_account_change_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_account_change_payment_method_item', '_api_item_operation_name' => 'shop_account_change_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        3143 => [[['_route' => 'api_verify_customer_accounts_shop_verify_customer_account_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount', '_api_identifiers' => ['token'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_verify_customer_accounts_shop_verify_customer_account_item', '_api_item_operation_name' => 'shop_verify_customer_account'], ['token'], ['PATCH' => 0], null, false, true, null]],
        3185 => [[['_route' => 'api_catalog_promotions_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3210 => [[['_route' => 'api_channels_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3236 => [[['_route' => 'api_countries_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3266 => [[['_route' => 'api_currencies_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3294 => [[['_route' => 'api_customers_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3312 => [[['_route' => 'api_customers_shop_password_update_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_password_update_item', '_api_item_operation_name' => 'shop_password_update'], ['id'], ['PUT' => 0], null, false, false, null]],
        3321 => [[['_route' => 'api_customers_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null]],
        3357 => [[['_route' => 'api_exchange_rates_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3382 => [[['_route' => 'api_locales_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3412 => [
            [['_route' => 'api_orders_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['tokenValue'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_delete_item', '_api_item_operation_name' => 'shop_delete'], ['tokenValue'], ['DELETE' => 0], null, false, true, null],
        ],
        3433 => [[['_route' => 'api_orders_shop_add_item', '_controller' => 'api_platform.action.post_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_add_item', '_api_item_operation_name' => 'shop_add_item'], ['tokenValue'], ['POST' => 0], null, false, false, null]],
        3454 => [[['_route' => 'api_orders_shop_remove_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\DeleteOrderItemAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_remove_item', '_api_item_operation_name' => 'shop_remove_item'], ['tokenValue', 'itemId'], ['DELETE' => 0], null, false, true, null]],
        3463 => [[['_route' => 'api_orders_shop_change_quantity_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_change_quantity_item', '_api_item_operation_name' => 'shop_change_quantity'], ['tokenValue', 'orderItemId'], ['PATCH' => 0], null, false, true, null]],
        3484 => [[['_route' => 'api_orders_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_orders_items_adjustments_get_subresource']], ['tokenValue', 'items'], ['GET' => 0], null, false, false, null]],
        3494 => [[['_route' => 'api_orders_items_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_get_subresource', '_api_subresource_context' => ['property' => 'items', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_items_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3522 => [[['_route' => 'api_orders_shop_select_shipping_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_select_shipping_method_item', '_api_item_operation_name' => 'shop_select_shipping_method'], ['tokenValue', 'shipmentId'], ['PATCH' => 0], null, false, true, null]],
        3551 => [[['_route' => 'api_orders_shop_select_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_select_payment_method_item', '_api_item_operation_name' => 'shop_select_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        3574 => [[['_route' => 'api_orders_get_configuration_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\Payment\\GetPaymentConfiguration', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_get_configuration_item', '_api_item_operation_name' => 'get_configuration'], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, false, null]],
        3592 => [[['_route' => 'api_orders_shop_complete_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_complete_item', '_api_item_operation_name' => 'shop_complete'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        3612 => [[['_route' => 'api_orders_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_adjustments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3622 => [[['_route' => 'api_orders_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_shop_put_item', '_api_item_operation_name' => 'shop_put'], ['tokenValue'], ['PUT' => 0], null, false, true, null]],
        3651 => [[['_route' => 'api_order_items_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3676 => [[['_route' => 'api_order_item_units_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_item_units_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3710 => [[['_route' => 'api_payments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3737 => [[['_route' => 'api_payment_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payment_methods_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3772 => [[['_route' => 'api_products_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3792 => [[['_route' => 'api_products_attributes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_identifiers' => ['code' => ['App\\Entity\\Product\\Product', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_products_attributes_get_subresource', '_api_subresource_context' => ['property' => 'attributes', 'identifiers' => ['code' => ['App\\Entity\\Product\\Product', 'code', true]], 'collection' => true, 'operationId' => 'api_products_attributes_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        3821 => [[['_route' => 'api_products_shop_get_by_slug_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\GetProductBySlugAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_shop_get_by_slug_item', '_api_item_operation_name' => 'shop_get_by_slug'], ['slug'], ['GET' => 0], null, false, true, null]],
        3863 => [[['_route' => 'api_product_associations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_associations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3888 => [[['_route' => 'api_product_association_types_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3919 => [[['_route' => 'api_product_attributes_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_attributes_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3945 => [[['_route' => 'api_product_attribute_values_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_attribute_values_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3971 => [[['_route' => 'api_product_images_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_images_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3999 => [[['_route' => 'api_product_options_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4025 => [[['_route' => 'api_product_option_values_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_values_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4051 => [[['_route' => 'api_product_reviews_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4078 => [[['_route' => 'api_product_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_taxa_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4107 => [[['_route' => 'api_product_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4137 => [[['_route' => 'api_product_variants_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4168 => [[['_route' => 'api_product_variant_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variant_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4202 => [[['_route' => 'api_shipments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4236 => [[['_route' => 'api_shipping_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4268 => [[['_route' => 'api_shipping_method_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_method_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4297 => [[['_route' => 'api_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4329 => [[['_route' => 'api_taxon_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxon_translations_shop_get_item', '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4373 => [[['_route' => 'api_addresses_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_addresses_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4400 => [[['_route' => 'api_adjustments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_adjustments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4442 => [
            [['_route' => 'api_administrators_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4481 => [
            [['_route' => 'api_administrators_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_administrators_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4524 => [[['_route' => 'api_avatar_images_admin_post_collection', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\UploadAvatarImageAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        4562 => [
            [['_route' => 'api_avatar_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_avatar_images_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_avatar_images_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4608 => [[['_route' => 'api_admin_reset_password_requests_admin_update_reset_password_request_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_admin_reset_password_requests_admin_update_reset_password_request_item', '_api_item_operation_name' => 'admin_update_reset_password_request'], ['resetPasswordToken'], ['PATCH' => 0], null, false, true, null]],
        4654 => [
            [['_route' => 'api_catalog_promotions_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_catalog_promotions_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_catalog_promotions_admin_delete_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\RemoveCatalogPromotionAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotions_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4702 => [[['_route' => 'api_catalog_promotion_actions_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionAction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_actions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4743 => [[['_route' => 'api_catalog_promotion_scopes_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionScope', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_scopes_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4773 => [[['_route' => 'api_catalog_promotion_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_catalog_promotion_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4806 => [
            [['_route' => 'api_channels_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_channels_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channels_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4835 => [[['_route' => 'api_channels_shop_billing_data_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_channels_shop_billing_data_get_subresource', '_api_subresource_context' => ['property' => 'shopBillingData', 'identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], 'collection' => false, 'operationId' => 'api_channels_shop_billing_data_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        4881 => [[['_route' => 'api_channel_pricings_admin_get_item', '_controller' => 'ApiPlatform\\Core\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\ChannelPricing', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_channel_pricings_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4911 => [
            [['_route' => 'api_countries_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_countries_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_countries_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4930 => [[['_route' => 'api_countries_provinces_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_countries_provinces_get_subresource', '_api_subresource_context' => ['property' => 'provinces', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], 'collection' => true, 'operationId' => 'api_countries_provinces_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        4961 => [[['_route' => 'api_currencies_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_currencies_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4989 => [[['_route' => 'api_customers_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5027 => [
            [['_route' => 'api_customer_groups_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        5066 => [
            [['_route' => 'api_customer_groups_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customer_groups_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        5107 => [
            [['_route' => 'api_exchange_rates_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_exchange_rates_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        5133 => [[['_route' => 'api_locales_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_locales_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5163 => [[['_route' => 'api_orders_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['tokenValue'], ['GET' => 0], null, false, true, null]],
        5182 => [[['_route' => 'api_orders_admin_cancel_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\OrderStateMachineTransitionApplicatorInterface::cancel', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_admin_cancel_item', '_api_item_operation_name' => 'admin_cancel'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        5199 => [[['_route' => 'api_orders_payments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_payments_get_subresource', '_api_subresource_context' => ['property' => 'payments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_payments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        5217 => [[['_route' => 'api_orders_shipments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_shipments_get_subresource', '_api_subresource_context' => ['property' => 'shipments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_shipments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        5250 => [[['_route' => 'api_order_items_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5271 => [[['_route' => 'api_order_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_order_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_order_items_adjustments_get_subresource']], ['id'], ['GET' => 0], null, false, false, null]],
        5297 => [[['_route' => 'api_order_item_units_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_item_units_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5334 => [[['_route' => 'api_payments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5352 => [[['_route' => 'api_payments_admin_complete_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\PaymentStateMachineTransitionApplicatorInterface::complete', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_admin_complete_item', '_api_item_operation_name' => 'admin_complete'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5380 => [[['_route' => 'api_payment_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payment_methods_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5415 => [
            [['_route' => 'api_products_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5463 => [
            [['_route' => 'api_product_association_types_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_types_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5513 => [[['_route' => 'api_product_association_type_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_association_type_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        5538 => [[['_route' => 'api_product_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_images_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5569 => [
            [['_route' => 'api_product_options_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_options_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_options_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        5585 => [[['_route' => 'api_product_options_values_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_product_options_values_get_subresource', '_api_subresource_context' => ['property' => 'values', 'identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], 'collection' => true, 'operationId' => 'api_product_options_values_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        5638 => [[['_route' => 'api_product_option_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        5662 => [[['_route' => 'api_product_option_values_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_option_values_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5692 => [
            [['_route' => 'api_product_reviews_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        5711 => [[['_route' => 'api_product_reviews_admin_accept_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ProductReviewStateMachineTransitionApplicatorInterface::accept', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_accept_item', '_api_item_operation_name' => 'admin_accept'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5726 => [[['_route' => 'api_product_reviews_admin_reject_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ProductReviewStateMachineTransitionApplicatorInterface::reject', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_reviews_admin_reject_item', '_api_item_operation_name' => 'admin_reject'], ['id'], ['PATCH' => 0], null, false, false, null]],
        5755 => [[['_route' => 'api_product_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_taxa_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5784 => [[['_route' => 'api_product_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5817 => [
            [['_route' => 'api_product_variants_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_variants_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variants_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        5849 => [[['_route' => 'api_product_variant_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_product_variant_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5889 => [
            [['_route' => 'api_promotions_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_promotions_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        5928 => [
            [['_route' => 'api_promotions_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotions_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_promotions_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        5974 => [
            [['_route' => 'api_provinces_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_provinces_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_provinces_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_provinces_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        6013 => [[['_route' => 'api_shipments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6027 => [[['_route' => 'api_shipments_admin_ship_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipments_admin_ship_item', '_api_item_operation_name' => 'admin_ship'], ['id'], ['PATCH' => 0], null, false, false, null]],
        6077 => [
            [['_route' => 'api_shipping_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        6116 => [
            [['_route' => 'api_shipping_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_categories_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6149 => [
            [['_route' => 'api_shipping_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        6169 => [[['_route' => 'api_shipping_methods_admin_archive_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingShippingMethodApplicatorInterface::archive', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_archive_item', '_api_item_operation_name' => 'admin_archive'], ['code'], ['PATCH' => 0], null, false, false, null]],
        6185 => [[['_route' => 'api_shipping_methods_admin_restore_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingShippingMethodApplicatorInterface::restore', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_methods_admin_restore_item', '_api_item_operation_name' => 'admin_restore'], ['code'], ['PATCH' => 0], null, false, false, null]],
        6219 => [[['_route' => 'api_shipping_method_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_method_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6275 => [[['_route' => 'api_shop_billing_datas_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shop_billing_datas_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        6324 => [
            [['_route' => 'api_tax_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_get_collection', '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_post_collection', '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        6363 => [
            [['_route' => 'api_tax_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_tax_categories_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6392 => [
            [['_route' => 'api_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_taxa_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxa_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        6425 => [[['_route' => 'api_taxon_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_taxon_translations_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6456 => [
            [['_route' => 'api_zones_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_put_item', '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zones_admin_delete_item', '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        6488 => [[['_route' => 'api_zones_members_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_zones_members_get_subresource', '_api_subresource_context' => ['property' => 'members', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], 'collection' => true, 'operationId' => 'api_zones_members_get_subresource']], ['code', '_format'], ['GET' => 0], null, false, true, null]],
        6516 => [[['_route' => 'api_zone_members_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_zone_members_admin_get_item', '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        6597 => [[['_route' => 'sylius_refund_plugin_shop_order_credit_memos_partial', '_controller' => 'sylius_refund.controller.credit_memo::indexAction', '_sylius' => ['template' => '@SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig', 'repository' => ['method' => 'findByOrder', 'arguments' => '$orderId']]], ['_locale', 'orderId'], ['GET' => 0], null, true, false, null]],
        6637 => [[['_route' => 'sylius_refund_shop_credit_memo_download', '_controller' => 'Sylius\\RefundPlugin\\Action\\Shop\\DownloadCreditMemoAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        6752 => [[['_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user::showAction', '_format' => 'json', '_sylius' => ['repository' => ['method' => 'findOneByEmail', 'arguments' => ['email' => '$email']], 'serialization_groups' => ['Secured']]], ['_locale'], ['GET' => 0], null, false, false, null]],
        6772 => [[['_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item::addAction', '_format' => 'json', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'flash' => 'sylius.cart.add_item']], ['_locale'], ['POST' => 0], null, false, false, null]],
        6796 => [[['_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item::removeAction', '_format' => 'json', '_sylius' => ['flash' => 'sylius.cart.remove_item']], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        6828 => [[['_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province::choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusShop/Common/Form/_province.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        6860 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
        6878 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
        6904 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        6920 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address::createAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6948 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address::updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        6973 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        6983 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address::deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        7004 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        7025 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7050 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user::changePasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7060 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
        7106 => [[['_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneBySlug', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7131 => [[['_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildren', 'arguments' => ['$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        7159 => [[['_route' => 'sylius_shop_partial_channel_menu_taxon_index', '_controller' => 'sylius.controller.taxon::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildrenByChannelMenuTaxon', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel().getMenuTaxon()', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        7185 => [[['_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order::widgetAction', '_sylius' => ['template' => '$template']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7203 => [[['_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item::addAction', '_sylius' => ['template' => '$template', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        7240 => [[['_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByChannel', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count']]]], ['_locale', 'count'], ['GET' => 0], null, false, true, null]],
        7260 => [[['_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7301 => [[['_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByProductId', 'arguments' => ['$productId', '!!int $count']]], 'count' => 3], ['_locale', 'productId', 'count'], ['GET' => 0], null, false, true, null]],
        7331 => [[['_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association::showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => ['expr:service(\'sylius.repository.product_association\')', 'findWithProductsWithinChannel'], 'arguments' => ['$id', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'productId', 'id'], ['GET' => 0], null, false, true, null]],
        7355 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security::loginAction', '_sylius' => ['template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7371 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security::checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7384 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7405 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7440 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
        7472 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user::requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7490 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user::resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        7509 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user::requestVerificationTokenAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7527 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user::verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        7557 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '@SyliusShop/Product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7577 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
        7590 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review::createAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7618 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7637 => [
            [['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order::summaryAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_shop_cart_save', '_controller' => 'sylius.controller.order::saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save']], ['_locale'], ['PUT' => 0, 'PATCH' => 1], null, true, false, null],
        ],
        7658 => [[['_route' => 'sylius_shop_cart_checkout', '_controller' => 'sylius.controller.order::saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_checkout_start', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => false]], ['_locale'], ['PATCH' => 0], null, false, false, null]],
        7682 => [[['_route' => 'sylius_shop_cart_item_remove', '_controller' => 'sylius.controller.order_item::removeAction', '_sylius' => ['flash' => 'sylius.cart.remove_item', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        7692 => [[['_route' => 'sylius_shop_cart_clear', '_controller' => 'sylius.controller.order::clearAction', '_sylius' => ['redirect' => 'sylius_shop_cart_summary']], ['_locale'], ['DELETE' => 0], null, true, false, null]],
        7712 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
        7732 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7757 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7774 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        7791 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact::requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        7820 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order::thankYouAction', '_sylius' => ['template' => '@SyliusShop/Order/thankYou.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7841 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum::prepareCaptureAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
        7860 => [[['_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum::afterCaptureAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7898 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        7922 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        7933 => [[['_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage::indexAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
        7973 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        7998 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        8032 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        8049 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
        8181 => [[['_route' => 'sylius_paypal_plugin_pay_with_paypal_form', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayWithPayPalFormAction'], ['_locale', 'orderToken', 'paymentId'], ['GET' => 0], null, false, true, null]],
        8237 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8253 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8277 => [[['_route' => 'sylius_paypal_plugin_payment_error', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayPalPaymentOnErrorAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8311 => [[['_route' => 'sylius_paypal_plugin_process_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\ProcessPayPalOrderAction'], ['_locale'], ['POST' => 0], null, true, false, null]],
        8359 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8392 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_cart', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromCartAction'], ['_locale', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8417 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_product', '_controller' => 'sylius.controller.order_item::createFromProductDetailsAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']]]], ['_locale', 'productId'], ['POST' => 0], null, false, true, null]],
        8464 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8489 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalPaymentAction'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        8522 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8556 => [[['_route' => 'sylius_paypal_plugin_cancel_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8572 => [[['_route' => 'sylius_paypal_plugin_cancel_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8598 => [[['_route' => 'sylius_paypal_plugin_cancel_checkout_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalCheckoutPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8632 => [[['_route' => 'sylius_paypal_plugin_update_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\UpdatePayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8658 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['template' => '@SyliusShop/Order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'options' => ['validation_groups' => ['sylius_order_pay']]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        8699 => [[['_route' => 'sylius_paypal_plugin_cancel_last_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelLastPayPalPaymentAction'], ['_locale', 'token'], ['GET' => 0], null, false, false, null]],
        8770 => [[['_route' => 'sylius_refund_complete_refund_payment', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Action\\Admin\\CompleteRefundPaymentAction'], ['orderNumber', 'id'], ['POST' => 0], null, false, false, null]],
        8784 => [[['_route' => 'sylius_refund_refund_units', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Action\\Admin\\RefundUnitsAction'], ['orderNumber'], null, null, false, false, null]],
        8842 => [[['_route' => 'payplug_sylius_oney_complete_info', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\CompleteInfoController'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8856 => [[['_route' => 'payplug_sylius_oney_simulation_popin', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OneySimulationPopin'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8888 => [[['_route' => 'payplug_sylius_oney_is_product_eligible', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OneyIsProductEligible'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8937 => [[['_route' => 'payplug_sylius_oneclick_verification', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OneClickAction'], ['_locale', 'payum_token'], ['GET' => 0], null, false, false, null]],
        8970 => [[['_route' => 'payplug_sylius_card_account_index', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\CardController::indexAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8995 => [[['_route' => 'payplug_sylius_card_account_delete', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\CardController::deleteAction'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        9045 => [[['_route' => 'payplug_shop_checkout_apple_prepare', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OrderController::initiateApplePaySessionAction', '_sylius' => ['flash' => false, 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'payplug.apple_pay_order.provider\').getCurrentCart()']]]], ['orderId'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        9074 => [[['_route' => 'payplug_shop_checkout_apple_confirm', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OrderController::confirmApplePayPaymentAction', '_sylius' => ['flash' => false, 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'payplug.apple_pay_order.provider\').getCurrentCart()']]]], ['orderId'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        9097 => [[['_route' => 'payplug_shop_checkout_apple_cancel', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\OrderController::cancelApplePaySessionAction', '_sylius' => ['flash' => false, 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'payplug.apple_pay_order.provider\').getCurrentCart()']]]], ['orderId'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        9158 => [
            [['_route' => 'payplug_sylius_integrated_payment_init', '_controller' => 'PayPlug\\SyliusPayPlugPlugin\\Controller\\IntegratedPaymentController::initPaymentAction'], ['_locale', 'paymentMethodId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
