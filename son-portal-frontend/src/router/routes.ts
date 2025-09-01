const setTitle = (title: string) => {
    return title ? `${title} | Lahomes Vue - Responsive Admin Dashboard Template` : 'Lahomes Vue - Responsive Admin Dashboard Template';
};

const authRoutes = [
    {
        path: '/auth/sign-in',
        name: 'auth.sign-in',
        meta: {
            title: setTitle('Sign In')
        },
        component: () => import('@/views/auth/sign-in.vue')
    },
    {
        path: '/auth/sign-up',
        name: 'auth.sign-up',
        meta: {
            title: setTitle('Sign Up')
        },
        component: () => import('@/views/auth/sign-up.vue')
    },
    {
        path: '/auth/reset-password',
        name: 'auth.reset-password',
        meta: {
            title: setTitle('Reset Password')
        },
        component: () => import('@/views/auth/reset-password.vue')
    },
    {
        path: '/auth/lock-screen',
        name: 'auth.lock-screen',
        meta: {
            title: setTitle('Lock Screen')
        },
        component: () => import('@/views/auth/lock-screen.vue')
    }
];

const errorRoutes = [
    {
        path: '/404',
        name: 'error.404',
        meta: {
            title: setTitle('Error 404')
        },
        component: () => import('@/views/pages/error-404.vue')
    },
    {
        path: '/404-alt',
        name: 'error.404-alt',
        meta: {
            title: setTitle('Error 404 Alt')
        },
        component: () => import('@/views/pages/error-404-alt.vue')
    },
    {
        path: '/:catchAll(.*)',
        redirect: '404'
    }
];

const dashboardRoutes = [
    {
        path: '/',
        name: 'dashboards.analytics',
        meta: {
            title: setTitle('Analytics'),
            authRequired: true
        },
        component: () => import('@/views/dashboards/analytics/index.vue'),
    },
    {
        path: '/dashboard/agent',
        name: 'dashboards.agent',
        meta: {
            title: setTitle('Agent'),
            authRequired: true
        },
        component: () => import('@/views/dashboards/agent/index.vue'),
    },
    {
        path: '/dashboard/customer',
        name: 'dashboards.customer',
        meta: {
            title: setTitle('Customer'),
            authRequired: true
        },
        component: () => import('@/views/dashboards/customer/index.vue'),
    }
];

const propertyRoutes = [
    {
        path: '/property/grid',
        name: 'property.grid',
        meta: {
            title: setTitle('Property Grid'),
            authRequired: true
        },
        component: () => import('@/views/property/grid/index.vue'),
    },
    {
        path: '/property/list',
        name: 'property.list',
        meta: {
            title: setTitle('Property List'),
            authRequired: true
        },
        component: () => import('@/views/property/list/index.vue'),
    },
    {
        path: '/property/:id',
        name: 'property.details',
        params: { id: '1001' },
        meta: {
            title: setTitle('Property Overview'),
            authRequired: true
        },
        component: () => import('@/views/property/[id]/index.vue'),
    },
    {
        path: '/property/add',
        name: 'property.add',
        meta: {
            title: setTitle('Add Property'),
            authRequired: true
        },
        component: () => import('@/views/property/create/index.vue'),
    },
];
const hotels = [
    {
        path: '/property/hotel',
        name: 'property.add-hotel',
        meta: {
            title: setTitle('Hotels'),
            authRequired: true
        },
        component: () => import('@/views/property/hotels/add-hotel.vue'),
    },

];

const agentsRoutes = [
    {
        path: '/agents/list',
        name: 'agents.list',
        meta: {
            title: setTitle('Agents List'),
            authRequired: true
        },
        component: () => import('@/views/agents/list/index.vue'),
    },
    {
        path: '/agents/grid',
        name: 'agents.grid',
        meta: {
            title: setTitle('Agents Grid'),
            authRequired: true
        },
        component: () => import('@/views/agents/grid/index.vue'),
    },
    {
        path: '/agent/:id',
        name: 'agent.details',
        params: { id: '1001' },
        meta: {
            title: setTitle('Agents Overview'),
            authRequired: true
        },
        component: () => import('@/views/agents/[id]/index.vue'),
    },
    {
        path: '/agent/add',
        name: 'agent.add',
        meta: {
            title: setTitle('Add Agents'),
            authRequired: true
        },
        component: () => import('@/views/agents/create/index.vue'),
    },
];

