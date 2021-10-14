const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                lato: ['Lato', ...defaultTheme.fontFamily.sans],
                comissioner: ['Comissioner', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'main': "url('../img/main/first-screen.png')",
                'map': "url('../img/map.png')",
                'sell': "url('../img/main-sell.png')",
                'fog-sell': "url('../img/fog-sell.png')",
                'sell-form': "url('../img/sell-form.png')",
                'ruble': "url('../img/ruble.svg')",
            }),
            backgroundPosition: {
                'right-1': 'center right 1rem',
            },
        },
        colors: {
            transparent: 'transparent',
            text: '#32444E',
            white: '#fff',
            red: '#B83E40',
            accent: '#3F86A3',
            green: {
                1: '#587175',
                2: '#303F47',
            },
            gray: {
                1: '#F5F7FD',
                2: '#BBC2CB',
                3: '#DCE3ED',
                4: '#B9C5D5',
                5: '#919BA7',
                6: '#F2F3F9',
                7: '#E5E5E5',
                8: '#F9FBFF',
                9: '#D4DCE6',
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
