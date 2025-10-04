import { heroui } from '@heroui/react';

export const content = [
    "./app/**/*.{js,ts,jsx,tsx}",
    "./node_modules/@heroui/**/*.{js,ts,jsx,tsx}",
];
export const theme = {
    extend: {},
};
export const darkMode = "class";
export const plugins = [heroui()];
