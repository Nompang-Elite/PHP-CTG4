$(document).ready(function () {
    $("#myInput").keyup(function () {
        // get value from input
        var resultInput = $(this).val();


        if (resultInput != "") {
            $.ajax({
                url: "search.model.php", // page should load to require data
                method: "POST",
                data: { value: resultInput }, 
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