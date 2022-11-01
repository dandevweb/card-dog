$(function () {
    const breed = $("#breed");
    const name = $("#name");
    const color = $("#color");
    const font = $("#font");
    const image = $("#image img");
    const button = $("button[type=submit]");
    const text = $(".card-text")
    const date = $("#date")
    const dateNow = new Date(Date.now())

    breed.on("change", function () {
        const breedSelected = $(this).val();
        const url = $("#getImageUrl").data("url") + breedSelected
        $.ajax({
            url,
            dataType: "text",
            success: function (response) {
                image.attr("src", response)
            }
        });
    });

    name.on("keyup", function () {
        text.html(this.value)
    });

    color.on("change", function () {
        text.css("color", this.value)
    });

    font.on("change", function () {
        text.css("fontFamily", this.value)
    });

    button.on("click", function (event) {
        event.preventDefault();

        localStorage.breed = breed.val();
        localStorage.name = name.val();
        localStorage.color = color.val();
        localStorage.font = font.val();
        localStorage.img = image.attr("src")
        localStorage.date = dateNow
        date.text("Salvo em: " + datePtBr(localStorage.date))


        $(".alert").removeClass('d-none')
    });

    $(window).on("load", function () {
        breed.val(localStorage.breed)
        name.val(localStorage.name)
        color.val(localStorage.color)
        font.val(localStorage.font)
        image.attr("src", localStorage.img)
        text.text(localStorage.name)
        text.css("color", localStorage.color)
        text.css("fontFamily", localStorage.font)
        date.text("Salvo em: " + datePtBr(localStorage.date))

    });

    $(".alert").click(function () {
        $(this).addClass('d-none')
    })


    function datePtBr(date) {
        const completeDate = new Date(date);
        const day = completeDate.getDate();
        const month = completeDate.getMonth() + 1;
        const year = completeDate.getFullYear();
        const hour = completeDate.getHours();
        const minute = completeDate.getMinutes();
        const completeDateBR = day + "/" + month + "/" + year + " " + hour + ":" + minute

        return completeDateBR
    }
});