import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],

    theme: {
        container: {
            center: true,
            padding: "1rem",
            screens: {
                "2xl": "1130px",
            },
        },
        extend: {
            fontFamily: {
                sans: ['"DM Sans"', "sans-serif"], // Set as default sans
                "dm-sans": ['"DM Sans"', "sans-serif"], // Keep alias for compatibility
            },
            colors: {
                primary: {
                    DEFAULT: "#0F172A", // Slate 900
                    light: "#334155",   // Slate 700
                    hover: "#1E293B",   // Slate 800
                },
                secondary: {
                    DEFAULT: "#0B109F", // Magana Blue
                    hover: "#090C7A",   // Darker Blue
                },
                accent: {
                    DEFAULT: "#0EA5E9", // Sky 500 - Fresh accent
                    light: "#E0F2FE", // Sky 100
                },
                surface: {
                    DEFAULT: "#FFFFFF",
                    secondary: "#F8FAFC", // Slate 50
                    border: "#E2E8F0", // Slate 200
                },
                text: {
                    main: "#0F172A", // Slate 900
                    muted: "#64748B", // Slate 500
                    light: "#94A3B8", // Slate 400
                },
            },
            boxShadow: {
                soft: "0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)",
                card: "0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025)",
                glow: "0 0 15px rgba(14, 165, 233, 0.3)",
            },
        },
    },

    plugins: [forms],

    darkMode: "class",
};
