/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "views/partials/navbar.php",
    "views/partials/header.php",
    "views/partials/footer.php",
    "views/pages/home/home.view.php",
    "views/pages/login/login.view.php",
    "views/pages/register/register.view.php",
  ],
  theme: {
    extend: {},
    colors:{
      "primary": "#01c8ee",
      "boxgrey": "#C0C0C010",
      "transparent": "transparent",
    }
  },
  plugins: [],
};
