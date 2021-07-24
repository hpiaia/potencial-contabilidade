module.exports = {
    purge: ['./resources/**/*.blade.php', './resources/**/*.js'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: '#28a63f',
                'primary-dark': '#0b6919',
                secondary: '#dcda3e',
                'secondary-dark': '#d6d426',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/aspect-ratio')],
}
