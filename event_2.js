$(document).ready(function () {
    $.ajax({
        url: 'event_2.php',
        method: 'GET',
        success: function (data) {
            let indicatorsHtml = '';
            let innerHtml = '';

            data.forEach((item, index) => {
                indicatorsHtml += `
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="${index}" class="${index == 0 ? 'active':''}" aria-current="${index == 0 ? 'true':'false'}" aria-label="Slide ${index + 1}"></button>
                `;

                innerHtml += `
                <div class="carousel-item ${index == 0 ? 'active':''}" data-bs-interval="10000">
                    <div class="d-flex flex-row">
                        <div class="container slides-info">
                            <div class="slide1 text-center">
                                <h2 class="pt-2 text-center first">${item.title}</h5><br><br>
                                    ${item.description}
                            </div>
                        </div>
                        <img src="${item.image}" class="d-block w-100 slides flex-grow-1" alt="...">
                    </div>
                </div>
                `;
            });
            $('#carousel-indicators').html(indicatorsHtml);
            $('#carousel-inner').html(innerHtml);
        },
        error: function (xhr, status, error) {
            console.error("Error fetching carousel items: ",error);
        }
    });
});