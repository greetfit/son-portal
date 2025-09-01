import type { PropertyType, StatisticCardType } from "@/types";

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
      size: 1400
    },
    category: 'residences',
    availability: 'rent',
    location: 'France',
    price: 8930.00
  },
  {
    property: {
      img: properties2,
      name: 'PIK Villa House',
      beds: 6,
      size: 1700
    },
    category: 'villa',
    availability: 'sold',
    location: 'Bermuda',
    price: 60691.00
  },
  {
    property: {
      img: properties3,
      name: 'Tungis Luxury',
      beds: 4,
      size: 1200
    },
    category: 'bungalow',
    availability: 'sale',
    location: 'Australia',
    price: 70245.00
  },
  {
    property: {
      img: properties4,
      name: 'Luxury Apartment',
      beds: 2,
      size: 900
    },
    category: 'apartment',
    availability: 'rent',
    location: 'France',
    price: 5825.00
  },
  {
    property: {
      img: properties5,
      name: 'Weekend Villa MBH',
      beds: 5,
      size: 1900
    },
    category: 'villa',
    availability: 'sale',
    location: 'U.S.A',
    price: 90674.00
  },
  {
    property: {
      img: properties6,
      name: 'Luxury Penthouse',
      beds: 7,
      size: 2000
    },
    category: 'penthouse',
    availability: 'rent',
    location: 'Greenland',
    price: 10500.00
  },
  {
    property: {
      img: properties7,
      name: 'Ojiag Duplex Apartment',
      beds: 3,
      size: 1300
    },
    category: 'apartment',
    availability: 'sold',
    location: 'France',
    price: 75341.00
  },
  {
    property: {
      img: properties8,
      name: 'Luxury Bungalow Villas',
      beds: 4,
      size: 1200
    },
    category: 'bungalow',
    availability: 'sale',
    location: 'France',
    price: 54230.00
  },
  {
    property: {
      img: properties9,
      name: 'Duplex Bungalow',
      beds: 3,
      size: 1800
    },
    category: 'residences',
    availability: 'rent',
    location: 'Canada',
    price: 14564.00
  },
  {
    property: {
      img: properties10,
      name: 'Woodis B. Apartment',
      beds: 5,
      size: 1700
    },
    category: 'apartment',
    availability: 'sold',
    location: 'U.S.A',
    price: 34341.00
  },
];

export const statistics: StatisticCardType[] = [
  {
    icon: 'solar:wallet-money-broken',
    title: 'Total Incomes',
    statistic: 127812.09,
    growth: 34.4,
    prefix: '$',
  },
  {
    icon: 'solar:home-broken',
    title: 'Total Properties',
    statistic: 15780,
    growth: -8.5,
    suffix: 'Unit',
  },
  {
    icon: 'solar:dollar-broken',
    title: 'Unit Sold',
    statistic: 893,
    growth: 17,
    suffix: 'Unit',
  },
  {
    icon: 'solar:key-minimalistic-square-broken',
    title: 'Unit Rent',
    statistic: 459,
    growth: -12,
    suffix: 'Unit',
  },
];