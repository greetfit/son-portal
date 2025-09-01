import avatar1 from '@/assets/images/users/avatar-1.jpg'
import avatar2 from '@/assets/images/users/avatar-2.jpg'
import avatar3 from '@/assets/images/users/avatar-3.jpg'
import avatar4 from '@/assets/images/users/avatar-4.jpg'
import avatar5 from '@/assets/images/users/avatar-5.jpg'
import avatar6 from '@/assets/images/users/avatar-6.jpg'
import avatar7 from '@/assets/images/users/avatar-7.jpg'
import avatar8 from '@/assets/images/users/avatar-8.jpg'
import avatar9 from '@/assets/images/users/avatar-9.jpg'
import avatar10 from '@/assets/images/users/avatar-10.jpg'
import avatar11 from '@/assets/images/users/avatar-11.jpg'
import avatar12 from '@/assets/images/users/avatar-12.jpg'

export type ContactType = {
    image: string
    name: string
    lastMsg: string
    timeStamp?: string
    isActive?: boolean
    pinned?: boolean
    seen?: boolean
    unreadMsg?: number
    isChatting?: boolean
}

export type GroupContactType = {
    name: string
    timestamp: string
    lastActivity: {
        name?: string
        message: string
    },
    unreadMsg?: number
}

export type ChatMessageType = {
    messages: string[]
    timestamp: string
    sender?: {
        image: string
        name: string
    }
}

export const onlineContacts: string[] = [avatar1, avatar2, avatar3, avatar4, avatar5, avatar6, avatar7, avatar8, avatar9, avatar10, avatar11, avatar12]

export const contactList: ContactType[] = [
    {
        image: avatar2,
        name: 'John Doe',
        lastMsg: 'Hi John, How are you?',
        timeStamp: '09:00 AM',
        pinned: true,
        seen: true,
        isActive: true
    },
    {
        image: avatar3,
        name: 'Dianna Blair',
        timeStamp: '10:50 AM',
        lastMsg: "Are we going to have th...",
        seen: true
    },
    {
        image: avatar4,
        name: 'David Wilson',
        timeStamp: 'Now',
        lastMsg: 'typing...',
        unreadMsg: 1,
        isChatting: true,
        isActive: true
    },
    {
        image: avatar5,
        name: 'Willie L. Quin',
        timeStamp: '08:20 AM',
        lastMsg: "That's very efficient!",
    },
    {
        image: avatar6,
        name: 'Deanna D. Oceg',
        timeStamp: '04:10PM',
        lastMsg: 'Why aren\'t you writing? We don\'t...',
        unreadMsg: 2,
        isActive: true
    },
    {
        image: avatar7,
        name: 'Freddy Cooper',
        timeStamp: 'Yesterday',
        lastMsg: 'Going on vacation.',
    },
    {
        image: avatar8,
        name: 'Gene Spencer',
        timeStamp: 'Yesterday',
        lastMsg: 'How are you?',
    },
    {
        image: avatar9,
        name: 'Lucy B. Dunc',
        timeStamp: 'Thursday',
        lastMsg: 'Please check this template...',
        isActive: true,
        unreadMsg: 2
    },
    {
        image: avatar10,
        name: 'Heather J. Brad',
        timeStamp: '11/07',
        lastMsg: '$6,789',
    }
]

export const groupContacts: GroupContactType[] = [
    {
        name: 'General',
        timestamp: '9:20 AM',
        lastActivity: {
            name: 'HG',
            message: 'Good morning everyone !'
        },
        unreadMsg: 1
    },
    {
        name: 'Project A',
        timestamp: '1:30 PM',
        lastActivity: {
            name: 'RK',
            message: 'This themes is awesome! ...'
        }
    },
    {
        name: 'Project B',
        timestamp: '2:14 PM',
        lastActivity: {
            name: 'Susan',
            message: 'Hey...😊'
        }
    },
    {
        name: 'Reporting',
        timestamp: '8:30 AM',
        lastActivity: {
            message: 'Good Morning Everyone'
        },
        unreadMsg: 5
    },
    {
        name: 'Work Reporting',
        timestamp: '6:00 PM',
        lastActivity: {
            name: 'Angela',
            message: 'Today work is...'
        }
    },
    {
        name: 'Meeting',
        timestamp: '1:30 PM',
        lastActivity: {
            name: 'HR',
            message: 'Next meeting today 10am'
        },
        unreadMsg: 1
    },
]

export const contactMessages: ContactType[] = [

    {
        image: avatar3,
        name: 'Dianna Blair',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar2,
        name: 'John Doe',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar4,
        name: 'David Wilson',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar5,
        name: 'Willie L. Quin',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar6,
        name: 'Deanna D. Oceg',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar7,
        name: 'Freddy Cooper',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar8,
        name: 'Gene Spencer',
        lastMsg: 'Are we going to have th...'
    },
    {
        image: avatar9,
        name: 'Lucy B. Dunc',
        lastMsg: 'Are we going to have th...'
    },
]

export const chatMessagesData: ChatMessageType[] = [
    {
        messages: ['Hey Gaston, how\'s all going?'],
        timestamp: '08:30',
        sender: {
            image: avatar4,
            name: 'David'
        }
    },
    {
        messages: ['Yeah, everything good!', 'What\'s you project update? Are you having any trouble?'],
        timestamp: '08:30',
    },
    {
        messages: ['No, going all perfect!'],
        timestamp: '08:31',
        sender: {
            image: avatar4,
            name: 'David'
        }
    },
    {
        messages: ['Okk Nice ! Please Send asap.', 'Thank you, believe me, I will be very happy to see the results of my efforts. Thank you for the good feeling you give me'],
        timestamp: '08:32',
    },
    {
        messages: ['Thanks, Gaston. I appreciate your support. Overall, I\'m optimistic about our team\'s performance and looking forward to tackling new challenges in the next quarter.'],
        timestamp: '08:33',
        sender: {
            image: avatar4,
            name: 'David'
        }
    },
]