const customersRoutes = [
    {
        path: '/customers/list',
        name: 'customers.list',
        meta: {
            title: setTitle('Customers List'),
            authRequired: true
        },
        component: () => import('@/views/customers/list/index.vue'),
    },
    {
        path: '/customers/grid',
        name: 'customers.grid',
        meta: {
            title: setTitle('Customers Grid'),
            authRequired: true
        },
        component: () => import('@/views/customers/grid/index.vue'),
    },
    {
        path: '/customer/:id',
        name: 'customer.details',
        params: { id: '1001' },
        meta: {
            title: setTitle('Customers Overview'),
            authRequired: true
        },
        component: () => import('@/views/customers/[id]/index.vue'),
    },
    {
        path: '/customer/add',
        name: 'customer.add',
        meta: {
            title: setTitle('Add Customers'),
            authRequired: true
        },
        component: () => import('@/views/customers/create/index.vue'),
    },
];

const appsRoutes = [
    {
        path: '/orders',
        name: 'orders.index',
        meta: {
            title: setTitle('Transactions'),
            authRequired: true
        },
        component: () => import('@/views/orders/index.vue'),
    },
    {
        path: '/transactions',
        name: 'transactions.index',
        meta: {
            title: setTitle('Transactions'),
            authRequired: true
        },
        component: () => import('@/views/transactions/index.vue'),
    },
    {
        path: '/reviews',
        name: 'reviews.index',
        meta: {
            title: setTitle('Messages'),
            authRequired: true
        },
        component: () => import('@/views/reviews/index.vue'),
    },
    {
        path: '/messages',
        name: 'messages.index',
        meta: {
            title: setTitle('Messages'),
            authRequired: true
        },
        component: () => import('@/views/messages/index.vue'),
    },
    {
        path: '/inbox',
        name: 'inbox.index',
        meta: {
            title: setTitle('Inbox'),
            authRequired: true
        },
        component: () => import('@/views/inbox/index.vue'),
    },
    {
        path: '/post',
        name: 'post.index',
        meta: {
            title: setTitle('Blog Grid'),
            authRequired: true
        },
        component: () => import('@/views/post/index.vue'),
    },
    {
        path: '/post/:id',
        params: { id: '1001' },
        name: 'post.details',
        meta: {
            title: setTitle('Blog Details'),
            authRequired: true
        },
        component: () => import('@/views/post/[id]/index.vue'),
    },
    {
        path: '/post/create',
        name: 'post.create',
        meta: {
            title: setTitle('Blog Create'),
            authRequired: true
        },
        component: () => import('@/views/post/create/index.vue'),
    },
];

const pagesRoutes = [
    {
        path: '/pages/starter',
        name: 'pages.starter',
        meta: {
            title: setTitle('Welcome'),
            authRequired: true
        },
        component: () => import('@/views/pages/starter.vue'),
    },
    {
        path: '/pages/calendar',
        name: 'pages.calendar',
        meta: {
            title: setTitle('Calendar'),
            authRequired: true
        },
        component: () => import('@/views/pages/calendar/index.vue'),
    },
    {
        path: '/pages/invoice',
        name: 'pages.invoice',
        meta: {
            title: setTitle('Invoice'),
            authRequired: true
        },
        component: () => import('@/views/pages/invoice.vue'),
    },
    {
        path: '/pages/faqs',
        name: 'pages.faqs',
        meta: {
            title: setTitle('FAQs'),
            authRequired: true
        },
        component: () => import('@/views/pages/faqs.vue'),
    },
    {
        path: '/pages/coming-soon',
        name: 'pages.coming-soon',
        meta: {
            title: setTitle('Coming Soon'),
            authRequired: true
        },
        component: () => import('@/views/pages/coming-soon.vue'),
    },
    {
        path: '/pages/timeline',
        name: 'pages.timeline',
        meta: {
            title: setTitle('Timeline'),
            authRequired: true
        },
        component: () => import('@/views/pages/timeline.vue'),
    },
    {
        path: '/pages/pricing',
        name: 'pages.pricing',
        meta: {
            title: setTitle('Pricing'),
            authRequired: true
        },
        component: () => import('@/views/pages/pricing.vue')
    },
    {
        path: '/pages/maintenance',
        name: 'pages.maintenance',
        meta: {
            title: setTitle('Maintenance'),
            authRequired: true
        },
        component: () => import('@/views/pages/maintenance.vue')
    },
    {
        path: '/widgets',
        name: 'widgets',
        meta: {
            title: setTitle('Widgets'),
            authRequired: true
        },
        component: () => import('@/views/widgets/index.vue')
    },
];

