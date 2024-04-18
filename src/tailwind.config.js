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
        },
        fontFamily: {
            sans: ['Roboto', 'sans-serif'],
            heading: ['Poppins', 'sans-serif']
        }
    },
    plugins: [
    ],
}
