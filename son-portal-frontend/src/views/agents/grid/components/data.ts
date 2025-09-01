import type { AgentType, ApexChartType } from '@/types';

import avatar2 from '@/assets/images/users/avatar-2.jpg';
import avatar3 from '@/assets/images/users/avatar-3.jpg';
import avatar4 from '@/assets/images/users/avatar-4.jpg';
import avatar5 from '@/assets/images/users/avatar-5.jpg';
import avatar6 from '@/assets/images/users/avatar-6.jpg';
import avatar7 from '@/assets/images/users/avatar-7.jpg';
import avatar8 from '@/assets/images/users/avatar-8.jpg';
import avatar9 from '@/assets/images/users/avatar-9.jpg';
import avatar10 from '@/assets/images/users/avatar-10.jpg';

export const agents: AgentType[] = [
  {
    id: 1,
    agent: {
      img: avatar2,
      name: 'Michael A. Miner',
    },
    email: 'michaelminer@dayrep.com',
    property: 243,
    location: 'Lincoln Drive Harrisburg, PA 17101 U.S.A'
  },
  {
    id: 2,
    agent: {
      img: avatar3,
      name: 'Theresa T. Brose',
    },
    email: 'theresbrosea@dayrep.com',
    property: 451,
    location: 'Boulevard Cockeysville TX 75204'
  },
  {
    id: 3,
    agent: {
      img: avatar4,
      name: 'Walter L. Calab',
    },
    email: 'walterlcalabre@jourrapide.com',
    property: 190,
    location: 'Woodside Circle Panama City, FL 32401'
  },
  {
    id: 4,
    agent: {
      img: avatar5,
      name: 'Olive Mize',
    },
    email: 'olivehmize@rhyta.com',
    property: 276,
    location: 'Emily Drive Sumter, SC 29150'
  },
  {
    id: 5,
    agent: {
      img: avatar6,
      name: 'Christa Sardina',
    },
    email: 'christasardina@dayrep.com',
    property: 257,
    location: 'Cmans Lane Albuquerque, NM 87109'
  },
  {
    id: 6,
    agent: {
      img: avatar7,
      name: 'Darren Rivera',
    },
    email: 'darrenwrivera@dayrep.com',
    property: 342,
    location: '465 Chapmans Lane Albuquerque,'
  },
  {
    id: 7,
    agent: {
      img: avatar8,
      name: 'Robert V. Leavitt',
    },
    email: 'robertvleavitt@dayrep.com',
    property: 120,
    location: 'Stockert Hollow Road Redmond, WA 98052'
  },
  {
    id: 8,
    agent: {
      img: avatar9,
      name: 'Lydia Anderson',
    },
    email: 'lydiajanderson@dayrep.com',
    property: 266,
    location: 'Conaway Street Bloomington, IN 47408'
  },
  {
    id: 9,
    agent: {
      img: avatar10,
      name: 'Sarah Martinez',
    },
    email: 'sarahjmartinez@rhyta.com',
    property: 128,
    location: '500 Logan Lane Denver, CO 80220'
  },
];

export const sealPropertiesChart: ApexChartType = {
  height: 115,
  type: 'line',
  series: [{
    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
  }],
  options: {
    chart: {
      type: 'line',
      height: 115,
      sparkline: {
        enabled: true
      }
    },
    stroke: {
      width: 2,
      curve: 'smooth'
    },
    markers: {
      size: 0
    },
    colors: ['#ffffff'],
    tooltip: {
      fixed: {
        enabled: false
      },
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return '';
          }
        }
      },
      marker: {
        show: false
      }
    }
  }
};

export const gridChart: ApexChartType = {
  height: 123,
  type: 'donut',
  series: [80, 40, 30],
  options: {
    chart: {
      height: 123,
      type: 'donut',
    },
    legend: {
      show: false
    },
    stroke: {
      width: 0
    },
    plotOptions: {
      pie: {
        donut: {
          size: '70%',
          labels: {
            show: false,
            total: {
              showAlways: true,
              show: true
            }
          }
        }
      }
    },
    labels: ["Vacant", "Occupied", "Unlisted"],
    colors: ["#027ef4", "#f0934e", "#47ad94"],
    dataLabels: {
      enabled: false
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        }
      }
    }]
  }
};