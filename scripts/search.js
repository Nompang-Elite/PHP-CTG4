$(document).ready(function () {
    $("#searchBar").keyup(function () {
        // get value from input
        var searchValue = $(this).val();


        if (searchValue != "") {
            $.ajax({
                url: "search.model.php", // page should load to require data
                method: "POST",
                data: { value: searchValue }, 
                success: function (data) {
                    // #searchResult is an id to display in html
                    $("#searchResult").css("display", "block");
                    $("#searchResult").html(data);
                }
            })
        } else {
            $("#searchResult").css({"display":"block"});
        }
    })
})