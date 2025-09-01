import type {NotificationType} from '@/layouts/partials/types'
import type {MenuItemType} from '@/types/menu'

import avatar1 from '@/assets/images/users/avatar-1.jpg'
import avatar3 from '@/assets/images/users/avatar-3.jpg'
import avatar5 from '@/assets/images/users/avatar-5.jpg'

export const notifications: NotificationType[] = [
    {
        user: {avatar: avatar1},
        content: 'Josephine Thompson commented on admin panel "Wow 😍! this admin looks good and awesome design"'
    },
    {
        user: {name: 'Donoghue Susan'},
        message: 'Hi, How are you? What about our next meeting'
    },
    {
        user: {name: 'Jacob Gines', avatar: avatar3},
        message: "Answered to your comment on the cash flow forecast's graph 🔔."
    },
    {
        icon: 'iconamoon:comment-dots-duotone',
        title: 'You have received 20 new messages in the conversation'
    },
    {
        user: {name: 'Shawn Bunch', avatar: avatar5},
        content: 'Commented on Admin'
    }
]

export const profileMenuItems: MenuItemType[] = [
    {
        key: 'schedules',
        label: 'My Schedules',
        icon: 'solar:calendar-broken',
        route: {name: ''}
    },
    {
        key: 'pricing',
        label: 'Pricing',
        icon: 'solar:wallet-broken',
        route: {name: ''}
    },
    {
        key: 'help',
        label: 'Help',
        icon: 'solar:help-broken',
        route: {name: ''}
    },
    {
        key: 'lock-screen',
        label: 'Lock Screen',
        icon: 'solar:lock-keyhole-broken',
        route: {name: ''}
    }
]
