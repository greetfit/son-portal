import type { ApexChartType, StatisticCardType } from "@/types";
import type { TransactionsType } from "@/views/dashboards/analytics/components/types";

import avatar2 from "@/assets/images/users/avatar-2.jpg";
import avatar3 from "@/assets/images/users/avatar-3.jpg";
import avatar4 from "@/assets/images/users/avatar-4.jpg";
import avatar5 from "@/assets/images/users/avatar-5.jpg";
import avatar6 from "@/assets/images/users/avatar-6.jpg";
import avatar7 from "@/assets/images/users/avatar-7.jpg";

export const statistics: StatisticCardType[] = [
  {
    icon: 'solar:buildings-2-broken',
    title: 'No. of Properties',
    statistic: 2854,
    growth: 7.34,
  },
  {
    icon: 'solar:users-group-two-rounded-broken',
    title: 'Regi. Agents',
    statistic: 705,
    growth: 76.89,
  },
  {
    icon: 'solar:shield-user-broken',
    title: 'Customers',
    statistic: 9431,
    growth: -45.00,
  },
  {
    icon: 'solar:money-bag-broken',
    title: 'Revenue',
    statistic: 78.3,
    prefix: '$',
    suffix: 'M',
    growth: 8.76,
  },
];

export const statisticChart: ApexChartType = {
  height: 95,
  type: 'bar',
  series: [{
    name: 'Property Listing',
    data: [40, 50, 65, 40, 40, 65, 40]
  }],
  options: {
    chart: {
      height: 95,
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
    colors: ["#eef2f7", "#eef2f7", "#604ae3", "#eef2f7"],
    dataLabels: {
      enabled: !1
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

export const salesAnalyticChart: ApexChartType = {
  height: 341,
  type: 'area',
  series: [{
    name: "Expenses",
    data: [
      16800, 16800, 15500, 17000, 14800, 15500, 19000, 16000, 15000, 17000,
      14000, 17000,
    ],
  },
  {
    name: "Income",
    data: [
      16500, 17500, 16200, 21500, 17300, 16000, 16000, 17000, 16000, 19000,
      18000, 19000,
    ],
  }],
  options: {
    chart: {
      height: 341,
      type: "area",

      dropShadow: {
        enabled: true,
        opacity: 0.2,
        blur: 10,
        left: -7,
        top: 22,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ["#47ad94", "#604ae3"],
    dataLabels: {
      enabled: false,
    },

    stroke: {
      show: true,
      curve: "smooth",
      width: 2,
      lineCap: "square",
    },
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      crosshairs: {
        show: true,
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
          fontSize: "12px",
          cssClass: "apexcharts-xaxis-title",
        },
      },
    },
    yaxis: {
      labels: {
        formatter: function (value, index) {
          return value / 1000 + "K";
        },
        offsetX: -15,
        offsetY: 0,
        style: {
          fontSize: "12px",
          cssClass: "apexcharts-yaxis-title",
        },
      },
    },
    grid: {
      borderColor: "#191e3a",
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: false,
        },
      },
      padding: {
        top: -50,
        right: 0,
        bottom: 0,
        left: 5,
      },
    },
    legend: {
      show: false,
    },

    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: 0.12,
        opacityTo: 0.1,
        stops: [100, 100],
      },
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          offsetY: -50,
        },
      },
    },],
  }
};

export const socialSourceChart: ApexChartType = {
  height: 349,
  type: 'radialBar',
  series: [70],
  options: {
    chart: {
      height: 349,
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
    series: [70],
    stroke: {
      lineCap: "round",
    },
    labels: ["Total Buyer"],
  }
};

export const weeklySalesChart: ApexChartType = {
  height: 120,
  type: 'bar',
  series: [{
    name: 'Property Sales',
    data: [40, 50, 65, 45, 40, 70, 40]
  }],
  options: {
    chart: {
      height: 120,
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
      show: true,
      padding: {
        top: -20,
        bottom: -10,
        left: 0,
        right: 0
      },
    },
    colors: ["#604ae3", "#604ae3", "#604ae3", "#604ae3"],
    dataLabels: {
      enabled: !1
    },
    series: [{
      name: 'Property Sales',
      data: [40, 50, 65, 45, 40, 70, 40]
    }],
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
        show: true
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

export const latestTransaction: TransactionsType[] = [
  {
    id: 'TZ2540',
    buyer: {
      img: avatar2,
      name: 'Michael A. Miner'
    },
    invoice: 'IN-4563',
    date: '07 Jan, 2023',
    amount: 45842,
    paymentMethod: 'mastercard',
    status: 'completed'
  },
  {
    id: 'TZ3924',
    buyer: {
      img: avatar3,
      name: 'Theresa T. Brose'
    },
    invoice: 'IN-3728',
    date: '03 Dec, 2023',
    amount: 78483,
    paymentMethod: 'visa',
    status: 'cancel'
  },
  {
    id: 'TZ5032',
    buyer: {
      img: avatar4,
      name: 'James L. Erickson'
    },
    invoice: 'IN-8265',
    date: '28 Sep, 2023',
    amount: 83644,
    paymentMethod: 'paypal',
    status: 'completed'
  },
  {
    id: 'TZ1695',
    buyer: {
      img: avatar5,
      name: 'Lily W. Wilson'
    },
    invoice: 'IN-9025',
    date: '10 Aug, 2023',
    amount: 94305,
    paymentMethod: 'mastercard',
    status: 'pending'
  },
  {
    id: 'TZ8473',
    buyer: {
      img: avatar6,
      name: 'Sarah M. Brooks'
    },
    invoice: 'IN-8945',
    date: '22 May, 2023',
    amount: 42.561,
    paymentMethod: 'visa',
    status: 'cancel'
  },
  {
    id: 'TZ2150',
    buyer: {
      img: avatar7,
      name: 'Joe K. Hall'
    },
    invoice: 'IN-0987',
    date: '15 Mar, 2023',
    amount: 25671,
    paymentMethod: 'paypal',
    status: 'completed'
  },
];