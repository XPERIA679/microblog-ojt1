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
                '40px': '40px',
                'body-height': '98vh',
                'left-height': '100vh',
            },

            zIndex: {
                '1000': 1000,
                '9999': 9999,
            },
            borderRadius: {
                'none': '0',
                '20px': '20px',
                'custom': '30px',
                'b-half': '50%',
                'full': '9999px',
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
                'bgsize': '1000% 1000%',
            },
        },
        fontFamily: {
            sans: ['Roboto', 'sans-serif'],
            heading: ['Poppins', 'sans-serif']
        }
    },
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
      },
    ],
}
