
if(document.getElementById('cambridge-map')){
    let cambridge_map = L.map('cambridge-map').setView([52.235, 0.154], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        accessToken: 'pk.eyJ1IjoiZG9uazN5bGVlIiwiYSI6ImNrend3NGMxNzAyeXcydnM0MmI2c3Z1ZnMifQ.n2TcbXNkiHbm3o4UMV0S-g'
    }).addTo(cambridge_map);
    L.marker([52.235, 0.154]).addTo(cambridge_map)
        .bindPopup('Our Cambridge office is inside the<br>St. Johns Innovation Center.')
        .openPopup();
}

if(document.getElementById('wymondham-map')){
    let wymondham_map = L.map('wymondham-map').setView([52.575, 1.136], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        accessToken: 'pk.eyJ1IjoiZG9uazN5bGVlIiwiYSI6ImNrend3NGMxNzAyeXcydnM0MmI2c3Z1ZnMifQ.n2TcbXNkiHbm3o4UMV0S-g'
    }).addTo(wymondham_map);
    L.marker([52.575, 1.136]).addTo(wymondham_map)
        .bindPopup('Our Wymondham office.')
        .openPopup();
}

if(document.getElementById('yarmouth-map')){
    let yarmouth_map = L.map('yarmouth-map').setView([52.555, 1.712], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        accessToken: 'pk.eyJ1IjoiZG9uazN5bGVlIiwiYSI6ImNrend3NGMxNzAyeXcydnM0MmI2c3Z1ZnMifQ.n2TcbXNkiHbm3o4UMV0S-g'
    }).addTo(yarmouth_map);
    L.marker([52.555, 1.712]).addTo(yarmouth_map)
        .bindPopup('Our Yarmouth office<br>is located in Gorlestone.')
        .openPopup();
}
