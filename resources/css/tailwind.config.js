/** @type {import('tailwindcss').Config} */
module.exports = {
    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: 'none',
                        p: {
                            fontSize: '1rem',
                            lineHeight: '2rem',
                        },
                        h1: {
                            color: 'var(--tw-prose-headings)',
                            fontSize: '4.5rem',
                            fontWeight: '400',
                            lineHeight: '6rem',
                        },
                        'h1 strong': {
                            fontWeight: '700',
                            color: 'inherit',
                        },
                        h2: {
                            color: 'var(--tw-prose-headings)',
                            fontSize: '4rem',
                            fontWeight: '400',
                            lineHeight: '5.5rem',
                        },
                        'h2 strong': {
                            fontWeight: '700',
                            color: 'inherit',
                        },
                        h3: {
                            color: 'var(--tw-prose-headings)',
                            fontSize: '3rem',
                            fontWeight: '400',
                            lineHeight: '4rem',
                        },
                        'h3 strong': {
                            fontWeight: '700',
                            color: 'inherit',
                        },
                        h4: {
                            color: 'var(--tw-prose-headings)',
                            fontSize: '2rem',
                            fontWeight: '400',
                            lineHeight: '3rem',
                        },
                        'h4 strong': {
                            fontWeight: '700',
                            color: 'inherit',
                        },
                    },
                },
            },
        },
    },
}
