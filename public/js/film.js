$('document').ready(function () {
    $('#save-btn').click(function () {
        let name = $('#filmName').val();
        let description = $('#filDesc').val();
        let releaseDate = $('#releaseDate').val();
        let rating = $('#filmRating').val();
        let ticketPrice = $('#filmTicketPrice').val();
        let country = $('#filmCountry').val();
        let genre = $('#filmGenre').val();
        let photoUrl = $('#filmPhoto').val();
        let token = $('#token').val();
        let filmSlug = function slugify(text)
        {
            return text.toString().toLowerCase().trim()
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-')
                .replace(/^-+/, '')
                .replace(/-+$/, '');
        };

        if(name=='' || description=='' || releaseDate=='' || ticketPrice=='' || country=='' || genre=='' || photoUrl==''){
            alert('Please fill all the fields');
        }else{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                data: {
                    name:name,
                    description: description,
                    release_date: releaseDate,
                    slug: filmSlug(name),
                    rating: rating,
                    ticket_price: ticketPrice,
                    country: country,
                    genre: genre,
                    photo: photoUrl,
                    token: token
                },
                dataType: "json",
                url: '/saveFilm',
                success: function(data){
                    if(data){
                        $('#createFilm').modal('hide');
                    }
                }
            })
        }
    })
});

function commentClick(name) {
    document.getElementById('comment-area').style.display = 'block';
    document.getElementById('userName').value = name;
}

function commentSubmit(userId,filmId) {
    let name = $('#userName').val();
    let comment = $('#userComment').val();
    if(name=='' || comment==''){
        alert("Please fill all the fields");
    }else{
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            data:{
                userId: userId,
                filmId: filmId,
                comment:comment
            },
            dataType: "json",
            url: "/comment",
            success: function(data){
                document.getElementById('userComment').value = '';
                alert("Thank you!!");
            }
        })
    }
}
