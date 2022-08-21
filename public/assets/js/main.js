$(".user-list-form button").click(function(e) {
    const user_id = e.target.id
    const  data = {"ID": user_id}
    $.ajax({
        type: "POST",
        url: "delete",
        data: data,
        success: this.success,
    });
    location.reload();
})

