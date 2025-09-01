import type { RouteParamsRaw } from 'vue-router';
import type { ApexOptions } from "apexcharts";

export type RouteType = {
    name: string;
    params?: RouteParamsRaw;
    url?: string;
};

export type StatisticType = {
    title: string;
    description?: string;
    statistic: number;
    growth?: number;
    prefix?: string;
    suffix?: string;
    duration?: 'week' | 'month' | 'year';
};

export type StatisticCardType = {
    icon: string;
    variant?: string;
    background?: {
        color?: string;
        icon?: string;
        image?: string;
    };
    progress?: number;
    total?: number;
} & StatisticType;


export type ApexChartType = {
    height: number;
    type?: string;
    series: any[];
    options: ApexOptions;
};

type PropertyInfo = {
    beds?: number;
    size?: number;
    bath?: number;
    floor?: number;
};

export type InfoType = {
    img: string;
    name: string;
} & PropertyInfo;

export type CustomerType = {
    customer: InfoType;
    property?: {
        view: number;
        own: number;
        invest: number;
    },
    address?: string;
    email: string;
    contact: string;
    date?: string;
    category?: 'residential' | 'commercial' | 'industrial';
    interestedProperties?: string;
    availability?: 'available' | 'unavailable';
    status?: 'interested' | 'under-review' | 'follow-up';
};

export type AgentType = {
    agent: InfoType;
    id?: number;
    property?: number;
    location?: string;
    email: string;
    contact?: string;
    experience?: number;
    date?: string;
    status?: 'active' | 'inactive';
};

export type PropertyType = {
    property: InfoType;
    price?: number;
    location: string;
    bookmark?: boolean;
    category?: 'residences' | 'villa' | 'bungalow' | 'apartment' | 'penthouse';
    availability?: 'rent' | 'sold' | 'sale' | 'for-rent' | 'for-sale';
};