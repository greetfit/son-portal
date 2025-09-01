import avatar2 from "@/assets/images/users/avatar-2.jpg"
import avatar3 from "@/assets/images/users/avatar-3.jpg"
import avatar4 from "@/assets/images/users/avatar-4.jpg"
import avatar5 from "@/assets/images/users/avatar-5.jpg"
import avatar6 from "@/assets/images/users/avatar-6.jpg"
import avatar7 from "@/assets/images/users/avatar-7.jpg"
import avatar8 from "@/assets/images/users/avatar-8.jpg"
import avatar9 from "@/assets/images/users/avatar-9.jpg"
import avatar10 from "@/assets/images/users/avatar-10.jpg"

type OrderType = {
    customer: {
        image: string
        name: string
    },
    purchasedDate: string
    contactNo: string
    property: {
        type: 'residential' | 'commercial' | 'industrial' | 'apartment'
        address: string
    },
    amount: string
    status: 'paid' | 'unpaid' | 'pending'
}

export const orders: OrderType[] = [
    {
        customer: {
            image: avatar2,
            name: 'Daavid Nummi'
        },
        purchasedDate: '02/01/2023',
        contactNo: '+231 06-75820711',
        property: {
            type: 'residential',
            address: '123 Maple St, 456 Oak Ave'
        },
        amount: '2,890,123',
        status: 'paid'
    },
    {
        customer: {
            image: avatar3,
            name: 'Sinikka Penttinen'
        },
        purchasedDate: '10/02/2023',
        contactNo: '+231 47-23456789',
        property: {
            type: 'commercial',
            address: '789 Pine Blvd'
        },
        amount: '2,678,901',
        status: 'paid'
    },
    {
        customer: {
            image: avatar4,
            name: 'Jere Palmu'
        },
        purchasedDate: '18/03/2023',
        contactNo: '+231 73-34567890',
        property: {
            type: 'residential',
            address: '101 Birch Ct, 202 Cedar Ln'
        },
        amount: '4,123,456',
        status: 'unpaid'
    },
    {
        customer: {
            image: avatar5,
            name: 'Ulla Nuorela'
        },
        purchasedDate: '25/04/2023',
        contactNo: '+231 45-45678901',
        property: {
            type: 'residential',
            address: '303 Elm St'
        },
        amount: '3,456,789',
        status: 'paid'
    },
    {
        customer: {
            image: avatar5,
            name: 'Ulla Nuorela'
        },
        purchasedDate: '25/04/2023',
        contactNo: '+231 45-45678901',
        property: {
            type: 'residential',
            address: '303 Elm St'
        },
        amount: '3,456,789',
        status: 'paid'
    },
    {
        customer: {
            image: avatar6,
            name: 'Tiia Karppinen'
        },
        purchasedDate: '12/04/2023',
        contactNo: '+231 16-56789012',
        property: {
            type: 'industrial',
            address: '404 Walnut Rd'
        },
        amount: '2,789,012',
        status: 'unpaid'
    },
    {
        customer: {
            image: avatar7,
            name: 'Harland R. Orsini'
        },
        purchasedDate: '01/05/2023',
        contactNo: '+231 82-67890123',
        property: {
            type: 'residential',
            address: '505 Spruce St'
        },
        amount: '2,456,789',
        status: 'unpaid'
    },
    {
        customer: {
            image: avatar8,
            name: 'David Padgett'
        },
        purchasedDate: '15/06/2023',
        contactNo: '+231 92-78901234',
        property: {
            type: 'commercial',
            address: '606 Fir Ave'
        },
        amount: '1,567,890',
        status: 'paid'
    },
    {
        customer: {
            image: avatar9,
            name: 'Valerie Obrien'
        },
        purchasedDate: '22/07/2023',
        contactNo: '+231 82-89012345',
        property: {
            type: 'residential',
            address: '808 Willow Dr, 909 Aspen Ln'
        },
        amount: '1,234,567',
        status: 'pending'
    },
    {
        customer: {
            image: avatar10,
            name: 'Adriana G. Faust'
        },
        purchasedDate: '29/10/2023',
        contactNo: '+231 54-4775764',
        property: {
            type: 'apartment',
            address: '1190 Barlow Street Mokopane'
        },
        amount: '1,502,331',
        status: 'pending'
    },
]