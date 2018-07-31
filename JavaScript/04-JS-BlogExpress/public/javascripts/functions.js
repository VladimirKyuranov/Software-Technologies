function displayForm() {
    document.getElementById('formComment').style.display = 'block';
    document.getElementById('btnAddComment').style.display = 'none';
}

function hideForm() {
    document.getElementById('formComment').style.display = 'none';
    document.getElementById('btnAddComment').style.display = 'block';
}

function handleImageGroup() {
    let imgGroup = document.getElementById('groupAddImage');
    let imgButton = document.getElementById('btnAddImage');
    let imgUrl = document.getElementById('articleImage');

    switch (imgButton.value){
        case 'Add Image':
            imgGroup.style.display = 'block';
            imgButton.value = 'Remove Image';
            break;
        case'Remove Image':
            imgGroup.style.display = 'none';
            imgButton.value = 'Add Image';
            imgUrl.value = '';
            break;
    }
}