function tampil_film() {
    // load pertama html di kosongi
    $('#daftar-film').html('');
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '6b2c1d27',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                var film = result.Search;
                $.each(film, function (i, data) {
                    $('#daftar-film').append(`
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="` + data.Poster + `" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">` + data.Tittle + `</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">` + data.Year + `</h6>
                                    <a href="#" class="card-link details" data-toggle="modal" data-target="#exampleModal" data-id="` + data.imdbID + `">Detail Film</a>
                                </div>
                            </div>
                        </div>
                    `)
                });
                $('#search-input').val('');
            } else {
                $('#daftar-film').html(`
                <div class="col">
                <h1 class="text-center">` + result.Error + `</h1>
                </div>
                `)
            }
        }
    });
}

$('#btn-cari').on('click', function () {
    tampil_film();
});

$('#search-input').on('keyup', function (e) {
    if (e.keyCode == 13) {
        tampil_film();
    }
});

$('#daftar-film').on('click', '.details', function () {
    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey': '6b2c1d27',
            'i': $(this).data('id')
        },
        success: function (films) {
            if (films.Response == "True") {
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12>
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>Rated : ` + films.Rated + `</h3></li>
                                    <li class="list-group-item"><h3>Genre : ` + films.Genre + `</h3></li>
                                    <li class="list-group-item"><h3>Lama : ` + films.Runtime + `</h3></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                `);
            }
        }
    })
});