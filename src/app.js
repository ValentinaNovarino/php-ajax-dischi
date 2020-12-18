const $ = require( "jquery" );

$(document).ready(function() {

    const source = $("#dischi-template").html();
    const template = Handlebars.compile(source);

    if ($("#ajax-version").length) {
        $.ajax({
            url: '../dischi.php',
            method: 'GET',
            success: function(data) {

                // creo array per i generi
                var genres = [];
                for (var i = 0; i < data.length; i++) {
                    var context = {
                        'poster': data[i].poster,
                        'title': data[i].title,
                        'author': data[i].author,
                        'year': data[i].year
                    };
                    var html = template(context);
                    $('.card-container').append(html);

                    // recupero genere disco corrente
                    var currentGenre = data[i].genre;
                    // verifico che non sia gia nell'arrai generi
                    if (!genres.includes(currentGenre)) {
                        genres.push(currentGenre);
                    }
                }
                // console.log(genres);
                // stampo le option
                for (var i = 0; i < genres.length; i++) {
                    $('#filter').append(
                        `
                        <option value="${genres[i]}">${genres[i]}<option>`
                    )
                }
            },
            error: function() {
            console.log('errore');
            }
        });
    }

    // filtro genere
    $('#filter').change(function() {
        // svuoto il contenitore
        $('.card-container').empty();
        // recupero value genere selezionato
        var selectedGenre = $('#filter').val();
        // invio al server il genere selezionato
        $.ajax({
            url: '../dischi.php',
            method: 'GET',
            data: {
                genre: selectedGenre

            },
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    var context = {
                        'poster': data[i].poster,
                        'title': data[i].title,
                        'author': data[i].author,
                        'year': data[i].year
                    };
                    var html = template(context);
                    $('.card-container').append(html);
                }
            },
            error: function() {
                console.log('errore');
            }
        });
    })
});
