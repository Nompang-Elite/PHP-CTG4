/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "views/partials/navbar.php",
    "views/partials/header.php",
    "views/partials/footer.php",
    "views/pages/home/home.view.php",
    "views/partials/card.php",
    "views/pages/login/login.view.php",
    "views/pages/account/account.view.php",
    "views/pages/register/register.view.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
