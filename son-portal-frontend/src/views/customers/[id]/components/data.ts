import type { ApexChartType, PropertyType } from "@/types";
import type { TransactionsType } from "@/views/customers/[id]/components/types";

import properties1 from "@/assets/images/properties/p-1.jpg";
import properties3 from "@/assets/images/properties/p-3.jpg";
import properties6 from "@/assets/images/properties/p-6.jpg";

export const weeklyInquiryChart: ApexChartType = {
  height: 294,
  type: 'bar',
  series: [{
    name: 'Inquiry',
    data: [4, 5, 6, 4, 9, 5, 4]
  }],
  options: {
    chart: {
      height: 294,
      parentHeightOffset: 0,
      type: "bar",
      toolbar: {
        show: !1
      },
    },
    plotOptions: {
      bar: {
        barHeight: "100%",
        columnWidth: "40%",
        // startingShape: "rounded",
        // endingShape: "rounded",
        borderRadius: 4,
        distributed: !0,
      },
    },
    grid: {
      show: !1,
      padding: {
        top: -20,
        bottom: -10,
        left: 0,
        right: 0
      },
    },
    colors: ["#604ae3", "#d3cbff", "#d3cbff", "#d3cbff"],
    dataLabels: {
      enabled: true
    },

    legend: {
      show: !1
    },
    xaxis: {
      categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
      axisBorder: {
        show: !1
      },
      axisTicks: {
        show: !1
      },
    },
    yaxis: {
      labels: {
        show: !1
      }
    },
    tooltip: {
      enabled: !0
    },
    responsive: [{
      breakpoint: 1025,
      options: {
        chart: {
          height: 199
        }
      }
    }],
  }
};

export const ownPropertyChart: ApexChartType = {
  height: 343,
  type: 'radialBar',
  series: [27],
  options: {
    chart: {
      height: 343,
      type: "radialBar",
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      radialBar: {
        startAngle: -135,
        endAngle: 225,
        hollow: {
          margin: 0,
          size: "70%",
          background: "transparent",
          image: undefined,
          imageOffsetX: 0,
          imageOffsetY: 0,
          position: "front",
          dropShadow: {
            enabled: true,
            top: 3,
            left: 0,
            blur: 4,
            opacity: 0.24,
          },
        },
        track: {
          background: "rgba(170,184,197, 0.4)",
          strokeWidth: "67%",
          margin: 0,
        },

        dataLabels: {
          // showOn: "always",
          name: {
            offsetY: -10,
            show: true,
            color: "#888",
            fontSize: "17px",
          },
          value: {
            // formatter: function (val) {
            //   return parseInt(val);
            // },
            color: "#111",
            fontSize: "36px",
            show: true,
          },
        },
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "dark",
        type: "horizontal",
        shadeIntensity: 0.5,
        gradientToColors: ["#7f56da", "#4697ce"],
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100],
      },
    },
    stroke: {
      lineCap: "round",
    },
    labels: ["Own"],
  }
};

export const transactions: TransactionsType[] = [
  {
    id: 'ORD-75234',
    date: '15/03/2023',
    category: 'residential',
    location: '123 Maple St, 456 Oak Ave',
    amount: 928128,
    agentName: 'Michael A. Miner'
  },
  {
    id: 'ORD-54222',
    date: '20/03/2023',
    category: 'commercial',
    location: '789 Pine Blvd',
    amount: 84091,
    agentName: 'Michael A. Miner'
  },
  {
    id: 'ORD-63111',
    date: '25/03/2023',
    category: 'residential',
    location: '101 Birch Ct, 202 Cedar Ln',
    amount: 83120,
    agentName: 'Michael A. Miner'
  },
  {
    id: 'ORD-84623',
    date: '05/04/2023',
    category: 'residential',
    location: '303 Elm St',
    amount: 65900,
    agentName: 'Theresa T. Brose'
  },
];

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
  },
  {
    property: {
      img: properties3,
      name: 'Tungis Luxury',
      beds: 4,
      bath: 3,
      size: 1200,
      floor: 2
    },
    location: '900 , Creside WI 54913',
  },
  {
    property: {
      img: properties6,
      name: 'Luxury Penthouse',
      beds: 7,
      bath: 6,
      size: 2000,
      floor: 1
    },
    location: 'Sumner Street Los Angeles',
  },
];