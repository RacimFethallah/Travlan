
if (location.href.indexOf('Travlan_plan') !== -1) {
    const mainImage = document.getElementById('profile-image');
    const secondaryImage = document.getElementById('Anonym');
    function changeProfileImage(event) {
        var input = event.target;
        var reader = new FileReader();
    
        reader.onload = function () {
            var image = document.getElementById('profile-image');
            image.src = reader.result;
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    
    
    
    mainImage.addEventListener("change", function (event) {
        const file = event.target.files[0];
        const reader = new FileReader();
    
        reader.onload = function (e) {
            secondaryImage.src = e.target.result;
        };
    
        reader.readAsDataURL(file);
    });
}

