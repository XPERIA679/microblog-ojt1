/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                mycream: '#dad2bc',
                mydark: '#252323',
                mywhite: '#f5f1ed',
                mygray: '#70798c',
            },
            transitionProperty: {
                'shadow-opacity-transform': 'box-shadow, opacity, transform',
            },
            transitionDuration: {
                'transduration': '280ms, 15ms, 270ms',
            },
            transitionTimingFunction: {
                'transtimefunc': 'cubic-bezier(.4, 0, .2, 1), linear, cubic-bezier(0, 0, .2, 1)',
            },
            transitionDelay: {
                'transdelay': '0ms, 30ms, 0ms',
            },
            boxShadow: {
                'boxshadow': 'rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0',
            },
            backgroundImage: {
                'ngradient': 'linear-gradient(-60deg, #DAD2BC, #252323, #70798C)',
                'pgradient': 'linear-gradient(60deg, #DAD2BC, #252323, #70798C)',
            },
            animation: {
                'gradient': 'gradient 15s ease infinite',
            },
            keyframes: {
                'gradient': {
                    '0%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                    '100%': { backgroundPosition: '0% 50%' },
                }
            },
            backgroundSize: {
                'bgsize': '500% 500%',
            },
            height: {
                'body-height': '98vh',
                'left-height': '100vh',
            }
        },
        fontFamily: {
            sans: ['Roboto', 'sans-serif'],
            heading: ['Poppins', 'sans-serif']
        }
    },
    plugins: [
    ],
}
