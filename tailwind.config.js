/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/partials/nav.php",
    "./views/partials/header.php",
    "./views/partials/footer.php",
    "./controllers/login.controller.php",
    "controllers/home.controller.php",
    "controllers/register.controller.php"
  ],
  theme: {
    extend: {
      colors: {
        primary: "",
        secondary: "",
        danger: "",
        info: "",
      },
    },
  },
  plugins: [],
};
