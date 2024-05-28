/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            height: {
                '50px': '50px',
            },

            zIndex: {
                '1000': 1000,
            },

            margin: {
                '70px': '70px',
            },

            screens: {
                'sm': '567px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1300px',
            },
            colors: {
                mycream: '#dad2bc',
                mydark: '#252323',
                mywhite: '#f5f1ed',
                mygray: '#70798c',
            },
            scrollbar: {
                track: {
                  bg: 'mycream',
                },
                thumb: {
                  bg: 'mydark',
                },
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
                'custom-boxshadow': '0px 0px 10px rgba(0, 0, 0, 0.2)',
            },
            minHeight: {
                'full': '100%',
            },
            borderRadius: {
                'none': '0',
                '20px': '20px',
                'custom': '30px',
                'b-half': '50%',
                'full': '9999px',
            },
            spacing: {
                '1': '0.25rem',
                '1.5': '0.375rem',
                '2': '0.5rem',
                '2.5': '0.625rem',
                '3': '0.75rem',
                '3.5': '0.875rem',
                '4': '1rem',
                '5': '1.25rem',
                '6': '1.5rem',
                '7': '1.75rem',
                '8': '2rem',
                '10': '2.5rem',
                '12': '3rem',
                '14': '3.5rem',
                '16': '4rem',
                '20': '5rem',
                '24': '6rem',
                '28': '7rem',
                '32': '8rem',
                '36': '9rem',
                '40': '10rem',
                '44': '11rem',
                '48': '12rem',
                '52': '13rem',
                '56': '14rem',
                '60': '15rem',
                '64': '16rem',
                '72': '18rem',
                '80': '20rem',
                '96': '24rem',
            },
            fontSize: {
                'xs': '0.75rem',
                'sm': '0.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
            },
            borderWidth: {
                'DEFAULT': '1px',
                '0': '0',
                '2': '2px',
                '4': '4px',
                '8': '8px',
            },
            backgroundSize: {
                'bgsize': '1000% 1000%',
            inset: {
                '0': '0',
                '1/2': '50%',
                'auto': 'auto',
            },
        },
        fontFamily: {
            sans: ['Roboto', 'sans-serif'],
            heading: ['Poppins', 'sans-serif']
        }
    }},
    variants: {
        extend: {
            backgroundColor: ['hover'],
            textColor: ['hover'],
            boxShadow: ['hover'],
            borderWidth: ['hover'],
        }
    },

    plugins: [  function ({ addBase }) {
        addBase({
          '::-webkit-scrollbar': { '@apply w-3': {} },
          '::-webkit-scrollbar-track': { '@apply bg-mycream': {} },
          '::-webkit-scrollbar-thumb': { '@apply bg-mydark': {} },
        });
      }]}
