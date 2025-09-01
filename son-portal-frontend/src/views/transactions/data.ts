import avatar2 from "@/assets/images/users/avatar-2.jpg"
import avatar3 from "@/assets/images/users/avatar-3.jpg"
import avatar4 from "@/assets/images/users/avatar-4.jpg"
import avatar5 from "@/assets/images/users/avatar-5.jpg"
import avatar6 from "@/assets/images/users/avatar-6.jpg"
import avatar7 from "@/assets/images/users/avatar-7.jpg"
import avatar8 from "@/assets/images/users/avatar-8.jpg"
import avatar9 from "@/assets/images/users/avatar-9.jpg"

type TransactionType = {
    id: string
    customer: {
        image: string
        name: string
    },
    date: string
    amount: number
    payment: {
        cardDetails?: {
            type: string
            lastDigits: number
        }
        bankDetails?: {
            type: string
            email: string
        },
    }
    agent: string
    property: string
    status: 'completed' | 'canceled' | 'pending'
}

export const transactions: TransactionType[] = [
    {
        id: 'TXN-341220',
        customer: {
            image: avatar2,
            name: 'Ray C. Nichols'
        },
        date: '05/01/2023',
        amount: 13987,
        payment: {
            cardDetails: {
                type: 'mastercard',
                lastDigits: 3467
            }
        },
        agent: 'Michael A. Miner',
        property: 'W. straat 102 DK Deventer',
        status: 'completed'
    },
    {
        id: 'TXN-547891',
        customer: {
            image: avatar3,
            name: 'Barbara A. Woods'
        },
        date: '14/02/2023',
        amount: 11345,
        payment: {
            cardDetails: {
                type: 'visa',
                lastDigits: 4722
            }
        },
        agent: 'Theresa T. Brose',
        property: 'Isaac Tirionplein 100',
        status: 'completed'
    },
    {
        id: 'TXN-230477',
        customer: {
            image: avatar4,
            name: 'Robert Mendoza'
        },
        date: '23/03/2023',
        amount: 16789,
        payment: {
            cardDetails: {
                type: 'mastercard',
                lastDigits: 7263
            }
        },
        agent: 'Walter L. Calab',
        property: '123 Maple St, 456 Oak Ave',
        status: 'canceled'
    },
    {
        id: 'TXN-189348',
        customer: {
            image: avatar5,
            name: 'Rita Correa'
        },
        date: '11/04/2023',
        amount: 14567,
        payment: {
            bankDetails: {
                type: 'paypal',
                email: 'gailsoneil31@rhyta.com'
            }
        },
        agent: 'Olive Mize',
        property: '3822 DT Amersfoort',
        status: 'pending'
    },
    {
        id: 'TXN-765434',
        customer: {
            image: avatar6,
            name: 'Beatriz McClure'
        },
        date: '30/05/2023',
        amount: 10234,
        payment: {
            cardDetails: {
                type: 'visa',
                lastDigits: 8263
            }
        },
        agent: 'Christa Sardina',
        property: '3822 DT Amersfoort',
        status: 'completed'
    },
    {
        id: 'TXN-452103',
        customer: {
            image: avatar7,
            name: 'Luis P. Brick'
        },
        date: '19/06/2023',
        amount: 17890,
        payment: {
            bankDetails: {
                type: 'paypal',
                email: 'hughcrobinson@rhyta.com'
            }
        },
        agent: 'Darren Rivera',
        property: '3181 BE Rozenburg',
        status: 'pending'
    },
    {
        id: 'TXN-986712',
        customer: {
            image: avatar8,
            name: 'Gary Jimenez'
        },
        date: '28/07/2023',
        amount: 12453,
        payment: {
            cardDetails: {
                type: 'mastercard',
                lastDigits: 9200
            }
        },
        agent: 'Robert V. Leavitt',
        property: 'Julianastraat ZX 7031',
        status: 'completed'
    },
    {
        id: 'TXN-324569',
        customer: {
            image: avatar9,
            name: 'Beatrice Ruiz'
        },
        date: '07/08/2023',
        amount: 15678,
        payment: {
            cardDetails: {
                type: 'visa',
                lastDigits: 8940
            }
        },
        agent: 'Lydia Anderson',
        property: '2561 DB Den Haag',
        status: 'canceled'
    },
]