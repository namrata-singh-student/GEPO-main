let markers = [];

fetch('pi_map.php')
    .then(response => response.json())
    .then(data => {
        markers = data;

// Initialize the map
const map = L.map('map').setView([22.716, 88.3865], 13);

document.getElementById('s11').addEventListener('shown.bs.modal', function(){
    setTimeout(() => {
        map.invalidateSize();
    },200);
});

// Add the tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);



// Add markers to the map
markers.forEach(markerData => {
    const marker = L.marker(markerData.location).addTo(map);
    marker.on('click', () => {
        document.getElementById('modal-title').textContent = markerData.title;
        document.getElementById('modal-description').textContent = markerData.description;
        // document.getElementById('modal-link').href = markerData.link;

        const imagesContainer = document.getElementById('modal-images');
        imagesContainer.innerHTML = ''; // Clear previous images
        markerData.images.forEach(imageSrc => {
            const img = document.createElement('img');
            img.src = imageSrc;
            imagesContainer.appendChild(img);
        });

        document.getElementById('myModal').style.display = 'block';
    });
});

// Modal functionality
const modal = document.getElementById("myModal");
const span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    })
    .catch(error => console.error('Error fetching data: ', error));
 