import type { PropertyType } from '@/types';

import properties1 from '@/assets/images/properties/p-1.jpg';
import properties2 from '@/assets/images/properties/p-2.jpg';
import properties3 from '@/assets/images/properties/p-3.jpg';
import properties4 from '@/assets/images/properties/p-4.jpg';
import properties5 from '@/assets/images/properties/p-5.jpg';
import properties6 from '@/assets/images/properties/p-6.jpg';
import properties7 from '@/assets/images/properties/p-7.jpg';
import properties8 from '@/assets/images/properties/p-8.jpg';
import properties9 from '@/assets/images/properties/p-9.jpg';
import properties10 from '@/assets/images/properties/p-10.jpg';

export const properties: PropertyType[] = [
  {
    property: {
      img: properties1,
      name: 'Dvilla Residences Batu',
      beds: 5,
      bath: 4,
      size: 1400,
      floor: 3
    },
    location: '4604 , Philli Lane Kiowa',
    price: 8930.00,
    availability: 'for-rent',
    category: 'villa',
    bookmark: true
  },
  {
    location: '127, Boulevard Cockeysville',
    property: {
      img: properties2,
      name: 'PIK Villa House',
      beds: 6,
      bath: 5,
      size: 1700,
      floor: 3
    },
    price: 60691.00,
    availability: 'sold',
    category: 'villa',
  },
  {
    location: '900 , Creside WI 54913',
    property: {
      img: properties3,
      name: 'Tungis Luxury',
      beds: 4,
      bath: 3,
      size: 1200,
      floor: 2
    },
    price: 70245.00,
    availability: 'for-sale',
    category: 'villa',
    bookmark: true
  },
  {
    location: '223 , Creside Santa Maria',
    property: {
      img: properties4,
      name: 'Luxury Apartment',
      beds: 2,
      bath: 2,
      size: 900,
      floor: 1
    },
    price: 5825.00,
    availability: 'for-rent',
    category: 'apartment',
    bookmark: false
  },
  {
    location: '980, Jim Rosa Lane Dublin',
    property: {
      img: properties5,
      name: 'Weekend Villa MBH',
      beds: 5,
      bath: 5,
      size: 1900,
      floor: 2
    },
    price: 90674.00,
    availability: 'for-sale',
    category: 'villa',
    bookmark: false
  },
  {
    location: 'Sumner Street Los Angeles',
    property: {
      img: properties6,
      name: 'Luxury Penthouse',
      beds: 7,
      bath: 6,
      size: 2000,
      floor: 1
    },
    price: 10500.00,
    availability: 'for-rent',
    category: 'villa',
    bookmark: true
  },
  {
    location: '24 Hanover, New York',
    property: {
      img: properties7,
      name: 'Ojiag Duplex House',
      beds: 3,
      bath: 3,
      size: 1300,
      floor: 2
    },
    price: 75341.00,
    availability: 'sold',
    category: 'apartment',
  },
  {
    location: 'Khale Florence, SC 219',
    property: {
      img: properties8,
      name: 'Luxury Bungalow Villas',
      beds: 4,
      bath: 3,
      size: 1200,
      floor: 1
    },
    price: 54230.00,
    availability: 'for-sale',
    category: 'villa',
    bookmark: false
  },
  {
    location: '25, Willison Street Becker',
    property: {
      img: properties9,
      name: 'Duplex Bungalow',
      beds: 3,
      bath: 3,
      size: 1800,
      floor: 3
    },
    price: 14564.00,
    availability: 'for-rent',
    category: 'villa',
    bookmark: false
  },
  {
    location: 'Bungalow Road Niobrara',
    property: {
      img: properties10,
      name: 'Woodis B. Apartment',
      beds: 4,
      bath: 3,
      size: 1700,
      floor: 6
    },
    price: 34341.00,
    availability: 'sold',
    category: 'apartment',
  },
];