import type { CustomerType } from '@/types';

import avatar2 from '@/assets/images/users/avatar-2.jpg';
import avatar3 from '@/assets/images/users/avatar-3.jpg';
import avatar4 from '@/assets/images/users/avatar-4.jpg';
import avatar5 from '@/assets/images/users/avatar-5.jpg';
import avatar6 from '@/assets/images/users/avatar-6.jpg';
import avatar7 from '@/assets/images/users/avatar-7.jpg';

export const customers: CustomerType[] = [
  {
    customer: {
      name: 'Daavid Nummi',
      img: avatar2,
    },
    email: 'daavidnumminen@teleworm.us',
    contact: '23106-75820711',
    address: 'Schoolstraat 161 5151 HH Drunen',
    property: {
      view: 231,
      own: 27,
      invest: 928128
    },
    availability: 'available'
  },
  {
    customer: {
      name: 'Sinikka Penttinen',
      img: avatar3,
    },
    email: 'sinikkapenttinen@dayrep.com',
    contact: '23147-23456789',
    address: 'Jean Racinelaan 48 5629 PK Eindhoven',
    property: {
      view: 134,
      own: 13,
      invest: 435892
    },
    availability: 'available'
  },
  {
    customer: {
      name: 'Jere Palmu',
      img: avatar4,
    },
    email: 'jerepalmu@rhyta.com',
    contact: '23173-34567890',
    address: 'Alkmenehof 124 2728 KA Zoetermeer ',
    property: {
      view: 301,
      own: 15,
      invest: 743120
    },
    availability: 'available'
  },
  {
    customer: {
      name: 'Ulla Nuorela',
      img: avatar5,
    },
    email: 'ullanuorela@rhyta.com',
    contact: '23145-45678901',
    address: 'Oudegracht 135 3511 NJ Utrecht ',
    property: {
      view: 109,
      own: 7,
      invest: 635812
    },
    availability: 'unavailable'
  },
  {
    customer: {
      name: 'Tiia Karppinen',
      img: avatar6,
    },
    email: 'tiiakarppinen@teleworm.us',
    contact: '23116-56789012',
    address: 'Willem de Zwijgerlaan 183 2315 AT Leiden',
    property: {
      view: 142,
      own: 18,
      invest: 733291
    },
    availability: 'available'
  },
  {
    customer: {
      name: 'Harland R. Orsini',
      img: avatar7,
    },
    email: 'harlandrorsini@dayrep.com',
    contact: '23182-67890123',
    address: 'Bongerd 116 6367 CL Voerendaal',
    property: {
      view: 109,
      own: 10,
      invest: 831760
    },
    availability: 'unavailable'
  },
];