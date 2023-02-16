let addTicket=document.querySelector("#add-ticket");
let dialog = document.querySelector("#dialog");
// --------Function for showing dialog---------//
function show(event)
{
    dialog.style.display="block";
    addTicket.style.display="none";
}
//--------Function for hiding dialog---------//
function hide(event)
{
    event.style.display="none";
    addTicket.style.display="block";
}
//--------Function for adding new ticket---------//
function createTicket()
{
    hide(dialog);
    let store = {};
    let titleInput = document.querySelector("#title");
    let priceInput = document.querySelector("#price");
    let dateInput = document.querySelector("#date");
    let textInput = document.querySelector("#message");
    let venue = document.querySelector("#location");
    let address = document.querySelector("#location");
    store.title= titleInput.value;
    store.price= priceInput.value;
    store.date= dateInput.value;
    store.text= textInput.value;

    uploadTicketInfo(titleInput, textInput, venue, address, price);
}
//--------Function add -------//
function add()
{
    show(dialog);
    console.log("Hello!");
}
//--------Function cancel -------//
function cancel()
{
    hide(dialog);
    console.log("Cancel!");
}
addTicket.addEventListener("click",add);