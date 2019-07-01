var paseBanner = $("#pase-scholarship-banner"),
    bannerPath = "https://www.purduealumni.org/wp-content/uploads/web-banner_pase-scholarship-",
    imageCount = 3;

changeImage(0);

function changeImage(previousIndex) {

    var index = 1;

    if (previousIndex < imageCount) {
        index = previousIndex + 1;
    }

    paseBanner.attr("src", bannerPath + index + ".jpg");

    setTimeout(changeImage, 8000, index); // Change image every 8 seconds
}