const layoutRoutes = [
    {
        path: '/layouts/dark-sidenav',
        name: 'layouts.dark-sidenav',
        meta: {
            title: setTitle('Dark Sidenav'),
            authRequired: true
        },
        component: () => import('@/views/layouts/dark-sidenav.vue')
    },
    {
        path: '/layouts/dark-topbar',
        name: 'layouts.dark-topbar',
        meta: {
            title: setTitle('Dark Topbar'),
            authRequired: true
        },
        component: () => import('@/views/layouts/dark-topbar.vue')
    },
    {
        path: '/layouts/simple-sidenav',
        name: 'layouts.simple-sidenav',
        meta: {
            title: setTitle('Simple Sidenav'),
            authRequired: true
        },
        component: () => import('@/views/layouts/simple-sidenav.vue')
    },
    {
        path: '/layouts/small-sidenav',
        name: 'layouts.small-sidenav',
        meta: {
            title: setTitle('Small Sidenav'),
            authRequired: true
        },
        component: () => import('@/views/layouts/small-sidenav.vue')
    },
    {
        path: '/layouts/small-hover-active',
        name: 'layouts.small-hover-active',
        meta: {
            title: setTitle('Small Hover Active'),
            authRequired: true
        },
        component: () => import('@/views/layouts/small-hover-active.vue')
    },
    {
        path: '/layouts/small-hover',
        name: 'layouts.small-hover',
        meta: {
            title: setTitle('Small Hover'),
            authRequired: true
        },
        component: () => import('@/views/layouts/small-hover.vue')
    },
    {
        path: '/layouts/hidden-sidenav',
        name: 'layouts.hidden-sidenav',
        meta: {
            title: setTitle('Hidden Sidenav'),
            authRequired: true
        },
        component: () => import('@/views/layouts/hidden-sidenav.vue')
    },
    {
        path: '/layouts/dark-mode',
        name: 'layouts.dark-mode',
        meta: {
            title: setTitle('Dark Mode'),
            authRequired: true
        },
        component: () => import('@/views/layouts/dark-mode.vue')
    },
];

