let myModal = new bootstrap.Modal(document.getElementById('create-new-device'), {
    keyboard: false
})

$("#add-btn").click(function () {
    myModal.toggle()
})