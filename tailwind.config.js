const defaultTheme =  require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const {spacing} = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                gray: {
                    50: '#FAF9F6',
                    100: '#F6F7F7',
                    200: '#E7E8E8',
                    300: '#DBDCDC',
                    400: '#C3C5C4',
                    500: '#9FA2A2',
                    600: '#888B8B',
                    700: '#646867',
                    DEFAULT: '#292F2E',
                    dark: '#111817'
                },
                primary: {
                    lightest: '#bd9cb2',
                    light: '#73326d',
                    DEFAULT: '#4C2048',
                    dark: '#2a1128'
                },
                danger: {
                    lightest: '#FFF4F3',
                    light: '#FCC6C1',
                    DEFAULT: '#F97B70',
                    dark: '#DF6E64'
                },
                red: {
                    DEFAULT: '#EF3340',
                    dark: '#c52a35'
                },
                warning: {
                    lightest: '#FEF6DF',
                    light: '#FCE7AE',
                    DEFAULT: '#F9CF5C',
                    dark: '#DFB952'
                },
                info: {
                    lightest: '#c9e0ff',
                    light: '#54a6ff',
                    DEFAULT: '#0074E5',
                    dark: '#0153a8'
                }
            },
            fontSize: {
                'xs': '.75rem', // 12px
                'sm': '.875rem', // 14px
                'base': '1rem', // 16px
                'md': '1.125rem', // 18px
                'lg': '1.25rem', // 20px
                'xl': '1.5rem', // 24px
                '2xl': '1.75rem', // 28px
                '3xl': '2rem', // 32px
                '4xl': '2.5rem', // 40px
                '5xl': '3rem', // 48px
            },
            spacing: {
                '0': '0',
                '1': '.125rem', // 2px
                '2': '.25rem', // 4px
                '3': '.5rem', // 8px
                '4': '.75rem', // 12px
                '5': '1rem', // 16px
                '6': '1.25rem', // 20px
                '7': '1.5rem', // 24px
                '8': '2rem', // 32px
                '9': '2.5rem', // 40px
                '10': '3rem', // 48px
                '11': '3.5rem', // 56px
                '12': '4rem', // 64px
                '13': '4.5rem', // 72px
                '14': '5rem', // 80px
                '15': '6rem', // 96px
                '16': '7rem', // 112px
                '17': '8rem', // 128px
                '18': '9rem', // 144px
                '19': '10rem', // 160px
                '20': '11rem' // 176px
            },
            screens: {
                'only-sm': {'min': '1px', 'max': '639px'},
                'sm': '640px',
                // => @media (max-width: 639px) { ... }
                'md': '768px',
                // => @media (max-width: 767px) { ... }
                'lg': '1028px',
                // => @media (max-width: 1027px) { ... }
                'xl': '1358px',
                // => @media (max-width: 1357px) { ... }
            },
            borderWidth: {
                DEFAULT: '1px',
                '0': '0',
                '2': '2px',
                '3': '3px',
                '4': '4px',
                '6': '6px',
                '8': '8px',
            },
            borderRadius: {
                'none': '0',
                'sm': '2px',
                DEFAULT: '4px',
                'lg': '12px',
                'full': '9999px',
            },
            boxShadow: {
                'sm': '0 1px 2px rgba(0, 0, 0, 0.05)',
                DEFAULT: '0px 8px 20px rgba(0, 0, 0, 0.06)',
                'md': '0px 10px 50px rgba(0, 0, 0, 0.08)',
                'lg': '0px 10px 70px rgba(0, 0, 0, 0.15)',
                'none': '0 0 #000'
            },
            fontFamily: {
                maple: ['Maple'],
                tiempos: ['Tiempos']
            },
            aspectRatio: {
                none: 0,
                square: [1, 1],
                "16/9": [16, 9],
                "4/3": [4, 3],
                "21/9": [21, 9]
            },
        },
    },
    plugins: [],
}