const uiRoutes = [
    {
        path: '/ui/accordions',
        name: 'ui.accordions',
        meta: {
            title: setTitle('Accordions'),
            authRequired: true
        },
        component: () => import('@/views/ui/accordions.vue')
    },
    {
        path: '/ui/alerts',
        name: 'ui.alerts',
        meta: {
            title: setTitle('Alerts'),
            authRequired: true
        },
        component: () => import('@/views/ui/alerts.vue')
    },
    {
        path: '/ui/avatars',
        name: 'ui.avatars',
        meta: {
            title: setTitle('Avatars'),
            authRequired: true
        },
        component: () => import('@/views/ui/avatars.vue')
    },
    {
        path: '/ui/badges',
        name: 'ui.badges',
        meta: {
            title: setTitle('Badges'),
            authRequired: true
        },
        component: () => import('@/views/ui/badges.vue')
    },
    {
        path: '/ui/breadcrumb',
        name: 'ui.breadcrumb',
        meta: {
            title: setTitle('Breadcrumb'),
            authRequired: true
        },
        component: () => import('@/views/ui/breadcrumb.vue')
    },
    {
        path: '/ui/buttons',
        name: 'ui.buttons',
        meta: {
            title: setTitle('Buttons'),
            authRequired: true
        },
        component: () => import('@/views/ui/buttons.vue')
    },
    {
        path: '/ui/cards',
        name: 'ui.cards',
        meta: {
            title: setTitle('Cards'),
            authRequired: true
        },
        component: () => import('@/views/ui/cards.vue')
    },
    {
        path: '/ui/carousel',
        name: 'ui.carousel',
        meta: {
            title: setTitle('Carousel'),
            authRequired: true
        },
        component: () => import('@/views/ui/carousel.vue')
    },
    {
        path: '/ui/collapse',
        name: 'ui.collapse',
        meta: {
            title: setTitle('Collapse'),
            authRequired: true
        },
        component: () => import('@/views/ui/collapse.vue')
    },
    {
        path: '/ui/dropdowns',
        name: 'ui.dropdowns',
        meta: {
            title: setTitle('Dropdowns'),
            authRequired: true
        },
        component: () => import('@/views/ui/dropdowns.vue')
    },
    {
        path: '/ui/list-group',
        name: 'ui.list-group',
        meta: {
            title: setTitle('List Group'),
            authRequired: true
        },
        component: () => import('@/views/ui/list-group.vue')
    },
    {
        path: '/ui/modals',
        name: 'ui.modals',
        meta: {
            title: setTitle('Modals'),
            authRequired: true
        },
        component: () => import('@/views/ui/modals.vue')
    },
    {
        path: '/ui/offcanvas',
        name: 'ui.offcanvas',
        meta: {
            title: setTitle('Offcanvas'),
            authRequired: true
        },
        component: () => import('@/views/ui/offcanvas.vue')
    },
    {
        path: '/ui/pagination',
        name: 'ui.pagination',
        meta: {
            title: setTitle('Pagination'),
            authRequired: true
        },
        component: () => import('@/views/ui/pagination.vue')
    },
    {
        path: '/ui/placeholders',
        name: 'ui.placeholders',
        meta: {
            title: setTitle('Placeholders'),
            authRequired: true
        },
        component: () => import('@/views/ui/placeholders.vue')
    },
    {
        path: '/ui/popovers',
        name: 'ui.popovers',
        meta: {
            title: setTitle('Popovers'),
            authRequired: true
        },
        component: () => import('@/views/ui/popovers.vue')
    },
    {
        path: '/ui/progress',
        name: 'ui.progress',
        meta: {
            title: setTitle('Progress'),
            authRequired: true
        },
        component: () => import('@/views/ui/progress.vue')
    },
    {
        path: '/ui/scrollspy',
        name: 'ui.scrollspy',
        meta: {
            title: setTitle('Scrollspy'),
            authRequired: true
        },
        component: () => import('@/views/ui/scrollspy.vue')
    },
    {
        path: '/ui/spinners',
        name: 'ui.spinners',
        meta: {
            title: setTitle('Spinners'),
            authRequired: true
        },
        component: () => import('@/views/ui/spinners.vue')
    },
    {
        path: '/ui/tabs',
        name: 'ui.tabs',
        meta: {
            title: setTitle('Tabs'),
            authRequired: true
        },
        component: () => import('@/views/ui/tabs.vue')
    },
    {
        path: '/ui/toasts',
        name: 'ui.toasts',
        meta: {
            title: setTitle('Toasts'),
            authRequired: true
        },
        component: () => import('@/views/ui/toasts.vue')
    },
    {
        path: '/ui/tooltips',
        name: 'ui.tooltips',
        meta: {
            title: setTitle('Tooltips'),
            authRequired: true
        },
        component: () => import('@/views/ui/tooltips.vue')
    }
];

