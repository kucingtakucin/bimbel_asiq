$(document).ready(function () {
    $('.insert').click(function () {
        $('#formModalLabel').html('Insert Data Mahasiswa')
        $('#formModal .modal-footer button[type=submit]').html('Insert Data')
        $('#formModal form').attr('action', 'http://localhost/phpmvc/Mahasiswa/insert')
        $('#formModal img.foto-lama').remove()
        $('#formModal input[name=fotolama]').remove()
        $('#formModal input[name=id]').remove()
        $('#formModal input[type=file]').attr('required')
        $('#nama').val(null)
        $('#nim').val(null)
        $('#jurusan').val(null)
        $('#angkatan').val(null)
    })

    $('.update').click(function () {
        $('#formModalLabel').html('Update Data Mahasiswa')
        $('#formModal .modal-footer button[type=submit]').html('Update Data')
        $('#formModal form').attr('action', 'http://localhost/phpmvc/Mahasiswa/update')
        $('#formModal img.foto-lama').remove()
        $('#formModal input[name=fotolama]').remove()
        $('#formModal input[name=id]').remove()
        $('#formModal input[type=file]').removeAttr('required')
        const id = $(this).data('id')
        fetch("http://localhost/phpmvc/Mahasiswa/show", {
            method: 'POST',
            mode: "same-origin",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                'Accept':       'application/json'
            },
            body: JSON.stringify({id: id})
        })
        .then(response => {
            console.log(response)
            return response.json()})
        .then(response => {
            $('#nama').val(response.nama)
            $('#nim').val(response.nim)
            $('#jurusan').val(response.jurusan)
            $('#angkatan').val(response.angkatan)
            $('#formModal label[for=foto]').append(`
                <img src="http://localhost/phpmvc/Public/img/${response.foto}" alt="${response.nama}" class="img-fluid foto-lama" width="250px">
                <input type="hidden" name="fotolama" value="${response.foto}">
                <input type="hidden" name="id" value="${response.id}">
            `)
        })
    })

    $('.delete').click(function () {
        const id = $(this).data('id')
        $('#deleteModal .modal-footer a').attr('href', `http://localhost/phpmvc/Mahasiswa/delete/${id}`)
    })

    $('.detail').click(function () {
        const id = $(this).data('id')
        fetch("http://localhost/phpmvc/Mahasiswa/show", {
            method: 'POST',
            mode: "same-origin",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                'Accept': 'application/json'
            },
            body: JSON.stringify({id: id})
        })
        .then(response => {
            console.log(response)
            return response.json()})
        .then(response => {
            $('#detail_nama').val(response.nama)
            $('#detail_nim').val(response.nim)
            $('#detail_jurusan').val(response.jurusan)
            $('#detail_angkatan').val(response.angkatan)
            $('#detailModal img').attr({src: `http://localhost/phpmvc/Public/img/${response.foto}`, alt: `${response.nama}`})
        })
    })
})