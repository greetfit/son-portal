import { createRouter, createWebHistory, type RouteRecordRaw } from 'vue-router'
import pinia from '@/plugins/pinia'
import { useAuthStore } from '@/stores/auth'

const routes: RouteRecordRaw[] = [
  { path: '/sign-in', name: 'auth.sign-in', component: () => import('@/views/auth/sign-in.vue'), meta: { guestOnly: true } },
  { path: '/sign-up', name: 'auth.sign-up', component: () => import('@/views/auth/sign-up.vue'), meta: { guestOnly: true } },
  { path: '/loock-screen', name: 'lock-screen', component: () => import('@/views/auth/lock-screen.vue'), meta: { guestOnly: true } },
  { path: '/dashboards/analytics', name: 'dashboard.analytics', component: () => import('@/views/dashboards/analytics/index.vue'), meta: { guestOnly: true } },
  // { path: '/', name: 'home', component: () => import('@/views/Home.vue'), meta: { requiresAuth: true } },
  // { path: '/admin', name: 'admin', component: () => import('@/views/Admin.vue'), meta: { requiresAuth: true, roles: ['admin'] } },
  { path: '/403', name: 'forbidden', component: () => import('@/views/pages/error-404.vue') },
  { path: '/:pathMatch(.*)*', name: 'notfound', component: () => import('@/views/pages/error-404.vue') },

  { path: '/admin', name: 'admin', component: () => import('@/views/auth/lock-screen.vue'),
  meta: { requiresAuth: true, roles: ['admin','super_admin'] } }

  // only super admin can create users
  
]

const router = createRouter({ history: createWebHistory(), routes })

router.beforeEach(async (to) => {
  const auth = useAuthStore(pinia)
  await auth.bootstrap()

  // 1) Block protected routes when not authed
  if (to.meta.requiresAuth && !auth.isAuthed) {
    
    return { name: 'login', query: { redirect: to.fullPath } }
  }

  // 2) Keep authed users out of /login
  if (to.name === 'login' && auth.isAuthed) {
    const redirect = (to.query.redirect as string) || '/'
    return { path: redirect }
  }

  // 3) Roles check (only if roles meta is a non-empty array)
  const roles = Array.isArray(to.meta.roles) ? (to.meta.roles as string[]) : []
  if (roles.length && !auth.hasAnyRole(roles)) {
    return { name: 'forbidden' }
  }
})

export default router