const advancedUIRoutes = [
    {
        path: '/advanced/ratings',
        name: 'advanced.ratings',
        meta: {
            title: setTitle('Ratings'),
            authRequired: true
        },
        component: () => import('@/views/advanced/ratings/index.vue')
    },
    {
        path: '/advanced/alert',
        name: 'advanced.alert',
        meta: {
            title: setTitle('Sweet Alert'),
            authRequired: true
        },
        component: () => import('@/views/advanced/alert/index.vue')
    },
    {
        path: '/advanced/swiper',
        name: 'advanced.swiper',
        meta: {
            title: setTitle('Swiper'),
            authRequired: true
        },
        component: () => import('@/views/advanced/swiper/index.vue')
    },
    {
        path: '/advanced/scrollbar',
        name: 'advanced.scrollbar',
        meta: {
            title: setTitle('Scrollbar'),
            authRequired: true
        },
        component: () => import('@/views/advanced/scrollbar/index.vue')
    },
    {
        path: '/advanced/toastify',
        name: 'advanced.toastify',
        meta: {
            title: setTitle('Toastify'),
            authRequired: true
        },
        component: () => import('@/views/advanced/toastify/index.vue')
    }
];

const chartsRoutes = [
    {
        path: '/charts/area',
        name: 'charts.area',
        meta: {
            title: setTitle('Apex Area Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/area/index.vue')
    },
    {
        path: '/charts/bar',
        name: 'charts.bar',
        meta: {
            title: setTitle('Apex Bar Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/bar/index.vue')
    },
    {
        path: '/charts/boxplot',
        name: 'charts.boxplot',
        meta: {
            title: setTitle('Apex Boxplot Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/boxplot/index.vue')
    },
    {
        path: '/charts/bubble',
        name: 'charts.bubble',
        meta: {
            title: setTitle('Apex Bubble Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/bubble/index.vue')
    },
    {
        path: '/charts/candlestick',
        name: 'charts.candlestick',
        meta: {
            title: setTitle('Apex Candlestick Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/candlestick/index.vue')
    },
    {
        path: '/charts/column',
        name: 'charts.column',
        meta: {
            title: setTitle('Apex Column Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/column/index.vue')
    },
    {
        path: '/charts/heatmap',
        name: 'charts.heatmap',
        meta: {
            title: setTitle('Apex Heatmap Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/heatmap/index.vue')
    },
    {
        path: '/charts/line',
        name: 'charts.line',
        meta: {
            title: setTitle('Apex Line Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/line/index.vue')
    },
    {
        path: '/charts/mixed',
        name: 'charts.mixed',
        meta: {
            title: setTitle('Apex Mixed Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/mixed/index.vue')
    },
    {
        path: '/charts/pie',
        name: 'charts.pie',
        meta: {
            title: setTitle('Apex Pie Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/pie/index.vue')
    },
    {
        path: '/charts/polar',
        name: 'charts.polar',
        meta: {
            title: setTitle('Apex Polar Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/polar/index.vue')
    },
    {
        path: '/charts/radar',
        name: 'charts.radar',
        meta: {
            title: setTitle('Apex Radar Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/radar/index.vue')
    },
    {
        path: '/charts/radial-bar',
        name: 'charts.radial-bar',
        meta: {
            title: setTitle('Apex Radial Bar Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/radial-bar/index.vue')
    },
    {
        path: '/charts/scatter',
        name: 'charts.scatter',
        meta: {
            title: setTitle('Apex Scatter Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/scatter/index.vue')
    },
    {
        path: '/charts/timeline',
        name: 'charts.timeline',
        meta: {
            title: setTitle('Apex Timeline Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/timeline/index.vue')
    },
    {
        path: '/charts/treemap',
        name: 'charts.treemap',
        meta: {
            title: setTitle('Apex Treemap Chart'),
            authRequired: true
        },
        component: () => import('@/views/charts/treemap/index.vue')
    }
];

const formRoutes = [
    {
        path: '/forms/basic',
        name: 'forms.basic',
        meta: {
            title: setTitle('Form Basic'),
            authRequired: true
        },
        component: () => import('@/views/forms/basic.vue')
    },
    {
        path: '/forms/checkbox',
        name: 'forms.checkbox',
        meta: {
            title: setTitle('Form Checkbox'),
            authRequired: true
        },
        component: () => import('@/views/forms/checkbox.vue')
    },
    {
        path: '/forms/select',
        name: 'forms.select',
        meta: {
            title: setTitle('Choice Select'),
            authRequired: true
        },
        component: () => import('@/views/forms/select.vue')
    },
    {
        path: '/forms/clipboard',
        name: 'forms.clipboard',
        meta: {
            title: setTitle('Clipboard'),
            authRequired: true
        },
        component: () => import('@/views/forms/clipboard.vue')
    },
    {
        path: '/forms/flat-picker',
        name: 'forms.flat-picker',
        meta: {
            title: setTitle('Flat Picker'),
            authRequired: true
        },
        component: () => import('@/views/forms/flat-picker.vue')
    },
    {
        path: '/forms/validation',
        name: 'forms.validation',
        meta: {
            title: setTitle('Validation'),
            authRequired: true
        },
        component: () => import('@/views/forms/validation/index.vue')
    },
    {
        path: '/forms/wizard',
        name: 'forms.wizard',
        meta: {
            title: setTitle('Wizard'),
            authRequired: true
        },
        component: () => import('@/views/forms/wizard.vue')
    },
    {
        path: '/forms/file-uploads',
        name: 'forms.file-uploads',
        meta: {
            title: setTitle('File Uploads'),
            authRequired: true
        },
        component: () => import('@/views/forms/file-uploads.vue')
    },
    {
        path: '/forms/editors',
        name: 'forms.editors',
        meta: {
            title: setTitle('Editors'),
            authRequired: true
        },
        component: () => import('@/views/forms/editors.vue')
    },
    {
        path: '/forms/input-mask',
        name: 'forms.input-mask',
        meta: {
            title: setTitle('Input Mask'),
            authRequired: true
        },
        component: () => import('@/views/forms/input-mask.vue')
    },
    {
        path: '/forms/slider',
        name: 'forms.slider',
        meta: {
            title: setTitle('Slider'),
            authRequired: true
        },
        component: () => import('@/views/forms/slider.vue')
    }
];

const tablesRoutes = [
    {
        path: '/tables/basic',
        name: 'tables.basic',
        meta: {
            title: setTitle('Tables Basic'),
            authRequired: true
        },
        component: () => import('@/views/tables/basic.vue')
    },
    {
        path: '/tables/gridjs',
        name: 'tables.gridjs',
        meta: {
            title: setTitle('Tables Grid Js'),
            authRequired: true
        },
        component: () => import('@/views/tables/gridjs/index.vue')
    }
];

const iconsRoutes = [
    {
        path: '/icons/remix',
        name: 'icons.remix',
        meta: {
            title: setTitle('Remix Icons'),
            authRequired: true
        },
        component: () => import('@/views/icons/remix.vue')
    },
    {
        path: '/icons/solar',
        name: 'icons.solar',
        meta: {
            title: setTitle('Solar Icons'),
            authRequired: true
        },
        component: () => import('@/views/icons/solar.vue')
    }
];

const mapsRoutes = [
    {
        path: '/maps/google',
        name: 'maps.google',
        meta: {
            title: setTitle('Google Map'),
            authRequired: true
        },
        component: () => import('@/views/maps/google.vue')
    },
    {
        path: '/maps/vector',
        name: 'maps.vector',
        meta: {
            title: setTitle('Vector Map'),
            authRequired: true
        },
        component: () => import('@/views/maps/vector.vue')
    }
];

export const allRoutes = [...authRoutes, ...errorRoutes, ...dashboardRoutes, ...propertyRoutes, ...agentsRoutes, ...customersRoutes, ...appsRoutes, ...pagesRoutes, ...uiRoutes, ...advancedUIRoutes, ...chartsRoutes, ...formRoutes, ...tablesRoutes, ...iconsRoutes, ...mapsRoutes, ...layoutRoutes,...hotels];
