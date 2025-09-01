import type { ApexChartType, StatisticCardType } from "@/types";
import type { CustomerType } from "@/views/dashboards/customer/components/types";

import flagBrImg from '@/assets/images/flag/br.svg';
import flagCaImg from '@/assets/images/flag/ca.svg';
import flagRuImg from '@/assets/images/flag/ru.svg';
import flagUsImg from '@/assets/images/flag/us.svg';

import avatar6 from "@/assets/images/users/avatar-6.jpg";
import avatar7 from "@/assets/images/users/avatar-7.jpg";
import avatar8 from "@/assets/images/users/avatar-8.jpg";
import avatar10 from "@/assets/images/users/avatar-10.jpg";
import avatar9 from "@/assets/images/users/avatar-9.jpg";

export const statistics: StatisticCardType[] = [
  {
    title: 'Brazil',
    icon: flagBrImg,
    statistic: 15781,
    growth: 10.0,
    progress: 30,
    total: 3474
  },
  {
    title: 'Canada',
    icon: flagCaImg,
    statistic: 23263,
    growth: 4.1,
    progress: 70,
    total: 7843
  },
  {
    title: 'Russia',
    icon: flagRuImg,
    statistic: 30562,
    growth: 7.1,
    progress: 50,
    total: 5933
  },
  {
    title: 'USA',
    icon: flagUsImg,
    statistic: 41341,
    growth: 12.0,
    progress: 80,
    total: 8901
  },
];

export const propertyInvestorChart: ApexChartType = {
  height: 182,
  type: 'bar',
  series: [
    {
      name: "Invest",
      data: [40, 50, 65, 45, 40, 70, 40, 50, 45, 20, 10, 29],
    },
  ],
  options: {
    chart: {
      height: 182,
      parentHeightOffset: 0,
      type: "bar",
      toolbar: {
        show: !1,
      },
    },
    plotOptions: {
      bar: {
        barHeight: "100%",
        columnWidth: "30%",
        // startingShape: "rounded",
        // endingShape: "rounded",
        borderRadius: 4,
        distributed: !0,
      },
    },
    grid: {
      show: true,
      padding: {
        top: -20,
        bottom: -10,
        left: 0,
        right: 0,
      },
    },
    colors: ["#efecfc", "#604ae3", "#604ae3", "#efecfc"],
    dataLabels: {
      enabled: !1,
    },
    legend: {
      show: !1,
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "July",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
      axisBorder: {
        show: !1,
      },
      axisTicks: {
        show: !1,
      },
    },
    yaxis: {
      labels: {
        show: !1,
      },
    },
    tooltip: {
      y: [
        {
          formatter: function (y) {
            if (typeof y !== "undefined") {
              return "$" + y.toFixed(2) + "k";
            }
            return y;
          },
        },
      ],
    },
    responsive: [
      {
        breakpoint: 1025,
        options: {
          chart: {
            height: 199,
          },
        },
      },
    ],
  }
};

export const recentCustomersInvestChart: ApexChartType = {
  height: 300,
  type: 'bar',
  series: [
    {
      name: "Invest Percentage",
      data: [12.3, 3.1, 4.0, 10.1, 6.0, 2.3, 19.4],
    },
  ],
  options: {
    chart: {
      height: 300,
      type: "bar",
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        borderRadius: 10,
        columnWidth: "30%",
        dataLabels: {
          position: "top", // top, center, bottom
        },
      },
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val + "%";
      },
      offsetY: -25,
      style: {
        fontSize: "12px",
        colors: ["#304758"],
      },
    },
    colors: ["#604ae3"],
    legend: {
      show: true,
      horizontalAlign: "center",
      offsetX: 0,
      offsetY: -5,
    },

    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July"],
      position: "bottom",
      labels: {
        offsetY: 0,
      },
      axisBorder: {
        show: true,
      },
      axisTicks: {
        show: true,
      },

      tooltip: {
        enabled: true,
        offsetY: -10,
      },
    },

    yaxis: {
      axisBorder: {
        show: true,
      },
      axisTicks: {
        show: true,
      },
      labels: {
        show: true,
        formatter: function (val) {
          return val + "%";
        },
      },
    },
    grid: {
      row: {
        colors: ["transparent", "transparent"], // takes an array which will be repeated on columns
        opacity: 0.2,
      },
      borderColor: "#f1f3fa",
    },
  }
};

export const customerVisitChart: ApexChartType = {
  height: 150,
  type: 'area',
  series: [
    {
      data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54],
    },
  ],
  options: {
    chart: {
      type: "area",
      height: 150,
      sparkline: {
        enabled: true,
      },
    },
    stroke: {
      width: 2,
      curve: "smooth",
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        type: "vertical",
        opacityFrom: 0.4,
        opacityTo: 0,
        stops: [0, 100],
      },
    },

    markers: {
      size: 0,
    },
    colors: ["#604ae3"],
    tooltip: {
      fixed: {
        enabled: false,
      },
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return "";
          },
        },
      },
      marker: {
        show: false,
      },
    },
  }
};

export const topCustomer: CustomerType[] = [
  {
    img: avatar6,
    name: 'Tiia Karppinen',
    email: 'tiiakarppinen@teleworm.us',
    amount: 733291
  },
  {
    img: avatar7,
    name: 'Harland R. Orsini',
    email: 'harlandrorsini@dayrep.com ',
    amount: 831760
  },
  {
    img: avatar8,
    name: 'David Padgett',
    email: 'davidpadgett@armyspy.com',
    amount: 647900
  },
  {
    img: avatar10,
    name: 'Yusra Hasibah ',
    email: 'yusraHasibahadad@rhyta.com',
    amount: 530389
  },
  {
    img: avatar9,
    name: 'Valerie Obrien',
    email: 'valerieobrien@dayrep.com',
    amount: 763829
  },
];