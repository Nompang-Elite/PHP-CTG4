/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/partials/header.php",
    "./views/partials/navbar.php",
    "./views/partials/footer.php",
    "./views/partials/side_menu.php",
    "./views/partials/card.php",
    "./views/pages/home.views.php",
    "./views/pages/login.views.php",
    "./views/pages/register.views.php",
    "./views/pages/detail.views.php",
    "./views/pages/account.views.php",
    "./views/pages/search.view.php",
    "./views/pages/list_show.views.php",
    "./views/pages/seller_dashbaord.view.php",
    "./views/pages/search_result.view.php",
    "./views/pages/form_add_ticket.view.php",
    "./views/pages/form_edit_ticket.view.php"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#1B1A17",
        secondary: "#F0A500",
        // primary: "#2B2E4A",
        // secondary: "#E84545",
      },
      height: {
        "details-box": "85%",
      },
      width: {
        "details-box": "28rem",
      },
    },
  },
  plugins: [],
};
