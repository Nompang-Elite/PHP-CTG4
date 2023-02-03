/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/partials/nav.php",
    "./views/partials/header.php",
    "./views/partials/footer.php",
    "./views/pages/home/home.view.php",
    "./views/pages/login/login.view.php",
    "./views/pages/register/register.view.php",
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
