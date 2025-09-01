import small1 from '@/assets/images/small/img-1.jpg'
import small2 from '@/assets/images/small/img-2.jpg'
import small3 from '@/assets/images/small/img-3.jpg'
import small4 from '@/assets/images/small/img-4.jpg'

import avatar2 from "@/assets/images/users/avatar-2.jpg"
import avatar3 from "@/assets/images/users/avatar-3.jpg"
import avatar4 from "@/assets/images/users/avatar-4.jpg"
import avatar5 from "@/assets/images/users/avatar-5.jpg"
import avatar6 from "@/assets/images/users/avatar-6.jpg"
import avatar7 from "@/assets/images/users/avatar-7.jpg"
import avatar8 from "@/assets/images/users/avatar-8.jpg"
import avatar9 from "@/assets/images/users/avatar-9.jpg"
import avatar10 from "@/assets/images/users/avatar-10.jpg"
import avatar11 from "@/assets/images/users/avatar-11.jpg"
import avatar12 from "@/assets/images/users/avatar-12.jpg"

export type EmailBodyImage = {
    image: string
}

export type EmailBodyFile = {
    icon: string
    title: string
    variant: string
}

export type ContactType = {
    image: string
    name: string
}

export type MessageType = {
    image: string
    name: string
    time: string
    message: string
    isActive?: boolean
}

export const emailBodyImageData: EmailBodyImage[] = [
    {
        image: small1
    },
    {
        image: small2
    },
    {
        image: small3
    },
    {
        image: small4
    },
]

export const emailBodyFileData: EmailBodyFile[] = [
    {
        icon: 'solar:file-download-bold',
        title: 'Project About..',
        variant: 'primary'
    },
    {
        icon: 'solar:figma-file-bold',
        title: 'Photo Psd...',
        variant: 'success'
    },
    {
        icon: 'solar:checklist-minimalistic-bold',
        title: 'Price List...',
        variant: 'danger'
    },
]

export const contacts: ContactType[] = [
    {
        image: avatar12,
        name: 'Alberto Milano'
    },
    {
        image: avatar11,
        name: 'Alda Barese'
    },
    {
        image: avatar10,
        name: 'Giovanna Dellucci'
    },
    {
        image: avatar8,
        name: 'Fidenzio Lo Duca'
    },
]

export const messages: MessageType[] = [
    {
        image: avatar2,
        name: 'Oberto Onio',
        time: '09:24 AM',
        message: 'Thank you all for your hard...'
    },
    {
        image: avatar3,
        name: 'Dianna Blair',
        time: '10:50 AM',
        message: 'In recognition of your achieve...',
        isActive: true
    },
    {
        image: avatar4,
        name: 'Dirk Kuhn',
        time: '09:45 AM',
        message: 'Additionally, I would like to remind eve...'
    },
    {
        image: avatar5,
        name: 'Sandra Fischer',
        time: '08:10 AM',
        message: 'After reviewing the current progress...'
    },
    {
        image: avatar6,
        name: 'Marina Eberhardt',
        time: 'Wednesday',
        message: 'We have decided to adjust the deadline...'
    },
    {
        image: avatar7,
        name: 'Erik Holzman',
        time: 'Thursday',
        message: 'We\'d like to thank you for being su...'
    },
    {
        image: avatar8,
        name: 'Sven Hirsch',
        time: '10:50 AM',
        message: 'February, you will be paid to your nomina...'
    },
    {
        image: avatar9,
        name: 'Katrin Naumann',
        time: '3 Day Ago',
        message: '$250 cash reward. This will be paid out...'
    },
]