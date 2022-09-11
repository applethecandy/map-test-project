import './bootstrap';

ymaps.ready(function () {
    var map = new ymaps.Map('map', {
        center: [55.753994, 37.622093],
        zoom: 12,
    });

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                map.setCenter([position.coords.latitude, position.coords.longitude]);
            },
            error => {
                alert(error.message);
            });
    }

    axios.get('/api/points')
        .then(function (response) {
            response.data.map(e => {
                map.geoObjects.add(new ymaps.Placemark([e.latitude, e.longitude], {
                    balloonContent: e.name
                }, {
                    preset: 'islands#circleIcon',
                    iconColor: '#F59E0B'
                }))
            });

            let points = document.querySelectorAll('.point');

            points.forEach(point => {
                point.addEventListener('click', e => {
                    let data = e.target.dataset
                    if (Object.keys(data).length) {
                        if (data.action == 'center') {
                            map.setCenter([data.latitude, data.longitude]);
                        } else {
                            if (data.action == 'edit') {
                                axios.get('/point/' + data.id + '/edit').then(
                                    response => {
                                        document.querySelector('#modal').innerHTML =
                                            response.data;
                                    })
                            }
                            if (data.action == 'remove') {
                                if (confirm('Вы уверены, что хотите удалить точку "' +
                                    point.textContent.trim() + '"?')) {
                                    axios.post('/point/' + data.id, {
                                        '_method': 'delete'
                                    }).then(
                                        response => {
                                            location.reload();
                                        })
                                }
                            }
                        }
                    }
                })
            });

            let create_button = document.querySelector('#create-button')
            create_button.addEventListener('click', e => {
                axios.get('/point/create').then(
                    response => {
                        document.querySelector('#modal').innerHTML =
                            response.data;
                    })
            });

            let logout = document.querySelector('#logout')
            logout.addEventListener('click', e => {
                axios.post('/logout').then(
                    response => {
                        location.reload();
                    })
            });
        })
        .catch(function (error) {
            console.log(error);
        });
});
