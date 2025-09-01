import type { ApexChartType } from "@/types";
import type { PropertyType, FileType, PropertyStatusType } from "@/views/agents/[id]/components/types";

import properties1 from '@/assets/images/properties/p-1.jpg';
import properties2 from '@/assets/images/properties/p-2.jpg';
import properties3 from '@/assets/images/properties/p-3.jpg';
import properties4 from '@/assets/images/properties/p-4.jpg';
import properties5 from '@/assets/images/properties/p-5.jpg';

export const propertyChart1: ApexChartType = {
  height: 90,
  type: 'radialBar',
  series: [80],
  options: {
    chart: {
      width: 90,
      height: 90,
      type: 'radialBar',
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '50%',
        },
        track: {
          margin: 0,
          background: "#02bc9c",

        },
        dataLabels: {
          show: false
        }
      }
    },
    grid: {
      padding: {
        top: -15,
        bottom: -15
      }
    },
    stroke: {
      lineCap: 'round'
    },
    labels: ['Cricket'],
    colors: ["#47ad94"],

  }
};

export const propertyChart2: ApexChartType = {
  height: 90,
  type: 'radialBar',
  series: [40],
  options: {
    chart: {
      width: 90,
      height: 90,
      type: 'radialBar',
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '50%',
        },
        track: {
          margin: 0,
          background: "#e1360d",

        },
        dataLabels: {
          show: false
        }
      }
    },
    grid: {
      padding: {
        top: -15,
        bottom: -15
      }
    },
    stroke: {
      lineCap: 'round'
    },
    labels: ['Cricket'],
    colors: ["#e1360d"],

  }
};

export const propertyChart3: ApexChartType = {
  height: 90,
  type: 'radialBar',
  series: [56],
  options: {
    chart: {
      width: 90,
      height: 90,
      type: 'radialBar',
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '50%',
        },
        track: {
          margin: 0,
          background: "#e1360d",

        },
        dataLabels: {
          show: false
        }
      }
    },
    grid: {
      padding: {
        top: -15,
        bottom: -15
      }
    },
    stroke: {
      lineCap: 'round'
    },
    labels: ['Cricket'],
    colors: ["#027ef4"],
  }
};

export const properties: PropertyType[] = [
  {
    name: 'Dvilla Residences Batu',
    img: properties1,
    icon: 'solar:home-bold-duotone',
    location: '4604 , Philli Lane Kiowa'
  },
  {
    name: 'PIK Villa House',
    img: properties2,
    icon: 'solar:home-bold-duotone',
    location: '27, Boulevard Cockeysville'
  },
  {
    name: 'Tungis Luxury',
    img: properties3,
    icon: 'solar:home-bold-duotone',
    location: '900 , Creside WI 54913'
  },
  {
    name: 'Luxury Apartment',
    img: properties4,
    icon: 'solar:buildings-3-bold-duotone',
    location: '223 , Creside Santa Maria'
  },
  {
    name: 'Weekend Villa MBH',
    img: properties5,
    icon: 'solar:home-bold-duotone',
    location: '980, Jim Rosa Lane Dublin'
  },
];

export const propertyFile: FileType[] = [
  {
    name: 'Property-File.pdf',
    icon: 'solar:file-check-bold',
    variant: 'danger',
    size: 2.4
  },
  {
    name: 'Client-List.pdf',
    icon: 'solar:user-bold',
    variant: 'primary',
    size: 1.6
  },
  {
    name: 'Property-Photo.pdf',
    icon: 'solar:gallery-minimalistic-bold',
    variant: 'success',
    size: 23.2
  },
  {
    name: 'Area-sqft.png',
    icon: 'solar:streets-map-point-bold',
    variant: 'warning',
    size: 2.3
  },
];

export const propertyStatus: PropertyStatusType[] = [
  {
    title: 'Total Listing',
    icon: 'solar:home-bold',
    statistic: 243,
    chartOption: propertyChart1
  },
  {
    title: 'Property Sold',
    icon: 'solar:wallet-money-bold',
    statistic: 136,
    chartOption: propertyChart2
  },
  {
    title: 'Property Rent',
    icon: 'solar:hand-money-bold',
    statistic: 105,
    chartOption: propertyChart3
  },
];