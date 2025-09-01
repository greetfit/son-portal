import type { CustomerType } from '@/types';

import avatar2 from '@/assets/images/users/avatar-2.jpg';
import avatar3 from '@/assets/images/users/avatar-3.jpg';
import avatar4 from '@/assets/images/users/avatar-4.jpg';
import avatar5 from '@/assets/images/users/avatar-5.jpg';
import avatar6 from '@/assets/images/users/avatar-6.jpg';
import avatar7 from '@/assets/images/users/avatar-7.jpg';
import avatar8 from '@/assets/images/users/avatar-8.jpg';
import avatar9 from '@/assets/images/users/avatar-9.jpg';

export const customers: CustomerType[] = [
  {
    customer: {
      img: avatar2,
      name: 'Daavid Nummi'
    },
    email: 'daavidnumminen@teleworm.us',
    contact: '231 06-75820711',
    category: 'residential',
    interestedProperties: '123 Maple St, 456 Oak Ave',
    status: 'interested',
    date: '15/03/2023'
  },
  {
    customer: {
      img: avatar3,
      name: 'Sinikka Penttinen'
    },
    email: 'sinikkapenttinen@dayrep.com',
    contact: '231 47-23456789',
    category: 'commercial',
    interestedProperties: '789 Pine Blvd',
    status: 'under-review',
    date: '20/03/2023'
  },
  {
    customer: {
      img: avatar4,
      name: 'Jere Palmu'
    },
    email: 'jerepalmu@rhyta.com',
    contact: '231 73-34567890',
    category: 'residential',
    interestedProperties: '101 Birch Ct, 202 Cedar Ln',
    status: 'follow-up',
    date: '25/03/2023'
  },
  {
    customer: {
      img: avatar5,
      name: 'Ulla Nuorela'
    },
    email: 'ullanuorela@rhyta.com',
    contact: '231 45-45678901',
    category: 'residential',
    interestedProperties: '303 Elm St',
    status: 'interested',
    date: '05/04/2023'
  },
  {
    customer: {
      img: avatar6,
      name: 'Tiia Karppinen'
    },
    email: 'tiiakarppinen@teleworm.us',
    contact: '231 16-56789012',
    category: 'industrial',
    interestedProperties: '404 Walnut Rd',
    status: 'follow-up',
    date: '12/04/2023'
  },
  {
    customer: {
      img: avatar7,
      name: 'Harland R. Orsini'
    },
    email: 'harlandrorsini@dayrep.com',
    contact: '231 82-67890123',
    category: 'residential',
    interestedProperties: '505 Spruce St',
    status: 'interested',
    date: '15/04/2023'
  },
  {
    customer: {
      img: avatar8,
      name: 'David Padgett'
    },
    email: 'davidpadgett@armyspy.com ',
    contact: '231 92-78901234',
    category: 'commercial',
    interestedProperties: '606 Fir Ave',
    status: 'under-review',
    date: '18/04/2023'
  },
  {
    customer: {
      img: avatar9,
      name: 'Valerie Obrien'
    },
    email: 'valerieobrien@dayrep.com',
    contact: '231 82-89012345',
    category: 'residential',
    interestedProperties: '808 Willow Dr, 909 Aspen Ln',
    status: 'interested',
    date: '20/04/2023'
  }
];