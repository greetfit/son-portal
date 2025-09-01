import type { ApexChartType } from "@/types";

export type PropertyType = {
  name: string;
  img: string;
  icon: string;
  location: string;
};

export type FileType = {
  name: string;
  icon: string;
  variant: string;
  size: number;
};

export type PropertyStatusType = {
  title: string;
  icon: string;
  statistic: number;
  chartOption: ApexChartType;
};