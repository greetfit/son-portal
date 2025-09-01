import type {MenuItemType} from '@/types/menu';

export const MENU_ITEMS: MenuItemType[] = [
    {
        key: 'menu',
        label: 'MENU',
        isTitle: true,
    },
    {
        key: 'dashboards',
        icon: 'ri-dashboard-2-line',
        label: 'Dashboards',
        children: [
            {
                key: 'dashboards-analytics',
                label: 'Analytics',
                route: {name: 'dashboards.analytics'},
                parentKey: 'dashboards'
            },
            {
                key: 'dashboards-agent',
                label: 'Agent',
                route: {name: 'dashboards.agent'},
                parentKey: 'dashboards'
            },
            {
                key: 'dashboards-customer',
                label: 'Customer',
                route: {name: 'dashboards.customer'},
                parentKey: 'dashboards'
            },
        ],
    },
    {
        key: 'property',
        icon: 'ri-community-line',
        label: 'Property',
        children: [
            {
                key: 'property-grid',
                label: 'Property Grid',
                route: {name: 'property.grid'},
                parentKey: 'property'
            },
            {
                key: 'property-list',
                label: 'Property List',
                route: {name: 'property.list'},
                parentKey: 'property'
            },
            {
                key: 'property-details',
                label: 'Property Details',
                route: {name: 'property.details', params: {id: '1001'}},
                parentKey: 'property'
            },
            {
                key: 'property-add',
                label: 'Add Property',
                route: {name: 'property.add'},
                parentKey: 'property'
            },
        ],
    },
    {
        key: 'hotels',
        icon: 'ri-community-line',
        label: 'Hotels',
        children: [
            {
                key: 'hotel',
                label: 'Add Hotel',
                route: {name: 'property.add-hotel'},
                parentKey: 'hotels'
            },
        ],
    },
    {
        key: 'agents',
        icon: 'ri-group-line',
        label: 'Agents',
        children: [
            {
                key: 'agents-list',
                label: 'List View',
                route: {name: 'agents.list'},
                parentKey: 'agents'
            },
            {
                key: 'agents-grid',
                label: 'Grid View',
                route: {name: 'agents.grid'},
                parentKey: 'agents'
            },
            {
                key: 'agents-details',
                label: 'Agent Details',
                route: {name: 'agent.details', params: {id: '1001'}},
                parentKey: 'agents'
            },
            {
                key: 'agents-add',
                label: 'Add Agent',
                route: {name: 'agent.add'},
                parentKey: 'agents'
            },
        ],
    },
    {
        key: 'customers',
        icon: 'ri-contacts-book-3-line',
        label: 'Customers',
        children: [
            {
                key: 'customers-list',
                label: 'List View',
                route: {name: 'customers.list'},
                parentKey: 'customers'
            },
            {
                key: 'customers-grid',
                label: 'Grid View',
                route: {name: 'customers.grid'},
                parentKey: 'customers'
            },
            {
                key: 'customers-details',
                label: 'Customer Details',
                route: {name: 'customer.details', params: {id: '1001'}},
                parentKey: 'customers'
            },
            {
                key: 'customer-add',
                label: 'Add Customer',
                route: {name: 'customer.add'},
                parentKey: 'customers'
            },
        ],
    },
    {
        key: 'orders',
        icon: 'ri-home-office-line',
        label: 'Orders',
        route: {name: 'orders.index'}
    },
    {
        key: 'transactions',
        icon: 'ri-arrow-left-right-line',
        label: 'Transactions',
        route: {name: 'transactions.index'}
    },
    {
        key: 'reviews',
        icon: 'ri-chat-quote-line',
        label: 'Reviews',
        route: {name: 'reviews.index'}
    },
    {
        key: 'messages',
        icon: 'ri-discuss-line',
        label: 'Messages',
        route: {name: 'messages.index'}
    },
    {
        key: 'inbox',
        icon: 'ri-inbox-line',
        label: 'Inbox',
        route: {name: 'inbox.index'}
    },
    {
        key: 'posts',
        icon: 'ri-news-line',
        label: 'Post',
        children: [
            {
                key: 'post-index',
                label: 'Post',
                route: {name: 'post.index'},
            },
            {
                key: 'post-details',
                label: 'Post Details',
                route: {name: 'post.details', params: {id: 1001}},
            },
            {
                key: 'post-create',
                label: 'Post Create',
                route: {name: 'post.create'},
            },
        ],
    },
    {
        key: 'custom',
        label: 'Custom',
        isTitle: true,
    },
    {
        key: 'pages',
        label: 'Pages',
        isTitle: false,
        icon: 'ri-pages-line',
        children: [
            {
                key: 'page-starter',
                label: 'Starter',
                route: {name: 'pages.starter'},
                parentKey: 'pages',
            },
            {
                key: 'page-calendar',
                label: 'Calendar',
                route: {name: 'pages.calendar'},
                parentKey: 'pages',
            },
            {
                key: 'page-invoice',
                label: 'Invoice',
                route: {name: 'pages.invoice'},
                parentKey: 'pages',
            },
            {
                key: 'page-faqs',
                label: 'FAQs',
                route: {name: 'pages.faqs'},
                parentKey: 'pages',
            },
            {
                key: 'page-coming-soon',
                label: 'Coming Soon',
                route: {name: 'pages.coming-soon'},
                parentKey: 'pages',
                target: '_blank',
            },
            {
                key: 'page-timeline',
                label: 'Timeline',
                route: {name: 'pages.timeline'},
                parentKey: 'pages',
            },
            {
                key: 'page-pricing',
                label: 'Pricing',
                route: {name: 'pages.pricing'},
                parentKey: 'pages',
            },
            {
                key: 'page-maintenance',
                label: 'Maintenance',
                route: {name: 'pages.maintenance'},
                parentKey: 'pages',
                target: '_blank',
            },
            {
                key: 'page-404-error',
                label: '404 Error',
                route: {name: 'error.404'},
                parentKey: 'pages',
                target: '_blank',
            },
            {
                key: 'page-error-404-alt',
                label: 'Error 404 Alt',
                route: {name: 'error.404-alt'},
                parentKey: 'pages',
            },
        ],
    },
    {
        key: 'page-authentication',
        label: 'Authentication',
        isTitle: false,
        icon: 'ri-lock-password-line',
        children: [
            {
                key: 'sign-in',
                label: 'Sign In',
                route: {name: 'auth.sign-in'},
                parentKey: 'page-authentication',
            },
            {
                key: 'signup',
                label: 'Sign Up',
                route: {name: 'auth.sign-up'},
                parentKey: 'page-authentication',
            },
            {
                key: 'reset-pass',
                label: 'Reset Password',
                route: {name: 'auth.reset-password'},
                parentKey: 'page-authentication',
            },
            {
                key: 'lock-screen',
                label: 'Lock Screen',
                route: {name: 'auth.lock-screen'},
                parentKey: 'page-authentication',
            },
        ],
    },
    {
        key: 'widgets',
        icon: 'ri-shapes-line',
        label: 'Widgets',
        badge: {
            text: 'Hot',
            variant: 'danger',
        },
        route: {name: 'widgets'}
    },
    {
        key: 'layouts',
        label: 'Layouts',
        isTitle: false,
        icon: 'ri-layout-line',
        children: [
            {
                key: 'dark-sidenav',
                label: 'Dark Sidenav',
                route: {name: 'layouts.dark-sidenav'},
                parentKey: 'layouts',
            },
            {
                key: 'dark-topbar',
                label: 'Dark Topbar',
                route: {name: 'layouts.dark-topbar'},
                parentKey: 'layouts',
            },
            {
                key: 'simple-sidenav',
                label: 'Simple Sidenav',
                route: {name: 'layouts.simple-sidenav'},
                parentKey: 'layouts',
            },
            {
                key: 'small-sidenav',
                label: 'Small Sidenav',
                route: {name: 'layouts.small-sidenav'},
                parentKey: 'layouts',
            },
            {
                key: 'small-hover',
                label: 'Small Hover',
                route: {name: 'layouts.small-hover'},
                parentKey: 'layouts',
            },
            {
                key: 'small-hover-active',
                label: 'Small Hover Active',
                route: {name: 'layouts.small-hover-active'},
                parentKey: 'layouts',
            },
            {
                key: 'hidden-sidenav',
                label: 'Hidden Sidenav',
                route: {name: 'layouts.hidden-sidenav'},
                parentKey: 'layouts',
            },
            {
                key: 'dark-mode',
                label: 'Dark Mode',
                route: {name: 'layouts.dark-mode'},
                badge: {
                    text: 'Hot',
                    variant: 'success'
                },
                parentKey: 'layouts',
            },
        ],
    },
    {
        key: 'components',
        label: 'COMPONENTS',
        isTitle: true,
    },
    {
        key: 'base-ui',
        icon: 'ri-contrast-drop-line',
        label: 'Base UI',
        children: [
            {
                key: 'base-ui-accordions',
                label: 'Accordions',
                route: {name: 'ui.accordions'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-alerts',
                label: 'Alerts',
                route: {name: 'ui.alerts'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-avatars',
                label: 'Avatars',
                route: {name: 'ui.avatars'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-badges',
                label: 'Badges',
                route: {name: 'ui.badges'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-breadcrumb',
                label: 'Breadcrumb',
                route: {name: 'ui.breadcrumb'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-buttons',
                label: 'Buttons',
                route: {name: 'ui.buttons'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-cards',
                label: 'Cards',
                route: {name: 'ui.cards'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-carousel',
                label: 'Carousel',
                route: {name: 'ui.carousel'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-collapse',
                label: 'Collapse',
                route: {name: 'ui.collapse'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-dropdowns',
                label: 'Dropdowns',
                route: {name: 'ui.dropdowns'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-list-group',
                label: 'List Group',
                route: {name: 'ui.list-group'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-modals',
                label: 'Modals',
                route: {name: 'ui.modals'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-tabs',
                label: 'Tabs',
                route: {name: 'ui.tabs'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-offcanvas',
                label: 'Offcanvas',
                route: {name: 'ui.offcanvas'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-pagination',
                label: 'Pagination',
                route: {name: 'ui.pagination'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-placeholders',
                label: 'Placeholders',
                route: {name: 'ui.placeholders'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-popovers',
                label: 'Popovers',
                route: {name: 'ui.popovers'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-progress',
                label: 'Progress',
                route: {name: 'ui.progress'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-spinners',
                label: 'Spinners',
                route: {name: 'ui.spinners'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-toasts',
                label: 'Toasts',
                route: {name: 'ui.toasts'},
                parentKey: 'base-ui',
            },
            {
                key: 'base-ui-tooltips',
                label: 'Tooltips',
                route: {name: 'ui.tooltips'},
                parentKey: 'base-ui',
            },
        ],
    },
    {
        key: 'advanced-ui',
        icon: 'ri-briefcase-line',
        label: 'Advanced UI',
        children: [
            {
                key: 'advanced-ui-ratings',
                label: 'Ratings',
                route: {name: 'advanced.ratings'},
                parentKey: 'advanced-ui',
            },
            {
                key: 'advanced-ui-sweet-alert',
                label: 'Sweet Alert',
                route: {name: 'advanced.alert'},
                parentKey: 'advanced-ui',
            },
            {
                key: 'advanced-ui-swiper-slider',
                label: 'Swiper Slider',
                route: {name: 'advanced.swiper'},
                parentKey: 'advanced-ui',
            },
            {
                key: 'advanced-ui-scrollbar',
                label: 'Scrollbar',
                route: {name: 'advanced.scrollbar'},
                parentKey: 'advanced-ui',
            },
            {
                key: 'advanced-ui-toastify',
                label: 'Toastify',
                route: {name: 'advanced.toastify'},
                parentKey: 'advanced-ui',
            },
        ],
    },
    {
        key: 'charts',
        icon: 'ri-bar-chart-line',
        label: 'Charts',
        children: [
            {
                key: 'charts-area',
                label: 'Area',
                route: {name: 'charts.area'},
                parentKey: 'charts',
            },
            {
                key: 'charts-bar',
                label: 'Bar',
                route: {name: 'charts.bar'},
                parentKey: 'charts',
            },
            {
                key: 'charts-bubble',
                label: 'Bubble',
                route: {name: 'charts.bubble'},
                parentKey: 'charts',
            },
            {
                key: 'charts-candle-stick',
                label: 'Candle Stick',
                route: {name: 'charts.candlestick'},
                parentKey: 'charts',
            },
            {
                key: 'charts-column',
                label: 'Column',
                route: {name: 'charts.column'},
                parentKey: 'charts',
            },
            {
                key: 'charts-heatmap',
                label: 'Heatmap',
                route: {name: 'charts.heatmap'},
                parentKey: 'charts',
            },
            {
                key: 'charts-line',
                label: 'Line',
                route: {name: 'charts.line'},
                parentKey: 'charts',
            },
            {
                key: 'charts-mixed',
                label: 'Mixed',
                route: {name: 'charts.mixed'},
                parentKey: 'charts',
            },
            {
                key: 'charts-timeline',
                label: 'Timeline',
                route: {name: 'charts.timeline'},
                parentKey: 'charts',
            },
            {
                key: 'charts-boxplot',
                label: 'Boxplot',
                route: {name: 'charts.boxplot'},
                parentKey: 'charts',
            },
            {
                key: 'charts-treemap',
                label: 'Treemap',
                route: {name: 'charts.treemap'},
                parentKey: 'charts',
            },
            {
                key: 'charts-pie',
                label: 'Pie',
                route: {name: 'charts.pie'},
                parentKey: 'charts',
            },
            {
                key: 'charts-radar',
                label: 'Radar',
                route: {name: 'charts.radar'},
                parentKey: 'charts',
            },
            {
                key: 'charts-radial-bar',
                label: 'Radial Bar',
                route: {name: 'charts.radial-bar'},
                parentKey: 'charts',
            },
            {
                key: 'charts-scatter',
                label: 'Scatter',
                route: {name: 'charts.scatter'},
                parentKey: 'charts',
            },
            {
                key: 'charts-polar-area',
                label: 'Polar Area',
                route: {name: 'charts.polar'},
                parentKey: 'charts',
            },
        ],
    },
    {
        key: 'forms',
        icon: 'ri-survey-line',
        label: 'Forms',
        children: [
            {
                key: 'forms-basic-elements',
                label: 'Basic Elements',
                route: {name: 'forms.basic'},
                parentKey: 'forms',
            },
            {
                key: 'forms-checkbox&radio',
                label: 'Checkbox & Radio',
                route: {name: 'forms.checkbox'},
                parentKey: 'forms',
            },
            {
                key: 'forms-choice-select',
                label: 'Choice Select',
                route: {name: 'forms.select'},
                parentKey: 'forms',
            },
            {
                key: 'forms-clipboard',
                label: 'Clipboard',
                route: {name: 'forms.clipboard'},
                parentKey: 'forms',
            },
            {
                key: 'forms-flat-picker',
                label: 'Flat Picker',
                route: {name: 'forms.flat-picker'},
                parentKey: 'forms',
            },
            {
                key: 'forms-validation',
                label: 'Validation',
                route: {name: 'forms.validation'},
                parentKey: 'forms',
            },
            {
                key: 'forms-wizard',
                label: 'Wizard',
                route: {name: 'forms.wizard'},
                parentKey: 'forms',
            },
            {
                key: 'forms-file-uploads',
                label: 'File Uploads',
                route: {name: 'forms.file-uploads'},
                parentKey: 'forms',
            },
            {
                key: 'forms-editors',
                label: 'Editors',
                route: {name: 'forms.editors'},
                parentKey: 'forms',
            },
            {
                key: 'forms-input-mask',
                label: 'Input Mask',
                route: {name: 'forms.input-mask'},
                parentKey: 'forms',
            },
            {
                key: 'forms-slider',
                label: 'Slider',
                route: {name: 'forms.slider'},
                parentKey: 'forms',
            },
        ],
    },
    {
        key: 'tables',
        icon: 'ri-table-line',
        label: 'Tables',
        children: [
            {
                key: 'tables-basic',
                label: 'Basic Tables',
                route: {name: 'tables.basic'},
                parentKey: 'tables',
            },
            {
                key: 'tables-grid-js',
                label: 'Grid JS',
                route: {name: 'tables.gridjs'},
                parentKey: 'tables',
            },
        ],
    },
    {
        key: 'icons',
        icon: 'ri-pencil-ruler-2-line',
        label: 'Icons',
        children: [
            {
                key: 'icons-remix',
                label: 'Remix Icons',
                route: {name: 'icons.remix'},
                parentKey: 'icons',
            },
            {
                key: 'icons-iconamoon',
                label: 'Solar Icons',
                route: {name: 'icons.solar'},
                parentKey: 'icons',
            },
        ],
    },
    {
        key: 'maps',
        icon: 'ri-road-map-line',
        label: 'Maps',
        children: [
            {
                key: 'maps-google',
                label: 'Google Maps',
                route: {name: 'maps.google'},
                parentKey: 'maps',
            },
            {
                key: 'maps-vector',
                label: 'Vector Maps',
                route: {name: 'maps.vector'},
                parentKey: 'maps',
            },
        ],
    },
    {
        key: 'style',
        label: 'STYLE',
        isTitle: true,
    },
    {
        key: 'badge-menu',
        icon: 'ri-shield-star-line',
        label: 'Badge Menu',
        badge: {
            text: '1',
            variant: 'primary',
        },
    },
    {
        key: 'menuitem',
        icon: 'ri-share-line',
        label: 'Menu Item',
        children: [
            {
                key: 'menu-item-1',
                label: 'Menu Item 1',
                parentKey: 'menuitem',
            },
            {
                key: 'menu-item-2',
                label: 'Menu Item 2',
                parentKey: 'menuitem',
                children: [
                    {
                        key: 'menu-sub-item',
                        label: 'Menu Sub Item',
                        parentKey: 'menu-item-2',
                    },
                ],
            },
        ],
    },
    {
        key: 'disabled-item',
        icon: 'ri-prohibited-2-line',
        label: 'Disabled Item',
    },
];
