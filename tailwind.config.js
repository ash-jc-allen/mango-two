module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                dark: '#251F2D',
                'really-dark': '#18161B',
                'light-orange': '#FBBF24',
                'dark-orange': '#F66262'
            }
        },
    },
    plugins: [],
    safelist: process.env.NODE_ENV === "development" ? [{pattern: /.*/}] : []
}
